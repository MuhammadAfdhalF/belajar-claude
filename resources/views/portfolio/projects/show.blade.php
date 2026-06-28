{{--
    Project detail page (route: projects.show) — editorial case study.

    Olive header + cream body. $project is passed by PortfolioController@show.
--}}
@php
    $arrowLeft = 'M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18';
    $external = 'M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25';
    $codeIcon = 'M8 9l-3 3 3 3m8-6l3 3-3 3M14 5l-4 14';
@endphp

<x-layouts.app title="{{ $project->title }}" description="{{ $project->summary }}">

    {{-- Olive header --}}
    <section class="bg-olive-dark">
        <div class="mx-auto max-w-5xl px-6 py-16 md:py-20">
            <a href="{{ url('/#projects') }}"
               class="inline-flex items-center gap-1.5 text-sm font-medium text-cream/70 transition hover:text-cream">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $arrowLeft }}" />
                </svg>
                Back to projects
            </a>

            <p class="mt-8 inline-flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-gold">
                <span class="h-px w-8 bg-gold"></span>
                Project
                @if ($project->is_featured) · Featured @endif
            </p>

            <h1 class="mt-4 font-display text-4xl font-semibold tracking-tight text-cream sm:text-6xl">
                {{ $project->title }}
            </h1>

            <p class="mt-4 max-w-2xl text-lg text-cream/70">
                {{ $project->summary }}
            </p>

            @if (!empty($project->tech_stack))
                <div class="mt-6 flex flex-wrap gap-2">
                    @foreach ($project->tech_stack as $tech)
                        <span class="inline-flex items-center rounded-full border border-cream/15 bg-cream/5 px-3 py-1 text-xs font-medium text-cream/80">
                            {{ $tech }}
                        </span>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    {{-- Cream body --}}
    <x-ui.section>
        <div class="grid gap-8 md:grid-cols-3">

            {{-- Overview --}}
            <div class="md:col-span-2">
                @if ($project->description)
                    <x-ui.card>
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-gold-dark">Overview</p>
                        <div class="mt-4 whitespace-pre-line leading-relaxed text-forest/80">
                            {{ $project->description }}
                        </div>
                    </x-ui.card>
                @else
                    <p class="text-forest/60">No further description for this project yet.</p>
                @endif
            </div>

            {{-- Links aside --}}
            <aside>
                <x-ui.card class="h-fit">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-gold-dark">Links</p>
                    <div class="mt-4 flex flex-col gap-2">
                        @if ($project->demo_url)
                            <x-ui.button href="{{ $project->demo_url }}" class="w-full">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $external }}" />
                                </svg>
                                View demo
                            </x-ui.button>
                        @endif
                        @if ($project->repository_url)
                            <x-ui.button href="{{ $project->repository_url }}" variant="outline" class="w-full">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $codeIcon }}" />
                                </svg>
                                View code
                            </x-ui.button>
                        @endif
                        @if (!$project->demo_url && !$project->repository_url)
                            <p class="text-sm text-forest/60">No external links for this project.</p>
                        @endif
                    </div>
                </x-ui.card>
            </aside>

        </div>

        <div class="mt-10">
            <x-ui.button href="{{ url('/#projects') }}" variant="ghost">← Back to projects</x-ui.button>
        </div>
    </x-ui.section>

</x-layouts.app>
