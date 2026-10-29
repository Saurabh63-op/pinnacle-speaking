<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin Dashboard') | Pinnacle Speaking</title>
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}?v=1">
  <link rel="shortcut icon" href="{{ asset('favicon.svg') }}?v=1">
  <link rel="icon" href="data:,">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
          },
          colors: {
            brand: {
              50: '#f0fdf4',
              100: '#dcfce7',
              500: '#22c55e',
              600: '#16a34a',
              700: '#15803d',
            },
            dark: {
              900: '#0f172a',
              800: '#1e293b',
              700: '#334155',
            }
          }
        }
      }
    }
  </script>
  <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; }
  </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex flex-col">

  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col justify-between hidden md:flex shrink-0 shadow-xl">
      <div>
        <!-- Brand Header -->
        <div class="h-16 flex items-center gap-3 px-6 border-b border-slate-800 bg-slate-950">
          <div class="size-9 rounded-xl bg-emerald-500 flex items-center justify-center text-white font-bold shadow-lg shadow-emerald-500/20">
            <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
          </div>
          <div>
            <span class="text-base font-bold text-white tracking-wide">Pinnacle Speaking</span>
            <span class="block text-[10px] uppercase font-semibold text-emerald-400 tracking-wider">Admin Panel</span>
          </div>
        </div>

        <!-- Navigation Links -->
        <nav class="p-4 space-y-1.5 text-sm">
          <a href="{{ route('admin.dashboard') }}"
             class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-medium transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-emerald-600 text-white shadow-md shadow-emerald-600/30' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">
            <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
            </svg>
            <span>Dashboard</span>
          </a>

          <a href="{{ route('admin.leads.index') }}"
             class="flex items-center justify-between px-3.5 py-2.5 rounded-xl font-medium transition-all {{ request()->routeIs('admin.leads.*') ? 'bg-emerald-600 text-white shadow-md shadow-emerald-600/30' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">
            <div class="flex items-center gap-3">
              <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
              <span>Student Leads</span>
            </div>
            @php $newLeadsCount = \App\Models\ContactSubmission::whereDate('created_at', \Carbon\Carbon::today())->count(); @endphp
            @if($newLeadsCount > 0)
              <span class="px-2 py-0.5 text-xs font-bold bg-amber-500 text-slate-950 rounded-full animate-pulse">{{ $newLeadsCount }} new</span>
            @endif
          </a>

          <div class="pt-4 pb-1 px-3">
            <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Quick Links</span>
          </div>

          <a href="{{ route('home') }}"
             class="flex items-center justify-between px-3.5 py-2 rounded-xl text-slate-400 hover:text-emerald-300 hover:bg-slate-800 transition-colors">
            <div class="flex items-center gap-3 text-xs">
              <span class="text-base">🌐</span>
              <span>Visit Live Website</span>
            </div>
            <svg class="size-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </a>
        </nav>
      </div>

      <!-- User Profile & Logout -->
      <div class="p-4 border-t border-slate-800 bg-slate-950/60">
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-2.5">
            <div class="size-9 rounded-full bg-slate-800 border border-slate-700 flex items-center justify-center font-bold text-white text-xs">
              {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
            </div>
            <div class="overflow-hidden">
              <p class="text-xs font-semibold text-white truncate">{{ auth()->user()->name ?? 'Administrator' }}</p>
              <p class="text-[10px] text-slate-400 truncate">{{ auth()->user()->email ?? 'admin@pinnacle.in' }}</p>
            </div>
          </div>
          <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" title="Log out"
                    class="p-2 rounded-lg text-slate-400 hover:text-red-400 hover:bg-slate-800 transition-colors">
              <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
              </svg>
            </button>
          </form>
        </div>
      </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col min-w-0">
      <!-- Top Bar -->
      <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 sticky top-0 z-30 shadow-sm">
        <div class="flex items-center gap-4">
          <h1 class="text-lg font-bold text-slate-900">@yield('header_title', 'Dashboard')</h1>
        </div>

        <div class="flex items-center gap-3">
          <a href="{{ route('home') }}" target="_blank"
             class="inline-flex items-center gap-1.5 text-xs font-medium text-slate-600 bg-slate-100 hover:bg-slate-200 px-3 py-1.5 rounded-lg transition-colors">
            <span>Website</span>
            <svg class="size-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
          </a>

          <form action="{{ route('admin.logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit"
                    class="inline-flex items-center gap-1.5 text-xs font-semibold text-red-600 hover:text-red-700 bg-red-50 hover:bg-red-100 px-3 py-1.5 rounded-lg transition-colors">
              <svg class="size-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
              </svg>
              <span>Logout</span>
            </button>
          </form>
        </div>
      </header>

      <!-- Alert Flash Messages -->
      <div class="px-6 pt-5">
        @if(session('success'))
          <div class="mb-4 flex items-center gap-3 p-4 text-sm text-emerald-800 rounded-xl bg-emerald-50 border border-emerald-200">
            <svg class="size-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="font-medium">{{ session('success') }}</span>
          </div>
        @endif

        @if(session('error'))
          <div class="mb-4 flex items-center gap-3 p-4 text-sm text-red-800 rounded-xl bg-red-50 border border-red-200">
            <svg class="size-5 text-red-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="font-medium">{{ session('error') }}</span>
          </div>
        @endif
      </div>

      <!-- Page Content -->
      <main class="flex-1 p-6">
        @yield('content')
      </main>
    </div>
  </div>

  @yield('scripts')
</body>
</html>
