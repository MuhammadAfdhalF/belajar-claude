{{--
    404 Not Found page, aligned with the redesigned portfolio style.
--}}
<x-layouts.app title="Page not found">
    <section class="relative overflow-hidden bg-slate-950">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950"></div>
        <div class="absolute -top-24 left-1/2 h-72 w-72 -translate-x-1/2 rounded-full bg-blue-500/20 blur-3xl"></div>

        <div class="relative mx-auto max-w-xl px-6 py-28 text-center">
            <p class="bg-gradient-to-r from-blue-400 to-amber-300 bg-clip-text text-7xl font-bold tracking-tight text-transparent sm:text-8xl">
                404
            </p>
            <h1 class="mt-4 text-2xl font-bold tracking-tight text-white sm:text-3xl">
                Page not found
            </h1>
            <p class="mt-4 text-slate-300">
                The page you're looking for doesn't exist or may have moved.
            </p>
            <div class="mt-8 flex justify-center">
                <x-ui.button href="{{ url('/') }}">Back to home</x-ui.button>
            </div>
        </div>
    </section>
</x-layouts.app>
