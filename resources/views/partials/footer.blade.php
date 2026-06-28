{{--
    Site footer (Editorial Tech Atelier).

    Warm beige, thin dividers, serif name, social links from config.
--}}
<footer class="border-t border-edge bg-beige">
    <div class="mx-auto max-w-6xl px-6 py-12">

        <div class="flex flex-col items-center gap-6 sm:flex-row sm:justify-between">

            {{-- Brand --}}
            <div class="flex items-baseline gap-3">
                <span class="font-display text-xl font-semibold tracking-tight text-forest">
                    {{ config('portfolio.profile.name') }}
                </span>
                <span class="text-[0.6rem] font-semibold uppercase tracking-[0.25em] text-gold-dark">
                    {{ config('portfolio.profile.role') }}
                </span>
            </div>

            {{-- Social links --}}
            <ul class="flex flex-wrap justify-center gap-6 text-sm font-medium text-forest/70">
                @foreach (config('portfolio.contact.socials') as $social)
                    <li>
                        <a href="{{ $social['url'] }}"
                           class="nav-link transition hover:text-forest"
                           target="_blank" rel="noopener noreferrer">
                            {{ $social['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="mt-8 border-t border-edge pt-6 text-center text-sm text-forest/60">
            &copy; {{ date('Y') }} {{ config('portfolio.profile.name') }} · Built with Laravel &amp; Tailwind CSS.
        </div>

    </div>
</footer>
