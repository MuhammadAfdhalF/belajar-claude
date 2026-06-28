# Project Blueprint — Portfolio CMS

> **Status:** Planning document only. No Laravel features, migrations, authentication,
> or packages have been implemented as of this writing. This file describes *what* we
> intend to build and *in what order* — it is the shared reference for future work sessions.

---

## 1. Project Overview

A personal **portfolio CMS for a software developer**, built on **Laravel 12** and
**Tailwind CSS v4**. It has two halves:

- A **public site** that presents the developer's profile — who they are, what they can
  do, where they've worked, what they've built, and how to reach them.
- A future **admin CMS** that lets the owner manage all of that content through a private
  interface instead of editing code.

The goal is a clean, beginner-friendly codebase that is built up in small, verifiable steps.

---

## 2. Goals & Non-Goals

### Tonight's scope (this document)
- ✅ Produce **this blueprint document only**.

### Explicitly *not* tonight
- ❌ No Laravel feature implementation (controllers, models, views, routes).
- ❌ No database migrations.
- ❌ No authentication or admin CRUD.
- ❌ No new package installation (Composer or npm).

### Overall project goals
- A responsive public portfolio covering all sections listed in §4.
- Content eventually editable through an admin area (§6) — not hardcoded forever.
- Code kept simple and well-organized so it doubles as a learning project.

---

## 3. Tech Stack (as currently configured)

| Layer        | Choice                          | Notes                                          |
|--------------|---------------------------------|------------------------------------------------|
| Framework    | Laravel 12                      | PHP ^8.2                                        |
| Styling      | Tailwind CSS v4                 | Via `@tailwindcss/vite` — no `tailwind.config.js` |
| Build tool   | Vite 7                          | `laravel-vite-plugin`, entry: `app.css`, `app.js` |
| Database     | SQLite                          | `DB_CONNECTION=sqlite` — zero-config (revisit in §9) |
| Templating   | Blade                           | Server-rendered HTML                           |

No additional packages are assumed by this blueprint. Anything new (e.g. auth scaffolding)
is a future, separately-approved decision.

---

## 4. Public Site — Page & Section Map

The public-facing experience, in display order:

1. **Homepage / Hero** — name, role/title, short tagline, primary call-to-action buttons.
2. **About** — longer bio, photo, summary of background and interests.
3. **Skills** — grouped technical skills (languages, frameworks, tools).
4. **Work Experience** — professional history as a timeline of roles.
5. **Projects** — showcase of built work with descriptions and links.
6. **Certifications** — credentials earned, with issuer and date.
7. **Contact CTA** — a closing call-to-action to get in touch.

> Layout decision (single scrolling page vs. multiple routed pages) is deferred — see §9.

---

## 5. Content Model (conceptual only)

Plain-English description of the data each section will eventually hold. **No migrations,
no column types, no code** — this is a thinking aid for a later phase.

- **Profile / About** — full name, role/title, tagline, bio, profile image, location.
- **Skill** — name, category (e.g. "Backend"), optional proficiency level.
- **Work Experience** — company, role, start date, end date (or "present"), description, location.
- **Project** — title, slug, summary, description, tech tags, project URL, repository URL, cover image, featured flag.
- **Certification** — title, issuing organization, issue date, credential URL.
- **Contact** — contact email, social links (e.g. GitHub, LinkedIn), optional resume link.

These will be turned into actual models and migrations only in a future, approved phase.

---

## 6. Future Admin CMS (out of scope tonight)

Eventually the owner will manage all of the content above through a **private admin area**
rather than editing files. Planned characteristics (for the future, not now):

- Login-protected (owner only).
- CRUD screens for Projects, Skills, Work Experience, Certifications, and the About/Profile info.
- Image uploads for project covers and profile photo.

The choice of how to build auth (Laravel Breeze vs. manual) is an open question — see §9.

---

## 7. Proposed Folder & Route Layout (reference only)

A *sketch* of where future code would live. **Nothing below exists yet; nothing is being created.**

```
routes/
  web.php            # public routes (home + sections); later, admin routes

app/
  Http/Controllers/
    PortfolioController.php     # public pages (future)
    Admin/                      # admin CRUD controllers (future)
  Models/
    Project.php, Skill.php, Experience.php, Certification.php, Profile.php  (future)

resources/
  views/
    layouts/app.blade.php       # shared master layout (future)
    portfolio/                  # public section partials (future)
    admin/                      # admin screens (future)
  css/app.css                   # Tailwind entry (exists)
  js/app.js                     # JS entry (exists)

database/
  migrations/                   # portfolio tables (future)
  seeders/                      # sample content (future)
```

---

## 8. Phased Roadmap

Build order for future sessions. Each phase is independently runnable and reviewable.

| Phase | Focus | Outcome |
|-------|-------|---------|
| **0. Blueprint** | This document | Shared plan agreed (← we are here) |
| **1. Foundation** | Verify setup; create shared Blade layout | App runs; styled master layout |
| **2. Static public site** | Build all §4 sections with placeholder content | Full portfolio visible, content hardcoded in Blade |
| **3. Data layer** | Models + migrations + seeders for §5 entities | Content stored in SQLite, seeded with samples |
| **4. Dynamic public site** | Controllers feed real data into the views | Public site driven by the database |
| **5. Admin CMS** | Auth + CRUD for managing content (§6) | Owner can edit content without touching code |
| **6. Polish** | Responsiveness, SEO, tests, refinements | Production-ready portfolio |

---

## 9. Open Questions / Decisions Needed

Resolve these before the relevant phase begins:

1. **Database** — keep **SQLite** (simple, zero-config) or switch to **MySQL** for production parity?
2. **Public layout** — one **single scrolling page** with anchored sections, or **multiple routed pages**?
3. **Auth approach (Phase 5)** — use **Laravel Breeze** (a new package) or a **manual** minimal login?
4. **Content priority** — which section should be built first in Phase 2 (e.g. Hero + About first)?
5. **Branding** — any color palette, font, or visual direction to bake into the Tailwind theme?
