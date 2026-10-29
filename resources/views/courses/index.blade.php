@extends('layouts.app')

@section('title', 'English Speaking Courses in Virar | Pinnacle Speaking')
@section('description', 'Explore English speaking & communication courses in Virar West — Career English, Public Speaking, Personality Development, Writing & more. Small batches. Expert coaches. Enroll today!')
@section('keywords', 'english speaking courses virar, communication course virar west, public speaking class palghar, personality development virar, english course near me virar, spoken english batch virar')
@section('og_title', 'English Speaking Courses in Virar | Pinnacle Speaking')
@section('og_description', 'Find the best English speaking course for you in Virar. Pinnacle Speaking offers programs for students, professionals, and all age groups.')

@php
  $iconsMap = [
    'career-focused-communication' => '<svg class="w-6 h-6 text-[#0f8b8d]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
    'all-rounder-english' => '<svg class="w-6 h-6 text-[#0f8b8d]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/><path d="M6 6h10M6 10h10"/></svg>',
    'young-author-program' => '<svg class="w-6 h-6 text-[#0f8b8d]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg>',
    'writers-choice' => '<svg class="w-6 h-6 text-[#0f8b8d]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"/><line x1="16" y1="8" x2="2" y2="22"/><line x1="17.5" y1="15" x2="9" y2="15"/></svg>',
    'young-orator' => '<svg class="w-6 h-6 text-[#0f8b8d]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="22"/></svg>',
    'custom-communication-coaching' => '<svg class="w-6 h-6 text-[#0f8b8d]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/></svg>',
  ];
@endphp

@section('content')

  <!-- Header Banner -->
  <section class="section !pb-12 !pt-12 bg-gradient-to-b from-[#e8f6f6] to-white">
    <div class="section-inner mx-auto max-w-3xl text-center">
      <span class="inline-block rounded-full bg-[#e8f6f6] border border-[#0f8b8d]/20 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.18em] text-[#0f8b8d]">
        Our Programs &amp; Courses
      </span>
      <h1 class="mt-4 text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#0e273c]">
        English Speaking Courses in Virar
      </h1>
      <p class="mt-4 text-base sm:text-lg text-gray-600">
        Every programme is practice-led, capped at small batch sizes, and designed to help you communicate and speak with immense confidence.
      </p>
    </div>
  </section>

  <!-- Courses Cards Grid -->
  <section class="section !pt-4 !pb-20">
    <div class="section-inner max-w-6xl mx-auto">
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @forelse ($courses as $c)
          <div class="group relative flex h-full flex-col justify-between rounded-3xl border border-gray-100 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl hover:border-[#0f8b8d]/30">
            
            <div>
              <!-- Top icon & Tag -->
              <div class="flex items-center justify-between">
                <span class="flex w-12 h-12 items-center justify-center rounded-2xl bg-[#e8f6f6] p-2.5 shadow-inner group-hover:scale-110 transition-transform">
                  {!! $iconsMap[$c->slug] ?? '<span class="text-xl">🎓</span>' !!}
                </span>
                <span class="rounded-full bg-gray-100 px-3 py-1 text-[11px] font-semibold text-gray-600">
                  {{ $c->audience ?? 'All Levels' }}
                </span>
              </div>

              <!-- Title -->
              <h3 class="mt-5 text-xl font-bold text-[#0e273c] group-hover:text-[#0f8b8d] transition-colors">
                <a href="{{ route('courses.show', $c->slug) }}">
                  {{ $c->title }}
                </a>
              </h3>

              <!-- Short Description -->
              <p class="mt-3 text-sm leading-relaxed text-gray-500">
                {{ $c->short }}
              </p>
            </div>

            <!-- Footer Details -->
            <div class="mt-6 border-t border-gray-100 pt-4">
              <div class="flex items-center justify-between text-xs text-gray-400 font-medium mb-4">
                <span class="flex items-center gap-1.5 text-[#0f8b8d] font-semibold">
                  <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                  </svg>
                  {{ $c->duration }}
                </span>
              </div>

              <div class="flex items-center gap-3">
                <a href="{{ route('courses.show', $c->slug) }}" class="flex-1 text-center rounded-xl bg-[#e8f6f6] py-2.5 text-xs font-bold text-[#0f8b8d] transition-colors hover:bg-[#0f8b8d] hover:text-white">
                  Learn More
                </a>
                <a href="{{ route('contact') }}" class="rounded-xl border border-gray-200 px-4 py-2.5 text-xs font-semibold text-gray-700 transition-colors hover:border-[#0f8b8d] hover:text-[#0f8b8d]">
                  Enroll
                </a>
              </div>
            </div>

          </div>
        @empty
          <div class="col-span-3 text-center py-12">
            <p class="text-gray-500">No courses available at the moment.</p>
          </div>
        @endforelse
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="section section-mint !py-16">
    <div class="section-inner text-center max-w-2xl mx-auto">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0e273c]">Not sure which one to choose?</h2>
      <p class="mx-auto mt-4 text-base text-gray-600">
        Tell us your goal and schedule, and our coaches will guide you to the perfect learning track.
      </p>
      <div class="mt-8 flex justify-center gap-4">
        <a href="{{ route('contact') }}" class="btn btn-primary !px-8">Talk to a Coach</a>
      </div>
    </div>
  </section>

@endsection
