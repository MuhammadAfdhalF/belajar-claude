# Phase A — Public Portfolio Site

Planning document for the public-facing phase. Implementation happens in later,
separately-approved steps. See also [CLAUDE.md](../CLAUDE.md) and
[project-blueprint.md](project-blueprint.md).

## 1. Goal

Deliver a clean, professional public portfolio for Muhammad Afdhal. F that is
visually polished, responsive, and easy to read. The data layer and homepage are
already wired to the database (Steps 5–7); Phase A focuses on **visual quality
and the visitor experience**, plus a working contact form.

## 2. Design direction

- Clean, professional software-developer portfolio.
- White-dominant background with generous whitespace.
- Blue as the primary color; gold/amber as a sparing accent.
- Slate gray for neutral text and borders.
- Soft borders, rounded cards, consistent spacing.
- Professional and readable — restrained, not too colorful.

## 3. Color palette

| Role        | Tailwind token            | Notes                          |
|-------------|---------------------------|--------------------------------|
| Background  | `white` / `slate-50`      | Page and section backgrounds   |
| Text        | `slate-900`               | Headings and body              |
| Muted text  | `slate-500` / `slate-600` | Secondary/supporting text      |
| Primary     | `blue-600` / `blue-700`   | Links, primary buttons, accents|
| Accent      | `amber-500` / `amber-600` | Sparing highlights only        |
| Border      | `slate-200`               | Card and divider borders       |

> Today the UI uses indigo; Phase A A1 migrates the accent token to blue and
> introduces the amber accent.

## 4. Step breakdown

- **A1 — Design system polish**
  Update theme tokens (blue primary, amber accent, slate neutrals) and align the
  `x-ui.*` components (section, button, card, badge) to the palette.

- **A2 — Homepage visual refresh**
  Apply the palette and spacing rhythm across hero, about, skills, experience,
  projects, certifications, and contact sections for a cohesive look.

- **A3 — Project detail page**
  Refine `projects/show` layout: clearer hierarchy, metadata, and navigation
  back to the homepage.

- **A4 — Contact form**
  Add a real contact form (name, email, message) with validation. Submission
  handling kept simple (e.g. log/mail) — no admin storage yet.

- **A5 — Public polish**
  Responsive checks, accessibility (focus states, alt text, contrast), basic SEO
  meta/title, and final spacing/typography cleanup.

## 5. Out of scope

- Admin CMS, authentication, and CRUD screens.
- New database tables, migrations, or seeders.
- New third-party packages.
- Any backend storage of contact submissions (Phase B).

## 6. Done criteria

- Palette and spacing applied consistently across all public pages.
- Homepage and project detail page look polished on mobile and desktop.
- Contact form validates input and gives clear success/error feedback.
- No console errors; reasonable color contrast and keyboard focus states.
- Content still loads from the database (projects/experience/skills/certs) and
  from `config/portfolio.php` (profile/contact).

## 7. Git workflow reminder

- One commit per completed step (A1–A5), with a clear message.
- Never commit `.env` (gitignored).
- Branch off `main` for larger changes; `main` is the PR base.
- Commit only when the user asks.
