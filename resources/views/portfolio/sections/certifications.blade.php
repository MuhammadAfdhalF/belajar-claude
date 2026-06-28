{{--
    Certifications section.

    Lists credentials from the database ($certifications, passed by
    PortfolioController) as cards. "issued_at" is a Carbon date or null.
--}}
<x-ui.section id="certifications" eyebrow="Credentials" title="Certifications">
    <div class="grid gap-6 sm:grid-cols-2">
        @foreach ($certifications as $cert)
            <x-ui.card>
                <h3 class="text-base font-semibold text-gray-900">
                    {{ $cert->title }}
                </h3>
                <p class="mt-1 text-sm text-gray-600">
                    {{ $cert->issuer }}@if ($cert->issued_at) · {{ $cert->issued_at->format('Y') }}@endif
                </p>

                @if ($cert->credential_url)
                    <a href="{{ $cert->credential_url }}"
                       class="mt-3 inline-block text-sm font-medium text-indigo-600 hover:text-indigo-700"
                       target="_blank" rel="noopener noreferrer">
                        View credential →
                    </a>
                @endif
            </x-ui.card>
        @endforeach
    </div>
</x-ui.section>
