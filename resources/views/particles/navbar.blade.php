<nav class="border-b border-slate-800 bg-slate-950/70 backdrop-blur sticky top-0 z-40">
    <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <span class="inline-flex h-8 w-8 rounded-2xl bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500"></span>
            <span class="font-semibold text-lg tracking-tight">Laravel Site</span>
        </a>

        <div class="hidden md:flex items-center gap-6 text-sm">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'nav-link-active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'nav-link-active' : '' }}">About</a>
            <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'nav-link-active' : '' }}">Services</a>
            <a href="{{ route('portfolio') }}" class="nav-link {{ request()->routeIs('portfolio') ? 'nav-link-active' : '' }}">Portfolio</a>
            <a href="{{ route('blog') }}" class="nav-link {{ request()->routeIs('blog') ? 'nav-link-active' : '' }}">Blog</a>
            <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'nav-link-active' : '' }}">Contact</a>
        </div>

        <a href="{{ route('contact') }}" class="hidden md:inline-flex px-4 py-2 rounded-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-xs font-medium shadow-lg shadow-indigo-500/25 hover:opacity-90 transition">
            Start a Project
        </a>

        <div class="md:hidden" x-data="{ open: false }">
            <button @click="open = !open" class="p-2 rounded-full bg-slate-900 border border-slate-700">
                <span x-show="!open">☰</span>
                <span x-show="open">×</span>
            </button>
            <div x-show="open" @click.outside="open = false" class="absolute right-4 mt-3 w-44 bg-slate-900 border border-slate-800 rounded-2xl shadow-xl py-2 text-sm">
                <a href="{{ route('home') }}" class="block px-4 py-2 hover:bg-slate-800">Home</a>
                <a href="{{ route('about') }}" class="block px-4 py-2 hover:bg-slate-800">About</a>
                <a href="{{ route('services') }}" class="block px-4 py-2 hover:bg-slate-800">Services</a>
                <a href="{{ route('portfolio') }}" class="block px-4 py-2 hover:bg-slate-800">Portfolio</a>
                <a href="{{ route('blog') }}" class="block px-4 py-2 hover:bg-slate-800">Blog</a>
                <a href="{{ route('contact') }}" class="block px-4 py-2 hover:bg-slate-800">Contact</a>
            </div>
        </div>
    </div>
</nav>
