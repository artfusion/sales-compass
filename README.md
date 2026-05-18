# Sales Compass

A modern marketing website for Sales Compass.

## Current Status

The site is currently built and deployed as a high-performance static HTML/CSS/JS site using Tailwind CSS for styling. While the initial plan included a WordPress migration, the current focus is on maintaining and expanding this lightweight, custom-built architecture.

## Project Structure

```
sales-compass/
├── index.html           # Homepage
├── ai-automation/       # AI Automation page
├── case-studies/        # Case Studies page
├── contact/             # Contact page
├── privacy-policy/      # Privacy Policy page
├── sales-coaching/      # Sales Coaching page
├── services/            # Services page
├── terms-of-service/    # Terms of Service page
├── assets/             
│   ├── css/            # Stylesheets
│   ├── js/             # JavaScript files
│   ├── images/         # Images and media
│   └── fonts/          # Custom fonts
└── redesign/           # Deployment staging folder
```

## Deployment

The site is deployed to:
- **Live Production**: [https://salescompass.net](https://salescompass.net)
- **Source Control**: [https://github.com/artfusion/sales-compass](https://github.com/artfusion/sales-compass)

Deployment is handled via direct SSH upload to the production server.

## Tech Stack

- **Frontend**: Static HTML5, Tailwind CSS (via CDN for rapid prototyping), Vanilla JavaScript
- **Icons**: Font Awesome 6
- **Fonts**: Google Fonts (Inter)

## Development

To view the site locally:
1. Open `index.html` in your browser, or
2. Use a local server: `python3 -m http.server 3000`
