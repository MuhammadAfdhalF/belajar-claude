{{--
    Project detail page (route: projects.show) — premium case-study layout.

    Dark header + light body. $project is passed by PortfolioController@show.
--}}
@php
    $arrowLeft = 'M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18';
    $external = 'M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25';
    $codeIcon = 'M8 9l-3 3 3 3m8-6l3 3-3 3M14 5l-4 14';
@endphp

<x-layouts.app title="{{ $project->title }}" description="{{ $project->summary }}">

    {{-- Dark header --}}
    <section class="relative overflow-hidden bg-slate-950">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950"></div>
        <div class="absolute -top-24 -left-20 h-72 w-72 rounded-full bg-blue-500/20 blur-3xl"></div>
        <div class="absolute -bottom-24 -right-12 h-72 w-72 rounded-full bg-amber-500/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-5xl px-6 py-20">
            <a href="{{ url('/#projects') }}"
               class="inline-flex items-center gap-1.5 text-sm font-medium text-slate-300 transition hover:text-white">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $arrowLeft }}" />
                </svg>
                Back to projects
            </a>

            @if ($project->is_featured)
                <span class="mt-6 inline-flex items-center gap-1 rounded-full border border-amber-400/30 bg-amber-400/10 px-3 py-1 text-xs font-medium text-amber-300">
                    ★ Featured
                </span>
            @endif

            <h1 class="mt-4 text-4xl font-bold tracking-tight text-white sm:text-5xl">
                {{ $project->title }}
            </h1>

            <p class="mt-4 max-w-2xl text-lg text-slate-300">
                {{ $project->summary }}
            </p>

            @if (!empty($project->tech_stack))
                <div class="mt-6 flex flex-wrap gap-2">
                    @foreach ($project->tech_stack as $tech)
                        <span class="inline-flex items-center rounded-full bg-white/10 px-3 py-1 text-xs font-medium text-slate-200 ring-1 ring-white/10">
                            {{ $tech }}
                        </span>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    {{-- Light body --}}
    <x-ui.section>
        <div class="grid gap-8 md:grid-cols-3">

            {{-- Description --}}
            <div class="md:col-span-2">
                @if ($project->description)
                    <x-ui.card>
                        <h2 class="text-sm font-semibold uppercase tracking-wide text-amber-600">Overview</h2>
                        <div class="mt-4 whitespace-pre-line leading-relaxed text-slate-700">
                            {{ $project->description }}
                        </div>
                    </x-ui.card>
                @else
                    <p class="text-slate-500">No further description for this project yet.</p>
                @endif
            </div>

            {{-- Links aside --}}
            <aside>
                <x-ui.card class="h-fit">
                    <h2 class="text-sm font-semibold uppercase tracking-wide text-slate-900">Links</h2>
                    <div class="mt-4 flex flex-col gap-2">
                        @if ($project->demo_url)
                            <x-ui.button href="{{ $project->demo_url }}" class="w-full">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $external }}" />
                                </svg>
                                View demo
                            </x-ui.button>
                        @endif
                        @if ($project->repository_url)
                            <x-ui.button href="{{ $project->repository_url }}" variant="outline" class="w-full">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $codeIcon }}" />
                                </svg>
                                View code
                            </x-ui.button>
                        @endif
                        @if (!$project->demo_url && !$project->repository_url)
                            <p class="text-sm text-slate-500">No external links for this project.</p>
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
