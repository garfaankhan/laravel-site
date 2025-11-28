@extends('layouts.app')

@section('title', 'Services – Laravel Site')

@section('content')
<section class="bg-slate-950 border-b border-slate-800">
    <div class="max-w-6xl mx-auto px-4 py-16 md:py-20">
        <p class="text-xs text-slate-400 mb-2">Services</p>
        <h1 class="text-3xl md:text-4xl font-semibold tracking-tight mb-4">Services you can base your offer on.</h1>
        <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-8 max-w-2xl">
            These are example packages you can adapt for your freelance business or agency.
            Update the text and pricing to match what you actually provide.
        </p>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="card">
                <p class="text-xs text-slate-400 mb-1">Starter</p>
                <h2 class="card-title mb-2">Single‑page site</h2>
                <p class="card-body-text">Perfect for portfolios, coming‑soon pages, and simple campaigns.</p>
                <p class="mt-4 text-2xl font-semibold">$499</p>
                <ul class="mt-4 text-xs text-slate-400 space-y-1">
                    <li>• Custom hero & content sections</li>
                    <li>• Mobile‑first responsive layout</li>
                    <li>• Basic contact form</li>
                </ul>
            </div>
            <div class="card border-indigo-500/60 shadow-lg shadow-indigo-500/20">
                <p class="text-xs text-indigo-300 mb-1">Most popular</p>
                <h2 class="card-title mb-2">Multi‑page site</h2>
                <p class="card-body-text">Ideal for small businesses that need a few core pages.</p>
                <p class="mt-4 text-2xl font-semibold">$999</p>
                <ul class="mt-4 text-xs text-slate-400 space-y-1">
                    <li>• Home, About, Services, Contact</li>
                    <li>• Portfolio or blog listing</li>
                    <li>• Contact form with database storage</li>
                </ul>
            </div>
            <div class="card">
                <p class="text-xs text-slate-400 mb-1">Custom</p>
                <h2 class="card-title mb-2">Laravel app</h2>
                <p class="card-body-text">For projects that need custom logic, dashboards, or integrations.</p>
                <p class="mt-4 text-2xl font-semibold">From $2,499</p>
                <ul class="mt-4 text-xs text-slate-400 space-y-1">
                    <li>• Tailored architecture & features</li>
                    <li>• API integrations</li>
                    <li>• Ongoing support available</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
