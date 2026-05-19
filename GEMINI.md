# Project Instructions: Sales Compass

## Deployment Workflow
- **Automatic Commits:** Always commit any code changes to Git immediately. Use descriptive commit messages.
- **Automatic Pushes:** Always push committed changes to the `main` branch on GitHub.
- **Live Deployment:** Always deploy changes live to Hostinger via SSH after pushing to GitHub.

## Deployment Details
- **Server:** 82.29.157.128
- **Port:** 65002
- **Username:** u783182544
- **Remote Path:** domains/salescompass.net/public_html/
- **SSH Key:** Use the default key at ~/.ssh/id_rsa.

## Deployment Command Template
```bash
scp -P 65002 [files] u783182544@82.29.157.128:domains/salescompass.net/public_html/[path]
```
