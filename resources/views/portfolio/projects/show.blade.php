{{--
    Project detail page (route: projects.show).

    Shows a single project ($project, passed by PortfolioController@show)
    using the shared layout and UI components, in the Phase A palette.
--}}
<x-layouts.app title="{{ $project->title }}">
    <x-ui.section>

        <a href="{{ url('/#projects') }}"
           class="text-sm font-medium text-blue-600 transition hover:text-blue-700">
            ← Back to projects
        </a>

        <div class="mt-6 flex items-start justify-between gap-4">
            <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                {{ $project->title }}
            </h1>
            @if ($project->is_featured)
                <span class="mt-1 shrink-0 rounded-full bg-amber-50 px-2.5 py-0.5 text-xs font-medium text-amber-700 ring-1 ring-amber-200">
                    Featured
                </span>
            @endif
        </div>

        <p class="mt-3 max-w-2xl text-lg text-slate-600">
            {{ $project->summary }}
        </p>

        @if (!empty($project->tech_stack))
            <div class="mt-5 flex flex-wrap gap-2">
                @foreach ($project->tech_stack as $tech)
                    <x-ui.badge>{{ $tech }}</x-ui.badge>
                @endforeach
            </div>
        @endif

        @if ($project->description)
            <x-ui.card class="mt-8 max-w-2xl">
                <div class="whitespace-pre-line leading-relaxed text-slate-700">
                    {{ $project->description }}
                </div>
            </x-ui.card>
        @endif

        @if ($project->demo_url || $project->repository_url)
            <div class="mt-8 flex flex-wrap gap-2">
                @if ($project->demo_url)
                    <x-ui.button href="{{ $project->demo_url }}">View demo</x-ui.button>
                @endif
                @if ($project->repository_url)
                    <x-ui.button href="{{ $project->repository_url }}" variant="secondary">
                        View code
                    </x-ui.button>
                @endif
            </div>
        @endif

    </x-ui.section>
</x-layouts.app>
