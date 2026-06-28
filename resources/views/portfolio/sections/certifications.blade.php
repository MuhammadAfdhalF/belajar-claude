{{--
    Certifications section.

    Lists credentials from config('portfolio.certifications') as cards.
--}}
<x-ui.section id="certifications" eyebrow="Credentials" title="Certifications">
    <div class="grid gap-6 sm:grid-cols-2">
        @foreach (config('portfolio.certifications') as $cert)
            <x-ui.card>
                <h3 class="text-base font-semibold text-gray-900">
                    {{ $cert['title'] }}
                </h3>
                <p class="mt-1 text-sm text-gray-600">
                    {{ $cert['issuer'] }} · {{ $cert['date'] }}
                </p>

                @if (!empty($cert['url']) && $cert['url'] !== '#')
                    <a href="{{ $cert['url'] }}"
                       class="mt-3 inline-block text-sm font-medium text-indigo-600 hover:text-indigo-700"
                       target="_blank" rel="noopener noreferrer">
                        View credential →
                    </a>
                @endif
            </x-ui.card>
        @endforeach
    </div>
</x-ui.section>
