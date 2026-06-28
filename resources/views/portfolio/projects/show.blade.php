{{--
    Project detail page (route: projects.show).

    Shows a single project ($project, passed by PortfolioController@show)
    using the shared layout and UI components.
--}}
<x-layouts.app title="{{ $project->title }}">
    <x-ui.section>

        <a href="{{ url('/#projects') }}"
           class="text-sm font-medium text-indigo-600 hover:text-indigo-700">
            ← Back to projects
        </a>

        <h1 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">
            {{ $project->title }}
        </h1>

        <p class="mt-3 text-lg text-gray-600">
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
            <div class="mt-8 max-w-2xl whitespace-pre-line leading-relaxed text-gray-700">
                {{ $project->description }}
            </div>
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
