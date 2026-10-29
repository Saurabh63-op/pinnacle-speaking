@extends('layouts.app')

@section('title', 'Best English Speaking Classes in Virar | Pinnacle Speaking')
@section('description', 'Looking for the best English speaking classes in Virar? Pinnacle Speaking offers expert-led spoken English, public speaking & communication courses at Global City, Virar West, Palghar. Small batches, real results.')
@section('keywords', 'best english speaking classes virar, spoken english classes virar west, public speaking course virar, english speaking institute virar palghar, communication skills virar, personality development course virar, pinnacle speaking virar')
@section('og_title', 'Best English Speaking Classes in Virar | Pinnacle Speaking')
@section('og_description', 'Top-rated spoken English & public speaking institute in Virar West. Expert coaches, small batches, real-world communication practice.')

@section('content')

  {{-- Hero --}}
  <section class="relative overflow-hidden px-5 pt-14 pb-16 sm:pt-20 sm:pb-24">
    <div class="mx-auto grid max-w-6xl items-center gap-12 lg:grid-cols-2">
      <div class="reveal">
        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">Public Speaking Institute</p>
        <h1 class="mt-4 text-4xl leading-tight sm:text-5xl lg:text-6xl">Best English Speaking Classes in Virar</h1>
        <p class="mt-6 max-w-xl text-lg text-gray-500">
          Pinnacle Speaking — Virar's most trusted English speaking institute. We help students, professionals and job seekers master spoken English, public speaking and communication skills. Small batches. Real practice. Lasting confidence.
        </p>
        <div class="mt-8 flex flex-wrap gap-3">
          <a href="{{ route('courses.index') }}" class="btn btn-primary">Explore Programs →</a>
          <a href="{{ route('contact') }}" class="btn btn-outline">Talk to a Coach</a>
        </div>
        <dl class="mt-12 grid max-w-md grid-cols-3 gap-6">
          <div><dt class="text-2xl font-bold text-navy">20+</dt><dd class="mt-1 text-sm text-gray-500">Years coaching</dd></div>
          <div><dt class="text-2xl font-bold text-navy">1,800+</dt><dd class="mt-1 text-sm text-gray-500">Speakers trained</dd></div>
          <div><dt class="text-2xl font-bold text-navy">4 cities</dt><dd class="mt-1 text-sm text-gray-500">Across India</dd></div>
        </dl>
      </div>

      <div class="reveal relative">
        <div class="dot-grid absolute -top-5 -left-5 hidden size-24 rounded-xl sm:block"></div>
        <div class="dot-grid absolute -right-5 -bottom-5 hidden size-24 rounded-xl sm:block"></div>
        <img src="{{ asset('images/hero-speaker.jpg') }}" alt="Coach delivering a public speaking session" class="blob-a relative w-full object-cover shadow-lift">
      </div>
    </div>
  </section>

  {{-- About summary --}}
  <section class="section section-mint">
    <div class="section-inner grid items-center gap-12 lg:grid-cols-2">
      <div class="reveal relative">
        <div class="dot-grid absolute -top-5 -left-5 hidden size-24 rounded-xl sm:block"></div>
        <img src="{{ asset('images/group-workshop.jpg') }}" alt="Group communication workshop" class="blob-b relative w-full object-cover shadow-lift">
      </div>
      <div class="reveal">
        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">About Pinnacle Speaking</p>
        <h2 class="mt-3 text-3xl sm:text-4xl">Built on practical mastery</h2>
        <p class="mt-5 text-gray-500">
          We started Pinnacle Speaking because most communication training stops at theory. Ours does not. Every session puts you on your feet, speaking, being recorded and getting specific feedback you can act on the same week.
        </p>
        <ul class="mt-6 space-y-3">
          <li class="flex gap-3 text-sm text-gray-500">✓ Clarity: say the thing in one clean sentence</li>
          <li class="flex gap-3 text-sm text-gray-500">✓ Structure: a frame for every answer and talk</li>
          <li class="flex gap-3 text-sm text-gray-500">✓ Confidence: earned through repetition, not pep talks</li>
        </ul>
        <div class="mt-8"><a href="{{ route('about') }}" class="btn btn-outline">More about us</a></div>
      </div>
    </div>
  </section>

  {{-- Services --}}
  <section class="section">
    <div class="section-inner">
      <div class="reveal mx-auto max-w-2xl text-center">
        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">What we do</p>
        <h2 class="mt-3 text-3xl sm:text-4xl">We offer the best services</h2>
        <p class="mt-4 text-gray-500">Three ways to work with us, and you can mix them as your schedule allows.</p>
      </div>
      <div class="mt-12 grid gap-6 md:grid-cols-3">
        @foreach ([['🎙️','Personal Coaching','One-to-one sessions built around your voice, your goal and your deadline.'],['👥','Group Sessions','Small cohorts where you practise in front of real people, every single week.'],['🌐','Online Resources','Drills, recordings and worksheets you can work through between sessions.']] as $s)
          <div class="reveal ui-card h-full">
            <span class="flex size-12 items-center justify-center rounded-2xl bg-mint text-xl">{{ $s[0] }}</span>
            <h3 class="mt-5 text-xl">{{ $s[1] }}</h3>
            <p class="mt-3 text-sm text-gray-500">{{ $s[2] }}</p>
          </div>
        @endforeach
      </div>
      <div class="reveal mt-10 text-center"><a href="{{ route('services') }}" class="btn btn-outline">View all services</a></div>
    </div>
  </section>

  {{-- Courses preview --}}
  <section class="section section-mint">
    <div class="section-inner">
      <div class="reveal mx-auto max-w-2xl text-center">
        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">Programs</p>
        <h2 class="mt-3 text-3xl sm:text-4xl">Popular programs</h2>
        <p class="mt-4 text-gray-500">Structured tracks for students, professionals and anyone with a date on the calendar.</p>
      </div>
      <div class="mt-12 grid gap-6 md:grid-cols-3">
        @foreach ($previewCourses as $c)
          <div class="reveal ui-card h-full">
            <span class="flex size-12 items-center justify-center rounded-2xl" style="background:color-mix(in oklab, var(--primary) 10%, transparent);">🎯</span>
            <h3 class="mt-5 text-xl">{{ $c->title }}</h3>
            <p class="mt-3 text-sm text-gray-500">{{ $c->short }}</p>
            <a href="{{ route('courses.show', $c->slug) }}" class="mt-5 inline-flex items-center text-sm font-semibold text-primary hover:text-navy">Learn More →</a>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- Testimonials --}}
  <section class="section">
    <div class="section-inner">
      <div class="reveal mx-auto max-w-2xl text-center">
        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">Testimonials</p>
        <h2 class="mt-3 text-3xl sm:text-4xl">What our speakers say</h2>
        <p class="mt-4 text-gray-500">Real results from people who arrived nervous and left prepared.</p>
      </div>
      <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($testimonials as $t)
          <div class="reveal ui-card h-full">
            <span class="text-2xl text-primary/40">"</span>
            <p class="mt-4 text-sm text-gray-500">{{ $t->review }}</p>
            <div class="mt-6"><p class="font-semibold text-navy">{{ $t->name }}</p><p class="text-xs text-gray-400">{{ $t->role }}</p></div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- Newsletter --}}
  <section class="section section-mint">
    <div class="section-inner reveal">
      <div class="rounded-2xl border border-gray-100 bg-white p-8 shadow-card sm:p-12">
        <div class="grid items-center gap-8 lg:grid-cols-2">
          <div>
            <h2 class="text-2xl sm:text-3xl">One speaking tip a week</h2>
            <p class="mt-3 text-sm text-gray-500">Short, practical drills you can try before your next meeting. No spam, unsubscribe any time.</p>
          </div>
          <form id="newsletter-form" class="flex flex-col gap-3 sm:flex-row relative" onsubmit="event.preventDefault(); document.getElementById('newsletter-success').classList.remove('hidden'); this.querySelector('input').value = '';">
            <input type="email" required placeholder="you@email.com" class="w-full rounded-full border border-gray-200 bg-white px-5 py-3 text-sm text-navy outline-none focus:border-primary">
            <button type="submit" class="btn btn-primary shrink-0">Subscribe</button>
            <div id="newsletter-success" class="hidden absolute -bottom-8 left-2 text-xs font-semibold text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
              ✓ Subscribed! Free weekly fluency tips will land in your inbox.
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  {{-- CTA --}}
  <section class="section section-navy">
    <div class="section-inner reveal text-center">
      <h2 class="text-3xl text-navy-foreground sm:text-4xl">Unlock Your Voice. Own the Spotlight.</h2>
      <p class="mx-auto mt-4 max-w-xl text-white/70">Join the next cohort and get eight weeks of structured practice, feedback and real stage time.</p>
      <div class="mt-8 flex flex-wrap justify-center gap-3">
        <a href="{{ route('contact') }}" class="btn btn-primary">Enroll Now</a>
        <a href="{{ route('courses.index') }}" class="btn btn-light">Browse Courses</a>
      </div>
    </div>
  </section>

@endsection
