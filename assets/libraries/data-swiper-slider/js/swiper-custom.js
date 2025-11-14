/*
      Script to initialize Swiper sliders with custom lazy loading.
      - It reads data attributes to configure each slider.
      - It uses a custom script to lazy load images instead of Swiper's built-in module.
    */

/* Function to parse Swiper options from data attributes */
function parseSwiperOptions(el) {
    const options = {};
    /* Get global attributes if set on <body> */
    const globalAutoplayDelay = document.body.dataset.swiperAutoplayDelay;
    const globalLoop = document.body.dataset.swiperLoop;
    /* Set loop option: use global if present, else per-slider */
    if (globalLoop !== undefined) {
        options.loop = globalLoop === "true";
    } else if (el.dataset.swiperLoop !== undefined) {
        options.loop = el.dataset.swiperLoop === "true";
    }
    /* Set spaceBetween option */
    if (el.dataset.swiperSpaceBetween !== undefined) options.spaceBetween = parseInt(el.dataset.swiperSpaceBetween, 10);
    /* Autoplay enable/disable via data attribute */
    const autoplayEnabled = el.dataset.swiperAutoplay !== undefined ? el.dataset.swiperAutoplay === "true" : true;
    if (autoplayEnabled) {
        /* Set autoplay options: use global if present, else per-slider */
        if (globalAutoplayDelay !== undefined) {
            options.autoplay = {
                delay: parseInt(globalAutoplayDelay, 10),
                disableOnInteraction: el.dataset.swiperAutoplayDisableOnInteraction === "false" ? false : true,
            };
        } else if (el.dataset.swiperAutoplayDelay !== undefined) {
            options.autoplay = {
                delay: parseInt(el.dataset.swiperAutoplayDelay, 10),
                disableOnInteraction: el.dataset.swiperAutoplayDisableOnInteraction === "false" ? false : true,
            };
        }
    }
    /* Set pagination element (unique for each slider) */
    options.pagination = {
        el: el.querySelector(".swiper-pagination"),
        clickable: true,
    };
    // Support pagination type via data attribute
    if (el.dataset.swiperPaginationType !== undefined) {
        options.pagination.type = el.dataset.swiperPaginationType;
    }
    /* Set navigation buttons (unique for each slider) */
    options.navigation = {
        nextEl: el.querySelector(".swiper-button-next"),
        prevEl: el.querySelector(".swiper-button-prev"),
    };
    /* Set slidesPerView option */
    if (el.dataset.swiperSlidesPerView !== undefined) options.slidesPerView = parseInt(el.dataset.swiperSlidesPerView, 10);
    /* Set breakpoints if provided */
    if (el.dataset.swiperBreakpoints !== undefined) {
        try {
            options.breakpoints = JSON.parse(el.dataset.swiperBreakpoints);
        } catch (e) {}
    }
    /* Set effect if provided */
    if (el.dataset.swiperEffect !== undefined) options.effect = el.dataset.swiperEffect;
    /* Set direction if provided */
    if (el.dataset.swiperDirection !== undefined) options.direction = el.dataset.swiperDirection;
    return options;
}

/* --- Custom Lazy Loading Functions --- */
function loadLazyImage(slide) {
    if (!slide) return;
    const image = slide.querySelector("img[data-src]");
    if (image && !image.getAttribute("src")) {
        const dataSrc = image.getAttribute("data-src");
        image.setAttribute("src", dataSrc);
        image.onload = () => {
            image.removeAttribute("data-src");
        };
    }
}

function handleSlideVisibility(swiper) {
    const slidesPerView = swiper.params.slidesPerView === "auto" ? 1 : Math.ceil(swiper.params.slidesPerView) || 1;
    const startIndex = swiper.activeIndex;
    const endIndex = Math.min(startIndex + slidesPerView - 1, swiper.slides.length - 1);
    for (let i = startIndex; i <= endIndex; i++) {
        loadLazyImage(swiper.slides[i]);
    }
}
/* --- End Custom Lazy Loading Functions --- */

