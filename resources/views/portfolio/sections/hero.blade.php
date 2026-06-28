{{--
    Hero section.

    Top of the homepage: name, role, tagline, and two calls-to-action.
    Reads identity from config('portfolio.profile').
--}}
@php($profile = config('portfolio.profile'))

<section class="border-b border-gray-100 bg-gray-50">
    <div class="mx-auto max-w-5xl px-6 py-24 text-center sm:py-32">

        <p class="text-sm font-semibold uppercase tracking-wide text-indigo-600">
            {{ $profile['role'] }}
        </p>

        <h1 class="mt-3 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
            {{ $profile['name'] }}
        </h1>

        <p class="mx-auto mt-5 max-w-2xl text-lg text-gray-600">
            {{ $profile['tagline'] }}
        </p>

        <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
            <x-ui.button href="#contact">Get in touch</x-ui.button>
            <x-ui.button href="#projects" variant="secondary">View projects</x-ui.button>
        </div>

    </div>
</section>
