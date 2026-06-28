{{--
    Experience section.

    Lists professional history from config('portfolio.experience') as cards.
--}}
<x-ui.section id="experience" eyebrow="Where I've worked" title="Experience">
    <div class="space-y-5">
        @foreach (config('portfolio.experience') as $job)
            <x-ui.card>
                <div class="flex flex-col gap-1 sm:flex-row sm:items-center sm:justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">
                        {{ $job['role'] }}
                        <span class="font-normal text-gray-500">· {{ $job['company'] }}</span>
                    </h3>
                    <p class="text-sm font-medium text-gray-500">
                        {{ $job['start'] }} – {{ $job['end'] }}
                    </p>
                </div>
                <p class="mt-3 text-gray-600">
                    {{ $job['summary'] }}
                </p>
            </x-ui.card>
        @endforeach
    </div>
</x-ui.section>
