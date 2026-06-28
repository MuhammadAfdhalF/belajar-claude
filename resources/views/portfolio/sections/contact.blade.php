{{--
    Contact section — strong closing CTA.

    A dark gradient panel: CTA copy + direct contact on the left, a modern
    contact form on the right. The form posts to ContactMessageController@store
    (behavior unchanged): success flash, per-field errors, old input.
--}}
@php
    $contact = config('portfolio.contact');
    $mail = 'M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75';
@endphp

<section id="contact" class="py-20 md:py-24">
    <div class="mx-auto max-w-5xl px-6">
        <div class="relative overflow-hidden rounded-3xl bg-slate-950 p-8 sm:p-12">

            {{-- Background accents --}}
            <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950"></div>
            <div class="absolute -top-24 -left-16 h-72 w-72 rounded-full bg-blue-500/20 blur-3xl"></div>
            <div class="absolute -bottom-24 -right-12 h-72 w-72 rounded-full bg-amber-500/10 blur-3xl"></div>

            <div class="relative grid gap-10 md:grid-cols-2">

                {{-- CTA copy + direct contact --}}
                <div>
                    <p class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-wide text-amber-400">
                        <span class="h-px w-6 bg-amber-400"></span>
                        Get in touch
                    </p>
                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-white sm:text-4xl">
                        Let's work together
                    </h2>
                    <p class="mt-4 max-w-md text-slate-300">
                        Have a project, a role, or an integration challenge in mind? Send a message
                        and I'll get back to you.
                    </p>

                    <a href="mailto:{{ $contact['email'] }}"
                       class="mt-8 inline-flex items-center gap-3 text-slate-200 transition hover:text-white">
                        <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-white/10 text-blue-300 ring-1 ring-white/10">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $mail }}" />
                            </svg>
                        </span>
                        {{ $contact['email'] }}
                    </a>

                    <div class="mt-6 flex flex-wrap gap-4">
                        @foreach ($contact['socials'] as $social)
                            <a href="{{ $social['url'] }}"
                               class="text-sm font-medium text-slate-300 transition hover:text-white"
                               target="_blank" rel="noopener noreferrer">
                                {{ $social['label'] }}
                            </a>
                        @endforeach
                    </div>
                </div>

                {{-- Form card --}}
                <div class="rounded-2xl bg-white p-6 shadow-xl sm:p-8">
                    @if (session('success'))
                        <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm font-medium text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
                        @csrf

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-900">Name</label>
                                <input id="name" name="name" type="text" value="{{ old('name') }}"
                                       class="mt-1 block w-full rounded-lg border border-slate-200 px-3 py-2.5 text-slate-900 shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30">
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-900">Email</label>
                                <input id="email" name="email" type="email" value="{{ old('email') }}"
                                       class="mt-1 block w-full rounded-lg border border-slate-200 px-3 py-2.5 text-slate-900 shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-slate-900">
                                Subject <span class="font-normal text-slate-400">(optional)</span>
                            </label>
                            <input id="subject" name="subject" type="text" value="{{ old('subject') }}"
                                   class="mt-1 block w-full rounded-lg border border-slate-200 px-3 py-2.5 text-slate-900 shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30">
                            @error('subject')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-slate-900">Message</label>
                            <textarea id="message" name="message" rows="5"
                                      class="mt-1 block w-full rounded-lg border border-slate-200 px-3 py-2.5 text-slate-900 shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <x-ui.button type="submit" class="w-full">Send message</x-ui.button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
