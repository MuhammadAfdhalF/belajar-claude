{{--
    Skills section.

    Renders skills grouped by category. $skillGroups is a collection keyed by
    category (passed by PortfolioController); each value is a collection of
    Skill models.
--}}
<x-ui.section id="skills" eyebrow="What I use" title="Skills"
              description="Technologies and areas I work with day to day.">
    <div class="grid gap-8 sm:grid-cols-2">
        @foreach ($skillGroups as $category => $skills)
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wide text-gray-900">
                    {{ $category }}
                </h3>
                <div class="mt-4 flex flex-wrap gap-2">
                    @foreach ($skills as $skill)
                        <x-ui.badge>{{ $skill->name }}</x-ui.badge>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</x-ui.section>
