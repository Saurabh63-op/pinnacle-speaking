@extends('layouts.app')

@section('title', $course->title . ' — Pinnacle Classes')
@section('description', $course->short)

@php
  // Course-specific rich dataset
  $courseData = [
    'career-focused-communication' => [
      'subtitle' => 'Spoken English for Adults | Real-World Communication for Professional Success',
      'who_title' => 'Who This Program is for ?',
      'who_points' => [
        'Working Professionals looking for promotion & leadership roles',
        'Entrepreneurs, Business Owners & Startup Founders',
        'Adults and Graduates who want to speak English confidently and correctly',
      ],
      'who_image' => 'career-audience.jpg',
      'how_points' => [
        'Level-based learning structure tailored to your pace',
        'Real-life communication topics and mock workplace scenarios',
        'Continuous video feedback and personalized guided practice',
      ],
      'how_image' => 'career-study.jpg',
      'work_points' => [
        'Spoken sentence structure and concise delivery',
        'Fluency, thought articulation and confidence',
        'Pronunciation clarity and reducing accent barriers',
        'Expressing opinions, disagreement, and ideas clearly',
      ],
      'work_image' => 'career-success.jpg',
      'levels' => [
        ['title' => 'Level 1 - Essentials', 'desc' => 'Sentence formation, core vocabulary, pronunciation basics', 'outcome' => 'Speak simple, correct English confidently'],
        ['title' => 'Level 2 - Foundation', 'desc' => 'Grammar in speech, vocabulary expansion, fluency starters', 'outcome' => 'Speak more clearly and comfortably'],
        ['title' => 'Level 3 - Fluency Builder', 'desc' => 'Workplace communication, group discussions, expressing opinions', 'outcome' => 'Express ideas clearly at work'],
        ['title' => 'Level 4 - Professional Impact', 'desc' => 'Advanced fluency, presentations, executive vocabulary', 'outcome' => 'Communicate confidently in professional settings'],
        ['title' => 'Level 5 - Advanced', 'desc' => 'Persuasive speaking, executive presence, impact communication', 'outcome' => 'Speak with clarity, confidence, and authority'],
      ],
      'cta_text' => 'Ready to communicate confidently in professional and real-world settings?',
    ],

    'all-rounder-english' => [
      'subtitle' => 'Comprehensive Spoken & Written Mastery | Grammar, Fluency & Vocabulary',
      'who_title' => 'Who This Program is for ?',
      'who_points' => [
        'Learners of all age groups (15+) seeking complete English mastery',
        'Anyone who hesitates or translates in their mind before speaking',
        'Students and adults wanting strong grammar and writing fundamentals',
      ],
      'who_image' => 'services-workshop-2.jpg',
      'how_points' => [
        'Integrated 4-pillar system: Reading, Writing, Listening, and Speaking',
        'Interactive conversation drills and daily practice sheets',
        'Small batch live sessions with step-by-step progress tracking',
      ],
      'how_image' => 'services-workshop-1.jpg',
      'work_points' => [
        'Eliminating mental translation & hesitation',
        'Functional grammar applied to daily speech',
        'Rich, practical everyday vocabulary',
        'Clear, neutral pronunciation and listening comprehension',
      ],
      'work_image' => 'services-coaching-1.jpg',
      'levels' => [
        ['title' => 'Level 1 - Grammar & Basics', 'desc' => 'Sentence foundations, tenses, common errors removal', 'outcome' => 'Build error-free sentences naturally'],
        ['title' => 'Level 2 - Vocabulary & Flow', 'desc' => 'Everyday conversational phrases and idiom usage', 'outcome' => 'Speak without long pauses or search for words'],
        ['title' => 'Level 3 - Speech & Accent', 'desc' => 'Pronunciation, stress patterns, listening comprehension', 'outcome' => 'Speak with clear, crisp diction'],
        ['title' => 'Level 4 - Active Interaction', 'desc' => 'Social conversations, storytelling, structured responses', 'outcome' => 'Engage smoothly in any group conversation'],
        ['title' => 'Level 5 - Complete Fluency', 'desc' => 'Spontaneous speaking, reading comprehension, writing polish', 'outcome' => 'Master everyday and formal English effortlessly'],
      ],
      'cta_text' => 'Ready to build fluent, effortless English across speaking and writing?',
    ],

    'young-author-program' => [
      'subtitle' => 'Creative Writing & Storytelling for Young Minds | Published Class Anthology',
      'who_title' => 'Who This Program is for ?',
      'who_points' => [
        'School students aged 10 to 16 with vivid imaginations',
        'Young writers wanting to draft, edit, and publish stories',
        'Children looking to enhance descriptive vocabulary and creative thinking',
      ],
      'who_image' => 'gallery-2.jpg',
      'how_points' => [
        'Weekly guided story crafting workshops and creative prompts',
        'Peer review circle and 1-on-1 mentor editing sessions',
        'Final printed book publishing and official reading ceremony',
      ],
      'how_image' => 'gallery-3.jpg',
      'work_points' => [
        'World-building, plot pacing, and narrative arcs',
        'Character depth, dialogue craft, and emotional resonance',
        'Self-editing techniques and descriptive language',
        'Reading aloud with expression and dramatic timing',
      ],
      'work_image' => 'services-coaching-2.jpg',
      'levels' => [
        ['title' => 'Phase 1 - Idea Generation', 'desc' => 'Brainstorming original concepts, character sketches, genre selection', 'outcome' => 'Create unique story outlines with clear plots'],
        ['title' => 'Phase 2 - Drafting Worlds', 'desc' => 'Writing scenes, crafting conflict, immersive descriptions', 'outcome' => 'Complete a first full story manuscript draft'],
        ['title' => 'Phase 3 - Editing & Polish', 'desc' => 'Sentence rhythm, word choice, mentor line-edits', 'outcome' => 'Refine drafts to professional publishing standards'],
        ['title' => 'Phase 4 - Publishing & Launch', 'desc' => 'Formatting, cover selection, printed class anthology release', 'outcome' => 'Become a published author with your own printed story'],
      ],
      'cta_text' => 'Give your child the superpower of storytelling and published authorship.',
    ],

    'writers-choice' => [
      'subtitle' => 'Advanced Writing Masterclass | Essays, Op-Eds, Portfolios & Long-Form Narratives',
      'who_title' => 'Who This Program is for ?',
      'who_points' => [
        'Aspiring authors, essayists, content creators, and journalists',
        'College students and professionals crafting high-stakes essays or articles',
        'Adults wanting to hone a distinctive, commanding written voice',
      ],
      'who_image' => 'services-workshop-2.jpg',
      'how_points' => [
        'Intensive critique circles and deep-dive editorial feedback',
        'Analysis of classic essays, investigative journalism, and memoirs',
        'Portfolio-driven curriculum tailored to your personal writing goals',
      ],
      'how_image' => 'career-study.jpg',
      'work_points' => [
        'Rhetorical devices, hooks, and argument architectures',
        'Developing a sharp, memorable author voice',
        'Ruthless self-editing and structural restructuring',
        'Pitching publications and creating portfolio-ready work',
      ],
      'work_image' => 'career-audience.jpg',
      'levels' => [
        ['title' => 'Module 1 - Voice & Rhythm', 'desc' => 'Sentence architecture, personal voice, voice consistency', 'outcome' => 'Develop a distinct signature writing style'],
        ['title' => 'Module 2 - Non-Fiction & Essays', 'desc' => 'Crafting persuasive essays, analytical papers, and op-eds', 'outcome' => 'Write sharp, structured, compelling non-fiction'],
        ['title' => 'Module 3 - Narrative Architecture', 'desc' => 'Long-form pacing, narrative tension, thematic depth', 'outcome' => 'Structure multi-chapter stories or long articles'],
        ['title' => 'Module 4 - Publication Portfolio', 'desc' => 'Refining 3 major pieces, querying editors, submissions', 'outcome' => 'Graduate with a submission-ready literary portfolio'],
      ],
      'cta_text' => 'Transform your writing from ordinary draft to publication-worthy craft.',
    ],

    'young-orator' => [
      'subtitle' => 'Public Speaking, Debate & Stage Presence for Young Leaders (Ages 9-17)',
      'who_title' => 'Who This Program is for ?',
      'who_points' => [
        'School students aged 9-17 who experience stage fear or shyness',
        'Budding debaters and MUN (Model United Nations) enthusiasts',
        'Young leaders aiming for school councils, elocutions, and assemblies',
      ],
      'who_image' => 'gallery-1.jpg',
      'how_points' => [
        'Stage simulation drills and live microphone practice',
        'Parliamentary debate rules and extempore speech games',
        'Recorded video self-critique with confidence scoring',
      ],
      'how_image' => 'services-speaking-hall.jpg',
      'work_points' => [
        'Overcoming stage anxiety through breathing and body posture',
        'Vocal projection, cadence, and expressive modulation',
        'Structured argument building and handling counter-points',
        'Engaging audiences with eye contact and memorable stories',
      ],
      'work_image' => 'hero-speaker.jpg',
      'levels' => [
        ['title' => 'Level 1 - Stage Courage', 'desc' => 'Posture, eye contact, managing butterflies and initial nerves', 'outcome' => 'Step onto stage calmly without fear'],
        ['title' => 'Level 2 - Vocal Power', 'desc' => 'Voice modulation, pausing, tone variation, projection', 'outcome' => 'Speak loud and clear with command'],
        ['title' => 'Level 3 - Speech Structuring', 'desc' => 'Opening hooks, body points, memorable conclusions', 'outcome' => 'Organize any speech in under two minutes'],
        ['title' => 'Level 4 - Debate & Extempore', 'desc' => 'Thinking on your feet, logical rebuttals, impromptu rounds', 'outcome' => 'Excel in competitive debate and spontaneous topics'],
      ],
      'cta_text' => 'Empower your child with lifelong stage confidence and leadership speaking.',
    ],

    'custom-communication-coaching' => [
      'subtitle' => '1-on-1 Bespoke Executive Coaching | Tailored for High-Stakes Presentations & Goals',
      'who_title' => 'Who This Program is for ?',
      'who_points' => [
        'Executives, keynote speakers, and TEDx / conference presenters',
        'Founders pitching to investors or board members',
        'Individuals preparing for crucial interviews, vivas, or milestone toasts',
      ],
      'who_image' => 'services-coaching-1.jpg',
      'how_points' => [
        'Private 1-on-1 coaching customized completely to your timeline',
        'Rehearsals filmed in real or simulated high-pressure settings',
        'Granular line-by-line script doctoring and slide alignment',
      ],
      'how_image' => 'career-audience.jpg',
      'work_points' => [
        'Crafting keynote narratives that inspire and convert',
        'Executive presence, body language, and micro-gestures',
        'Q&A handling, navigating difficult questions with composure',
        'High-stakes psychological grounding and pacing control',
      ],
      'work_image' => 'services-speaking-hall.jpg',
      'levels' => [
        ['title' => 'Stage 1 - Goal & Audience Diagnosis', 'desc' => 'Audience persona analysis, objective setting, core takeaway', 'outcome' => 'Crystal clear purpose and narrative thesis'],
        ['title' => 'Stage 2 - Script & Hook Architecture', 'desc' => 'Crafting opening hooks, emotional anchors, data storytelling', 'outcome' => 'A compelling, airtight presentation script'],
        ['title' => 'Stage 3 - Delivery Rehearsals', 'desc' => 'Recorded simulation drills, vocal dynamics, body language', 'outcome' => 'Seamless, confident delivery without reading slides'],
        ['title' => 'Stage 4 - High-Stakes Pressure Testing', 'desc' => 'Tough Q&A drills, unexpected interruption handling', 'outcome' => 'Command the room under any circumstances'],
      ],
      'cta_text' => 'Have an upcoming presentation or goal? Let us design your custom winning track.',
    ],
  ];

  $current = $courseData[$course->slug] ?? null;
