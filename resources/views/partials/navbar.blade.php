{{--
    Top navigation bar (Editorial Tech Atelier).

    Thin, warm, typographic. Serif name + micro role label, animated gold
    underlines, refined CTA. The mobile menu is driven by
    resources/js/modules/navigation.js via the data-nav-* attributes.
--}}
<header class="sticky top-0 z-40 border-b border-edge bg-cream/85 backdrop-blur">
    <nav class="mx-auto max-w-6xl px-6 py-4">
        <div class="flex items-center justify-between gap-4">

            {{-- Brand --}}
            <a href="/" class="flex min-w-0 items-baseline gap-3">
                <span class="truncate font-display text-2xl font-semibold tracking-tight text-forest">
                    {{ config('portfolio.profile.name') }}
                </span>
                <span class="hidden whitespace-nowrap text-[0.6rem] font-semibold uppercase tracking-[0.25em] text-gold-dark md:inline">
                    {{ config('portfolio.profile.role') }}
                </span>
            </a>

            {{-- Desktop nav --}}
            <div class="hidden items-center gap-8 md:flex">
                <ul class="flex gap-7 text-sm font-medium text-forest/70">
                    @foreach (config('portfolio.navigation') as $item)
                        <li>
                            <a href="{{ $item['url'] }}" class="nav-link transition hover:text-forest">
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <a href="#contact"
                   class="rounded-md border border-forest/30 px-4 py-1.5 text-sm font-semibold text-forest transition-all duration-200 hover:-translate-y-0.5 hover:border-forest hover:bg-forest hover:text-cream">
                    Get in touch
                </a>
            </div>

            {{-- Mobile toggle --}}
            <button type="button"
                    data-nav-toggle
                    aria-expanded="false"
                    aria-controls="mobile-menu"
                    aria-label="Toggle navigation menu"
                    class="inline-flex items-center justify-center rounded-md p-2 text-forest transition hover:bg-beige md:hidden">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        {{-- Mobile menu (hidden by default; toggled by navigation.js) --}}
        <ul id="mobile-menu"
            data-nav-menu
            class="hidden flex-col gap-1 pt-4 text-sm font-medium text-forest/80 md:hidden">
            @foreach (config('portfolio.navigation') as $item)
                <li>
                    <a href="{{ $item['url'] }}"
                       data-nav-link
                       class="block rounded-md px-2 py-2 transition hover:bg-beige hover:text-forest">
                        {{ $item['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
