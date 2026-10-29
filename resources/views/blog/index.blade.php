@extends('layouts.app')

@section('title', 'Blog & Articles — Pinnacle Speaking')

@section('content')

  <section class="section">
    <div class="section-inner">
      <div class="reveal mx-auto max-w-2xl text-center">
        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">Blog</p>
        <h1 class="mt-3 text-3xl sm:text-4xl">Notes on speaking well</h1>
        <p class="mt-4 text-gray-500">Short, practical writing on structure, nerves and stage presence.</p>
      </div>

      <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $i => $post)
          <a href="{{ route('blog.show', $post->slug) }}" class="reveal ui-card block h-full" style="transition-delay: {{ ($i % 3) * 90 }}ms">
            <p class="text-xs font-medium uppercase tracking-wide text-primary">{{ $post->published_at->format('M j, Y') }}</p>
            <h3 class="mt-3 text-xl">{{ $post->title }}</h3>
            <p class="mt-3 text-sm text-gray-500">{{ $post->excerpt }}</p>
            <span class="mt-4 inline-flex items-center text-sm font-semibold text-primary hover:text-navy">Read more →</span>
          </a>
        @endforeach
      </div>
    </div>
  </section>

@endsection
