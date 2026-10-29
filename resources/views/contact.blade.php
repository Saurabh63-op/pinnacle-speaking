@extends('layouts.app')

@section('title', 'Contact — Pinnacle Speaking')

@section('content')

  <section class="section">
    <div class="section-inner reveal mx-auto max-w-xl text-center">
      <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">Contact</p>
      <h1 class="mt-3 text-3xl sm:text-4xl">Ready to find your voice?</h1>
      <p class="mt-4 text-gray-500">Tell us a little about your goal and we'll get back to you within a day.</p>
    </div>

    @if (session('success'))
      <div class="section-inner mx-auto mt-8 max-w-xl rounded-xl bg-mint px-5 py-4 text-center text-sm text-primary">
        {{ session('success') }}
      </div>
    @endif

    <div class="section-inner reveal mx-auto mt-10 max-w-xl">
      <form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
        @csrf
        <div>
          <input type="text" name="name" value="{{ old('name') }}" placeholder="Your full name" required
            class="w-full rounded-xl border border-gray-200 bg-white px-5 py-3 text-sm outline-none focus:border-primary">
          @error('name')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
        </div>
        <div>
          <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Your WhatsApp / phone number (e.g. 9876543210)" required
            class="w-full rounded-xl border border-gray-200 bg-white px-5 py-3 text-sm outline-none focus:border-primary">
          @error('phone')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
        </div>
        <div>
          <input type="email" name="email" value="{{ old('email') }}" placeholder="Your email address" required
            class="w-full rounded-xl border border-gray-200 bg-white px-5 py-3 text-sm outline-none focus:border-primary">
          @error('email')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
        </div>
        <div>
          <textarea name="message" rows="4" placeholder="Tell us about your learning goal (e.g. Spoken English, Job Interview, Public Speaking)">{{ old('message') }}</textarea>
          @error('message')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
        </div>
        <button type="submit" class="btn btn-primary w-full !py-3 font-bold shadow-md">Book a Free Session / Send Message</button>
      </form>
    </div>
  </section>

  <section class="section section-mint">
    <div class="section-inner grid gap-6 lg:grid-cols-2">
      <div class="reveal ui-card text-center flex flex-col justify-between">
        <div>
          <h3 class="text-xl font-bold text-navy">Get in Touch</h3>
          <p class="mt-4 text-sm text-gray-600">
            ✉️ <a href="mailto:pinnaclespeaking@gmail.com" class="hover:text-primary transition-colors">pinnaclespeaking@gmail.com</a>
          </p>
          <p class="mt-3 text-sm text-gray-600">
            📞 <a href="tel:+919022321364" class="font-bold text-navy hover:text-primary transition-colors">+91-9022321364</a>
          </p>
          <p class="mt-2 text-xs text-gray-500">Available Monday to Saturday: 8:00 AM – 8:00 PM</p>
        </div>
        <div class="mt-6">
          <a href="https://wa.me/919022321364?text=Hi%20Pinnacle%20Speaking,%20I%20am%20interested%20in%20your%20English%20speaking%20courses." target="_blank"
             class="inline-flex items-center justify-center gap-2 rounded-full bg-emerald-600 px-6 py-2.5 text-xs font-bold text-white hover:bg-emerald-700 transition-all shadow-md">
            <span>💬 Chat Directly on WhatsApp</span>
          </a>
        </div>
      </div>

      <div class="reveal ui-card flex flex-col justify-between overflow-hidden">
        <div>
          <h3 class="text-xl font-bold text-navy text-center">Our Location</h3>
          <p class="mt-2 text-center text-sm text-gray-600">📍 Global City, Virar (West), Palghar, Maharashtra - 401303</p>
        </div>
        <div class="mt-4 rounded-xl overflow-hidden border border-gray-100 shadow-inner">
          <iframe
            title="Pinnacle Speaking Location Map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15053.473523419356!2d72.7900!3d19.4617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7aa0d39e80209%3A0x6b8dd98579cfefec!2sGlobal%20City%2C%20Virar%20West%2C%20Virar%2C%20Maharashtra%20401303!5e0!3m2!1sen!2sin!4v1700000000000"
            width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('scripts')
  <style>
    textarea {
      width: 100%;
      border-radius: .75rem;
      border: 1px solid var(--border);
      padding: .75rem 1.25rem;
      font-size: .875rem;
      outline: none;
      font-family: inherit;
    }

    textarea:focus {
      border-color: var(--primary);
    }
  </style>
@endsection