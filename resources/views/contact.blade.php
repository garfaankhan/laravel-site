@extends('layouts.app')

@section('title', 'Contact – Laravel Site')

@section('content')
<section class="bg-slate-950 border-b border-slate-800">
    <div class="max-w-3xl mx-auto px-4 py-16 md:py-20">
        <p class="text-xs text-slate-400 mb-2">Contact</p>
        <h1 class="text-3xl md:text-4xl font-semibold tracking-tight mb-4">Tell me about your project.</h1>
        <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-8">
            Share a few details and I’ll get back to you with questions, ideas, or a quote.
        </p>

        @if (session('status'))
            <div class="mb-6 rounded-2xl border border-emerald-500/60 bg-emerald-500/10 px-4 py-3 text-xs text-emerald-200">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
            @csrf

            <div>
                <label class="form-label" for="name">Name</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" class="form-input" required>
                @error('name')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="form-label" for="email">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-input" required>
                @error('email')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="form-label" for="subject">Subject (optional)</label>
                <input id="subject" name="subject" type="text" value="{{ old('subject') }}" class="form-input">
                @error('subject')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="form-label" for="message">Message</label>
                <textarea id="message" name="message" rows="5" class="form-input resize-y" required>{{ old('message') }}</textarea>
                @error('message')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="inline-flex px-5 py-2 rounded-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-sm font-medium shadow-lg shadow-indigo-500/25 hover:opacity-90 transition">
                Send message
            </button>
        </form>
    </div>
</section>
@endsection
