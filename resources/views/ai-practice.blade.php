@extends('layouts.app')

@section('title', 'AI Speaking Practice Generator — Pinnacle Speaking')
@section('meta_description', 'Get personalized AI-powered speaking tips, vocabulary, and practice exercises for any topic. Free tool by Pinnacle Speaking.')

@section('content')

{{-- Hero Section --}}
<section class="relative overflow-hidden bg-gradient-to-br from-navy via-blue-900 to-primary py-16 md:py-24">
  <div class="absolute inset-0 opacity-10">
    <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
      <circle cx="80" cy="20" r="40" fill="white" opacity="0.15"/>
      <circle cx="10" cy="80" r="30" fill="white" opacity="0.1"/>
    </svg>
  </div>
  <div class="relative mx-auto max-w-3xl px-5 text-center">
    <div class="mb-4 inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-sm font-medium text-white/90 backdrop-blur">
      <svg class="size-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
      </svg>
      Powered by Google Gemini AI
    </div>
    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-white md:text-5xl">
      AI Speaking Practice<br>
      <span class="text-yellow-300">Generator</span>
    </h1>
    <p class="mx-auto max-w-xl text-base text-white/80 md:text-lg">
      Enter any topic, choose your level — get instant personalized speaking tips, vocabulary & practice exercises!
    </p>
  </div>
</section>

{{-- Main Tool Section --}}
<section class="bg-gray-50 py-12 md:py-16">
  <div class="mx-auto max-w-3xl px-5">

    {{-- Input Card --}}
    <div class="mb-8 rounded-3xl bg-white p-6 shadow-lg md:p-8">
      <h2 class="mb-6 text-xl font-bold text-navy">🎯 Your Practice Details</h2>

      <form id="ai-form" class="space-y-5">
        @csrf
        {{-- Topic Input --}}
        <div>
          <label for="topic" class="mb-1.5 block text-sm font-semibold text-gray-700">
            📝 Speaking Topic
          </label>
          <input
            type="text"
            id="topic"
            name="topic"
            placeholder="e.g. My Dream Job, Climate Change, Morning Routine, Leadership..."
            maxlength="200"
            class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-800 outline-none transition focus:border-primary focus:bg-white focus:ring-2 focus:ring-primary/20"
            required
          />
          <p class="mt-1 text-xs text-gray-400">Type any topic you want to speak about</p>
        </div>

        {{-- Level Select --}}
        <div>
          <label class="mb-2 block text-sm font-semibold text-gray-700">📊 Your English Level</label>
          <div class="grid grid-cols-3 gap-3">
            <label class="level-card cursor-pointer">
              <input type="radio" name="level" value="beginner" class="sr-only" required>
              <div class="level-box rounded-2xl border-2 border-gray-200 p-4 text-center transition hover:border-green-400">
                <div class="mb-1 text-2xl">🌱</div>
                <div class="text-sm font-bold text-gray-700">Beginner</div>
                <div class="mt-0.5 text-xs text-gray-400">Just starting</div>
              </div>
            </label>
            <label class="level-card cursor-pointer">
              <input type="radio" name="level" value="intermediate" class="sr-only" required>
              <div class="level-box rounded-2xl border-2 border-gray-200 p-4 text-center transition hover:border-blue-400">
                <div class="mb-1 text-2xl">🚀</div>
                <div class="text-sm font-bold text-gray-700">Intermediate</div>
                <div class="mt-0.5 text-xs text-gray-400">Some experience</div>
              </div>
            </label>
            <label class="level-card cursor-pointer">
              <input type="radio" name="level" value="advanced" class="sr-only" required>
              <div class="level-box rounded-2xl border-2 border-gray-200 p-4 text-center transition hover:border-purple-400">
                <div class="mb-1 text-2xl">🏆</div>
                <div class="text-sm font-bold text-gray-700">Advanced</div>
                <div class="mt-0.5 text-xs text-gray-400">Confident speaker</div>
              </div>
            </label>
          </div>
        </div>

        {{-- Submit Button --}}
        <button
          type="submit"
          id="generate-btn"
          class="btn btn-primary w-full py-3.5 text-base font-semibold"
        >
          <span id="btn-text" class="flex items-center justify-center gap-2">
            <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
            Generate My Practice Plan
          </span>
          <span id="btn-loading" class="hidden items-center justify-center gap-2">
            <svg class="size-5 animate-spin" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
            </svg>
            AI is thinking...
          </span>
        </button>
      </form>
    </div>

    {{-- Result Section (hidden initially) --}}
    <div id="result-section" class="hidden">
      {{-- Topic Badge --}}
      <div class="mb-4 flex items-center gap-3">
        <div class="flex-1 rounded-2xl bg-primary/10 px-4 py-2.5">
          <p class="text-xs text-gray-500">Practice plan for</p>
          <p class="font-bold text-navy" id="result-topic-display"></p>
        </div>
        <span id="result-level-badge"
          class="rounded-full px-4 py-2 text-xs font-bold uppercase tracking-wide text-white"></span>
      </div>

      {{-- AI Result Card --}}
      <div class="rounded-3xl bg-white p-6 shadow-lg md:p-8">
        <div class="mb-4 flex items-center justify-between">
          <h3 class="text-lg font-bold text-navy">Your Personalized Practice Plan</h3>
          <button onclick="copyResult()"
            class="flex items-center gap-1.5 rounded-full border border-gray-200 px-3 py-1.5 text-xs font-medium text-gray-500 transition hover:bg-gray-50 hover:text-primary">
            <svg class="size-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
            </svg>
            Copy
          </button>
        </div>
        <div id="ai-result" class="prose prose-sm max-w-none text-gray-700"></div>
      </div>

      {{-- Try Another / CTA --}}
      <div class="mt-6 flex flex-col gap-4 sm:flex-row">
        <button onclick="resetForm()"
          class="flex-1 rounded-2xl border-2 border-primary px-5 py-3 text-sm font-semibold text-primary transition hover:bg-primary hover:text-white">
          🔄 Try Another Topic
        </button>
        <a href="{{ route('contact') }}"
          class="flex-1 rounded-2xl bg-navy px-5 py-3 text-center text-sm font-semibold text-white transition hover:bg-primary">
          📞 Book a Free Demo Class
        </a>
      </div>
    </div>

    {{-- Error Section --}}
    <div id="error-section" class="hidden">
      <div class="rounded-2xl border border-red-200 bg-red-50 p-5 text-center">
        <div class="mb-2 text-3xl">😔</div>
        <p class="font-semibold text-red-700" id="error-message"></p>
        <button onclick="resetError()"
          class="mt-3 rounded-full bg-red-600 px-5 py-2 text-sm font-medium text-white hover:bg-red-700">
          Try Again
        </button>
      </div>
    </div>

  </div>
