# Portfolio CMS

A personal portfolio website for **Muhammad Afdhal. F** (Software Developer),
built with Laravel 12 and Tailwind CSS v4. The public portfolio is complete
(Phase A); an admin CMS for managing content is planned for a later phase.

See [docs/project-blueprint.md](docs/project-blueprint.md) and
[docs/phase-a-public-site.md](docs/phase-a-public-site.md) for the plan, and
[CLAUDE.md](CLAUDE.md) for working conventions.

## Features (Phase A — public site)

- Single-page portfolio: hero, about, skills, experience, projects,
  certifications, and a contact section.
- Content for projects, experiences, skills, and certifications is stored in
  the database and rendered via Eloquent; profile/contact copy lives in
  `config/portfolio.php`.
- Project detail pages at `/projects/{slug}` (404 on unknown slug).
- Working contact form that validates input and stores messages in the
  `contact_messages` table (no email sending yet).
- Responsive layout with a mobile navigation menu and a clean
  white / blue / amber / slate design system.
- Basic SEO: per-page `<title>`, meta description, and Open Graph tags.

## Tech stack

- Laravel 12 (PHP 8.2), Blade
- Tailwind CSS v4 via `@tailwindcss/vite`
- Vite 7
- MySQL (configurable in `.env`)

## Local setup

```bash
composer install
npm install
cp .env.example .env        # then set your DB credentials
php artisan key:generate
php artisan migrate
php artisan db:seed          # sample portfolio content
composer run dev             # server + queue + logs + vite
```

Then open http://127.0.0.1:8000.

## Editing content

- **Profile / contact:** edit `config/portfolio.php`.
- **Projects / experience / skills / certifications:** rows in the database
  (seeded by `database/seeders`). A future admin CMS will manage these.

## License

MIT.
