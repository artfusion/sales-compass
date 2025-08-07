# Sales Compass

A modern marketing website for Sales Compass, currently built as a static HTML/CSS/JS site with plans to migrate to WordPress (Kadence theme) in the future.

## Project Structure

```
sales-compass/
├── index.html           # Homepage
├── pages/               # Additional pages
├── assets/             
│   ├── css/            # Stylesheets
│   ├── js/             # JavaScript files
│   ├── images/         # Images and media
│   └── fonts/          # Custom fonts
├── components/         # Reusable HTML components
├── wp-prep/           # WordPress preparation files
│   └── templates/     # Future PHP template structures
└── docs/              # Documentation
```

## Development

To view the site locally:
1. Open `index.html` in your browser, or
2. Use a local server: `python3 -m http.server 3000`

## WordPress Migration Path

The project structure is designed to facilitate future migration to WordPress:
- CSS can be enqueued in WordPress theme
- JS files can be registered as WordPress scripts
- HTML structure can be converted to PHP templates
- Components can become WordPress template parts

## Tech Stack

- **Current**: Static HTML, CSS, JavaScript
- **Future**: WordPress with Kadence theme system

## Getting Started

1. Clone the repository
2. Open index.html in your browser
3. Or serve locally on port 3000: `python3 -m http.server 3000`
