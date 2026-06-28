{{--
    Contact section (call-to-action).

    Closing CTA with a mailto button and social links from
    config('portfolio.contact').
--}}
@php($contact = config('portfolio.contact'))

<x-ui.section id="contact">
    <div class="rounded-2xl bg-gray-900 px-6 py-16 text-center">
        <h2 class="text-3xl font-bold tracking-tight text-white">
            Let's work together
        </h2>
        <p class="mx-auto mt-3 max-w-xl text-gray-300">
            Have a project, a role, or an integration challenge in mind? I'd love to hear about it.
        </p>

        <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
            <x-ui.button href="mailto:{{ $contact['email'] }}">
                Email me
            </x-ui.button>

            @foreach ($contact['socials'] as $social)
                <a href="{{ $social['url'] }}"
                   class="text-sm font-medium text-gray-300 transition hover:text-white"
                   target="_blank" rel="noopener noreferrer">
                    {{ $social['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</x-ui.section>