</section>

{{-- Info Section --}}
<section class="bg-white py-10 md:py-14">
  <div class="mx-auto max-w-5xl px-5">
    <h2 class="mb-8 text-center text-2xl font-bold text-navy md:text-3xl">How It Works</h2>
    <div class="grid gap-5 sm:grid-cols-3">
      <div class="rounded-2xl bg-mint/40 p-6 text-center">
        <div class="mb-3 text-4xl">1️⃣</div>
        <h3 class="mb-2 font-bold text-navy">Enter Your Topic</h3>
        <p class="text-sm text-gray-600">Type any topic you want to speak about — personal, professional, or academic.</p>
      </div>
      <div class="rounded-2xl bg-primary/10 p-6 text-center">
        <div class="mb-3 text-4xl">2️⃣</div>
        <h3 class="mb-2 font-bold text-navy">Choose Your Level</h3>
        <p class="text-sm text-gray-600">Select Beginner, Intermediate, or Advanced — AI customizes the response just for you.</p>
      </div>
      <div class="rounded-2xl bg-yellow-50 p-6 text-center">
        <div class="mb-3 text-4xl">3️⃣</div>
        <h3 class="mb-2 font-bold text-navy">Get Instant Tips</h3>
        <p class="text-sm text-gray-600">Receive speaking tips, vocabulary, exercises and sample lines in seconds!</p>
      </div>
    </div>
  </div>
</section>

{{-- CTA Banner --}}
<section class="bg-navy py-10 md:py-14">
  <div class="mx-auto max-w-3xl px-5 text-center">
    <p class="mb-2 text-sm font-medium uppercase tracking-widest text-primary">Want Expert Guidance?</p>
    <h2 class="mb-4 text-2xl font-extrabold text-white md:text-3xl">
      Practice with a Real Coach at Pinnacle Speaking!
    </h2>
    <p class="mb-6 text-gray-300">
      AI gives you a start, but our expert coaches help you master public speaking with personal feedback.
    </p>
    <a href="{{ route('contact') }}" class="btn btn-primary px-8 py-3.5 text-base font-semibold">
      Book Free Demo Class →
    </a>
  </div>
</section>

