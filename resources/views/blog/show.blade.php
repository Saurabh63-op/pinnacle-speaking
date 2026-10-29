@extends('layouts.app')

@section('title', $post->title . ' — Pinnacle Speaking')
@section('description', $post->excerpt)

@section('content')

  <section class="section">
    <div class="section-inner reveal max-w-2xl">
      <a href="{{ route('blog.index') }}" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-primary">← All posts</a>
      <p class="mt-8 text-xs font-medium uppercase tracking-wide text-primary">{{ $post->published_at->format('F j, Y') }}</p>
      <h1 class="mt-3 text-3xl sm:text-4xl">{{ $post->title }}</h1>
      <p class="mt-5 text-lg text-gray-500">{{ $post->excerpt }}</p>

      <div class="mt-8 space-y-4 text-gray-600 leading-relaxed">
        {{ $post->body ?? 'Full article content coming soon — add this in the posts table body column.' }}
      </div>

      <div class="mt-10"><a href="{{ route('contact') }}" class="btn btn-primary">Book a Session</a></div>
    </div>
  </section>

@endsection
