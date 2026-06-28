{{--
    About section.

    Short bio and location, pulled from config('portfolio.profile').
--}}
@php($profile = config('portfolio.profile'))

<x-ui.section id="about" eyebrow="Who I am" title="About">
    <div class="max-w-2xl">
        <p class="text-lg leading-relaxed text-gray-600">
            {{ $profile['bio'] }}
        </p>

        @if (!empty($profile['location']))
            <p class="mt-6 text-sm font-medium text-gray-500">
                📍 {{ $profile['location'] }}
            </p>
        @endif
    </div>
</x-ui.section>
