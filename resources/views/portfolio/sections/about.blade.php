{{--
    About section (Editorial Tech Atelier).

    Editorial text block with a drop-cap lead, plus icon-led quick facts.
    Content from config('portfolio.profile').
--}}
@php
    $profile = config('portfolio.profile');
    $briefcase = 'M3.75 7.5h16.5v10.5a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V7.5zM9 7.5V6a1.5 1.5 0 011.5-1.5h3A1.5 1.5 0 0115 6v1.5';
    $mapPin = 'M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z';
    $sparkles = 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z';
@endphp

<x-ui.section id="about" eyebrow="Who I am" title="About" class="bg-beige">
    <div class="grid gap-12 md:grid-cols-3">

        {{-- Editorial bio --}}
        <div class="md:col-span-2">
            <p class="text-xl leading-relaxed text-forest/80 first-letter:float-left first-letter:mr-3 first-letter:font-display first-letter:text-6xl first-letter:font-semibold first-letter:leading-none first-letter:text-gold-dark">
                {{ $profile['bio'] }}
            </p>
        </div>

        {{-- Quick facts --}}
        <x-ui.card class="h-fit">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-gold-dark">Quick facts</p>
            <ul class="mt-5 space-y-5 text-sm">
                <li class="flex items-start gap-3">
                    <svg class="mt-0.5 h-5 w-5 shrink-0 text-olive" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $briefcase }}" />
                    </svg>
                    <div>
                        <p class="font-semibold text-forest">Role</p>
                        <p class="mt-0.5 text-forest/70">{{ $profile['role'] }}</p>
                    </div>
                </li>
                @if (!empty($profile['location']))
                    <li class="flex items-start gap-3">
                        <svg class="mt-0.5 h-5 w-5 shrink-0 text-olive" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $mapPin }}" />
                        </svg>
                        <div>
                            <p class="font-semibold text-forest">Location</p>
                            <p class="mt-0.5 text-forest/70">{{ $profile['location'] }}</p>
                        </div>
                    </li>
                @endif
                @if (!empty($profile['focus']))
                    <li class="flex items-start gap-3">
                        <svg class="mt-0.5 h-5 w-5 shrink-0 text-gold-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $sparkles }}" />
                        </svg>
                        <div>
                            <p class="font-semibold text-forest">Focus</p>
                            <p class="mt-0.5 text-forest/70">{{ $profile['focus'] }}</p>
                        </div>
                    </li>
                @endif
            </ul>
        </x-ui.card>

    </div>
</x-ui.section>
