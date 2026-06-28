{{--
    Reusable card shell.

    A consistent surface used for project tiles, certification tiles, and
    experience items. Provides border, background, padding, rounded corners,
    and a subtle hover effect. Content goes in the slot.

    Usage:
        <x-ui.card>
            <h3 class="font-semibold">Project title</h3>
            <p class="text-gray-600">Description...</p>
        </x-ui.card>

    Extra classes can be passed and will be merged with the defaults:
        <x-ui.card class="flex flex-col gap-4"> ... </x-ui.card>
--}}
<div {{ $attributes->merge([
    'class' => 'rounded-xl border border-gray-200 bg-white p-6 '
             . 'transition hover:-translate-y-0.5 hover:shadow-md',
]) }}>
    {{ $slot }}
</div>
