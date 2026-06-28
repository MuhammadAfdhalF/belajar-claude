{{--
    Contact section.

    A call-to-action plus a contact form that stores messages via
    ContactMessageController@store. Shows a success flash, per-field validation
    errors, and preserves old input. Email/social links come from
    config('portfolio.contact').
--}}
@php($contact = config('portfolio.contact'))

<x-ui.section id="contact" eyebrow="Get in touch" title="Let's work together"
              description="Have a project, a role, or an integration challenge in mind? Send me a message.">
    <div class="grid gap-8 md:grid-cols-3">

        {{-- Direct contact --}}
        <div class="space-y-4">
            <p class="text-slate-600">Prefer email? Reach me directly:</p>
            <x-ui.button href="mailto:{{ $contact['email'] }}" variant="secondary">
                {{ $contact['email'] }}
            </x-ui.button>
            <div class="flex flex-wrap gap-4 pt-2">
                @foreach ($contact['socials'] as $social)
                    <a href="{{ $social['url'] }}"
                       class="text-sm font-medium text-blue-600 transition hover:text-blue-700"
                       target="_blank" rel="noopener noreferrer">
                        {{ $social['label'] }}
                    </a>
                @endforeach
            </div>
        </div>

        {{-- Message form --}}
        <x-ui.card class="md:col-span-2">
            @if (session('success'))
                <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm font-medium text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
                @csrf

                <div class="grid gap-4 sm:grid-cols-2">
                    {{-- Name --}}
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-900">Name</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}"
                               class="mt-1 block w-full rounded-lg border border-slate-200 px-3 py-2 text-slate-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-900">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}"
                               class="mt-1 block w-full rounded-lg border border-slate-200 px-3 py-2 text-slate-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Subject --}}
                <div>
                    <label for="subject" class="block text-sm font-medium text-slate-900">
                        Subject <span class="font-normal text-slate-400">(optional)</span>
                    </label>
                    <input id="subject" name="subject" type="text" value="{{ old('subject') }}"
                           class="mt-1 block w-full rounded-lg border border-slate-200 px-3 py-2 text-slate-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    @error('subject')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Message --}}
                <div>
                    <label for="message" class="block text-sm font-medium text-slate-900">Message</label>
                    <textarea id="message" name="message" rows="5"
                              class="mt-1 block w-full rounded-lg border border-slate-200 px-3 py-2 text-slate-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <x-ui.button type="submit">Send message</x-ui.button>
                </div>
            </form>
        </x-ui.card>

    </div>
</x-ui.section>
