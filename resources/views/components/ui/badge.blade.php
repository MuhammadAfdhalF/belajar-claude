{{--
    Reusable badge / pill.

    A small rounded label used for skills and tech tags.

    Usage:
        <x-ui.badge>Laravel</x-ui.badge>

    Extra classes are merged with the defaults if needed.
--}}
<span {{ $attributes->merge([
    'class' => 'inline-flex items-center rounded-full bg-gray-100 px-3 py-1 '
             . 'text-xs font-medium text-gray-700',
]) }}>
    {{ $slot }}
</span>
