@extends('layouts.app')

@section('title', 'Laravel Site – Modern Starter')

@section('content')
<section class="border-b border-slate-800 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900">
    <div class="max-w-6xl mx-auto px-4 py-16 md:py-24 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <p class="inline-flex px-3 py-1 rounded-full border border-slate-700 text-xs text-slate-300 mb-4">
                ✨ Modern Laravel starter kit
            </p>
            <h1 class="text-3xl md:text-5xl font-semibold tracking-tight mb-4">
                Build beautiful websites
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400">
                    faster with Laravel.
                </span>
            </h1>
            <p class="text-slate-300 text-sm md:text-base mb-6 leading-relaxed">
                Laravel Site gives you a polished, production‑ready starting point for personal portfolios,
                agency websites, and modern landing pages — so you can focus on what makes your project unique.
            </p>
            <div class="flex flex-wrap gap-3 mb-6">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-5 py-2 rounded-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-sm font-medium shadow-lg shadow-indigo-500/25 hover:opacity-90 transition">
                    Start a Project
                </a>
                <a href="{{ route('portfolio') }}" class="inline-flex items-center px-5 py-2 rounded-full border border-slate-700 text-sm hover:bg-slate-900 transition">
                    View Portfolio →
                </a>
            </div>
            <div class="flex flex-wrap gap-4 text-xs text-slate-400">
                <div class="flex items-center gap-2">
                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                    <span>Responsive by default</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="h-2 w-2 rounded-full bg-indigo-400"></span>
                    <span>Laravel 10/11 compatible</span>
                </div>
            </div>
        </div>
        <div>
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-tr from-indigo-500/20 via-purple-500/20 to-pink-500/20 blur-3xl opacity-70"></div>
                <div class="relative rounded-3xl border border-slate-800 bg-slate-950/80 p-5 shadow-2xl shadow-indigo-950/60">
                    <div class="flex items-center justify-between mb-4 text-xs text-slate-400">
                        <span class="flex items-center gap-2">
                            <span class="inline-flex h-2 w-2 rounded-full bg-emerald-400"></span>
                            Preview
                        </span>
                        <span>Home · Services · Portfolio · Blog</span>
                    </div>
                    <div class="space-y-3 text-xs">
                        <div class="rounded-2xl border border-slate-800 bg-slate-900/80 px-4 py-3 flex items-center justify-between">
                            <div>
                                <p class="text-slate-300 font-medium">Hero section</p>
                                <p class="text-slate-500">Gradient background · CTA buttons</p>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-slate-800 text-slate-300 text-[10px]">Done</span>
                        </div>
                        <div class="rounded-2xl border border-slate-800 bg-slate-900/60 px-4 py-3 flex items-center justify-between">
                            <div>
                                <p class="text-slate-300 font-medium">Services grid</p>
                                <p class="text-slate-500">3 highlight cards</p>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-slate-800 text-slate-300 text-[10px]">Done</span>
                        </div>
                        <div class="rounded-2xl border border-slate-800 bg-slate-900/60 px-4 py-3 flex items-center justify-between">
                            <div>
                                <p class="text-slate-300 font-medium">Portfolio gallery</p>
                                <p class="text-slate-500">Responsive card layout</p>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-slate-800 text-slate-300 text-[10px]">Done</span>
                        </div>
                        <div class="rounded-2xl border border-slate-800 bg-slate-900/60 px-4 py-3 flex items-center justify-between">
                            <div>
                                <p class="text-slate-300 font-medium">Contact form</p>
                                <p class="text-slate-500">Stored in database</p>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-slate-800 text-slate-300 text-[10px]">Done</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="border-b border-slate-800 bg-slate-950">
    <div class="max-w-6xl mx-auto px-4 py-12 md:py-16">
        <h2 class="section-title">Services</h2>
        <p class="section-subtitle">Everything you need to launch a polished Laravel website.</p>

        <div class="mt-8 grid md:grid-cols-3 gap-6">
            @foreach($services as $service)
                <div class="card">
                    <h3 class="card-title">{{ $service['name'] }}</h3>
                    <p class="card-body-text">{{ $service['description'] }}</p>
                    <p class="mt-4 text-xs text-slate-400">Includes planning, design, build, and launch.</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="border-b border-slate-800 bg-slate-950">
    <div class="max-w-6xl mx-auto px-4 py-12 md:py-16">
        <h2 class="section-title">Selected Work</h2>
        <p class="section-subtitle">Hand‑picked layouts you can adapt to your own projects.</p>

        <div class="mt-8 grid md:grid-cols-3 gap-6">
            @foreach($projects as $project)
                <article class="card flex flex-col justify-between">
                    <div>
                        <p class="text-xs text-slate-400">{{ $project['category'] }}</p>
                        <h3 class="card-title mt-1">{{ $project['title'] }}</h3>
                        <p class="card-body-text mt-2">{{ $project['description'] }}</p>
                    </div>
                    <div class="mt-4 flex flex-wrap gap-2 text-[10px] text-slate-300">
                        @foreach($project['tags'] as $tag)
                            <span class="px-2 py-1 rounded-full bg-slate-900 border border-slate-700">{{ $tag }}</span>
                        @endforeach
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-slate-950">
    <div class="max-w-6xl mx-auto px-4 py-12 md:py-16 grid md:grid-cols-2 gap-10 items-start">
        <div>
            <h2 class="section-title">From the blog</h2>
            <p class="section-subtitle">Short reads on Laravel, design, and building better web experiences.</p>

            <div class="mt-8 space-y-4">
                @foreach($posts as $post)
                    <article class="card">
                        <h3 class="card-title">{{ $post['title'] }}</h3>
                        <p class="card-body-text mt-2">{{ $post['excerpt'] }}</p>
                        <div class="mt-3 flex items-center justify-between text-xs text-slate-400">
                            <span>{{ $post['read_time'] }}</span>
                            <a href="{{ route('blog') }}" class="hover:text-slate-100">Read on blog →</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="card">
            <h2 class="card-title">Let’s build something together</h2>
            <p class="card-body-text mt-2">
                Tell me about your idea, and I’ll help you ship a fast, beautiful Laravel website.
            </p>
            <a href="{{ route('contact') }}" class="mt-4 inline-flex px-4 py-2 rounded-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-xs font-medium hover:opacity-90 transition">
                Go to contact form
            </a>
            <p class="mt-4 text-xs text-slate-500">
                Typical response time: under 24 hours.
            </p>
        </div>
    </div>
</section>
@endsection
