## Bugs:
---
###Home;
·   Redundant content → testimonials are repeated twice.
·   Deprecated <marquee> → not supported in modern browsers.
·   Some stray closing tags (</a> without open tag).
·   Accessibility gaps → no proper alt text for some images, heading hierarchy inconsistent.
·   Mixed PHP inline with HTML → fine now, but could be modularized later for maintainability.
·   Overly verbose → .circle, .circle1, .circle2, .circle3 could be simplified into one reusable class.
·   Hardcoded pixel values (height: 600px, width: 550px) → not responsive, will break on smaller screens.
·  	Inconsistent naming → .container, .containered, .container-mt-4, .dk → confusing for long-term scaling.
·  	Inline @import of Google Fonts at the bottom of CSS → slows down loading, better in <head>.
·  	Some duplication with Bootstrap class names (container, row g-4) → potential conflicts.
·  	Background images (no repeat typo → should be no-repeat).
·  	diginbtn and scrollTrigger scroll functions → duration is set to 0, so animation won’t actually work.
·  	Using Date.now() for animation timing → should stick to requestAnimationFrame timestamps.
·  	Scroll logic duplicated (diginbtn vs scrollTrigger). Could be combined.
·  	No null checks → if element doesn’t exist (e.g., document.getElementById('diginbtn')), JS will throw an error.
·  	Category carousel auto-scroll speed is very high (setInterval(autoScroll, 10)). On some browsers, this will look jittery.
·  	Recipe slider only scrolls horizontally, no boundary check → could overshoot or look odd on small screen.
####Key Discussion Points Before Refactor:
·  	Navigation & Sidebar → Do we keep a fixed header or make it auto-hide on scroll for mobile?
·  	Hero Section → Images are fixed sizes; should we switch to responsive + fluid grid instead?
·  	Animations → Some scroll animations are broken (duration = 0). Should we keep smooth scroll or go instant?
·  	CSS Organization → Should we modularize (e.g., separate navbar.css, hero.css, footer.css) instead of one giant CSS file?
·  	JS Structure → Right now all JS is inline in one file; should we break it into modules (sidebar.js, scroll.js, carousel.js)?
·  	Accessibility & SEO → Missing alt attributes, heading levels inconsistent. Want me to optimize for that?
·  	Redundant Content → Testimonials + sections are repeated. Should we remove duplicates or rework layout?
 
