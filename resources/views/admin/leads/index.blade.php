@extends('admin.layouts.app')

@section('title', 'Student Leads & Inquiries')
@section('header_title', 'Student Inquiries')

@section('content')
  <div class="max-w-7xl mx-auto space-y-6">

    <!-- Header Controls -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
      <div>
        <h2 class="text-xl font-bold text-slate-900">Student Leads & Form Submissions</h2>
        <p class="text-xs text-slate-500">Review, contact, or manage inquiries received through the website contact form.
        </p>
      </div>

      <!-- Search Box -->
      <form method="GET" action="{{ route('admin.leads.index') }}" class="flex items-center gap-2">
        <div class="relative">
          <input type="text" name="search" value="{{ request('search') }}" placeholder="Search name, email, message..."
            class="bg-white border border-slate-200 rounded-xl px-4 py-2 pl-9 text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-emerald-500 w-64 shadow-sm">
          <svg class="size-4 text-slate-400 absolute left-3 top-2.5" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>
        @if(request('search'))
          <a href="{{ route('admin.leads.index') }}"
            class="text-xs text-slate-500 hover:text-slate-800 font-medium">Clear</a>
        @endif
      </form>
    </div>

    <!-- Table Container -->
    <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
      @if($leads->isEmpty())
        <div class="text-center py-16 text-slate-400">
          <div class="size-16 rounded-2xl bg-slate-100 flex items-center justify-center mx-auto mb-3 text-slate-400">
            <svg class="size-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
            </svg>
          </div>
          <p class="text-sm font-semibold text-slate-700">No leads found</p>
          <p class="text-xs text-slate-400 mt-1">
            {{ request('search') ? 'No leads matched your search query.' : 'Students who submit inquiries on the contact page will appear here.' }}
          </p>
        </div>
      @else
        <div class="overflow-x-auto">
          <table class="w-full text-left text-xs">
            <thead class="bg-slate-50 border-b border-slate-100 text-slate-400 uppercase font-semibold">
              <tr>
                <th class="py-3.5 px-6">Student Name</th>
                <th class="py-3.5 px-6">Contact Details</th>
                <th class="py-3.5 px-6">Inquiry / Message</th>
                <th class="py-3.5 px-6">Submitted At</th>
                <th class="py-3.5 px-6 text-right">Actions</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              @foreach($leads as $lead)
                <tr class="hover:bg-slate-50/70 transition-colors">
                  <td class="py-4 px-6 font-bold text-slate-900 whitespace-nowrap">
                    {{ $lead->name }}
                  </td>
                  <td class="py-4 px-6 whitespace-nowrap space-y-1">
                    @if($lead->phone)
                      <div class="flex items-center gap-1.5 font-semibold text-slate-800">
                        <span>📞</span>
                        <a href="tel:{{ $lead->phone }}" class="hover:text-emerald-600 transition-colors">{{ $lead->phone }}</a>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $lead->phone) }}?text=Hello%20{{ urlencode($lead->name) }},%20thank%20you%20for%20contacting%20Pinnacle%20Speaking!"
                          target="_blank"
                          class="ml-1 text-[10px] font-bold bg-emerald-100 text-emerald-800 px-1.5 py-0.5 rounded hover:bg-emerald-200">
                          WhatsApp
                        </a>
                      </div>
                    @endif
                    <div>
                      <a href="mailto:{{ $lead->email }}" class="text-slate-500 hover:text-emerald-600 font-medium">
                        {{ $lead->email }}
                      </a>
                    </div>
                  </td>
                  <td class="py-4 px-6 text-slate-700 max-w-md">
                    <p class="line-clamp-3 leading-relaxed">{{ $lead->message }}</p>
                  </td>
                  <td class="py-4 px-6 text-slate-400 whitespace-nowrap">
                    {{ $lead->created_at->format('d M Y, h:i A') }}
                  </td>
                  <td class="py-4 px-6 text-right whitespace-nowrap space-x-2">
                    @if($lead->phone)
                      <a href="tel:{{ $lead->phone }}"
                        class="inline-flex items-center gap-1 text-xs font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 px-3 py-1.5 rounded-lg transition-colors">
                        <span>Call</span>
                      </a>
                    @endif
                    <a href="mailto:{{ $lead->email }}?subject=Inquiry response from Pinnacle Speaking"
                      class="inline-flex items-center gap-1 text-xs font-semibold text-emerald-700 bg-emerald-50 hover:bg-emerald-100 px-3 py-1.5 rounded-lg transition-colors">
                      <svg class="size-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                      </svg>
                      <span>Email</span>
                    </a>

                    <form action="{{ route('admin.leads.destroy', $lead->id) }}" method="POST" class="inline"
                      onsubmit="return confirm('Are you sure you want to delete this lead?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit"
                        class="inline-flex items-center text-xs font-semibold text-red-600 hover:text-red-700 bg-red-50 hover:bg-red-100 px-2.5 py-1.5 rounded-lg transition-colors">
                        <svg class="size-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        @if($leads->hasPages())
          <div class="p-4 border-t border-slate-100">
            {{ $leads->links() }}
          </div>
        @endif
      @endif
    </div>

  </div>
@endsection