{{--
    Contact section (Editorial Tech Atelier) — strong closing CTA.

    Split panel: olive CTA copy on the left, cream form card on the right. The
    form posts to ContactMessageController@store (behavior unchanged): success
    flash, per-field errors, old input.
--}}
@php
    $contact = config('portfolio.contact');
    $mail = 'M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75';
@endphp

<section id="contact" class="py-20 md:py-28">
    <div class="mx-auto max-w-5xl px-6">
        <div class="overflow-hidden rounded-3xl border border-edge shadow-[0_20px_50px_-28px_rgba(31,41,51,0.5)]">
            <div class="grid md:grid-cols-2">

                {{-- CTA copy --}}
                <div class="bg-olive-dark p-8 sm:p-12">
                    <p class="inline-flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-gold">
                        <span class="h-px w-8 bg-gold"></span>
                        Get in touch
                    </p>
                    <h2 class="mt-4 font-display text-4xl font-semibold tracking-tight text-cream sm:text-5xl">
                        Let's work together
                    </h2>
                    <p class="mt-4 max-w-md text-cream/70">
                        Have a project, a role, or an integration challenge in mind? Send a message
                        and I'll get back to you.
                    </p>

                    <a href="mailto:{{ $contact['email'] }}"
                       class="mt-8 inline-flex items-center gap-3 text-cream/90 transition hover:text-cream">
                        <span class="flex h-10 w-10 items-center justify-center rounded-lg border border-cream/15 bg-cream/5 text-gold">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $mail }}" />
                            </svg>
                        </span>
                        {{ $contact['email'] }}
                    </a>

                    <div class="mt-6 flex flex-wrap gap-5 text-sm font-medium text-cream/70">
                        @foreach ($contact['socials'] as $social)
                            <a href="{{ $social['url'] }}"
                               class="nav-link transition hover:text-cream"
                               target="_blank" rel="noopener noreferrer">
                                {{ $social['label'] }}
                            </a>
                        @endforeach
                    </div>
                </div>

                {{-- Form card --}}
                <div class="bg-card p-8 sm:p-12">
                    @if (session('success'))
                        <div class="mb-6 rounded-lg border border-olive/30 bg-olive/10 px-4 py-3 text-sm font-medium text-olive-dark">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
                        @csrf

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label for="name" class="block text-sm font-medium text-forest">Name</label>
                                <input id="name" name="name" type="text" value="{{ old('name') }}"
                                       class="mt-1 block w-full rounded-md border border-edge bg-cream px-3 py-2.5 text-forest shadow-sm transition focus:border-gold focus:outline-none focus:ring-2 focus:ring-gold/30">
                                @error('name')
                                    <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-forest">Email</label>
                                <input id="email" name="email" type="email" value="{{ old('email') }}"
                                       class="mt-1 block w-full rounded-md border border-edge bg-cream px-3 py-2.5 text-forest shadow-sm transition focus:border-gold focus:outline-none focus:ring-2 focus:ring-gold/30">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-forest">
                                Subject <span class="font-normal text-forest/50">(optional)</span>
                            </label>
                            <input id="subject" name="subject" type="text" value="{{ old('subject') }}"
                                   class="mt-1 block w-full rounded-md border border-edge bg-cream px-3 py-2.5 text-forest shadow-sm transition focus:border-gold focus:outline-none focus:ring-2 focus:ring-gold/30">
                            @error('subject')
                                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-forest">Message</label>
                            <textarea id="message" name="message" rows="5"
                                      class="mt-1 block w-full rounded-md border border-edge bg-cream px-3 py-2.5 text-forest shadow-sm transition focus:border-gold focus:outline-none focus:ring-2 focus:ring-gold/30">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
                            @enderror
                        </div>

                        <x-ui.button type="submit" class="w-full">Send message</x-ui.button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
