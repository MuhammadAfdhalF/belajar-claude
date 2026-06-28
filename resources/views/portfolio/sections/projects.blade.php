{{--
    Projects section.

    Featured project tiles from the database ($projects). Each card links to
    its detail page and keeps external demo/repository links.
--}}
<x-ui.section id="projects" eyebrow="Selected work" title="Projects"
              description="A few things I've built and supported.">
    <div class="grid gap-6 sm:grid-cols-2">
        @forelse ($projects as $project)
            <x-ui.card class="flex flex-col">

                <div class="flex items-start justify-between gap-3">
                    <h3 class="text-lg font-semibold text-slate-900">
                        <a href="{{ route('projects.show', $project->slug) }}"
                           class="transition hover:text-blue-600">
                            {{ $project->title }}
                        </a>
                    </h3>
                    @if ($project->is_featured)
                        <span class="shrink-0 rounded-full bg-amber-50 px-2.5 py-0.5 text-xs font-medium text-amber-700 ring-1 ring-amber-200">
                            Featured
                        </span>
                    @endif
                </div>

                <p class="mt-2 flex-grow text-slate-600">
                    {{ $project->summary }}
                </p>

                @if (!empty($project->tech_stack))
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach ($project->tech_stack as $tech)
                            <x-ui.badge>{{ $tech }}</x-ui.badge>
                        @endforeach
                    </div>
                @endif

                <div class="mt-5 flex flex-wrap gap-2 border-t border-slate-100 pt-4">
                    <x-ui.button href="{{ route('projects.show', $project->slug) }}">
                        Details
                    </x-ui.button>
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
        @empty
            <p class="text-slate-500 sm:col-span-2">No projects to show yet.</p>
        @endforelse
    </div>
</x-ui.section>
