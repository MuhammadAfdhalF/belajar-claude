# Phase A — Redesign Brief

A **redesign pass** for the already-completed public portfolio. This is not a new
feature phase — functionality (data flow, routes, contact form) stays the same.
Only the visual layer changes. See [phase-a-public-site.md](phase-a-public-site.md)
and [CLAUDE.md](../CLAUDE.md).

## 1. Current design problems

- First impression is flat and conservative — doesn't feel like a modern dev portfolio.
- Hero is plain (light gradient, centered text) and lacks impact.
- Sections look uniform and a little boring; weak visual hierarchy.
- Cards are functional but not premium; minimal depth or motion.
- Almost no icons or animation — the page feels static.
- Contact section reads as a panel, not a strong closing call-to-action.

## 2. Redesign goal

Make the portfolio feel modern, energetic, and memorable while staying
professional and polished. Stronger first impression, more expressive layout,
tasteful motion and icons — slightly flashy is acceptable if it stays clean.

## 3. Visual direction

- Modern, energetic software-developer aesthetic.
- Bold **dark hero**; **light content sections** that alternate.
- More expressive layout — varied composition, not flat rows.
- More depth: layered surfaces, subtle gradients, soft shadows, rounded cards.
- Generous, deliberate whitespace and clear typographic hierarchy.

## 4. Color direction

- **Primary:** blue (`blue-600` / `blue-700`), with room for blue gradients/glows.
- **Accent:** gold/amber (`amber-400` / `amber-500`) for highlights and energy.
- **Neutrals:** slate/gray (`slate-50` → `slate-900`) for text, surfaces, borders.
- Dark hero uses deep slate/blue; light sections stay white / `slate-50`.
- Keep it readable — color is for emphasis, not noise.

## 5. Animation direction

- Subtle hover lift on cards and buttons.
- Soft glow accents (blue/amber) on key interactive elements.
- Button hover motion (slight scale/shadow/translate).
- Card hover motion (lift + shadow).
- Optional section entrance/fade-in on scroll, if it stays light.
- No heavy, looping, or distracting animation; respect reduced-motion.

## 6. Icon direction

- Use icons generously where they aid scanning (skills, contact, section cues).
- Prefer clean **inline SVG** icons (consistent stroke style).
- Emoji only as tiny accents, never the main visual language.

## 7. Section-by-section redesign goals

- **Hero** — dark, bold, high-impact: gradient/glow background, strong name and
  role, clear CTAs, subtle motion. The standout first impression.
- **About** — credible and modern: refined typography, icon-led quick facts.
- **Skills** — premium category cards with icons; easy to scan, more visual.
- **Experience** — polished timeline with clearer markers and depth.
- **Projects** — premium project cards: stronger hover, tech icons, featured emphasis.
- **Certifications** — clean credential cards with consistent iconography.
- **Contact** — visually stronger closing CTA: bold panel, glow/gradient, clear action.

## 8. Redesign step breakdown

- **R1 — Global visual system redesign**
  Update theme tokens, shared `x-ui.*` components (button, card, badge, section),
  shadows, gradients, and base motion utilities. Foundation for all sections.

- **R2 — Hero redesign**
  Rebuild the hero as a dark, bold, animated first impression.

- **R3 — Homepage sections redesign**
  Apply the new system to about, skills, experience, projects, certifications —
  icons, premium cards, motion, alternating backgrounds.

- **R4 — Project detail, contact, and visual alignment**
  Redesign the project detail page and contact CTA; ensure consistency across all pages.

- **R5 — Responsive visual QA**
  Verify the redesign across mobile/tablet/desktop; check motion, contrast, and reduced-motion.

## 9. Out of scope

- Backend logic, routes, controllers, models, migrations, seeders.
- Database structure and the contact-form behavior.
- New features or an admin CMS.
- New third-party packages (CSS/JS animation done with Tailwind + minimal custom CSS/vanilla JS).

## 10. Done criteria

- Hero delivers a strong, modern first impression.
- All sections feel cohesive, premium, and visually engaging.
- Tasteful hover/entrance motion present; nothing distracting; reduced-motion respected.
- Icons used consistently; palette (blue / amber / slate) applied throughout.
- Fully responsive; good contrast and keyboard focus states; no console errors.
- All existing functionality (links, project pages, contact form) still works.

## 11. Git workflow reminder

- One commit per completed step (R1–R5), with a clear message.
- Never commit `.env` (gitignored).
- Branch off `main` for larger changes; `main` is the PR base.
- Commit only when the user asks.
