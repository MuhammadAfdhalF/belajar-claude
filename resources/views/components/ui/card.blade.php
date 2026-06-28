{{--
    Reusable card shell.

    A premium surface used for project tiles, certification tiles, experience
    items, and more. Soft border, layered shadow, and a subtle hover lift.
    The "group" class lets child elements react to card hover.

    Usage:
        <x-ui.card> ... </x-ui.card>
        <x-ui.card class="flex flex-col gap-4"> ... </x-ui.card>
--}}
<div {{ $attributes->merge([
    'class' => 'group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm '
             . 'transition-all duration-300 hover:-translate-y-1 hover:border-slate-300 hover:shadow-xl',
]) }}>
    {{ $slot }}
</div>
