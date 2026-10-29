<footer class="section-navy text-navy-foreground">
  <div class="mx-auto grid max-w-6xl gap-10 px-5 py-14 sm:grid-cols-2 lg:grid-cols-4">
    <div>
      <div class="flex items-center gap-2">
        <span class="flex size-9 items-center justify-center rounded-full btn-primary" style="padding:0;">
          <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="8" y1="23" x2="16" y2="23"/></svg>
        </span>
        <span class="text-lg font-bold text-navy-foreground">Pinnacle Speaking</span>
      </div>
      <p class="mt-4 text-sm text-white/70">Training students and professionals to speak with clarity, structure and confidence.</p>
    </div>

    <div>
      <h4 class="text-sm font-semibold uppercase tracking-wide text-navy-foreground">Quick Links</h4>
      <ul class="mt-4 space-y-2 text-sm">
        <li><a href="{{ route('about') }}" class="text-white/70 transition-colors duration-200 hover:text-primary">About</a></li>
        <li><a href="{{ route('courses.index') }}" class="text-white/70 transition-colors duration-200 hover:text-primary">Courses</a></li>
        <li><a href="{{ route('services') }}" class="text-white/70 transition-colors duration-200 hover:text-primary">Services</a></li>
        <li><a href="{{ route('gallery') }}" class="text-white/70 transition-colors duration-200 hover:text-primary">Gallery</a></li>
        <li><a href="{{ route('blog.index') }}" class="text-white/70 transition-colors duration-200 hover:text-primary">Blog</a></li>
        <li><a href="{{ route('contact') }}" class="text-white/70 transition-colors duration-200 hover:text-primary">Contact</a></li>
      </ul>
    </div>

    <div>
      <h4 class="text-sm font-semibold uppercase tracking-wide text-navy-foreground">Contact</h4>
      <ul class="mt-4 space-y-3 text-sm text-white/70">
        <li class="flex gap-2"><span>📍</span> Global City, Virar (West), Palghar</li>
        <li class="flex gap-2"><span>📞</span> <a href="tel:+919022321364" class="hover:text-primary transition-colors">+91-9022321364</a></li>
        <li class="flex gap-2"><span>✉️</span> <a href="mailto:pinnaclespeaking@gmail.com" class="hover:text-primary transition-colors">pinnaclespeaking@gmail.com</a></li>
        <li class="pt-1">
          <a href="https://wa.me/919022321364?text=Hi%20Pinnacle%20Speaking,%20I%20am%20interested%20in%20your%20English%20speaking%20courses." target="_blank"
             class="inline-flex items-center gap-1.5 text-xs font-semibold text-emerald-400 hover:text-emerald-300 transition-colors">
            <span>💬 Chat on WhatsApp &rarr;</span>
          </a>
        </li>
      </ul>
    </div>

    <div>
      <h4 class="text-sm font-semibold uppercase tracking-wide text-navy-foreground">Follow</h4>
      <div class="mt-4 flex gap-3">
        @foreach (['IG', 'LI', 'FB', 'YT'] as $s)
          <a href="#" aria-label="Social link" class="flex size-10 items-center justify-center rounded-full bg-white/5 text-xs font-semibold text-white/80 transition-all duration-300 hover:scale-105 hover:bg-primary hover:text-white">{{ $s }}</a>
        @endforeach
      </div>
    </div>
  </div>

  <div class="border-t border-white/10">
    <p class="mx-auto max-w-6xl px-5 py-6 text-center text-xs text-white/60">
      &copy; {{ date('Y') }} Pinnacle Speaking. All rights reserved.
    </p>
  </div>
</footer>
