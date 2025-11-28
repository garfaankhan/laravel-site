@extends('layouts.app')

@section('title', 'About – Laravel Site')

@section('content')
<section class="bg-slate-950 border-b border-slate-800">
    <div class="max-w-4xl mx-auto px-4 py-16 md:py-20">
        <p class="text-xs text-slate-400 mb-2">About</p>
        <h1 class="text-3xl md:text-4xl font-semibold tracking-tight mb-4">A starter that feels like a finished product.</h1>
        <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-6">
            Laravel Site was created to give developers and designers a clean, modern foundation for marketing sites,
            portfolios, and landing pages — without spending days on basic layout and wiring.
        </p>
        <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-6">
            It focuses on the parts most small projects actually need: a strong hero section, clear service descriptions,
            a portfolio to explain your work, and a simple way for visitors to contact you.
        </p>
        <p class="text-slate-300 text-sm md:text-base leading-relaxed">
            Under the hood, it’s just Laravel and Blade with Tailwind via CDN, so you can customize everything
            to match your brand, or gradually expand into a full application.
        </p>
    </div>
</section>
@endsection
