@extends('layouts.app')

@section('title', 'Public Speaking Mastery & Speaking Skills — Pinnacle Classes')
@section('description', 'Enhance your public speaking skills with personalized coaching, online workshops, and expert guidance tailored to you.')

@section('content')

  <!-- Top Hero / Banner Section: Public Speaking Mastery -->
  <section class="section !pb-16 !pt-12 bg-[#b6e2e5]/35">
    <div class="section-inner reveal max-w-6xl mx-auto">
      
      <!-- Heading & Subtitle -->
      <div class="text-center max-w-2xl mx-auto mb-12">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#0e273c] tracking-tight">
          Public Speaking Mastery
        </h1>
        <p class="mt-3 text-sm sm:text-base text-gray-600">
          Enhance your public speaking skills with personalized coaching and expert guidance tailored to you.
        </p>
      </div>

      <!-- Main Showcase Card: Image + 3 Feature Highlights -->
      <div class="grid items-center gap-8 lg:grid-cols-12 bg-white/70 backdrop-blur-md rounded-3xl p-6 sm:p-10 border border-white/60 shadow-sm">
        
        <!-- Large Left Image -->
        <div class="lg:col-span-7">
          <div class="overflow-hidden rounded-2xl shadow-md">
            <img 
              src="{{ asset('images/services-speaking-hall.jpg') }}" 
              alt="Public Speaking Mastery Hall" 
              class="w-full h-[280px] sm:h-[360px] object-cover transition-transform duration-500 hover:scale-105"
            >
          </div>
        </div>

        <!-- Right Side 3 Feature Items -->
        <div class="lg:col-span-5 space-y-6">
          <div>
            <h3 class="text-base sm:text-lg font-bold text-[#0e273c]">
              Speech Preparation
            </h3>
            <p class="mt-1 text-xs sm:text-sm text-gray-600 leading-relaxed">
              Get assistance in crafting impactful speeches that resonate with your audience and leave a mark.
            </p>
          </div>

          <div>
            <h3 class="text-base sm:text-lg font-bold text-[#0e273c]">
              One-on-One Coaching
            </h3>
            <p class="mt-1 text-xs sm:text-sm text-gray-600 leading-relaxed">
              Receive tailored coaching sessions to boost your confidence and speaking abilities effectively.
            </p>
          </div>

          <div>
            <h3 class="text-base sm:text-lg font-bold text-[#0e273c]">
              Group Workshops
            </h3>
            <p class="mt-1 text-xs sm:text-sm text-gray-600 leading-relaxed">
              Join interactive workshops designed to improve your public speaking skills in a supportive environment.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- Middle Section: Speaking Skills (Workshops & Personal Coaching) -->
  <section class="section !py-16 bg-white">
    <div class="section-inner reveal max-w-6xl mx-auto">
      
      <!-- Section Heading -->
      <div class="text-center max-w-2xl mx-auto mb-14">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0e273c]">
          Speaking Skills
        </h2>
        <p class="mt-2 text-sm sm:text-base text-gray-600">
          Enhance your public speaking techniques and gain confidence effortlessly.
        </p>
      </div>

      <div class="space-y-12">
        
        <!-- Row 1: Online Workshops -->
        <div class="space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="overflow-hidden rounded-2xl shadow-sm bg-gray-50 aspect-[4/3]">
              <img 
                src="{{ asset('images/services-workshop-1.jpg') }}" 
                alt="Online Workshops Video Session" 
                class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
              >
            </div>
            <div class="overflow-hidden rounded-2xl shadow-sm bg-gray-50 aspect-[4/3]">
              <img 
                src="{{ asset('images/services-workshop-2.jpg') }}" 
                alt="Online Workshops Study Notes" 
                class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
              >
            </div>
          </div>

          <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between pt-2 gap-4">
            <div>
              <h3 class="text-lg sm:text-xl font-bold text-[#0e273c]">Online Workshops</h3>
              <p class="mt-0.5 text-xs sm:text-sm text-gray-500">
                Interactive sessions to boost your speaking abilities and confidence.
              </p>
            </div>
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full border-2 border-[#0e273c] px-7 py-2 text-xs sm:text-sm font-semibold text-[#0e273c] hover:bg-[#0e273c] hover:text-white transition-all self-start sm:self-auto min-w-[110px]">
              Enroll
            </a>
          </div>
        </div>

        <!-- Row 2: Personal Coaching -->
        <div class="space-y-4 pt-4">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="overflow-hidden rounded-2xl shadow-sm bg-gray-50 aspect-[4/3]">
              <img 
                src="{{ asset('images/services-coaching-1.jpg') }}" 
                alt="Personal Coaching Trainer" 
                class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
              >
            </div>
            <div class="overflow-hidden rounded-2xl shadow-sm bg-gray-50 aspect-[4/3]">
              <img 
                src="{{ asset('images/services-coaching-2.jpg') }}" 
                alt="Personal Coaching Auditorium Practice" 
                class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
              >
            </div>
          </div>

          <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between pt-2 gap-4">
            <div>
              <h3 class="text-lg sm:text-xl font-bold text-[#0e273c]">Personal Coaching</h3>
              <p class="mt-0.5 text-xs sm:text-sm text-gray-500">
                Tailored guidance to improve your public speaking performance remarkably.
              </p>
            </div>
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full border-2 border-[#0e273c] px-7 py-2 text-xs sm:text-sm font-semibold text-[#0e273c] hover:bg-[#0e273c] hover:text-white transition-all self-start sm:self-auto min-w-[110px]">
              Start
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- Bottom Review / Testimonial Banner -->
  <section class="section !py-16 bg-[#3d7293] text-white">
    <div class="section-inner reveal max-w-2xl mx-auto text-center px-4">
      
      <!-- Stars -->
      <div class="flex justify-center items-center gap-1 text-white text-lg tracking-widest mb-4">
        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
      </div>

      <!-- Testimonial Quote -->
      <blockquote class="text-sm sm:text-base md:text-lg font-medium leading-relaxed max-w-xl mx-auto text-white/95">
        "I gained confidence and clarity in my public speaking. The coaching was transformative, and I now feel ready to tackle any audience with ease!"
      </blockquote>

      <!-- Author -->
      <div class="mt-8 flex flex-col items-center">
        <div class="size-12 rounded-full overflow-hidden border-2 border-white/60 mb-2 shadow-sm bg-white/20">
          <img 
            src="{{ asset('images/founder.jpg') }}" 
            alt="Lakshita, Student" 
            class="w-full h-full object-cover"
          >
        </div>
        <p class="text-xs sm:text-sm font-semibold text-white">
          Lakshita, <span class="font-normal text-white/80">Student</span>
        </p>
      </div>

    </div>
  </section>

@endsection
