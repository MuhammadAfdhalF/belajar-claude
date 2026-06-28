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
| NOTE: Fields marked "EDIT ME" below are placeholders (employer names,
| dates, links, email). Replace them with your real details.
|
*/

return [

    // Basic identity shown in the hero, navbar brand, and footer.
    'profile' => [
        'name'     => 'Muhammad Afdhal. F',
        'role'     => 'Software Developer',
        'tagline'  => 'Building reliable web applications and healthcare system integrations.',
        'bio'      => 'Software Developer experienced in building and maintaining web '
                    . 'applications with Laravel and Yii2. I focus on REST API integration, '
                    . 'database troubleshooting across PostgreSQL and MySQL, and production '
                    . 'support. I have hands-on experience with Indonesian healthcare '
                    . 'integrations including SATUSEHAT and BPJS bridging, plus QA and '
                    . 'testing to keep releases stable.',
        'location' => 'Indonesia', // EDIT ME — set your city if you like
        'status'   => 'Open to new opportunities',
        'focus'    => 'Healthcare system integrations & REST APIs',

        // Short capability chips shown in the hero. "icon" maps to an inline
        // SVG in the hero section.
        'highlights' => [
            ['label' => 'Backend Development',    'icon' => 'code'],
            ['label' => 'Healthcare Integration', 'icon' => 'heart'],
            ['label' => 'Production Support',     'icon' => 'shield'],
            ['label' => 'Database & API',         'icon' => 'database'],
        ],

        // Non-numeric focus-area stats shown in the hero strip (no invented metrics).
        'stats' => [
            ['label' => 'Laravel & Yii2',       'icon' => 'code'],
            ['label' => 'REST API Integration', 'icon' => 'api'],
            ['label' => 'Healthcare Systems',   'icon' => 'health'],
            ['label' => 'Database Support',     'icon' => 'database'],
        ],
    ],

    // Navigation anchor links. "url" matches the id of each section.
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
        ['category' => 'Backend & Frameworks', 'items' => ['PHP', 'Laravel', 'Yii2']],
        ['category' => 'APIs & Integration',   'items' => ['REST API Integration', 'SATUSEHAT Bridging', 'BPJS Bridging']],
        ['category' => 'Databases',            'items' => ['PostgreSQL', 'MySQL', 'Query Troubleshooting']],
        ['category' => 'Quality & Operations', 'items' => ['QA / Testing', 'Production Support']],
    ],

    // Professional history, newest first.
    // EDIT ME — replace company name and dates with your real experience.
    'experience' => [
        [
            'company' => 'Healthcare Technology Company',
            'role'    => 'Software Developer',
            'start'   => '2022',
            'end'     => 'Present',
            'summary' => 'Develop and maintain web applications using Laravel and Yii2. '
                       . 'Integrate REST APIs and build SATUSEHAT and BPJS bridging for '
                       . 'healthcare data exchange. Troubleshoot PostgreSQL and MySQL '
                       . 'issues, provide production support, and run QA testing to keep '
                       . 'releases stable.',
        ],
    ],

    // Showcase of built work.
    // EDIT ME — update titles, descriptions, and links to real projects.
    'projects' => [
        [
            'title'   => 'SATUSEHAT Bridging Integration',
            'summary' => 'Integration service connecting clinic and hospital systems to the '
                       . 'SATUSEHAT national health platform through secure REST APIs.',
            'tags'    => ['Laravel', 'REST API', 'SATUSEHAT'],
            'url'     => '#',
            'repo'    => '#',
        ],
        [
            'title'   => 'BPJS Bridging Service',
            'summary' => 'Bridging module for BPJS eligibility checks and claim data exchange '
                       . 'using authenticated REST API integration.',
            'tags'    => ['PHP', 'REST API', 'BPJS'],
            'url'     => '#',
            'repo'    => '#',
        ],
        [
            'title'   => 'Production Support & DB Troubleshooting',
            'summary' => 'Ongoing production support resolving PostgreSQL and MySQL '
                       . 'performance and data-integrity issues for live systems.',
            'tags'    => ['PostgreSQL', 'MySQL', 'Production Support'],
            'url'     => '#',
            'repo'    => '#',
        ],
    ],

    // Credentials earned.
    // EDIT ME — add your real certifications, or remove this section's data.
    'certifications' => [
        [
            'title'  => 'Add your certification here',
            'issuer' => 'Issuing Organization',
            'date'   => '2024',
            'url'    => '#',
        ],
    ],

    // Contact details and social links (used by contact CTA and footer).
    'contact' => [
        'email'   => 'you@example.com', // EDIT ME — your public contact email
        'socials' => [
            ['label' => 'GitHub',   'url' => 'https://github.com/'],   // EDIT ME
            ['label' => 'LinkedIn', 'url' => 'https://linkedin.com/'], // EDIT ME
        ],
    ],

];
