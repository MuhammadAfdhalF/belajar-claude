{{--
    Reusable section wrapper.

    Provides consistent vertical spacing, an optional anchor id, and an
    optional heading block (eyebrow + title + description). The main content
    goes in the slot.

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
--}}
@props([
    'id'          => null,
    'eyebrow'     => null,
    'title'       => null,
    'description' => null,
])

<section @if ($id) id="{{ $id }}" @endif
         {{ $attributes->merge(['class' => 'py-20']) }}>
    <div class="mx-auto max-w-5xl px-6">

        {{-- Heading block (only rendered if any heading prop is provided) --}}
        @if ($eyebrow || $title || $description)
            <div class="mb-12 max-w-2xl">
                @if ($eyebrow)
                    <p class="text-sm font-semibold uppercase tracking-wide text-amber-600">
                        {{ $eyebrow }}
                    </p>
                @endif

                @if ($title)
                    <h2 class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                        {{ $title }}
                    </h2>
                @endif

                @if ($description)
                    <p class="mt-4 text-slate-600">
                        {{ $description }}
                    </p>
                @endif
            </div>
        @endif

        {{-- Section content --}}
        {{ $slot }}

    </div>
</section>
