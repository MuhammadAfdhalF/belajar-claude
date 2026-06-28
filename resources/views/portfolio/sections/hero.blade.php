{{--
    Hero section — dark, bold first impression.

    Identity and capability chips come from config('portfolio.profile').
    Uses R1 utilities (animate-fade-up, shadow-glow) and button variants.
--}}
@php
    $profile = config('portfolio.profile');

    // Inline SVG path data for the highlight chip icons (stroke style).
    $icons = [
        'code'     => 'M8 9l-3 3 3 3m8-6l3 3-3 3M14 5l-4 14',
        'heart'    => 'M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z',
        'shield'   => 'M9 12.75L11.25 15 15 9.75M21 12c0 5.25-4.5 8.25-9 9-4.5-.75-9-3.75-9-9V5.25l9-2.25 9 2.25V12z',
        'database' => 'M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125',
    ];
@endphp

<section class="relative overflow-hidden bg-slate-950">

    {{-- Background gradient + glow accents --}}
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950"></div>
    <div class="absolute -top-32 -left-24 h-80 w-80 rounded-full bg-blue-500/20 blur-3xl"></div>
    <div class="absolute -bottom-32 -right-16 h-80 w-80 rounded-full bg-amber-500/10 blur-3xl"></div>

    <div class="relative mx-auto max-w-5xl px-6 py-28 sm:py-36">
        <div class="animate-fade-up max-w-3xl">

            @if (!empty($profile['status']))
                <span class="inline-flex items-center gap-2 rounded-full border border-amber-400/30 bg-amber-400/10 px-3 py-1 text-xs font-medium text-amber-300">
                    <span class="h-1.5 w-1.5 rounded-full bg-amber-400"></span>
                    {{ $profile['status'] }}
                </span>
            @endif

            <p class="mt-6 text-sm font-semibold uppercase tracking-[0.2em] text-blue-400">
                {{ $profile['role'] }}
            </p>

            <h1 class="mt-3 text-5xl font-bold tracking-tight text-white sm:text-7xl">
                {{ $profile['name'] }}
            </h1>

            <p class="mt-6 max-w-2xl text-lg leading-relaxed text-slate-300">
                {{ $profile['tagline'] }}
            </p>

            <div class="mt-10 flex flex-wrap items-center gap-3">
                <x-ui.button href="#contact">Get in touch</x-ui.button>
                <x-ui.button href="#projects" variant="secondary">View projects</x-ui.button>
            </div>

            {{-- Capability chips --}}
            @if (!empty($profile['highlights']))
                <div class="mt-12 flex flex-wrap gap-3">
                    @foreach ($profile['highlights'] as $highlight)
                        <span class="inline-flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-3.5 py-2 text-sm font-medium text-slate-200 backdrop-blur-sm transition-all duration-200 hover:-translate-y-0.5 hover:border-blue-400/40 hover:bg-white/10">
                            <svg class="h-4 w-4 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icons[$highlight['icon']] ?? $icons['code'] }}" />
                            </svg>
                            {{ $highlight['label'] }}
                        </span>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
</section>
