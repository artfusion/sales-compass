// Sales Compass Main JavaScript
// Structured for future WordPress migration

(function() {
    'use strict';

    // DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Sales Compass initialized');
        
        // Initialize components
        initNavigation();
        initSmoothScroll();
    });

    // Mobile Navigation Toggle (for future mobile menu)
    function initNavigation() {
        // Placeholder for mobile navigation functionality
        // This will be expanded when mobile menu is implemented
    }

    // Smooth scroll for anchor links
    function initSmoothScroll() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Only handle if it's not just "#"
                if (href !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });
    }

    // Expose API for potential WordPress integration
    window.SalesCompass = {
        init: function() {
            console.log('SalesCompass API initialized');
        },
        
        // Add methods here that might be needed for WordPress theme
        utils: {
            smoothScroll: initSmoothScroll,
            navigation: initNavigation
        }
    };

})();
