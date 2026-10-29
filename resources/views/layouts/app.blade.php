<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- Primary SEO --}}
  <title>@yield('title', 'Best English Speaking Classes in Virar | Pinnacle Speaking')</title>
  <meta name="description" content="@yield('description', 'Pinnacle Speaking — the best English speaking classes in Virar. Join our expert-led courses in public speaking, communication & personality development at Global City, Virar (West).')">
  <meta name="keywords" content="@yield('keywords', 'best english speaking classes virar, english speaking course virar west, public speaking institute virar, communication classes palghar, personality development virar, spoken english virar, pinnacle speaking, english classes near me virar')">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Pinnacle Speaking">
  <link rel="canonical" href="{{ url()->current() }}">

  {{-- Favicon (replaces old cached Voxa icon with Pinnacle Speaking brand icon) --}}
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}?v=1">
  <link rel="shortcut icon" href="{{ asset('favicon.svg') }}?v=1">

  {{-- Open Graph / Facebook --}}
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="@yield('og_title', 'Best English Speaking Classes in Virar | Pinnacle Speaking')">
  <meta property="og:description" content="@yield('og_description', 'Top-rated English speaking & public speaking courses in Virar (West), Palghar. Expert coaches, small batches, real results.')">
  <meta property="og:image" content="{{ asset('images/hero-speaker.jpg') }}">
  <meta property="og:site_name" content="Pinnacle Speaking">
  <meta property="og:locale" content="en_IN">

  {{-- Twitter Card --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="@yield('og_title', 'Best English Speaking Classes in Virar | Pinnacle Speaking')">
  <meta name="twitter:description" content="@yield('og_description', 'Top-rated English speaking & public speaking courses in Virar (West), Palghar.')">
  <meta name="twitter:image" content="{{ asset('images/hero-speaker.jpg') }}">

  {{-- Geo Tags (Local SEO) --}}
  <meta name="geo.region" content="IN-MH">
  <meta name="geo.placename" content="Virar West, Palghar, Maharashtra">
  <meta name="geo.position" content="19.4617;72.7990">
  <meta name="ICBM" content="19.4617, 72.7990">

  {{-- JSON-LD: Local Business Schema --}}
  <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "Pinnacle Speaking",
      "alternateName": ["Pinnacle Classes", "Pinnacle English Speaking Classes Virar"],
      "description": "Best English speaking and public speaking classes in Virar West, Palghar. We offer career-focused communication, spoken English, personality development and more.",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('images/hero-speaker.jpg') }}",
      "image": "{{ asset('images/group-workshop.jpg') }}",
      "telephone": "+91-9022321364",
      "email": "pinnaclespeaking@gmail.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Global City",
        "addressLocality": "Virar West",
        "addressRegion": "Palghar",
        "postalCode": "401303",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 19.4617,
        "longitude": 72.7990
      },
      "openingHoursSpecification": [{
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        "opens": "08:00",
        "closes": "20:00"
      }],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "English Speaking & Communication Courses",
        "itemListElement": [{
            "@type": "Offer",
            "itemOffered": {
              "@type": "Course",
              "name": "Career-Focused Communication"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Course",
              "name": "All-Rounder English"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Course",
              "name": "Young Orator"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Course",
              "name": "Young Author Program"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Course",
              "name": "Writer's Choice"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Course",
              "name": "Custom Communication Coaching"
            }
          }
        ]
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "128",
        "bestRating": "5"
      },
      "areaServed": [{
          "@type": "City",
          "name": "Virar"
        },
        {
          "@type": "City",
          "name": "Vasai"
        },
        {
          "@type": "City",
          "name": "Nalasopara"
        },
        {
          "@type": "City",
          "name": "Palghar"
        }
      ],
      "sameAs": []
    }
  </script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="flex min-h-screen flex-col bg-white">

  @auth
    @if(auth()->user()->is_admin)
      <!-- Admin Quick Bar (visible only when logged in as admin) -->
      <div class="sticky top-0 z-[60] bg-slate-900 border-b border-slate-800 text-slate-200 text-xs px-5 py-2 flex items-center justify-between shadow-md">
        <div class="flex items-center gap-2">
          <span class="size-2 rounded-full bg-emerald-400 animate-pulse"></span>
          <span class="font-medium text-slate-300">Admin Mode Active ({{ auth()->user()->name }})</span>
        </div>
        <div class="flex items-center gap-4">
          <a href="{{ route('admin.dashboard') }}" class="font-bold text-emerald-400 hover:text-emerald-300 transition-colors flex items-center gap-1.5">
            <span>⚡ Open Admin Dashboard &rarr;</span>
          </a>
          <span class="text-slate-700">|</span>
          <form method="POST" action="{{ route('admin.logout') }}" class="inline">
            @csrf
            <button type="submit" class="text-slate-400 hover:text-red-400 transition-colors font-medium">Log out</button>
          </form>
        </div>
      </div>
    @endif
  @endauth

  @include('partials.header')

  <main class="flex-1">
    @yield('content')
  </main>

  @include('partials.footer')

  <!-- Floating WhatsApp CTA Button -->
  <a href="https://wa.me/919022321364?text=Hi%20Pinnacle%20Speaking,%20I%20am%20interested%20in%20your%20English%20speaking%20courses."
     target="_blank"
     rel="noopener noreferrer"
     aria-label="Chat on WhatsApp"
     class="fixed bottom-6 right-6 z-50 flex items-center gap-2 rounded-full bg-emerald-500 px-4 py-3 text-white shadow-xl transition-all duration-300 hover:scale-105 hover:bg-emerald-600 hover:shadow-2xl hover:shadow-emerald-500/40 group">
    <svg class="size-6 fill-current" viewBox="0 0 24 24">
      <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.697.072-2.146-.53-1.633-.679-2.69-2.339-2.772-2.451-.082-.112-.663-.884-.663-1.687 0-.802.418-1.196.567-1.36.149-.164.325-.205.433-.205.109 0 .217.001.312.006.101.005.237-.038.37.283.138.334.474 1.157.515 1.242.042.085.069.185.013.296-.056.111-.084.18-.168.278-.083.099-.175.221-.25.297-.083.084-.17.175-.073.342.097.166.432.714.928 1.154.638.567 1.176.743 1.343.827.166.083.264.07.363-.043.099-.113.424-.494.537-.663.113-.169.227-.141.381-.084.155.056.983.463 1.152.548.169.084.282.127.324.197.042.07.042.409-.102.814zM12 2C6.477 2 2 6.477 2 12c0 1.891.528 3.659 1.442 5.17L2 22l4.981-1.408A9.957 9.957 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/>
    </svg>
    <span class="hidden sm:inline font-semibold text-xs tracking-wide">WhatsApp</span>
  </a>

  <script src="{{ asset('js/reveal.js') }}"></script>
  <script>
    // Secret shortcut for Admin: Press Ctrl + Shift + A (or Alt + A) anywhere on the site
    document.addEventListener('keydown', function (e) {
      if ((e.ctrlKey && e.shiftKey && (e.key === 'A' || e.key === 'a')) || (e.altKey && (e.key === 'A' || e.key === 'a'))) {
        window.location.href = "{{ route('admin.login') }}";
      }
    });
  </script>
  @yield('scripts')
</body>

</html>