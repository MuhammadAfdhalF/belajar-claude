{{--
    Reusable section wrapper (Editorial Tech Atelier).

    Editorial spacing, an optional anchor id, and an optional heading block
    (uppercase gold eyebrow + serif display title + description). Supports a
    "dark" mode for olive sections.

    Props:
        $id           Optional id used as a scroll anchor target.
        $eyebrow      Optional small uppercase label above the title.
        $title        Optional serif section heading.
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
         {{ $attributes->merge(['class' => 'py-20 md:py-28']) }}>
    <div class="mx-auto max-w-5xl px-6">

        @if ($eyebrow || $title || $description)
            <div class="mb-12 max-w-2xl">
                @if ($eyebrow)
                    <p class="inline-flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] {{ $dark ? 'text-gold' : 'text-gold-dark' }}">
                        <span class="h-px w-8 {{ $dark ? 'bg-gold' : 'bg-gold-dark' }}"></span>
                        {{ $eyebrow }}
                    </p>
                @endif

                @if ($title)
                    <h2 class="mt-4 font-display text-4xl font-semibold tracking-tight md:text-5xl {{ $dark ? 'text-cream' : 'text-forest' }}">
                        {{ $title }}
                    </h2>
                @endif

                @if ($description)
                    <p class="mt-4 {{ $dark ? 'text-cream/70' : 'text-forest/70' }}">
                        {{ $description }}
                    </p>
                @endif
            </div>
        @endif

        {{ $slot }}

    </div>
</section>
