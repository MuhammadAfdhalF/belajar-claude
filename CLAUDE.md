# CLAUDE.md

Project context and working rules for Claude Code. Keep prompts short — the
shared context lives here.

## 1. Project summary

A Laravel + Tailwind **portfolio CMS** for Muhammad Afdhal. F (Software
Developer). Two halves: a public portfolio site (built first) and a future
admin CMS for managing content. Built incrementally in small, approved steps.

## 2. Tech stack

- Laravel 12 (PHP ^8.2), Blade templating
- Tailwind CSS v4 via `@tailwindcss/vite` (no `tailwind.config.js`)
- Vite 7 (`laravel-vite-plugin`); entries: `resources/css/app.css`, `resources/js/app.js`
- SQLite (`DB_CONNECTION=sqlite`)

## 3. Current status

- ✅ Step 1: data source `config/portfolio.php` + layout shell (layout, navbar, footer, home), `/` route
- ✅ Step 2: reusable UI components in `resources/views/components/ui/` (section, button, card, badge)
- ✅ Step 3: section partials in `resources/views/portfolio/sections/` (hero, about, skills, experience, projects, certifications, contact)
- ⏳ Pending: CSS theme tokens (`app.css`), navigation JS (`app.js`)
- ❌ Not started: database, models, auth, admin CMS

## 4. Coding rules

- All public content is **static and read from `config/portfolio.php`** via `config('portfolio.*')`. Do not hardcode content in Blade.
- Reuse the `x-ui.*` components; do not duplicate their styling.
- Tailwind utility classes go directly in Blade.
- Work **one step at a time** and list files to be created/modified **before** editing; wait for approval.
- Do not install Composer/npm packages without explicit approval.
- Do not add database, auth, or admin code until that step is reached.
- Keep code beginner-friendly and readable.

## 5. Avoid reading unless necessary

These are large/generated and rarely relevant:

- `vendor/`, `node_modules/`
- `storage/framework/`, `storage/logs/`, `public/build/`
- `composer.lock`, `package-lock.json`
- `.env` (secrets — never commit; edit only when explicitly needed)

## 6. Common local commands

```bash
composer run dev          # server + queue + logs + vite together
php artisan serve         # app server only
npm run dev               # vite dev server (Tailwind compile/HMR)
npm run build             # production asset build
php artisan key:generate  # set APP_KEY in .env (first-time setup)
php artisan view:clear    # clear compiled Blade views
php artisan optimize:clear # clear all caches if something looks stale
```

## 7. Git workflow

- One commit per completed step; clear, descriptive messages.
- Never commit `.env` (gitignored).
- Branch off `main` for larger changes; `main` is the default/PR base.
- Commit only when the user asks.
