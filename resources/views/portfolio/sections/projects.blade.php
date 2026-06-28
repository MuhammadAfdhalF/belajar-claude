{{--
    Projects section.

    Renders project tiles from config('portfolio.projects'). Each card shows a
    title, summary, tech badges, and links built with the button component.
--}}
<x-ui.section id="projects" eyebrow="Selected work" title="Projects"
              description="A few things I've built and supported.">
    <div class="grid gap-6 sm:grid-cols-2">
        @foreach (config('portfolio.projects') as $project)
            <x-ui.card class="flex flex-col">
                <h3 class="text-lg font-semibold text-gray-900">
                    {{ $project['title'] }}
                </h3>

                <p class="mt-2 flex-grow text-gray-600">
                    {{ $project['summary'] }}
                </p>

                @if (!empty($project['tags']))
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach ($project['tags'] as $tag)
                            <x-ui.badge>{{ $tag }}</x-ui.badge>
                        @endforeach
                    </div>
                @endif

                <div class="mt-5 flex flex-wrap gap-2">
                    @if (!empty($project['url']))
                        <x-ui.button href="{{ $project['url'] }}" variant="secondary">
                            View
                        </x-ui.button>
                    @endif
                    @if (!empty($project['repo']))
                        <x-ui.button href="{{ $project['repo'] }}" variant="ghost">
                            Code
                        </x-ui.button>
                    @endif
                </div>
            </x-ui.card>
        @endforeach
    </div>
</x-ui.section>
