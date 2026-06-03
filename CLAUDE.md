# Sales Compass — CLAUDE.md

Read automatically by Claude Code. Provides project context, conventions, and constraints for AI-assisted development.

---

## NON-NEGOTIABLE RULES — READ FIRST

1. **No work without a Linear ticket.** No edits, no commits, no branches, no `git` operations on this repo until an SCW-XX ticket exists for the work and the user has said go. If you discover work mid-task (a bug, a refactor, a "while I'm here"), STOP. Create the ticket. Wait for the go-ahead.

2. **Every ticket in a planned roadmap must be created in Linear before any code is written.** Referencing ticket numbers in conversation is not the same as creating them. Linear is the source of truth.

3. **No commits to `main`.** All work happens on `feature/scw-XX-slug`, opens a PR, merges via `gh pr merge --squash --delete-branch`.

4. **One ticket = one branch = one PR.** Do not pile multiple tickets onto the same branch.

5. **Before creating a Linear ticket, `list_issues` to confirm it doesn't already exist.** Duplicates are not acceptable.

---

## Project

Sales Compass — a marketing website for a sales consultancy offering infrastructure, coaching, and AI automation services. Currently a static HTML/Tailwind site with a planned migration path to WordPress/Twenty Twenty-Five.

- **GitHub repo:** `artfusion/sales-compass` (`main` branch)
- **Linear project:** Sales Compass Website | Team: Sales Compass | Prefix: **SCW-XX** | Workspace: ArtFusion

## Local Development

### Static site

```bash
python3 -m http.server 3000
# → http://localhost:3000
```

No build step, package manager, or compilation required.

### WordPress Studio (local WP development)

WP Studio site: `http://localhost:8881`
Theme directory: `/Users/michael/Studio/sales-compass/wp-content/themes/`

CLI: `studio wp <wp-cli-command>` from the site directory.

**One-time setup:**
1. Open WordPress Studio → New Site → "sales-compass"
2. Install Twenty Twenty-Five: `studio wp theme install twentytwentyfive`
3. Activate Twenty Twenty-Five: `studio wp theme activate twentytwentyfive`

## Architecture

Static marketing site (6 production pages) built with HTML + Tailwind CSS (CDN) + vanilla JS. Planned migration to WordPress/Twenty Twenty-Five theme.

**Pages:**
- `index.html` — Homepage
- `pages/services.html`, `pages/sales-coaching.html`, `pages/ai-automation.html`, `pages/case-studies.html`, `pages/contact.html`

**Assets:**
- `assets/css/main.css` — Design system with CSS custom properties, structured for future WordPress enqueuing
- `assets/js/main.js` — IIFE pattern, exposes `window.SalesCompass`, handles navigation and smooth scroll
- `assets/images/` — Production images
- `uxpilot/` — UX Pilot design mockups (reference only, not production)

## Key Conventions

**Tailwind config** is inline in each page's `<script>` block with shared custom colors:
- `ocean-blue: #0077B6`
- `platinum-white: #EAEDED`
- Fonts: Inter (sans), Roboto

**Navigation paths:** Pages in `pages/` use `../` relative paths to reference root-level assets and `../index.html` for home.

**WordPress migration:** CSS uses BEM-like class naming (`.btn-primary`, `.nav-link`) and custom properties designed for WordPress `wp_enqueue_style`. JS uses `window.SalesCompass` namespace for WP script compatibility.

## Branch model

| Branch | Purpose |
|---|---|
| `main` | Stable. PRs only — no direct push. |
| `feature/scw-XX-slug` | Single-ticket branch for isolated changes. |
| `feature/vX.Y-description` | Release branch for a cohesive batch of tickets. |

**Starting new work:** branch off `main`. Single tickets use `feature/scw-XX-slug`; batched releases use `feature/vX.Y-description`. Merge via `gh pr merge --squash --delete-branch`.

## Linear discipline

**Always query Linear before touching any issue.**

1. **Before closing or updating issues** — run `list_issues` first to get real IDs. Never assume issue numbers from memory.
2. **Before creating new issues** — run `list_issues` to confirm they don't already exist.
3. **Never work from memory** — the Linear MCP is connected. Use it.
4. **Project:** Sales Compass Website | **Team:** Sales Compass | **Prefix:** SCW-XX | **Workspace:** ArtFusion

## Verification process

Before marking any feature done:

1. **Serve locally:** `python3 -m http.server 3000`
2. **Open the browser** at `http://localhost:3000` and click through every page
3. **Test all navigation links** — no 404s, no broken `../` paths
4. **Check images load** on all pages
5. **Verify responsive layout** at mobile width (≤ 390px)
6. **No console errors** in browser devtools

---

## Behavioral guidelines

**Tradeoff:** These guidelines bias toward caution over speed. For trivial tasks, use judgment.

### 1. Think Before Coding

**Don't assume. Don't hide confusion. Surface tradeoffs.**

Before implementing:
- State your assumptions explicitly. If uncertain, ask.
- If multiple interpretations exist, present them — don't pick silently.
- If a simpler approach exists, say so. Push back when warranted.
- If something is unclear, stop. Name what's confusing. Ask.

### 2. Simplicity First

**Minimum code that solves the problem. Nothing speculative.**

- No features beyond what was asked.
- No abstractions for single-use code.
- No "flexibility" or "configurability" that wasn't requested.
- No error handling for impossible scenarios.
- If you write 200 lines and it could be 50, rewrite it.

### 3. Surgical Changes

**Touch only what you must. Clean up only your own mess.**

When editing existing code:
- Don't "improve" adjacent code, comments, or formatting.
- Don't refactor things that aren't broken.
- Match existing style, even if you'd do it differently.
- If you notice unrelated dead code, mention it — don't delete it.

When your changes create orphans:
- Remove imports/variables/functions that YOUR changes made unused.
- Don't remove pre-existing dead code unless asked.

### 4. Goal-Driven Execution

**Define success criteria. Loop until verified.**

Transform tasks into verifiable goals:
- "Fix the nav" → "All six nav links resolve without 404 at http://localhost:3000"
- "Fix the image" → "Image renders in browser, no broken icon, no console error"

For multi-step tasks, state a brief plan:
```
1. [Step] → verify: [check]
2. [Step] → verify: [check]
3. [Step] → verify: [check]
```

---

**These guidelines are working if:** fewer unnecessary changes in diffs, fewer rewrites due to overcomplication, and clarifying questions come before implementation rather than after mistakes.
