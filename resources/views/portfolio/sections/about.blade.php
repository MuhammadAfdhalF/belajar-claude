{{--
    About section.

    Readable bio plus an icon-led "quick facts" card, from
    config('portfolio.profile').
--}}
@php
    $profile = config('portfolio.profile');
    $briefcase = 'M3.75 7.5h16.5v10.5a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V7.5zM9 7.5V6a1.5 1.5 0 011.5-1.5h3A1.5 1.5 0 0115 6v1.5';
    $mapPin = 'M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z';
    $sparkles = 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z';
@endphp

<x-ui.section id="about" eyebrow="Who I am" title="About" class="bg-slate-50">
    <div class="grid gap-10 md:grid-cols-3">

        {{-- Bio --}}
        <div class="md:col-span-2">
            <p class="text-lg leading-relaxed text-slate-600">
                {{ $profile['bio'] }}
            </p>
        </div>

        {{-- Quick facts --}}
        <x-ui.card class="h-fit">
            <ul class="space-y-5 text-sm">
                <li class="flex items-start gap-3">
                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $briefcase }}" />
                        </svg>
                    </span>
                    <div>
                        <p class="font-semibold text-slate-900">Role</p>
                        <p class="mt-0.5 text-slate-600">{{ $profile['role'] }}</p>
                    </div>
                </li>

                @if (!empty($profile['location']))
                    <li class="flex items-start gap-3">
                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $mapPin }}" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold text-slate-900">Location</p>
                            <p class="mt-0.5 text-slate-600">{{ $profile['location'] }}</p>
                        </div>
                    </li>
                @endif

                @if (!empty($profile['focus']))
                    <li class="flex items-start gap-3">
                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-amber-50 text-amber-600">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $sparkles }}" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold text-slate-900">Focus</p>
                            <p class="mt-0.5 text-slate-600">{{ $profile['focus'] }}</p>
                        </div>
                    </li>
                @endif
            </ul>
        </x-ui.card>

    </div>
</x-ui.section>
