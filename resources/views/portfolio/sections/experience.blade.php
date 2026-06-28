{{--
    Experience section (Editorial Tech Atelier).

    Professional history from the database ($experiences) as an elegant timeline:
    gold markers, thin connectors, cream cards.
--}}
<x-ui.section id="experience" eyebrow="Where I've worked" title="Experience" class="bg-beige">
    <div class="space-y-8">
        @forelse ($experiences as $job)
            <div class="grid grid-cols-[auto_1fr] gap-x-5">

                {{-- Marker + connector --}}
                <div class="flex flex-col items-center">
                    <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full border border-gold bg-cream">
                        <span class="h-1.5 w-1.5 rounded-full bg-gold-dark"></span>
                    </span>
                    @unless ($loop->last)
                        <span class="mt-2 w-px flex-1 bg-edge"></span>
                    @endunless
                </div>

                {{-- Entry --}}
                <x-ui.card class="mb-2">
                    <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between">
                        <h3 class="font-display text-xl font-semibold text-forest">
                            {{ $job->position }}
                            <span class="font-sans text-base font-normal text-forest/60">· {{ $job->company }}</span>
                        </h3>
                        <div class="flex shrink-0 flex-wrap items-center gap-2">
                            @if ($job->is_current)
                                <x-ui.badge variant="gold">Current</x-ui.badge>
                            @endif
                            <span class="text-sm font-medium text-gold-dark">
                                {{ $job->start_date?->format('Y') }}
                                – {{ $job->is_current ? 'Present' : $job->end_date?->format('Y') }}
                            </span>
                        </div>
                    </div>

                    @if ($job->location)
                        <p class="mt-1 text-sm text-forest/50">{{ $job->location }}</p>
                    @endif

                    @if ($job->summary)
                        <p class="mt-3 text-forest/70">{{ $job->summary }}</p>
                    @endif
                </x-ui.card>

            </div>
        @empty
            <p class="text-forest/60">No experience to show yet.</p>
        @endforelse
    </div>
</x-ui.section>
