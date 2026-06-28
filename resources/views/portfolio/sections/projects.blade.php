{{--
    Projects section.

    Renders featured project tiles from the database ($projects, passed by
    PortfolioController). Each card shows a title, summary, tech badges
    (tech_stack), and links built with the button component.
--}}
<x-ui.section id="projects" eyebrow="Selected work" title="Projects"
              description="A few things I've built and supported.">
    <div class="grid gap-6 sm:grid-cols-2">
        @foreach ($projects as $project)
            <x-ui.card class="flex flex-col">
                <h3 class="text-lg font-semibold text-gray-900">
                    {{ $project->title }}
                </h3>

                <p class="mt-2 flex-grow text-gray-600">
                    {{ $project->summary }}
                </p>

                @if (!empty($project->tech_stack))
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach ($project->tech_stack as $tech)
                            <x-ui.badge>{{ $tech }}</x-ui.badge>
                        @endforeach
                    </div>
                @endif

                <div class="mt-5 flex flex-wrap gap-2">
                    @if ($project->demo_url)
                        <x-ui.button href="{{ $project->demo_url }}" variant="secondary">
                            View
                        </x-ui.button>
                    @endif
                    @if ($project->repository_url)
                        <x-ui.button href="{{ $project->repository_url }}" variant="ghost">
                            Code
                        </x-ui.button>
                    @endif
                </div>
            </x-ui.card>
        @endforeach
    </div>
</x-ui.section>
