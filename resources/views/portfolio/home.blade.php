{{--
    Public homepage.

    Assembles the portfolio from section partials, in display order. Each
    section reads its content from config/portfolio.php.
--}}
<x-layouts.app title="Home">

    @include('portfolio.sections.hero')
    @include('portfolio.sections.about')
    @include('portfolio.sections.skills')
    @include('portfolio.sections.experience')
    @include('portfolio.sections.projects')
    @include('portfolio.sections.certifications')
    @include('portfolio.sections.contact')

</x-layouts.app>
