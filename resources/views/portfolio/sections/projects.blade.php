{{--
    Selected Projects section (Editorial Tech Atelier).

    Featured projects from the database ($projects) as editorial magazine tiles
    with project numbers, serif titles, and gold arrows. Each links to its detail
    page and keeps external demo/repository links.
--}}
@php
    $arrowRight = 'M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3';
    $external = 'M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25';
    $codeIcon = 'M8 9l-3 3 3 3m8-6l3 3-3 3M14 5l-4 14';
@endphp

<x-ui.section id="projects" eyebrow="Selected work" title="Selected Projects"
              description="A few things I've built and supported.">
    <div class="grid gap-6 sm:grid-cols-2">
        @forelse ($projects as $project)
            <x-ui.card class="flex flex-col">

                <div class="flex items-center justify-between">
                    <span class="font-display text-2xl font-semibold text-gold-dark">
                        {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                    </span>
                    @if ($project->is_featured)
                        <x-ui.badge variant="gold">Featured</x-ui.badge>
                    @endif
                </div>

                <h3 class="mt-4 font-display text-2xl font-semibold text-forest">
                    <a href="{{ route('projects.show', $project->slug) }}"
                       class="inline-flex items-center gap-2 transition group-hover:text-olive-dark">
                        {{ $project->title }}
                        <svg class="h-5 w-5 text-gold-dark transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $arrowRight }}" />
                        </svg>
                    </a>
                </h3>

                <p class="mt-2 flex-grow text-forest/70">
                    {{ $project->summary }}
                </p>

                @if (!empty($project->tech_stack))
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach ($project->tech_stack as $tech)
                            <x-ui.badge variant="olive">{{ $tech }}</x-ui.badge>
                        @endforeach
                    </div>
                @endif

                <div class="mt-5 flex items-center justify-between border-t border-edge pt-4">
                    <a href="{{ route('projects.show', $project->slug) }}"
                       class="inline-flex items-center gap-1.5 text-sm font-semibold text-gold-dark transition-all group-hover:gap-2.5 hover:text-forest">
                        View details
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $arrowRight }}" />
                        </svg>
                    </a>

                    <div class="flex items-center gap-1">
                        @if ($project->demo_url)
                            <a href="{{ $project->demo_url }}" aria-label="Live demo"
                               class="rounded-md p-2 text-forest/60 transition hover:bg-beige hover:text-forest"
                               target="_blank" rel="noopener noreferrer">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $external }}" />
                                </svg>
                            </a>
                        @endif
                        @if ($project->repository_url)
                            <a href="{{ $project->repository_url }}" aria-label="Source code"
                               class="rounded-md p-2 text-forest/60 transition hover:bg-beige hover:text-forest"
                               target="_blank" rel="noopener noreferrer">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $codeIcon }}" />
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>

            </x-ui.card>
        @empty
            <p class="text-forest/60 sm:col-span-2">No projects to show yet.</p>
        @endforelse
    </div>
</x-ui.section>
