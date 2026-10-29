@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')
@section('header_title', 'Overview & Insights')

@section('content')
<div class="space-y-8 max-w-7xl mx-auto">

  <!-- Welcome Banner -->
  <div class="rounded-3xl bg-gradient-to-r from-slate-900 via-slate-850 to-slate-900 text-white p-8 border border-slate-800 shadow-xl relative overflow-hidden">
    <div class="absolute -right-10 -bottom-10 size-64 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
      <div>
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 mb-3">
          <span class="size-2 rounded-full bg-emerald-400 animate-ping"></span>
          Control Center Active
        </span>
        <h2 class="text-2xl md:text-3xl font-bold tracking-tight">Welcome back, {{ auth()->user()->name }}! 👋</h2>
        <p class="text-slate-400 text-sm mt-1 max-w-xl">
          Here is what's happening on Pinnacle Speaking today. Monitor student leads, manage course inquiries, and track website activity.
        </p>
      </div>

      <div class="flex items-center gap-3">
        <a href="{{ route('admin.leads.index') }}"
           class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-sm transition-all shadow-lg shadow-emerald-600/30">
          <span>View Inquiries &rarr;</span>
        </a>
        <a href="{{ route('home') }}" target="_blank"
           class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 font-semibold text-sm border border-slate-700 transition-all">
          <span>Open Website ↗</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Key Metrics Row (3 cards) -->
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
    <!-- Stat 1: Total Leads -->
    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
      <div class="flex items-center justify-between mb-4">
        <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Student Inquiries</span>
        <div class="size-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
          <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        </div>
      </div>
      <div class="flex items-baseline gap-2">
        <span class="text-3xl font-extrabold text-slate-900">{{ $stats['total_leads'] }}</span>
        @if($stats['today_leads'] > 0)
          <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">+{{ $stats['today_leads'] }} today</span>
        @else
          <span class="text-xs text-slate-400">Total received</span>
        @endif
      </div>
      <a href="{{ route('admin.leads.index') }}" class="text-xs text-blue-600 font-medium hover:underline mt-4 block">Manage student leads &rarr;</a>
    </div>

    <!-- Stat 2: Active Courses -->
    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
      <div class="flex items-center justify-between mb-4">
        <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Live Courses</span>
        <div class="size-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center">
          <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
        </div>
      </div>
      <div class="flex items-baseline gap-2">
        <span class="text-3xl font-extrabold text-slate-900">{{ $stats['total_courses'] }}</span>
        <span class="text-xs text-slate-400">Published programs</span>
      </div>
      <a href="{{ route('courses.index') }}" target="_blank" class="text-xs text-purple-600 font-medium hover:underline mt-4 block">View live catalog ↗</a>
    </div>

    <!-- Stat 3: Blog Articles -->
    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
      <div class="flex items-center justify-between mb-4">
        <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Blog Posts</span>
        <div class="size-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
          <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
        </div>
      </div>
      <div class="flex items-baseline gap-2">
        <span class="text-3xl font-extrabold text-slate-900">{{ $stats['total_posts'] }}</span>
        <span class="text-xs text-slate-400">Published stories</span>
      </div>
      <a href="{{ route('blog.index') }}" target="_blank" class="text-xs text-emerald-600 font-medium hover:underline mt-4 block">Read articles ↗</a>
    </div>
  </div>

  <!-- Recent Inquiries Section -->
  <div class="bg-white rounded-3xl border border-slate-200 p-6 shadow-sm">
    <div class="flex items-center justify-between mb-6">
      <div>
        <h3 class="text-base font-bold text-slate-900">Recent Student Inquiries</h3>
        <p class="text-xs text-slate-500">Latest messages submitted via the website contact form</p>
      </div>
      <a href="{{ route('admin.leads.index') }}" class="text-xs font-semibold text-emerald-600 hover:text-emerald-700 bg-emerald-50 px-3 py-1.5 rounded-lg transition-colors">
        View All Leads &rarr;
      </a>
    </div>

    @if($recentLeads->isEmpty())
      <div class="text-center py-12 text-slate-400">
        <svg class="size-12 mx-auto mb-3 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>
        <p class="text-sm font-medium">No contact inquiries yet.</p>
        <p class="text-xs text-slate-400 mt-1">When students submit the form on the website, they will appear here.</p>
      </div>
    @else
      <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
          <thead>
            <tr class="border-b border-slate-100 text-slate-400 uppercase font-semibold">
              <th class="pb-3 font-semibold">Student Name</th>
              <th class="pb-3 font-semibold">Contact Info</th>
              <th class="pb-3 font-semibold">Message Preview</th>
              <th class="pb-3 font-semibold">Date</th>
              <th class="pb-3 font-semibold text-right">Quick Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-100">
            @foreach($recentLeads as $lead)
              <tr class="hover:bg-slate-50/60 transition-colors">
                <td class="py-3.5 pr-4 font-bold text-slate-900">
                  {{ $lead->name }}
                </td>
                <td class="py-3.5 pr-4 space-y-0.5">
                  @if($lead->phone)
                    <div class="flex items-center gap-1 font-semibold text-slate-800">
                      <a href="tel:{{ $lead->phone }}" class="hover:text-emerald-600">📞 {{ $lead->phone }}</a>
                    </div>
                  @endif
                  <a href="mailto:{{ $lead->email }}" class="text-slate-500 hover:text-emerald-600 transition-colors block text-[11px]">{{ $lead->email }}</a>
                </td>
                <td class="py-3.5 pr-4 max-w-sm truncate text-slate-600">
                  {{ $lead->message }}
                </td>
                <td class="py-3.5 pr-4 text-slate-400 whitespace-nowrap">
                  {{ $lead->created_at->diffForHumans() }}
                </td>
                <td class="py-3.5 text-right whitespace-nowrap space-x-1">
                  @if($lead->phone)
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $lead->phone) }}" target="_blank"
                       class="text-[11px] font-bold text-emerald-700 bg-emerald-50 hover:bg-emerald-100 px-2.5 py-1 rounded-md transition-colors">
                      WhatsApp
                    </a>
                  @endif
                  <a href="mailto:{{ $lead->email }}?subject=Regarding your inquiry at Pinnacle Speaking"
                     class="text-[11px] font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 px-2.5 py-1 rounded-md transition-colors">
                    Email
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @endif
  </div>

</div>
@endsection
