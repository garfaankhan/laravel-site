<footer class="border-t border-slate-800 bg-slate-950">
    <div class="max-w-6xl mx-auto px-4 py-8 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-slate-400">
        <p>© {{ date('Y') }} Laravel Site. Built with Laravel & Tailwind.</p>
        <div class="flex gap-4">
            <a href="https://github.com/garfaankhan/laravel-site" class="hover:text-slate-100" target="_blank" rel="noopener">GitHub</a>
            <a href="{{ route('contact') }}" class="hover:text-slate-100">Work with me</a>
        </div>
    </div>
</footer>
