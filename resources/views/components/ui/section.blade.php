{{--
    Reusable section wrapper.

    Consistent spacing, an optional anchor id, and an optional heading block
    (eyebrow + title + description). Supports a "dark" mode for dark sections
    (prepared for later steps; light is the default and unchanged).

    Usage:
        <x-ui.section id="about" eyebrow="Who I am" title="About"
                      description="A short intro.">
            ... content ...
        </x-ui.section>

    Props:
        $id           Optional id used as a scroll anchor target.
        $eyebrow      Optional small label shown above the title.
        $title        Optional section heading.
        $description  Optional intro paragraph under the title.
        $dark         When true, uses light-on-dark heading colors.
--}}
@props([
    'id'          => null,
    'eyebrow'     => null,
    'title'       => null,
    'description' => null,
    'dark'        => false,
])

<section @if ($id) id="{{ $id }}" @endif
         {{ $attributes->merge(['class' => 'py-20 md:py-24']) }}>
    <div class="mx-auto max-w-5xl px-6">

        @if ($eyebrow || $title || $description)
            <div class="mb-12 max-w-2xl">
                @if ($eyebrow)
                    <p class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-wide {{ $dark ? 'text-amber-400' : 'text-amber-600' }}">
                        <span class="h-px w-6 {{ $dark ? 'bg-amber-400' : 'bg-amber-500' }}"></span>
                        {{ $eyebrow }}
                    </p>
                @endif

                @if ($title)
                    <h2 class="mt-3 text-3xl font-bold tracking-tight md:text-4xl {{ $dark ? 'text-white' : 'text-slate-900' }}">
                        {{ $title }}
                    </h2>
                @endif

                @if ($description)
                    <p class="mt-4 {{ $dark ? 'text-slate-300' : 'text-slate-600' }}">
                        {{ $description }}
                    </p>
                @endif
            </div>
        @endif

        {{ $slot }}

    </div>
</section>
