{{--
    Reusable card shell (Editorial Tech Atelier).

    Soft cream surface, thin border, soft editorial shadow, subtle hover lift.
    The "group" class lets child elements react to card hover.

    Usage:
        <x-ui.card> ... </x-ui.card>
        <x-ui.card class="flex flex-col gap-4"> ... </x-ui.card>
--}}
<div {{ $attributes->merge([
    'class' => 'group rounded-xl border border-edge bg-card p-6 '
             . 'shadow-[0_2px_20px_-14px_rgba(31,41,51,0.35)] transition-all duration-300 '
             . 'hover:-translate-y-1 hover:shadow-[0_16px_36px_-18px_rgba(31,41,51,0.35)]',
]) }}>
    {{ $slot }}
</div>
