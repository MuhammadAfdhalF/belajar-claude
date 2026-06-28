{{--
    Hero section.

    Top of the homepage: status pill, role, name, tagline, and two CTAs.
    Identity comes from config('portfolio.profile').
--}}
@php($profile = config('portfolio.profile'))

<section class="border-b border-slate-200 bg-gradient-to-b from-white to-slate-50">
    <div class="mx-auto max-w-5xl px-6 py-24 text-center sm:py-32">

        @if (!empty($profile['status']))
            <span class="inline-flex items-center gap-2 rounded-full border border-amber-200 bg-amber-50 px-3 py-1 text-xs font-medium text-amber-700">
                <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                {{ $profile['status'] }}
            </span>
        @endif

        <p class="mt-6 text-sm font-semibold uppercase tracking-wide text-blue-600">
            {{ $profile['role'] }}
        </p>

        <h1 class="mt-3 text-4xl font-bold tracking-tight text-slate-900 sm:text-6xl">
            {{ $profile['name'] }}
        </h1>

        <p class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-slate-600">
            {{ $profile['tagline'] }}
        </p>

        <div class="mt-10 flex flex-wrap items-center justify-center gap-3">
            <x-ui.button href="#contact">Get in touch</x-ui.button>
            <x-ui.button href="#projects" variant="secondary">View projects</x-ui.button>
        </div>

    </div>
</section>
