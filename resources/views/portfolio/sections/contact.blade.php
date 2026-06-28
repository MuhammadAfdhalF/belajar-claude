{{--
    Contact section (call-to-action).

    Closing CTA with a mailto button and social links from
    config('portfolio.contact').
--}}
@php($contact = config('portfolio.contact'))

<x-ui.section id="contact">
    <div class="rounded-3xl bg-slate-900 px-6 py-16 text-center">
        <p class="text-sm font-semibold uppercase tracking-wide text-amber-400">
            Get in touch
        </p>
        <h2 class="mt-3 text-3xl font-bold tracking-tight text-white sm:text-4xl">
            Let's work together
        </h2>
        <p class="mx-auto mt-4 max-w-xl text-slate-300">
            Have a project, a role, or an integration challenge in mind? I'd love to hear about it.
        </p>

        <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
            <x-ui.button href="mailto:{{ $contact['email'] }}">
                Email me
            </x-ui.button>

            @foreach ($contact['socials'] as $social)
                <a href="{{ $social['url'] }}"
                   class="text-sm font-medium text-slate-300 transition hover:text-white"
                   target="_blank" rel="noopener noreferrer">
                    {{ $social['label'] }}
                </a>
            @endforeach
        </div>

        <p class="mt-6 text-sm text-slate-400">{{ $contact['email'] }}</p>
    </div>
</x-ui.section>
