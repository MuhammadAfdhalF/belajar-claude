{{--
    Public homepage.

    For this step it only renders the layout shell with placeholder content.
    Section partials (hero, about, skills, ...) will be added in later steps.
--}}
<x-layouts.app title="Home">

    <div class="mx-auto max-w-5xl px-6 py-24 text-center">
        <h1 class="text-4xl font-bold tracking-tight">
            {{ config('portfolio.profile.name') }}
        </h1>
        <p class="mt-3 text-lg text-gray-600">
            {{ config('portfolio.profile.role') }}
        </p>
        <p class="mt-6 text-gray-500">
            Layout shell is in place. Section partials will be added in the next steps.
        </p>
    </div>

</x-layouts.app>