@endphp

@section('content')

  @if ($current)

    <!-- Top Hero Section -->
    <section class="section !pt-12 !pb-12 bg-white">
      <div class="section-inner max-w-4xl mx-auto text-center">
        <a href="{{ route('courses.index') }}" class="inline-flex items-center gap-1 text-xs font-semibold text-[#0f8b8d] hover:underline mb-4">
          &larr; View All Courses
        </a>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#0e273c] tracking-tight">
          {{ $course->title }}
        </h1>
        <p class="mt-3 text-xs sm:text-sm font-semibold tracking-wide text-gray-500 uppercase">
          {{ $current['subtitle'] }}
        </p>

        <div class="mt-6 flex justify-center gap-3">
          <a href="{{ route('contact') }}" class="rounded-full bg-black px-7 py-2.5 text-xs sm:text-sm font-bold text-white shadow-md transition-transform hover:scale-105">
            Ask For Course Details
          </a>
        </div>
      </div>
    </section>

    <!-- Who This Program is for? -->
    <section class="section !py-8 bg-white">
      <div class="section-inner max-w-4xl mx-auto">
        <div class="grid items-center gap-8 md:grid-cols-2">
          
          <!-- Left Text & Points -->
          <div>
            <h2 class="text-2xl sm:text-3xl font-bold text-[#0e273c]">
              {{ $current['who_title'] }}
            </h2>
            <ul class="mt-6 space-y-3 text-sm sm:text-base text-gray-600">
              @foreach ($current['who_points'] as $p)
                <li class="flex items-start gap-2">
                  <span class="text-black font-bold">•</span>
                  <span>{{ $p }}</span>
                </li>
              @endforeach
            </ul>
          </div>

          <!-- Right Image -->
          <div class="overflow-hidden rounded-2xl shadow-sm aspect-[4/3] bg-gray-50">
            <img
              src="{{ asset('images/' . $current['who_image']) }}"
              alt="{{ $course->title }}"
              class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
              loading="lazy"
            >
          </div>

        </div>
      </div>
    </section>

    <!-- 2 Column Section: How the Program Works & What You Will Work On -->
    <section class="section !py-10 bg-[#f7f9fb]">
      <div class="section-inner max-w-4xl mx-auto">
        <div class="grid gap-8 md:grid-cols-2">
          
          <!-- Column 1: How the Program Works -->
          <div class="flex flex-col justify-between rounded-2xl bg-white p-6 shadow-sm border border-gray-100">
            <div>
              <h3 class="text-lg sm:text-xl font-bold text-[#0e273c]">
                How the Program Works
              </h3>
              <ul class="mt-4 space-y-3 text-xs sm:text-sm text-gray-600">
                @foreach ($current['how_points'] as $hp)
                  <li class="flex items-start gap-2">
                    <span class="text-black font-bold">•</span>
                    <span>{{ $hp }}</span>
                  </li>
                @endforeach
              </ul>
            </div>
            <div class="mt-6 overflow-hidden rounded-xl aspect-[16/10] bg-gray-50">
              <img
                src="{{ asset('images/' . $current['how_image']) }}"
                alt="How the Program Works"
                class="w-full h-full object-cover"
                loading="lazy"
              >
            </div>
          </div>

          <!-- Column 2: What You Will Work On -->
          <div class="flex flex-col justify-between rounded-2xl bg-white p-6 shadow-sm border border-gray-100">
            <div>
              <h3 class="text-lg sm:text-xl font-bold text-[#0e273c]">
                What You Will Work On
              </h3>
              <ul class="mt-4 space-y-3 text-xs sm:text-sm text-gray-600">
                @foreach ($current['work_points'] as $wp)
                  <li class="flex items-start gap-2">
                    <span class="text-black font-bold">•</span>
                    <span>{{ $wp }}</span>
                  </li>
                @endforeach
              </ul>
            </div>
            <div class="mt-6 overflow-hidden rounded-xl aspect-[16/10] bg-gray-50">
              <img
                src="{{ asset('images/' . $current['work_image']) }}"
                alt="What You Will Work On"
                class="w-full h-full object-cover"
                loading="lazy"
              >
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Level Structure & Learning Outcomes -->
    <section class="section !py-12 bg-white">
      <div class="section-inner max-w-4xl mx-auto">
        <h2 class="text-2xl sm:text-3xl font-bold text-[#0e273c] mb-8">
          Level Structure &amp; Learning Outcomes
        </h2>

        <div class="grid gap-8 md:grid-cols-2">
          @foreach ($current['levels'] as $idx => $lvl)
            <div class="space-y-1.5 {{ $loop->last && $loop->count % 2 !== 0 ? 'md:col-span-2' : '' }}">
              <h3 class="text-base sm:text-lg font-bold text-[#0e273c]">
                {{ $lvl['title'] }}
              </h3>
              <p class="text-xs sm:text-sm text-gray-600">
                {{ $lvl['desc'] }}
              </p>
              <p class="text-xs sm:text-sm font-semibold text-gray-800">
                Outcome: <span class="font-normal text-gray-600">{{ $lvl['outcome'] }}</span>
              </p>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- Bottom Footer Call to Action -->
    <section class="section !py-12 bg-[#b6e2e5]/40 text-center">
      <div class="section-inner max-w-2xl mx-auto px-4">
        <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-[#0e273c]">
          {{ $current['cta_text'] }}
        </h3>
        <div class="mt-6">
          <a href="{{ route('contact') }}" class="btn btn-primary !px-8">
            Enroll in This Program
          </a>
        </div>
      </div>
    </section>

  @else

    <!-- Fallback Template -->
    <section class="section">
      <div class="section-inner max-w-4xl mx-auto">
        <a href="{{ route('courses.index') }}" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-primary">← All courses</a>
        <h1 class="mt-6 text-4xl sm:text-5xl font-extrabold text-navy">{{ $course->title }}</h1>
        <p class="mt-5 max-w-2xl text-lg text-gray-500">{{ $course->long }}</p>
        <div class="mt-8 flex flex-wrap gap-3">
          <a href="{{ route('contact') }}" class="btn btn-primary">Enroll Now</a>
        </div>
      </div>
    </section>

  @endif

@endsection
