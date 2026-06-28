{{--
    Public homepage (Editorial Tech Atelier).

    Assembles the portfolio from section partials, in editorial order, with
    alternating cream/beige backgrounds. Each section reads its content from
    the database or config/portfolio.php. The Work Process section is static
    and lives inline here (visual only).
--}}
<x-layouts.app title="Home">

    @include('portfolio.sections.hero')
    @include('portfolio.sections.about')

    {{-- Work Process (static, visual only) --}}
    <x-ui.section id="process" eyebrow="How I work" title="Work Process"
                  description="A simple, reliable approach — from understanding the problem to supporting it in production.">
        <div class="grid gap-x-10 gap-y-10 sm:grid-cols-2 lg:grid-cols-3">
            @foreach (config('portfolio.process') as $i => $step)
                <div class="border-t border-edge pt-5">
                    <span class="font-display text-3xl font-semibold text-gold-dark">
                        {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>
                    <h3 class="mt-2 font-display text-xl font-semibold text-forest">{{ $step['title'] }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-forest/70">{{ $step['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </x-ui.section>

    @include('portfolio.sections.skills')
    @include('portfolio.sections.projects')
    @include('portfolio.sections.experience')
    @include('portfolio.sections.certifications')
    @include('portfolio.sections.contact')

</x-layouts.app>
