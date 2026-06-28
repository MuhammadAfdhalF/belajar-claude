{{--
    Experience section.

    Professional history from the database ($experiences) as a polished
    timeline: an icon marker + connector line, each role in a card.
--}}
@php
    $briefcase = 'M3.75 7.5h16.5v10.5a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V7.5zM9 7.5V6a1.5 1.5 0 011.5-1.5h3A1.5 1.5 0 0115 6v1.5';
@endphp

<x-ui.section id="experience" eyebrow="Where I've worked" title="Experience" class="bg-slate-50">
    <div class="space-y-6">
        @forelse ($experiences as $job)
            <div class="grid grid-cols-[auto_1fr] gap-x-5">

                {{-- Marker + connector --}}
                <div class="flex flex-col items-center">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-white text-blue-600 shadow-sm ring-1 ring-slate-200">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $briefcase }}" />
                        </svg>
                    </span>
                    @unless ($loop->last)
                        <span class="mt-2 w-px flex-1 bg-slate-200"></span>
                    @endunless
                </div>

                {{-- Entry --}}
                <x-ui.card class="mb-2">
                    <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between">
                        <h3 class="text-lg font-semibold text-slate-900">
                            {{ $job->position }}
                            <span class="font-normal text-slate-500">· {{ $job->company }}</span>
                        </h3>
                        <div class="flex shrink-0 flex-wrap items-center gap-2">
                            @if ($job->is_current)
                                <x-ui.badge variant="amber">Current</x-ui.badge>
                            @endif
                            <span class="text-sm font-medium text-slate-500">
                                {{ $job->start_date?->format('Y') }}
                                – {{ $job->is_current ? 'Present' : $job->end_date?->format('Y') }}
                            </span>
                        </div>
                    </div>

                    @if ($job->location)
                        <p class="mt-1 text-sm text-slate-400">{{ $job->location }}</p>
                    @endif

                    @if ($job->summary)
                        <p class="mt-3 text-slate-600">{{ $job->summary }}</p>
                    @endif
                </x-ui.card>

            </div>
        @empty
            <p class="text-slate-500">No experience to show yet.</p>
        @endforelse
    </div>
</x-ui.section>
