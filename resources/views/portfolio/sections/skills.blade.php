{{--
    Skills section.

    Renders each skill group from config('portfolio.skills') as a heading with
    a row of badge pills.
--}}
<x-ui.section id="skills" eyebrow="What I use" title="Skills"
              description="Technologies and areas I work with day to day.">
    <div class="grid gap-8 sm:grid-cols-2">
        @foreach (config('portfolio.skills') as $group)
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wide text-gray-900">
                    {{ $group['category'] }}
                </h3>
                <div class="mt-4 flex flex-wrap gap-2">
                    @foreach ($group['items'] as $item)
                        <x-ui.badge>{{ $item }}</x-ui.badge>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</x-ui.section>
