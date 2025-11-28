@extends('layouts.app')

@section('title', 'Portfolio – Laravel Site')

@section('content')
<section class="bg-slate-950 border-b border-slate-800">
    <div class="max-w-6xl mx-auto px-4 py-16 md:py-20">
        <p class="text-xs text-slate-400 mb-2">Portfolio</p>
        <h1 class="text-3xl md:text-4xl font-semibold tracking-tight mb-4">Layouts you can make your own.</h1>
        <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-8 max-w-2xl">
            Each project below represents a type of site you can build with this starter.
            Replace the copy and images with your own work to turn it into a real portfolio.
        </p>

        <div class="grid md:grid-cols-2 gap-6">
            @foreach($projects as $project)
                <article class="card flex flex-col justify-between">
                    <div>
                        <p class="text-xs text-slate-400">{{ $project['category'] }}</p>
                        <h2 class="card-title mt-1">{{ $project['title'] }}</h2>
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
@endsection
