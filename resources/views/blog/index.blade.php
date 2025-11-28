@extends('layouts.app')

@section('title', 'Blog – Laravel Site')

@section('content')
<section class="bg-slate-950 border-b border-slate-800">
    <div class="max-w-4xl mx-auto px-4 py-16 md:py-20">
        <p class="text-xs text-slate-400 mb-2">Blog</p>
        <h1 class="text-3xl md:text-4xl font-semibold tracking-tight mb-4">Short posts about craft and code.</h1>
        <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-8">
            This is a static blog listing for now. You can later connect it to database‑backed posts
            or a headless CMS of your choice.
        </p>

        <div class="space-y-4">
            @foreach($posts as $post)
                <article class="card">
                    <p class="text-xs text-slate-500 mb-1">{{ \Carbon\Carbon::parse($post['date'])->format('M j, Y') }}</p>
                    <h2 class="card-title">{{ $post['title'] }}</h2>
                    <p class="card-body-text mt-2">{{ $post['excerpt'] }}</p>
                    <p class="mt-3 text-xs text-slate-500">Static demo entry · Replace with real articles</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
