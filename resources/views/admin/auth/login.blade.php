<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login | Pinnacle Speaking</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; }
  </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex items-center justify-center p-4 relative overflow-hidden">

  <!-- Subtle glow backgrounds -->
  <div class="absolute -top-40 -left-40 w-96 h-96 bg-emerald-600/20 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-cyan-600/20 rounded-full blur-3xl pointer-events-none"></div>

  <div class="w-full max-w-md relative z-10">
    <!-- Brand badge -->
    <div class="text-center mb-8">
      <div class="inline-flex size-14 rounded-2xl bg-gradient-to-tr from-emerald-500 to-teal-400 items-center justify-center shadow-xl shadow-emerald-500/25 mb-4 text-white">
        <svg class="size-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
        </svg>
      </div>
      <h1 class="text-2xl font-bold text-white tracking-tight">Pinnacle Speaking</h1>
      <p class="text-sm text-slate-400 mt-1">Authorized Administrator Portal</p>
    </div>

    <!-- Login Card -->
    <div class="bg-slate-900/90 border border-slate-800 backdrop-blur-xl rounded-3xl p-8 shadow-2xl">
      @if(session('error'))
        <div class="mb-5 p-3.5 rounded-xl bg-red-950/60 border border-red-800 text-xs font-medium text-red-300 flex items-center gap-2.5">
          <svg class="size-4 shrink-0 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <span>{{ session('error') }}</span>
        </div>
      @endif

      @if(session('success'))
        <div class="mb-5 p-3.5 rounded-xl bg-emerald-950/60 border border-emerald-800 text-xs font-medium text-emerald-300 flex items-center gap-2.5">
          <svg class="size-4 shrink-0 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <span>{{ session('success') }}</span>
        </div>
      @endif

      <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
        @csrf

        <!-- Email Field -->
        <div>
          <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Admin Email</label>
          <div class="relative">
            <input type="email" id="email" name="email" value="{{ old('email', 'admin@pinnacle.in') }}" required autofocus
                   class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors">
          </div>
          @error('email')
            <p class="text-xs text-red-400 mt-1.5">{{ $message }}</p>
          @enderror
        </div>

        <!-- Password Field -->
        <div>
          <label for="password" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Password</label>
          <div class="relative">
            <input type="password" id="password" name="password" required placeholder="••••••••"
                   class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors">
            <button type="button" id="toggle-pw" class="absolute right-3.5 top-3.5 text-slate-400 hover:text-white text-xs font-medium">
              Show
            </button>
          </div>
          @error('password')
            <p class="text-xs text-red-400 mt-1.5">{{ $message }}</p>
          @enderror
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between text-xs">
          <label class="flex items-center gap-2 cursor-pointer text-slate-400 hover:text-slate-300">
            <input type="checkbox" name="remember" class="size-4 rounded border-slate-700 bg-slate-950 text-emerald-500 focus:ring-0">
            <span>Keep me logged in</span>
          </label>
          <span class="text-slate-500">pinnaclespeaking.com</span>
        </div>

        <!-- Submit Button -->
        <button type="submit"
                class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-emerald-500 to-teal-500 hover:from-emerald-400 hover:to-teal-400 text-slate-950 font-bold text-sm shadow-lg shadow-emerald-500/20 transition-all active:scale-[0.99]">
          Sign In to Dashboard
        </button>
      </form>

      <!-- Default Credentials Helper Note -->
      <div class="mt-6 pt-5 border-t border-slate-800/80 text-center">
        <p class="text-xs text-slate-500">
          Default: <span class="text-slate-300 font-mono">admin@pinnacle.in</span> | <span class="text-slate-300 font-mono">admin123</span>
        </p>
      </div>
    </div>

    <!-- Back to Website -->
    <div class="text-center mt-6">
      <a href="{{ route('home') }}" class="text-xs text-slate-400 hover:text-white transition-colors inline-flex items-center gap-1.5">
        &larr; <span>Back to Pinnacle Public Website</span>
      </a>
    </div>
  </div>

  <script>
    const togglePw = document.getElementById('toggle-pw');
    const pwInput = document.getElementById('password');
    if (togglePw && pwInput) {
      togglePw.addEventListener('click', () => {
        const isPassword = pwInput.type === 'password';
        pwInput.type = isPassword ? 'text' : 'password';
        togglePw.textContent = isPassword ? 'Hide' : 'Show';
      });
    }
  </script>
</body>
</html>