{{-- Scripts --}}
<script>
  // Level card selection styling
  document.querySelectorAll('.level-card input[type=radio]').forEach(function(radio) {
    radio.addEventListener('change', function() {
      document.querySelectorAll('.level-box').forEach(function(box) {
        box.classList.remove('border-primary', 'bg-primary/5', 'border-green-400', 'border-blue-400', 'border-purple-400');
        box.classList.add('border-gray-200');
      });
      var box = this.closest('.level-card').querySelector('.level-box');
      box.classList.remove('border-gray-200');
      var colors = { beginner: 'border-green-400', intermediate: 'border-blue-400', advanced: 'border-purple-400' };
      box.classList.add(colors[this.value] || 'border-primary', 'bg-primary/5');
    });
  });

  // Form submission
  document.getElementById('ai-form').addEventListener('submit', async function(e) {
    e.preventDefault();

    var topic = document.getElementById('topic').value.trim();
    var levelInput = document.querySelector('input[name=level]:checked');

    if (!topic) {
      alert('Please enter a topic!');
      return;
    }
    if (!levelInput) {
      alert('Please select your level!');
      return;
    }

    // Show loading state
    document.getElementById('btn-text').classList.add('hidden');
    document.getElementById('btn-loading').classList.remove('hidden');
    document.getElementById('generate-btn').disabled = true;
    document.getElementById('result-section').classList.add('hidden');
    document.getElementById('error-section').classList.add('hidden');

    try {
      var token = document.querySelector('meta[name=csrf-token]')
                    ? document.querySelector('meta[name=csrf-token]').content
                    : document.querySelector('input[name=_token]').value;

      var response = await fetch('{{ route("ai.practice.generate") }}', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': token,
          'Accept': 'application/json',
        },
        body: JSON.stringify({ topic: topic, level: levelInput.value }),
      });

      var data = await response.json();

      if (data.success) {
        showResult(topic, levelInput.value, data.result);
      } else {
        showError(data.error || 'Something went wrong. Please try again.');
      }
    } catch(err) {
      showError('Network error. Please check your internet connection.');
    } finally {
      document.getElementById('btn-text').classList.remove('hidden');
      document.getElementById('btn-loading').classList.add('hidden');
      document.getElementById('generate-btn').disabled = false;
    }
  });

  function showResult(topic, level, markdown) {
    document.getElementById('result-topic-display').textContent = topic;

    var badge = document.getElementById('result-level-badge');
    var colors = { beginner: 'bg-green-500', intermediate: 'bg-blue-500', advanced: 'bg-purple-500' };
    badge.className = 'rounded-full px-4 py-2 text-xs font-bold uppercase tracking-wide text-white ' + (colors[level] || 'bg-primary');
    badge.textContent = level;

    // Parse simple markdown to HTML
    document.getElementById('ai-result').innerHTML = parseMarkdown(markdown);
    document.getElementById('result-section').classList.remove('hidden');
    document.getElementById('result-section').scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  function showError(msg) {
    document.getElementById('error-message').textContent = msg;
    document.getElementById('error-section').classList.remove('hidden');
    document.getElementById('error-section').scrollIntoView({ behavior: 'smooth' });
  }

  function resetForm() {
    document.getElementById('result-section').classList.add('hidden');
    document.getElementById('error-section').classList.add('hidden');
    document.getElementById('topic').value = '';
    document.querySelectorAll('input[name=level]').forEach(function(r) { r.checked = false; });
    document.querySelectorAll('.level-box').forEach(function(box) {
      box.classList.remove('border-primary', 'bg-primary/5', 'border-green-400', 'border-blue-400', 'border-purple-400');
      box.classList.add('border-gray-200');
    });
    document.getElementById('topic').focus();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  function resetError() {
    document.getElementById('error-section').classList.add('hidden');
  }

  function copyResult() {
    var text = document.getElementById('ai-result').innerText;
    navigator.clipboard.writeText(text).then(function() {
      alert('Copied to clipboard! 📋');
    });
  }

  // Simple Markdown → HTML parser for AI response
  function parseMarkdown(text) {
    return text
      // H2 headings
      .replace(/^## (.+)$/gm, '<h2 class="mt-6 mb-3 text-base font-bold text-navy flex items-center gap-2">$1</h2>')
      // H3 headings
      .replace(/^### (.+)$/gm, '<h3 class="mt-4 mb-2 text-sm font-bold text-gray-800">$1</h3>')
      // Bold **text**
      .replace(/\*\*(.+?)\*\*/g, '<strong class="font-semibold text-navy">$1</strong>')
      // Bullet points
      .replace(/^[-*] (.+)$/gm, '<li class="flex gap-2 text-sm"><span class="mt-1 flex-shrink-0 text-primary">•</span><span>$1</span></li>')
      // Numbered lists
      .replace(/^\d+\. (.+)$/gm, '<li class="flex gap-2 text-sm"><span class="mt-1 flex-shrink-0 font-semibold text-primary">→</span><span>$1</span></li>')
      // Wrap consecutive <li> in <ul>
      .replace(/(<li[\s\S]+?<\/li>\n?)+/g, function(m) {
        return '<ul class="my-2 space-y-1.5">' + m + '</ul>';
      })
      // Line breaks (double newline = paragraph)
      .replace(/\n{2,}/g, '</p><p class="mb-2 text-sm">')
      // Single newlines
      .replace(/\n/g, '<br>');
  }
</script>

@endsection