// --- Swiper Lazy Initialization on Viewport ---
(function() {
    // Store already initialized swipers to avoid double init
    const initialized = new WeakSet();
    function initSwiperOnView(swiperEl) {
        if (initialized.has(swiperEl)) return;
        // If this is a thumbs swiper, initialize it first and store instance
        if (swiperEl.classList.contains('gallery-thumbs')) {
            swiperEl._swiperInstance = new Swiper(swiperEl, parseSwiperOptions(swiperEl));
            initialized.add(swiperEl);
            return;
        }
        // If this is a main gallery with thumbs
        if (swiperEl.dataset.swiperThumbs) {
            var thumbsSelector = swiperEl.dataset.swiperThumbs;
            var thumbsEl = document.querySelector(thumbsSelector);
            if (thumbsEl) {
                // Ensure thumbs swiper is initialized
                if (!thumbsEl._swiperInstance) {
                    thumbsEl._swiperInstance = new Swiper(thumbsEl, parseSwiperOptions(thumbsEl));
                    initialized.add(thumbsEl);
                }
                var mainOptions = parseSwiperOptions(swiperEl);
                mainOptions.thumbs = { swiper: thumbsEl._swiperInstance };
                var mainSwiper = new Swiper(swiperEl, mainOptions);
                initialized.add(swiperEl);
                return;
            }
        }
        const swiperOptions = parseSwiperOptions(swiperEl);
        const swiperInstance = new Swiper(swiperEl, swiperOptions);
        initialized.add(swiperEl);

        /* Autoplay progress bar logic */
        if (swiperEl.dataset.swiperAutoplayProgress === "true") {
            const progressBar = swiperEl.querySelector('.swiper-autoplay-progress-bar');
            let progressTimeout;
            function startProgressBar() {
                if (!progressBar) return;
                progressBar.style.transition = 'none';
                progressBar.style.width = '0%';
                // Force reflow for transition reset
                void progressBar.offsetWidth;
                progressBar.style.transition = `width ${(swiperInstance.params.autoplay && swiperInstance.params.autoplay.delay) ? swiperInstance.params.autoplay.delay : 5000}ms linear`;
                progressBar.style.width = '100%';
            }
            function resetProgressBar() {
                if (!progressBar) return;
                progressBar.style.transition = 'none';
                progressBar.style.width = '0%';
            }
            if (swiperInstance.params.autoplay) {
                swiperInstance.on('autoplayStart', startProgressBar);
                swiperInstance.on('slideChangeTransitionStart', startProgressBar);
                swiperInstance.on('autoplayStop', resetProgressBar);
                swiperInstance.on('slideChangeTransitionEnd', function() {
                    if (!swiperInstance.autoplay.running) resetProgressBar();
                });
                // Initial start
                startProgressBar();
            } else {
                resetProgressBar();
            }
        }

        /* Initial lazy load after browser paint */
        requestAnimationFrame(() => {
            setTimeout(() => {
                handleSlideVisibility(swiperInstance);
            }, 50);
        });
        swiperInstance.on("slideChange", handleSlideVisibility);
        swiperInstance.on("slideChange", function() {
            /* console.log('Active slide index:', swiperInstance.activeIndex, swiperInstance); */
        });

        /* Get global and per-slider hover-pause attributes */
        const globalHoverPause = document.body.dataset.swiperAutoplayHoverPause;
        let hoverPause = false;
        if (globalHoverPause !== undefined) {
            hoverPause = globalHoverPause === "true";
        } else if (swiperEl.dataset.swiperAutoplayHoverPause === "true") {
            hoverPause = true;
        }
        /* Only add hover pause/resume if enabled */
        if (hoverPause) {
            swiperEl.addEventListener("mouseenter", function () {
                if (swiperInstance.autoplay) swiperInstance.autoplay.stop();
            });
            swiperEl.addEventListener("mouseleave", function () {
                if (swiperInstance.autoplay) swiperInstance.autoplay.start();
            });
        }
    }

    // Intersection Observer setup
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    initSwiperOnView(entry.target);
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0 });
        document.querySelectorAll('.swiper').forEach(swiperEl => {
            observer.observe(swiperEl);
        });
    } else {
        // Fallback: initialize all immediately
        document.querySelectorAll('.swiper').forEach(initSwiperOnView);
    }
})();
