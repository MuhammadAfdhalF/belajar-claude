# Phase A — Redesign Brief: Editorial Tech Atelier

A **redesign pass** for the already-completed public portfolio. This is a visual
direction only — functionality (data flow, routes, contact form, database-backed
homepage) stays the same. See [phase-a-public-site.md](phase-a-public-site.md)
and [CLAUDE.md](../CLAUDE.md).

> **Note:** This brief replaces the earlier dark-navy / blue / amber "energetic
> tech-glow" direction. That aesthetic is retired. The new theme below
> (warm, editorial, magazine-style) is the single source of truth.

## 1. Theme: Editorial Tech Atelier

A warm, premium, magazine-style portfolio — elegant and memorable, developer-focused
but deliberately *not* a typical dark/neon tech template.

**Overall mood:** warm · premium · aesthetic · elegant · modern editorial ·
magazine-like · memorable · developer-focused (not dark/neon).

## 2. Current design problems (vs. the new direction)

- Current look (post energetic-redesign) is dark, blue, and tech-glow heavy —
  generic and not memorable.
- Lacks editorial warmth, serif character, and magazine-style composition.
- Layouts are symmetrical/uniform rather than expressive and asymmetric.
- Typography is all-sans; no elegant display character.

## 3. Visual direction

- Cream / beige base background.
- Olive / sage green panels.
- Muted gold accents (sparingly).
- Charcoal / dark-forest text.
- Huge **serif display headings**; clean **sans body** text.
- Small uppercase labels (eyebrows, section kickers).
- Thin borders and elegant divider lines.
- Asymmetric, magazine-style layouts.
- Soft shadows; generous editorial spacing.
- Line-style icons; subtle animation only.

## 4. Color direction (recommended palette)

| Role               | Hex       |
|--------------------|-----------|
| Cream background   | `#F4EBDD` |
| Warm beige surface | `#E7DCC7` |
| Soft cream card    | `#FBF7EF` |
| Olive sage         | `#7A8062` |
| Dark olive         | `#39422D` |
| Forest text        | `#263524` |
| Muted gold         | `#B8944D` |
| Soft border        | `#D6C8AD` |
| Charcoal text      | `#1F2933` |

Cream dominates; olive for panels/dark sections; gold for accents and small
highlights; forest/charcoal for text. No neon, no glow.

## 5. Typography direction

- **Display headings:** elegant serif — Cormorant Garamond, Playfair Display,
  Instrument Serif, or similar. Large name/hero headings use serif display.
- **Body & navigation:** clean sans — Manrope, Inter, Plus Jakarta Sans, or similar.
- Google Fonts may be loaded via a layout `<link>` in later implementation.
- Always provide fallback font stacks (e.g. `serif` / `system-ui, sans-serif`).
- Keep body and nav highly readable; reserve serif for display.

## 6. Developer adaptation

Portfolio for **Muhammad Afdhal. F**, Software Developer. The design should
highlight: Laravel & Yii2 development, REST API integration, healthcare system
integration (SATUSEHAT / BPJS), database troubleshooting (PostgreSQL / MySQL),
production support, and a QA / testing mindset.

## 7. Hero direction

- Large **serif name**; asymmetric editorial layout.
- Cream / olive / gold palette.
- A **developer visual panel** instead of a portrait/photo — e.g. a terminal/code
  card, API-integration card, database card, healthcare-system card, or
  dashboard-style mockup.
- CTA buttons.
- A **stats strip** (editorial-style) — e.g. years of experience, systems
  integrated, focus areas.

## 8. Homepage section direction

- **Selected Projects** — magazine-style tiles.
- **Tools & Technologies** — refined category cards or circular chips.
- **About** — editorial text block with quick facts.
- **Work Process** (add if useful) — Understand · Design Flow · Build ·
  Integrate · Validate · Deliver.
- **Experience** — elegant timeline.
- **Certifications** — credential cards with subtle gold/icon accents.
- **Contact** — strong closing CTA: dark **olive** panel with a **cream** form card.

## 9. Animation direction

- Subtle hover lift; arrow movement on buttons; link underline animation.
- Soft card shadow on hover; gentle fade-in where useful.
- No distracting loops, no neon glow, no bouncing.
- Respect reduced-motion.

## 10. Icon direction

- Inline SVG **line-style** icons, thin stroke.
- Olive / gold coloring; consistent size and style.
- Avoid emoji as the main visual language.

## 11. Implementation plan (later prompts)

- **Prompt 1** — update this redesign brief only *(this document)*.
- **Prompt 2** — global editorial design system (tokens, fonts) + navbar / footer /
  `x-ui.*` components + hero + stats strip.
- **Prompt 3** — remaining homepage sections + project detail + contact + 404 +
  responsive QA.

## 12. Out of scope

- Admin CMS, authentication, backend logic changes.
- Routes, controllers, models, migrations, seeders.
- Database structure changes.
- Package installation (unless explicitly approved).
- Copying exact external website content or images.

## 13. Done criteria

- Feels warm, premium, aesthetic, and editorial — not a generic dev template.
- Cream / olive / gold palette applied consistently.
- Typography feels elegant and readable (serif display + clean sans).
- Hero delivers a strong first impression.
- All public functionality intact: contact form, project detail, and
  database-backed homepage data continue working.
- Fully responsive; good contrast and keyboard focus; reduced-motion respected.

## 14. Git workflow reminder

- One commit per completed step, with a clear message.
- Never commit `.env` (gitignored).
- Branch off `main` for larger changes; `main` is the PR base.
- Commit only when the user asks.
