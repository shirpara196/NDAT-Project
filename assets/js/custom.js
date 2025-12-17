/* AOS S */
$(document).ready(function () {
  AOS.init({
    duration: 1500,
    once: false,
    disable: 'mobile',
    offset: 0,
    delay: 10
  });

  $(window).on('load', function () {
    AOS.refresh();
    setInterval(function () {
      AOS.refresh();
    }, 10);
  });

  $(window).scroll(function () {
    AOS.refresh();
    setInterval(function () {
      AOS.refresh();
    }, 10);
  });
});
setInterval(function () {
  AOS.init();
}, 10);
/* AOS End */

/* Back to Top Scroll S */
$(window).scroll(function () {
  if ($(this).scrollTop() > 140) {
    $('#back-top').css("display", "flex");
  } else {
    $('#back-top').css("display", "none");
  }
});
$('#back-top').click(function () {
  $('body,html').animate({
    scrollTop: 0
  }, 500);
  return false;
});
/* Back to Top Scroll E */

document.addEventListener("DOMContentLoaded", function () {
    const element = document.querySelector(".move-form"); // div you want to move
    const targetMobile = document.querySelector(".modal-form-move"); // where to move on mobile
    const targetDesktop = document.querySelector(".move-form-wrap"); // original parent

    function handleDivMove() {
        if (window.innerWidth <= 767) {
            if (!targetMobile.contains(element)) {
                targetMobile.appendChild(element);
            }
        } else {
            if (!targetDesktop.contains(element)) {
                targetDesktop.appendChild(element);
            }
        }
    }

    handleDivMove(); // On load
    window.addEventListener("resize", handleDivMove); // On resize
});


$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll >= 80) {
    $(".header-section").addClass("mobile-stick");
  } else {
    $(".header-section").removeClass("mobile-stick");
  }
});
window.addEventListener("scroll", function () {
  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  const progress = (scrollTop / docHeight) * 100;

  document.querySelector(".in-line").style.height = progress + "%";
});

$(document).ready(function () {
  //     jQuery('.campus-video-modal').on('click', function () {
  //         jQuery('.campus-open-videos').removeClass('d-none');
  //         jQuery('.campus-open-videos').trigger('play');
  //         jQuery('.campus-open-videos').prev().addClass('d-none');
  //         jQuery(this).hide();
  //     });
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
    loop: true,
    autoplay: true,
    slidesPerView: 1,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
});
var swiper = new Swiper(".industry-slider", {
  loop: false,
  autoplay: false,
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
  loop: false,
  autoplay: false,
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
var thumbSwiper = new Swiper(".glimpseThumb", {
  direction: "horizontal",
  slidesPerView: 3,
  breakpoints: {
    991: {
      direction: "vertical",

    },
  }
});


var mainSwiper = new Swiper(".glimpseSwiper", {
  spaceBetween: 10,
  autoplay: true,
  thumbs: {
    swiper: thumbSwiper,
  },
  pagination: {
    el: ".glimpseSwiper .swiper-pagination",
    clickable: true,
  },
});

$(".menu-close").on("click", function () {
  $(".nav-main").removeClass("active");
  $(".overlay").removeClass("active");
  $('body').css('overflow-y', 'auto');
});
$(".overlay").on("click", function () {
  $(".nav-main").removeClass("active");
  $(".overlay").removeClass("active");
  $('body').css('overflow-y', 'auto');
});
$(".bar-btn").on("click", function () {
  $(".overlay").addClass("active");
  $(".nav-main").addClass("active");
  $('body').css('overflow-y', 'hidden');
});

var recruitersswiper = new Swiper(".recruiters-mobile-slider", {
  loop: true,
  autoplay: true,
  slidesPerView: 1,
  navigation: {
    nextEl: ".recruiters-button-next",
    prevEl: ".recruiters-button-prev",
  },
});

var programswiper = new Swiper(".program-slider", {
  loop: true,
    autoplay: true,
  slidesPerView: 1,
  navigation: {
    nextEl: ".programs-button-next",
    prevEl: ".programs-button-prev",
  },
});

var careerswiper = new Swiper(".career-slider", {
  loop: true,
    autoplay: true,
  slidesPerView: 1,
  navigation: {
    nextEl: ".career-button-next",
    prevEl: ".career-button-prev",
  },
});
