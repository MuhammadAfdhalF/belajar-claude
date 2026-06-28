{{--
    Projects section.

    Featured project tiles from the database ($projects) as showcase cards.
    Each links to its detail page and keeps external demo/repository links.
--}}
@php
    $arrowRight = 'M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3';
    $external = 'M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25';
    $codeIcon = 'M8 9l-3 3 3 3m8-6l3 3-3 3M14 5l-4 14';
@endphp

<x-ui.section id="projects" eyebrow="Selected work" title="Projects"
              description="A few things I've built and supported.">
    <div class="grid gap-6 sm:grid-cols-2">
        @forelse ($projects as $project)
            <x-ui.card class="flex flex-col">

                <div class="flex items-start justify-between gap-3">
                    <h3 class="text-lg font-semibold text-slate-900">
                        <a href="{{ route('projects.show', $project->slug) }}"
                           class="transition group-hover:text-blue-600">
                            {{ $project->title }}
                        </a>
                    </h3>
                    @if ($project->is_featured)
                        <x-ui.badge variant="amber">★ Featured</x-ui.badge>
                    @endif
                </div>

                <p class="mt-2 flex-grow text-slate-600">
                    {{ $project->summary }}
                </p>

                @if (!empty($project->tech_stack))
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach ($project->tech_stack as $tech)
                            <x-ui.badge variant="blue">{{ $tech }}</x-ui.badge>
                        @endforeach
                    </div>
                @endif

                <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
                    <a href="{{ route('projects.show', $project->slug) }}"
                       class="inline-flex items-center gap-1.5 text-sm font-semibold text-blue-600 transition-all group-hover:gap-2.5 hover:text-blue-700">
                        View details
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $arrowRight }}" />
                        </svg>
                    </a>

                    <div class="flex items-center gap-1">
                        @if ($project->demo_url)
                            <a href="{{ $project->demo_url }}" aria-label="Live demo"
                               class="rounded-lg p-2 text-slate-500 transition hover:bg-slate-100 hover:text-blue-600"
                               target="_blank" rel="noopener noreferrer">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $external }}" />
                                </svg>
                            </a>
                        @endif
                        @if ($project->repository_url)
                            <a href="{{ $project->repository_url }}" aria-label="Source code"
                               class="rounded-lg p-2 text-slate-500 transition hover:bg-slate-100 hover:text-blue-600"
                               target="_blank" rel="noopener noreferrer">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $codeIcon }}" />
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>

            </x-ui.card>
        @empty
            <p class="text-slate-500 sm:col-span-2">No projects to show yet.</p>
        @endforelse
    </div>
</x-ui.section>
