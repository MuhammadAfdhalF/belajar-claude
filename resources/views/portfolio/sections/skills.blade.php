{{--
    Tools & Technologies section (Editorial Tech Atelier).

    Skills grouped by category, one refined card per category with a line icon
    and olive chips. $skillGroups is keyed by category (from PortfolioController).
--}}
@php
    $categoryIcons = [
        'Backend & Frameworks' => 'M8 9l-3 3 3 3m8-6l3 3-3 3M14 5l-4 14',
        'APIs & Integration'   => 'M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5',
        'Databases'            => 'M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125',
        'Quality & Operations' => 'M9 12.75L11.25 15 15 9.75M21 12c0 5.25-4.5 8.25-9 9-4.5-.75-9-3.75-9-9V5.25l9-2.25 9 2.25V12z',
    ];
    $fallbackIcon = 'M8 9l-3 3 3 3m8-6l3 3-3 3M14 5l-4 14';
@endphp

<x-ui.section id="skills" eyebrow="What I use" title="Tools & Technologies"
              description="The stack and areas I work with day to day." class="bg-beige">
    <div class="grid gap-6 sm:grid-cols-2">
        @forelse ($skillGroups as $category => $skills)
            <x-ui.card>
                <div class="flex items-center gap-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-lg border border-edge bg-cream text-olive-dark">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $categoryIcons[$category] ?? $fallbackIcon }}" />
                        </svg>
                    </span>
                    <h3 class="font-display text-xl font-semibold text-forest">{{ $category }}</h3>
                </div>
                <div class="mt-5 flex flex-wrap gap-2">
                    @foreach ($skills as $skill)
                        <x-ui.badge variant="olive">{{ $skill->name }}</x-ui.badge>
                    @endforeach
                </div>
            </x-ui.card>
        @empty
            <p class="text-forest/60 sm:col-span-2">No skills to show yet.</p>
        @endforelse
    </div>
</x-ui.section>
