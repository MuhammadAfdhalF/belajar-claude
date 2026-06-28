{{--
    Certifications section (Editorial Tech Atelier).

    Credentials from the database ($certifications) as clean cards with a gold
    award icon. "issued_at" is a Carbon date or null.
--}}
@php
    $badgeCheck = 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.249-8.25-3.286z';
    $arrowRight = 'M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3';
@endphp

<x-ui.section id="certifications" eyebrow="Credentials" title="Certifications">
    <div class="grid gap-6 sm:grid-cols-2">
        @forelse ($certifications as $cert)
            <x-ui.card class="flex gap-4">

                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-edge bg-cream text-gold-dark">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $badgeCheck }}" />
                    </svg>
                </span>

                <div>
                    <h3 class="font-display text-lg font-semibold text-forest">
                        {{ $cert->title }}
                    </h3>
                    <p class="mt-1 text-sm text-forest/70">
                        {{ $cert->issuer }}@if ($cert->issued_at) · {{ $cert->issued_at->format('Y') }}@endif
                    </p>

                    @if ($cert->credential_url)
                        <a href="{{ $cert->credential_url }}"
                           class="mt-3 inline-flex items-center gap-1.5 text-sm font-medium text-gold-dark transition-all hover:gap-2.5 hover:text-forest"
                           target="_blank" rel="noopener noreferrer">
                            View credential
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $arrowRight }}" />
                            </svg>
                        </a>
                    @endif
                </div>

            </x-ui.card>
        @empty
            <p class="text-forest/60 sm:col-span-2">No certifications to show yet.</p>
        @endforelse
    </div>
</x-ui.section>
