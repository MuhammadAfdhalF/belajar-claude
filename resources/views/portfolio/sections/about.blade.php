{{--
    About section.

    Readable bio plus a "quick facts" card, pulled from
    config('portfolio.profile').
--}}
@php($profile = config('portfolio.profile'))

<x-ui.section id="about" eyebrow="Who I am" title="About" class="bg-slate-50">
    <div class="grid gap-10 md:grid-cols-3">

        {{-- Bio --}}
        <div class="md:col-span-2">
            <p class="text-lg leading-relaxed text-slate-600">
                {{ $profile['bio'] }}
            </p>
        </div>

        {{-- Quick facts --}}
        <x-ui.card class="h-fit">
            <dl class="space-y-4 text-sm">
                <div>
                    <dt class="font-semibold text-slate-900">Role</dt>
                    <dd class="mt-0.5 text-slate-600">{{ $profile['role'] }}</dd>
                </div>
                @if (!empty($profile['location']))
                    <div>
                        <dt class="font-semibold text-slate-900">Location</dt>
                        <dd class="mt-0.5 text-slate-600">{{ $profile['location'] }}</dd>
                    </div>
                @endif
                @if (!empty($profile['focus']))
                    <div>
                        <dt class="font-semibold text-slate-900">Focus</dt>
                        <dd class="mt-0.5 text-slate-600">{{ $profile['focus'] }}</dd>
                    </div>
                @endif
            </dl>
        </x-ui.card>

    </div>
</x-ui.section>
