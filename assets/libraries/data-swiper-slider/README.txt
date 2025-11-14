Swiper Slider Demo - README
==========================

This project demonstrates how to use Swiper.js sliders with Bootstrap 5, configured via data attributes and supporting advanced features like:
- Autoplay (with progress bar)
- Pagination (fraction, progressbar)
- Thumbs gallery
- Fade and vertical effects
- Lazy image loading
- Lazy slider initialization (sliders only load when they come into view)

Project Structure
-----------------
- index.html         : Main demo page with all slider examples
- js/
    - swiper-bundle.min.js : Swiper library (local)
    - swiper-custom.js      : Custom Swiper initialization and logic
- css/
    - swiper-bundle.min.css : Swiper CSS (local)
- images/            : Example images (not used if using placeholders)

How to Use
----------
1. **Add a Swiper Slider**
   - Use a <div class="swiper"> with a nested <div class="swiper-wrapper"> and multiple <div class="swiper-slide"> elements.
   - Add navigation and pagination elements as needed:
     <div class="swiper-pagination"></div>
     <div class="swiper-button-prev"></div>
     <div class="swiper-button-next"></div>

2. **Configure with Data Attributes**
   - data-swiper-autoplay="true" or "false"
   - data-swiper-autoplay-delay="3000" (ms)
   - data-swiper-pagination-type="fraction" or "progressbar"
   - data-swiper-effect="fade" (for fade effect)
   - data-swiper-direction="vertical" (for vertical slider)
   - data-swiper-thumbs=".gallery-thumbs" (for thumbs gallery)
   - data-swiper-autoplay-progress="true" (to show autoplay progress bar)
   - data-swiper-loop="true" (loop slides)
   - data-swiper-slides-per-view="1" (number of visible slides)
   - data-swiper-space-between="24" (space between slides)
   - See index.html for more examples.

3. **Lazy Initialization**
   - Sliders are only initialized when they come into view (using Intersection Observer).
   - This improves performance for pages with many sliders.

4. **Lazy Image Loading**
   - Use <img data-src="..."> in slides. Images are loaded only when the slide is about to be shown.

5. **Bootstrap 5**
   - Layout and styling use Bootstrap 5. You can use Bootstrap grid and utility classes as needed.

6. **Adding New Sliders**
   - Copy an existing slider block in index.html and adjust data attributes for your needs.
   - For a fade effect: data-swiper-effect="fade"
   - For vertical: data-swiper-direction="vertical"
   - For thumbs gallery: see the thumbs gallery example (main and thumbs swipers)

7. **Custom JS**
   - All Swiper initialization is handled in js/swiper-custom.js.
   - You can add custom logic (e.g., logging, callbacks) in this file.

8. **Dependencies**
   - Bootstrap 5 (CDN in index.html)
   - Swiper.js (local in js/ and css/)

Contact
-------
For questions or help, see https://swiperjs.com/ or Bootstrap 5 documentation. 