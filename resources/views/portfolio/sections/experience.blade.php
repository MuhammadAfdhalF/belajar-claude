{{--
    Experience section.

    Lists professional history from the database ($experiences, passed by
    PortfolioController) as cards. Dates are Carbon instances (date cast) or
    null; "is_current" shows "Present" as the end date.
--}}
<x-ui.section id="experience" eyebrow="Where I've worked" title="Experience">
    <div class="space-y-5">
        @foreach ($experiences as $job)
            <x-ui.card>
                <div class="flex flex-col gap-1 sm:flex-row sm:items-center sm:justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">
                        {{ $job->position }}
                        <span class="font-normal text-gray-500">· {{ $job->company }}</span>
                    </h3>
                    <p class="text-sm font-medium text-gray-500">
                        {{ $job->start_date?->format('Y') }}
                        – {{ $job->is_current ? 'Present' : $job->end_date?->format('Y') }}
                    </p>
                </div>

                @if ($job->summary)
                    <p class="mt-3 text-gray-600">
                        {{ $job->summary }}
                    </p>
                @endif
            </x-ui.card>
        @endforeach
    </div>
</x-ui.section>
