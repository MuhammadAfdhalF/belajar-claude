{{--
    404 Not Found page (Editorial Tech Atelier).
--}}
<x-layouts.app title="Page not found">
    <section class="bg-cream">
        <div class="mx-auto max-w-xl px-6 py-28 text-center">
            <p class="font-display text-8xl font-semibold leading-none text-gold-dark sm:text-9xl">404</p>
            <h1 class="mt-6 font-display text-3xl font-semibold tracking-tight text-forest sm:text-4xl">
                Page not found
            </h1>
            <p class="mt-4 text-forest/70">
                The page you're looking for doesn't exist or may have moved.
            </p>
            <div class="mt-8 flex justify-center">
                <x-ui.button href="{{ url('/') }}">Back to home</x-ui.button>
            </div>
        </div>
    </section>
</x-layouts.app>
