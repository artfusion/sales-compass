# Project Instructions: Sales Compass

## Workflow

Work follows the PR-first discipline in `CLAUDE.md` — no direct commits to `main`:
- **Ticket first:** every change starts from an SCW-XX Linear ticket.
- **Feature branch → PR:** work on `feature/scw-XX-slug`, open a PR, merge via `gh pr merge --squash --delete-branch`.
- **Deploy is post-merge:** only after a PR is squash-merged into `main` do you deploy that `main` state live to Hostinger via SSH. Deploy is the publish step, never an auto-push of unmerged work.

## Deployment Details
- **Server:** 82.29.157.128
- **Port:** 65002
- **Username:** u783182544
- **Remote Path:** domains/salescompass.net/public_html/
- **SSH Key:** Use the default key at ~/.ssh/id_rsa.

## Deployment Command Template
```bash
scp -P 65002 [files] u783182544@82.29.157.128:domains/salescompass.net/public_html/[path] && ssh -p 65002 u783182544@82.29.157.128 "chmod 644 domains/salescompass.net/public_html/[path]"
```
