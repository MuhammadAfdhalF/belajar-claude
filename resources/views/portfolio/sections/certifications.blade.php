{{--
    Certifications section.

    Credentials from the database ($certifications) as cards with a small
    credential icon. "issued_at" is a Carbon date or null.
--}}
<x-ui.section id="certifications" eyebrow="Credentials" title="Certifications" class="bg-slate-50">
    <div class="grid gap-6 sm:grid-cols-2">
        @foreach ($certifications as $cert)
            <x-ui.card class="flex gap-4">

                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 12l2 2 4-4m-9 9V5a2 2 0 012-2h8a2 2 0 012 2v14l-3-2-3 2-3-2-2 1z" />
                    </svg>
                </span>

                <div>
                    <h3 class="text-base font-semibold text-slate-900">
                        {{ $cert->title }}
                    </h3>
                    <p class="mt-1 text-sm text-slate-600">
                        {{ $cert->issuer }}@if ($cert->issued_at) · {{ $cert->issued_at->format('Y') }}@endif
                    </p>

                    @if ($cert->credential_url)
                        <a href="{{ $cert->credential_url }}"
                           class="mt-3 inline-block text-sm font-medium text-blue-600 hover:text-blue-700"
                           target="_blank" rel="noopener noreferrer">
                            View credential →
                        </a>
                    @endif
                </div>

            </x-ui.card>
        @endforeach
    </div>
</x-ui.section>
