<?php

/*
|--------------------------------------------------------------------------
| Portfolio Content
|--------------------------------------------------------------------------
|
| Static content for the public portfolio site. Views read this via the
| config() helper, e.g. config('portfolio.profile.name').
|
| This is the single source of truth for now. When the admin CMS is built
| later, the same data shape will come from the database instead — so the
| Blade views won't need to change.
|
*/

return [

    // Basic identity shown in the hero, navbar brand, and footer.
    'profile' => [
        'name'     => 'Your Name',
        'role'     => 'Software Developer',
        'tagline'  => 'I build clean, maintainable web applications.',
        'bio'      => 'Short bio goes here. A couple of sentences about your '
                    . 'background, what you enjoy building, and what you are '
                    . 'looking for.',
        'location' => 'City, Country',
    ],

    // Navigation anchor links. "url" matches the id of each future section.
    'navigation' => [
        ['label' => 'About',          'url' => '#about'],
        ['label' => 'Skills',         'url' => '#skills'],
        ['label' => 'Experience',     'url' => '#experience'],
        ['label' => 'Projects',       'url' => '#projects'],
        ['label' => 'Certifications', 'url' => '#certifications'],
        ['label' => 'Contact',        'url' => '#contact'],
    ],

    // Grouped technical skills.
    'skills' => [
        ['category' => 'Backend',  'items' => ['PHP', 'Laravel', 'MySQL']],
        ['category' => 'Frontend', 'items' => ['Blade', 'Tailwind CSS', 'JavaScript']],
        ['category' => 'Tools',    'items' => ['Git', 'Vite', 'Composer']],
    ],

    // Professional history, newest first.
    'experience' => [
        [
            'company' => 'Example Company',
            'role'    => 'Software Developer',
            'start'   => '2023',
            'end'     => 'Present',
            'summary' => 'Describe your responsibilities and impact here.',
        ],
    ],

    // Showcase of built work.
    'projects' => [
        [
            'title'   => 'Example Project',
            'summary' => 'A short description of what this project does.',
            'tags'    => ['Laravel', 'Tailwind'],
            'url'     => '#',
            'repo'    => '#',
        ],
    ],

    // Credentials earned.
    'certifications' => [
        [
            'title'  => 'Example Certification',
            'issuer' => 'Issuing Organization',
            'date'   => '2024',
            'url'    => '#',
        ],
    ],

    // Contact details and social links (used by footer and contact CTA).
    'contact' => [
        'email'   => 'you@example.com',
        'socials' => [
            ['label' => 'GitHub',   'url' => 'https://github.com/'],
            ['label' => 'LinkedIn', 'url' => 'https://linkedin.com/'],
        ],
    ],

];
