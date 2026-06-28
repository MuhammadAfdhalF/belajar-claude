{{--
    Experience section.

    Professional history from the database ($experiences) rendered as a
    vertical timeline. Dates are Carbon (date cast) or null; "is_current"
    shows "Present" as the end date.
--}}
<x-ui.section id="experience" eyebrow="Where I've worked" title="Experience" class="bg-slate-50">
    <div class="space-y-6">
        @foreach ($experiences as $job)
            <div class="grid grid-cols-[auto_1fr] gap-x-4">

                {{-- Timeline marker + connector --}}
                <div class="flex flex-col items-center">
                    <span class="mt-1.5 h-3 w-3 shrink-0 rounded-full bg-blue-600 ring-4 ring-blue-50"></span>
                    @unless ($loop->last)
                        <span class="mt-1 w-px flex-1 bg-slate-200"></span>
                    @endunless
                </div>

                {{-- Entry --}}
                <div class="pb-2">
                    <h3 class="text-lg font-semibold text-slate-900">
                        {{ $job->position }}
                        <span class="font-normal text-slate-500">· {{ $job->company }}</span>
                    </h3>
                    <p class="mt-1 text-sm font-medium text-amber-600">
                        {{ $job->start_date?->format('Y') }}
                        – {{ $job->is_current ? 'Present' : $job->end_date?->format('Y') }}
                        @if ($job->location)
                            <span class="text-slate-400">· {{ $job->location }}</span>
                        @endif
                    </p>
                    @if ($job->summary)
                        <p class="mt-3 max-w-2xl text-slate-600">
                            {{ $job->summary }}
                        </p>
                    @endif
                </div>

            </div>
        @endforeach
    </div>
</x-ui.section>
