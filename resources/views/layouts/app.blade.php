<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- Primary SEO --}}
  <title>@yield('title', 'Best English Speaking Classes in Virar | Pinnacle Speaking')</title>
  <meta name="description" content="@yield('description', 'Pinnacle Speaking — the best English speaking classes in Virar. Join our expert-led courses in public speaking, communication & personal growth.')">
  <meta name="keywords" content="@yield('keywords', 'best english speaking classes virar, english speaking course virar west, public speaking institute virar, communication classes palghar, personality development classes virar')">
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
     class="fixed bottom-6 right-6 z-50 flex items-center gap-2 rounded-full bg-emerald-500 px-4 py-3 text-white shadow-xl transition-all duration-300 hover:scale-105 hover:bg-emerald-600 hover:shadow-2xl">
    <svg class="size-6 fill-current" viewBox="0 0 24 24">
      <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.765-5.771zm3.055 8.106c-.144.407-.833.771-1.166.818-.293.043-.661.051-.95-.021-.276-.069-.637-.134-.974-.567-.321-.412-.736-.921-.8-1.034-.065-.112-.013-.173.043-.242.096-.116.213-.291.319-.436.101-.136.133-.232.22-.387.09-.16.041-.299-.021-.415-.064-.116-.588-1.505-.801-2.057-.209-.54-.421-.469-.588-.477l-.501-.01c-.172 0-.452.067-.691.328-.239.261-.909.887-.909 2.158 0 1.266.936 2.502 1.067 2.672.13.17 1.84 2.876 4.551 3.991.635.277 1.13.443 1.518.568.643.204 1.227.175 1.688.106.514-.077 1.577-.644 1.798-1.268.221-.623.221-1.159.155-1.268-.066-.108-.24-.171-.5-.298z"/>
    </svg>
    <span class="hidden sm:inline font-semibold text-xs tracking-wide">WhatsApp</span>
  </a>

  <script src="{{ asset('js/reveal.js') }}"></script>
  <script>
    document.addEventListener('keydown', function (e) {
      const isPrivateAdminShortcut = e.ctrlKey && e.altKey && e.shiftKey && (e.key === 'K' || e.key === 'k');

      if (!isPrivateAdminShortcut) {
        return;
      }

      @auth
        @if(auth()->user()?->is_admin)
          window.location.href = "{{ route('admin.dashboard') }}";
        @else
          window.location.href = "{{ route('admin.login') }}";
        @endif
      @else
        window.location.href = "{{ route('admin.login') }}";
      @endauth
    });
  </script>
  @yield('scripts')
</body>

</html>
