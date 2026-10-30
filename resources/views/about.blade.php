@extends('layouts.app')

@section('title', 'About Pinnacle Speaking — Dedicated to Helping People Find Their Voice')

@section('content')

  <section class="section">
    <div class="section-inner reveal mx-auto max-w-2xl text-center">
      <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">About us</p>
      <h1 class="mt-3 text-3xl sm:text-4xl">Communication is a life skill, not a subject</h1>
      <p class="mt-4 text-gray-500">Pinnacle Speaking was founded to teach speaking the way it is actually used — live, unscripted and under real-world confidence.</p>
    </div>
  </section>

  <section class="section section-mint !pt-0 sm:!pt-0">
    <div class="section-inner grid items-center gap-12 lg:grid-cols-2">
      <div class="reveal">
        <img src="{{ asset('images/founder.jpg') }}" alt="Portrait of the founding coach" class="blob-c mx-auto max-w-sm w-full object-cover shadow-lift" loading="lazy">
      </div>
      <div class="reveal">
        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">The founder</p>
        <h2 class="mt-3 text-3xl sm:text-4xl">Twenty years, one obsession</h2>
        <p class="mt-5 text-gray-500">Our founding coach has spent more than twenty years helping people find their voice — in classrooms, boardrooms, debate halls and on conference stages. That work started with school debate teams and grew into leadership coaching for managers who could do the job but could not yet explain it.</p>
        <p class="mt-4 text-gray-500">The method has stayed the same throughout: give people a frame to think in, put them on their feet, record it, and be honest about what to fix next. No scripts to memorise, no personality transplant. Just your own voice, sharpened.</p>
        <div class="mt-8"><a href="{{ route('contact') }}" class="btn btn-primary">Book a Session</a></div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="section-inner">
      <div class="reveal mx-auto max-w-2xl text-center">
        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">Our mission</p>
        <h2 class="mt-3 text-3xl sm:text-4xl">What we believe</h2>
        <p class="mt-4 text-gray-500">Three principles shape every programme we run.</p>
      </div>
      <div class="mt-12 grid gap-6 md:grid-cols-3">
        @foreach ([['🎯','Clarity before polish','A clear idea in plain words beats a beautiful sentence nobody follows. We start with thinking, then delivery.'],['🧭','Structure you can reuse','You leave with frames that work in an interview, a stand-up meeting or a wedding toast.'],['🤝','Practice over theory','Every session ends with you having spoken. Feedback is specific, kind and immediately actionable.']] as $m)
          <div class="reveal ui-card h-full">
            <span class="flex size-12 items-center justify-center rounded-2xl bg-mint text-xl">{{ $m[0] }}</span>
            <h3 class="mt-5 text-xl">{{ $m[1] }}</h3>
            <p class="mt-3 text-sm text-gray-500">{{ $m[2] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="section section-navy">
    <div class="section-inner reveal text-center">
      <h2 class="text-3xl text-navy-foreground sm:text-4xl">Ready when you are</h2>
      <p class="mx-auto mt-4 max-w-xl text-white/70">Start with a free 20-minute conversation about where your speaking gets stuck.</p>
      <div class="mt-8 flex justify-center"><a href="{{ route('contact') }}" class="btn btn-primary">Book a Session</a></div>
    </div>
  </section>

@endsection
