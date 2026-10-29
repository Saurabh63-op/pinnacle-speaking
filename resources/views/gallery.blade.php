@extends('layouts.app')

@section('title', 'Gallery — Pinnacle Speaking')

@section('content')

  <section class="section">
    <div class="section-inner">
      <div class="reveal mx-auto max-w-2xl text-center">
        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">Gallery</p>
        <h1 class="mt-3 text-3xl sm:text-4xl">Moments from the room</h1>
        <p class="mt-4 text-gray-500">Workshops, cohorts and a few stage moments from the last few sessions.</p>
      </div>

      <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach (['gallery-1.jpg', 'gallery-2.jpg', 'gallery-3.jpg', 'group-workshop.jpg', 'personal-coaching.jpg', 'hero-speaker.jpg'] as $i => $img)
          <div class="reveal overflow-hidden rounded-2xl shadow-card transition-all duration-300 hover:-translate-y-1 hover:shadow-lift" style="transition-delay: {{ $i * 60 }}ms">
            <img src="{{ asset('images/' . $img) }}" alt="Coaching session photo" class="h-64 w-full object-cover transition-transform duration-500 hover:scale-105">
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="section section-navy">
    <div class="section-inner reveal text-center">
      <h2 class="text-3xl text-navy-foreground sm:text-4xl">Want to be in the next batch?</h2>
      <div class="mt-8 flex justify-center"><a href="{{ route('contact') }}" class="btn btn-primary">Book a Session</a></div>
    </div>
  </section>

@endsection
