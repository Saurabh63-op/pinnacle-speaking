@php
  $coursesList = [
    ['title' => 'Career-Focused Communication', 'url' => route('courses.show', 'career-focused-communication')],
    ['title' => 'All-Rounder English', 'url' => route('courses.show', 'all-rounder-english')],
    ['title' => 'Young Author Program', 'url' => route('courses.show', 'young-author-program')],
    ['title' => "Writer's Choice", 'url' => route('courses.show', 'writers-choice')],
    ['title' => 'Young Orator', 'url' => route('courses.show', 'young-orator')],
    ['title' => 'Custom Communication Coaching', 'url' => route('courses.show', 'custom-communication-coaching')],
  ];
@endphp

<header class="sticky top-0 z-50 border-b border-gray-100 bg-white/95 backdrop-blur">
  <div class="mx-auto flex h-16 max-w-6xl items-center justify-between px-5">
    <a href="{{ route('home') }}" class="flex items-center gap-2">
      <span class="flex size-9 items-center justify-center rounded-full btn-primary" style="padding:0;">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
          stroke-width="2">
          <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z" />
          <path d="M19 10v2a7 7 0 0 1-14 0v-2" />
          <line x1="12" y1="19" x2="12" y2="23" />
          <line x1="8" y1="23" x2="16" y2="23" />
        </svg>
      </span>
      <span class="text-lg font-bold text-navy">Pinnacle Speaking</span>
    </a>

    <!-- Desktop Navigation -->
    <nav class="hidden items-center gap-1 md:flex">
      <a href="{{ route('home') }}"
        class="rounded-full px-3 py-2 text-sm font-medium transition-colors duration-200 hover:text-primary {{ request()->routeIs('home') ? 'text-primary' : 'text-gray-500' }}">
        Home
      </a>

      <a href="{{ route('about') }}"
        class="rounded-full px-3 py-2 text-sm font-medium transition-colors duration-200 hover:text-primary {{ request()->routeIs('about') ? 'text-primary' : 'text-gray-500' }}">
        About
      </a>

      <!-- Courses Dropdown -->
      <div class="relative group">
        <a href="{{ route('courses.index') }}"
          class="flex items-center gap-1.5 rounded-full px-3 py-2 text-sm font-medium transition-colors duration-200 hover:text-primary {{ request()->routeIs('courses.*') ? 'text-primary font-semibold' : 'text-gray-500' }}">
          <span>Courses</span>
          <svg class="size-3.5 transition-transform duration-200 group-hover:rotate-180" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </a>

        <!-- Dropdown Menu Box -->
        <div class="invisible absolute left-0 top-full pt-2 opacity-0 transition-all duration-200 group-hover:visible group-hover:opacity-100 min-w-[270px] z-50">
          <div class="overflow-hidden rounded-2xl bg-white p-2 shadow-xl border border-gray-100">
            <div class="border-b border-gray-100 pb-1 mb-1">
              <a href="{{ route('courses.index') }}" class="block px-3.5 py-2 text-xs font-bold uppercase tracking-wider text-primary hover:bg-mint rounded-lg transition-colors">
                View All Courses &rarr;
              </a>
            </div>
            @foreach ($coursesList as $c)
              <a href="{{ $c['url'] }}"
                class="block rounded-xl px-3.5 py-2.5 text-sm font-medium text-gray-700 hover:bg-mint hover:text-primary transition-colors duration-150">
                {{ $c['title'] }}
              </a>
            @endforeach
          </div>
        </div>
      </div>

      <a href="{{ route('services') }}"
        class="rounded-full px-3 py-2 text-sm font-medium transition-colors duration-200 hover:text-primary {{ request()->routeIs('services') ? 'text-primary' : 'text-gray-500' }}">
        Services
      </a>

      <a href="{{ route('gallery') }}"
        class="rounded-full px-3 py-2 text-sm font-medium transition-colors duration-200 hover:text-primary {{ request()->routeIs('gallery') ? 'text-primary' : 'text-gray-500' }}">
        Gallery
      </a>

      <a href="{{ route('blog.index') }}"
        class="rounded-full px-3 py-2 text-sm font-medium transition-colors duration-200 hover:text-primary {{ request()->routeIs('blog.*') ? 'text-primary' : 'text-gray-500' }}">
        Blog
      </a>

      <a href="{{ route('contact') }}"
        class="rounded-full px-3 py-2 text-sm font-medium transition-colors duration-200 hover:text-primary {{ request()->routeIs('contact') ? 'text-primary' : 'text-gray-500' }}">
        Contact
      </a>

      <a href="{{ route('contact') }}" class="btn btn-primary ml-1 !px-5 !py-2.5">Book a Session</a>
    </nav>

    <!-- Mobile menu hamburger -->
    <button id="menu-toggle" aria-label="Toggle menu" class="rounded-full p-2 text-navy hover:bg-mint md:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="2">
        <line x1="3" y1="12" x2="21" y2="12" />
        <line x1="3" y1="6" x2="21" y2="6" />
        <line x1="3" y1="18" x2="21" y2="18" />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <nav id="mobile-menu" class="hidden border-t border-gray-100 bg-white px-5 pb-5 pt-2 md:hidden">
    <a href="{{ route('home') }}"
      class="block rounded-xl px-3 py-2.5 text-sm font-medium transition-colors duration-200 hover:text-primary {{ request()->routeIs('home') ? 'text-primary' : 'text-gray-500' }}">
      Home
    </a>

    <a href="{{ route('about') }}"
      class="block rounded-xl px-3 py-2.5 text-sm font-medium transition-colors duration-200 hover:text-primary {{ request()->routeIs('about') ? 'text-primary' : 'text-gray-500' }}">
      About
    </a>

    <!-- Mobile Courses with Collapsible Submenu -->
    <div class="py-1">
      <div class="flex items-center justify-between rounded-xl px-3 py-2.5 text-sm font-medium {{ request()->routeIs('courses.*') ? 'text-primary font-semibold' : 'text-gray-500' }}">
        <a href="{{ route('courses.index') }}" class="hover:text-primary">Courses</a>
        <button type="button" id="mobile-courses-toggle" class="p-1 text-gray-400 hover:text-primary" aria-label="Toggle courses submenu">
          <svg id="mobile-courses-arrow" class="size-4 transition-transform duration-200" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>
      <div id="mobile-courses-list" class="hidden pl-4 pr-1 space-y-1">
        @foreach ($coursesList as $c)
          <a href="{{ $c['url'] }}"
            class="block rounded-lg px-3 py-2 text-xs font-medium text-gray-600 hover:bg-mint hover:text-primary">
            {{ $c['title'] }}
          </a>
        @endforeach
      </div>
    </div>

    <a href="{{ route('services') }}"
      class="block rounded-xl px-3 py-2.5 text-sm font-medium transition-colors duration-200 hover:text-primary {{ request()->routeIs('services') ? 'text-primary' : 'text-gray-500' }}">
      Services
    </a>

    <a href="{{ route('gallery') }}"
      class="block rounded-xl px-3 py-2.5 text-sm font-medium transition-colors duration-200 hover:text-primary {{ request()->routeIs('gallery') ? 'text-primary' : 'text-gray-500' }}">
      Gallery
    </a>

    <a href="{{ route('blog.index') }}"
      class="block rounded-xl px-3 py-2.5 text-sm font-medium transition-colors duration-200 hover:text-primary {{ request()->routeIs('blog.*') ? 'text-primary' : 'text-gray-500' }}">
      Blog
    </a>

    <a href="{{ route('contact') }}"
      class="block rounded-xl px-3 py-2.5 text-sm font-medium transition-colors duration-200 hover:text-primary {{ request()->routeIs('contact') ? 'text-primary' : 'text-gray-500' }}">
      Contact
    </a>

    <a href="{{ route('contact') }}" class="btn btn-primary mt-3 block text-center">Book a Session</a>
  </nav>
</header>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileCoursesToggle = document.getElementById('mobile-courses-toggle');
    const mobileCoursesList = document.getElementById('mobile-courses-list');
    const mobileCoursesArrow = document.getElementById('mobile-courses-arrow');

    if (menuToggle && mobileMenu) {
      menuToggle.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
      });
    }

    if (mobileCoursesToggle && mobileCoursesList) {
      mobileCoursesToggle.addEventListener('click', function (e) {
        e.preventDefault();
        mobileCoursesList.classList.toggle('hidden');
        if (mobileCoursesArrow) {
          mobileCoursesArrow.classList.toggle('rotate-180');
        }
      });
    }
  });
</script>