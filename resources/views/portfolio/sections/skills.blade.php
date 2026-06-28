{{--
    Skills section.

    Renders skills grouped by category, one card per category for easy
    scanning. $skillGroups is keyed by category (from PortfolioController);
    each value is a collection of Skill models.
--}}
<x-ui.section id="skills" eyebrow="What I use" title="Skills"
              description="Technologies and areas I work with day to day.">
    <div class="grid gap-6 sm:grid-cols-2">
        @forelse ($skillGroups as $category => $skills)
            <x-ui.card>
                <h3 class="text-sm font-semibold uppercase tracking-wide text-slate-900">
                    {{ $category }}
                </h3>
                <div class="mt-4 flex flex-wrap gap-2">
                    @foreach ($skills as $skill)
                        <x-ui.badge>{{ $skill->name }}</x-ui.badge>
                    @endforeach
                </div>
            </x-ui.card>
        @empty
            <p class="text-slate-500 sm:col-span-2">No skills to show yet.</p>
        @endforelse
    </div>
</x-ui.section>
