<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AiPracticeController extends Controller
{
    public function show()
    {
        return view('ai-practice');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'topic' => 'required|string|min:3|max:200',
            'level' => 'required|in:beginner,intermediate,advanced',
        ]);

        $topic = trim($request->topic);
        $level = $request->level;
        $levelLabel = ucfirst($level);

        $prompt = <<<PROMPT
You are an expert English public speaking coach at Pinnacle Speaking institute in India.

A student wants to practice speaking. Here are their details:
- Topic: "{$topic}"
- Level: {$levelLabel}

Please generate a structured, friendly, and motivating response in the following format (use these EXACT headings):

## 🎯 Speaking Tips
Give 4 specific, actionable speaking tips tailored to this topic and level. Each tip should be 1-2 sentences.

## 🗣️ Practice Exercise
Give one clear speaking exercise the student can do right now. Include time duration (e.g., "Speak for 2 minutes").

## 📖 Key Vocabulary
List 6-8 useful words or phrases related to the topic with a brief meaning in brackets.

## 💡 Sample Opening Line
Give 2 different strong opening sentences the student can use to start their speech on this topic.

## ⭐ Confidence Booster
One short motivational message (1-2 sentences) to encourage the student.

IMPORTANT:
- Keep the language simple, warm, and encouraging
- Avoid jargon and complex words
- Format clearly with bullet points where appropriate
- Make tips practical and immediately usable
- Adapt content to the student's level ({$levelLabel})
PROMPT;

        $apiKey = config('services.gemini.api_key');

        \Log::info('Gemini API call', ['key_prefix' => substr((string) $apiKey, 0, 8), 'topic' => $topic]);

        try {
            $response = Http::timeout(30)->post(
                "https://generativelanguage.googleapis.com/v1beta/models/gemini-3.5-flash-lite:generateContent?key={$apiKey}",
                [
                    'contents' => [
                        [
                            'parts' => [
                                ['text' => $prompt]
                            ]
                        ]
                    ],
                    'generationConfig' => [
                        'temperature' => 0.7,
                        'maxOutputTokens' => 2048,
                    ],
                ]
            );

            \Log::info('Gemini API response', ['status' => $response->status(), 'body' => substr($response->body(), 0, 500)]);

            if ($response->successful()) {
                $data = $response->json();
                $text = $data['candidates'][0]['content']['parts'][0]['text'] ?? null;

                if ($text) {
                    return response()->json(['success' => true, 'result' => $text]);
                }
            }

            return response()->json([
                'success' => false,
                'error' => 'AI se response nahi mila. Status: ' . $response->status() . ' — ' . substr($response->body(), 0, 200),
            ], 500);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'Connection error. Please check your internet and try again.',
            ], 500);
        }
    }
}

