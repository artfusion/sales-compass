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

## Session handoff

**Before starting any work, read `handoff.md`** at the project root if it exists.

**Before ending any session** (usage limit, context switch, task complete), update `handoff.md` with:
- Current branch and ticket(s) in flight
- Exactly where work stopped (last completed step + next step)
- Any blockers, open questions, or decisions made
- Studio/DB state relevant to resuming (page IDs, option values, etc.)

The file lives at the project root and is committed to git as part of the active feature branch. It is the authoritative handoff for any agent or session picking up mid-task.

---

## Project

Sales Compass — a marketing website for a sales consultancy offering infrastructure, coaching, and AI automation services. Currently a static HTML/Tailwind site with a planned migration path to WordPress/Twenty Twenty-Five.

- **GitHub repo:** `artfusion/sales-compass` (`main` branch)
- **Linear project:** Sales Compass Website | Team: Sales Compass | Prefix: **SCW-XX** | Workspace: ArtFusion

## Local Development

### Static site

```bash
cd static && python3 -m http.server 3000
# → http://localhost:3000
```

No build step, package manager, or compilation required. Static site files live in `static/`.

### WordPress Studio (local WP development)

WP Studio site: `http://localhost:8882` (admin: `http://localhost:8882/wp-admin`)
Site path: `/Users/michael/Studio/sales-compass/` — theme dir: `wp-content/themes/`
Theme source (symlinked): the standalone theme repo cloned at `/Users/michael/Development/Websites/sales-compass-theme` (Studio's `wp-content/themes/sales-compass` symlink points there). **The theme no longer lives in this monorepo** — see the Theme repo note below.

CLI: `studio wp <wp-cli-command> --path="$HOME/Studio/sales-compass"` (or run from the site directory).

**Status:** site created and online; **Twenty Twenty-Five active** (`studio wp theme list`). It ships with WordPress core, so no separate install was needed. Migration of page content into WP is tracked as follow-on SCW tickets.

## Architecture

Static marketing site (8 production pages) built with HTML + Tailwind CSS (CDN) + vanilla JS. **Active migration to WordPress/Twenty Twenty-Five theme** (see WordPress Studio section).

**Repo structure:**
- `static/` — static HTML reference site (not deployed to WP; local dev only)
- The WordPress block theme lives in a **separate repo** (see below), not here.

**Theme repo (separate):** The block theme is its own repo — `artfusion/sales-compass-theme` — whose root *is* the theme. Hostinger's native "Deploy from GitHub" auto-deploys it (branch `main`) into `public_html/wp-content/themes/sales-compass/`. Because Hostinger's deploy is scoped to that target directory, WP core/plugins/uploads/DB are never touched. Local clone: `/Users/michael/Development/Websites/sales-compass-theme` (edit there; Studio symlink points at it). Theme work uses SCW tickets just like this repo.

**Static site pages** (under `static/`, directory-based clean URLs):
- `static/index.html` — Homepage
- `static/services/`, `static/sales-coaching/`, `static/ai-automation/`, `static/case-studies/`, `static/contact/`, `static/privacy-policy/`, `static/terms-of-service/`

**Static assets:**
- `static/assets/css/main.css` — Design system (reference only)
- `static/assets/js/main.js` — IIFE nav/scroll (reference only)
- `static/assets/images/` — Production images (reference only)
- `static/redesign/` — UX Pilot staging mockups
- `static/uxpilot/` — UX Pilot design mockups

## Key Conventions

**Tailwind config** is inline in each page's `<script>` block with shared custom colors:
- `ocean-blue: #0077B6`
- `platinum-white: #EAEDED`
- Fonts: Inter (sans), Roboto

**Navigation paths:** Directory-based links. The homepage links to subpages with bare paths (`services/`, `contact/`); subpages link back to root and siblings with `../` (`../`, `../contact/`) and reference root-level assets with `../assets/...`.

**WordPress migration:** CSS uses BEM-like class naming (`.btn-primary`, `.nav-link`) and custom properties designed for WordPress `wp_enqueue_style`. JS uses `window.SalesCompass` namespace for WP script compatibility.

## Deployment

Live site: **https://salescompass.net**, hosted on Hostinger.

**Theme deploys** are automatic via Hostinger's native "Deploy from GitHub": pushes to `main` of the separate `artfusion/sales-compass-theme` repo deploy into `public_html/wp-content/themes/sales-compass/` (scoped to that dir — WP core is never touched). Do **not** reconnect Hostinger's git deploy to *this* monorepo or point any deploy target at `public_html` root — that destructively wipes WordPress core (it happened twice; see SCW-70).

**Note:** Hostinger SSH is firewalled to allowed IPs — GitHub Actions runners cannot reach it (connections time out), which is why CI-over-SSH was abandoned in favor of native deploy. SSH from a whitelisted IP still works for manual ops; server details in `GEMINI.md`.

This monorepo (docs, static reference site) has no automated deploy.

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
4. **Reflect active work:** set an issue to **In Progress** when you create its feature branch, and to **Done** right after its PR squash-merges.
5. **Project:** Sales Compass Website | **Team:** Sales Compass | **Prefix:** SCW-XX | **Workspace:** ArtFusion

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
