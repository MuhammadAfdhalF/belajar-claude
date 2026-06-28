{{--
    Skills section.

    Skills grouped by category, one premium card per category with an icon and
    blue chips. $skillGroups is keyed by category (from PortfolioController).
--}}
@php
    $categoryIcons = [
        'Backend & Frameworks' => 'M8 9l-3 3 3 3m8-6l3 3-3 3M14 5l-4 14',
        'APIs & Integration'   => 'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z',
        'Databases'            => 'M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125',
        'Quality & Operations' => 'M9 12.75L11.25 15 15 9.75M21 12c0 5.25-4.5 8.25-9 9-4.5-.75-9-3.75-9-9V5.25l9-2.25 9 2.25V12z',
    ];
    $fallbackIcon = 'M8 9l-3 3 3 3m8-6l3 3-3 3M14 5l-4 14';
@endphp

<x-ui.section id="skills" eyebrow="What I use" title="Skills"
              description="Technologies and areas I work with day to day.">
    <div class="grid gap-6 sm:grid-cols-2">
        @forelse ($skillGroups as $category => $skills)
            <x-ui.card>
                <div class="flex items-center gap-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-br from-blue-600 to-blue-800 text-white shadow-sm">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $categoryIcons[$category] ?? $fallbackIcon }}" />
                        </svg>
                    </span>
                    <h3 class="text-base font-semibold text-slate-900">{{ $category }}</h3>
                </div>
                <div class="mt-5 flex flex-wrap gap-2">
                    @foreach ($skills as $skill)
                        <x-ui.badge variant="blue">{{ $skill->name }}</x-ui.badge>
                    @endforeach
                </div>
            </x-ui.card>
        @empty
            <p class="text-slate-500 sm:col-span-2">No skills to show yet.</p>
        @endforelse
    </div>
</x-ui.section>
