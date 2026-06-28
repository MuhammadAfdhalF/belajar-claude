{{--
    404 Not Found page, styled to match the portfolio (Phase A palette).
--}}
<x-layouts.app title="Page not found">
    <x-ui.section>
        <div class="mx-auto max-w-xl py-16 text-center">
            <p class="text-sm font-semibold uppercase tracking-wide text-amber-600">404</p>
            <h1 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                Page not found
            </h1>
            <p class="mt-4 text-slate-600">
                The page you're looking for doesn't exist or may have moved.
            </p>
            <div class="mt-8 flex justify-center">
                <x-ui.button href="{{ url('/') }}">Back to home</x-ui.button>
            </div>
        </div>
    </x-ui.section>
</x-layouts.app>
