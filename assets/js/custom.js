// function aosFunction() {
//     AOS.init({
//         // Disable AOS below 1200px width
//         disable: function () {
//             return window.innerWidth < 1200;
//         },

//         startEvent: 'DOMContentLoaded',
//         initClassName: 'aos-init',
//         animatedClassName: 'aos-animate',
//         useClassNames: false,
//         disableMutationObserver: false,
//         debounceDelay: 50,
//         throttleDelay: 99,
//         offset: 100,
//         delay: 100,
//         duration: 900,
//         easing: 'ease-in-out-quad',
//         once: false,
//         mirror: false,
//         anchorPlacement: 'top-bottom',
//     });
// }

// $(window).on('load', function () {
//     setTimeout(function () {
//         aosFunction();
//     }, 300);
// });
$(document).ready(function () {
    jQuery('.campus-video-modal').on('click', function () {
        jQuery('.campus-open-videos').removeClass('d-none');
        jQuery('.campus-open-videos').trigger('play');
        jQuery('.campus-open-videos').prev().addClass('d-none');
        jQuery(this).hide();
    });
    var swiper = new Swiper(".recruiters-slider", {
        loop: true,
        autoplay: false,
        slidesPerView: 1,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
$(document).ready(function () {
    var swiper = new Swiper(".hero-slider", {
        
        freeMode: true,
        loop: true,
        autoplay: false,
        slidesPerView: 1,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
var swiper = new Swiper(".industry-slider", {
  loop: true,
  autoplay:false,
slidesPerView: 1,
  spaceBetween: 20,
  navigation: {
    nextEl: ".industry-button-next",
    prevEl: ".industry-button-prev",
  },
  breakpoints: {
    1200: {
      slidesPerView: 3,
       spaceBetween: 31,
    },
 
    768: {
      slidesPerView: 2,
      spaceBetween: 25,
    },
 
  }
});

var swiper = new Swiper(".student-slider", {
  loop: true,
  autoplay:false,
slidesPerView: 1,
  spaceBetween: 20,
  navigation: {
    nextEl: ".student-button-next",
    prevEl: ".student-button-prev",
  },
  breakpoints: {
    1200: {
      slidesPerView: 3,
       spaceBetween: 31,
    },
 
    768: {
      slidesPerView: 2,
      spaceBetween: 25,
    },
 
  }
});