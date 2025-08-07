# UX Pilot Designs

This directory contains all UX Pilot generated designs and their associated assets.

## Structure

```
uxpilot/
├── uxpilot-salescompass-homepage.html    # Main homepage from UX Pilot
├── pages/                                 # Additional UX Pilot pages
│   ├── uxpilot-salescompass-about.html
│   ├── uxpilot-salescompass-services.html
│   └── ...
└── assets/                                # All UX Pilot assets
    ├── images/                            # Images, logos, icons
    ├── css/                               # Any custom CSS if needed
    └── js/                                # Any custom JS if needed
```

## Naming Convention

All UX Pilot files follow the pattern: `uxpilot-salescompass-[pagename].html`

## Assets

Images and other assets referenced in UX Pilot designs should be:
1. Downloaded from UX Pilot
2. Placed in `assets/images/`
3. HTML paths updated to reference local files

## Integration

To integrate a UX Pilot design into the main site:
1. Copy the HTML file to the root or pages directory
2. Update asset paths
3. Test locally
4. Commit changes
