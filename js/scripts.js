var $ = jQuery;
var $hslider = $('#h-slider');
var $eventsSlider = $("#events-slider");
var $pslider = $("#products-slider");
var $sbuttons = $("#slider-buttons");

if ($hslider.length) {

  $hslider.on('init', function (slick) {
    $("#h-slider .slide-0 .h-slider-inner").addClass("appear");
  });
  $hslider.slick({
    arrows: true,
    autoplay: 5000,
    infinite: false
  });

  $hslider.on('afterChange', function (event, slick, direction) {
    $(".slide-" + slick.currentSlide + " .h-slider-inner").addClass("appear");
  });

}

if ($eventsSlider.length) {
  $eventsSlider.slick({
    centerMode: true,
    centerPadding: '100px',
    slidesToShow: 5,
    slidesToScroll: 5,
    touchThreshold: 400,
    autoplay: 5000,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          centerPadding: '50px'
        }
      }
    ]
  });
}

if ($pslider.length) {
  var prslider;
  function initSlider() {
    prslider = $pslider.slick({
      adaptiveHeight: false,
    });
  }

  function destroySlider() {
    if (prslider) {
      prslider.slick('unslick');
      prslider = null;
    }
  }

  window.addEventListener('resize', function () {
    if (window.innerWidth <= 768) {
      if (prslider) {
        destroySlider();
      }

    } else {
      if (!prslider) {
        initSlider();
      }

    }
  });
  if (window.innerWidth > 768) {
    initSlider();
  }

}
// const $sliderAwards = $("#slider-awards");
// if ($sliderAwards.length) {
//   $sliderAwards.slick({
//     slidesToShow: 3,
//     arrows: false,
//     dots: true,
//     slidesToScroll: 3,
//     responsive: [
//       {
//         breakpoint: 1199,
//         settings: {
//           slidesToShow: 2,
//           slidesToScroll: 2,
//         }
//       },
//       {
//         breakpoint: 768,
//         settings: {
//           slidesToShow: 1,
//           slidesToScroll: 1,
//           centerMode: true,
//           centerPadding: '50px',
//           dots: false
//         }
//       }
//     ]
//   });
// }

const $awardsScrollSlider = $("#awards-scroll-slider");
if ($awardsScrollSlider.length) {
  const swiper = new Swiper('#awards-scroll-slider', {
    slidesPerView: 1.5,
    freeMode: true,
    spaceBetween: 30,
    scrollbar: {
      el: '.awards-swiper-scrollbar',
      draggable: true,
    },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,

      },
      // when window width is >= 480px
      480: {
        slidesPerView: 3,
      },
      // when window width is >= 640px
      992: {
        slidesPerView: 6
      }

    }
  });
}

const $sliderClients = $("#slider-clients");
if ($sliderClients.length) {
  $sliderClients.slick({
    rows: 2,
    slidesPerRow: 6,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesPerRow: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesPerRow: 2,
          centerMode: true,
          centerPadding: '50px',
          dots: false
        }
      }
    ]
  });
}




const animatedElements = gsap.utils.toArray('.animated-element');

animatedElements.forEach((animatedElement, i) => {
  const anim = gsap.fromTo(animatedElement, { autoAlpha: 0, y: 300 }, { duration: 1, autoAlpha: 1, y: 0 });
  ScrollTrigger.create({
    trigger: animatedElement,
    animation: anim,
    toggleActions: 'play none none none',
    once: true,
  });
});

if ($(".parallax-image").length) {
  const parallaxImages = gsap.utils.toArray('.parallax-image');
  parallaxImages.forEach((parallaxImage, i) => {
    gsap.to(parallaxImage, {
      yPercent: -20,
      ease: "none",
      scrollTrigger: {
        trigger: parallaxImage,
        // start: "top bottom", // the default values
        // end: "bottom top",
        scrub: 2
      },
    });
  });
}


document.addEventListener('DOMContentLoaded', function () {
  const textContainer = document.querySelector('.text-container');
  const content = document.querySelector('.text-content');
  const readMoreBtn = document.getElementById('read-more-btn');
  let isExpanded = false;
  if ($(".text-container").length > 0) {
    // Check if content overflows on page load
    if (content.scrollHeight > textContainer.clientHeight) {
      readMoreBtn.style.display = 'block';
    }

    readMoreBtn.addEventListener('click', function () {
      if (isExpanded) {
        textContainer.style.maxHeight = '230px'; // Adjust to your desired collapsed height
        readMoreBtn.textContent = 'read more';
      } else {
        textContainer.style.maxHeight = content.scrollHeight + 'px';
        readMoreBtn.textContent = 'read less';
      }
      isExpanded = !isExpanded;
    });
  }

});




$("#burger").on("click", function () {
  $("body").toggleClass("menu-open");
});
$(".mobile-menu a").on("click", function () {

  if (!$(this).parent().hasClass("menu-item-has-children")) {
    if ($(this).attr("href") == "#") {
      e.preventDefault();
    } else {
      $("body").removeClass("menu-open");
    }
    window.location.href = $(this).attr("href");
  }
});

/*** FEATURES SLIDER ***/
$(".product-features-section").each(function (i, item) {
  var blockID = $(this).data('block-id');
  $("#features-text-slider-" + blockID).find(".feature-title:first").addClass('activated');

  const featuresImageSlider = $("#features-image-slider-" + blockID).slick({ arrows: false, draggable: false, speed: 100 });
});

$(".feature-title").on("mouseenter", function () {
  var key = $(this).data("key");
  var blockID = $(this).data("block-id");
  $("#features-image-slider-" + blockID).slick('slickGoTo', key);
  $("#features-text-slider-" + blockID).find(".feature-title").removeClass('activated');
  $(this).addClass("activated");
});


/*** GRID ANIMATION***/
$(".grid-items").each(function (i) {
  var gridItem = $(this).find('.grid-item');
  if (gridItem) {
    var anim1 = gsap.fromTo(
      gridItem,
      {
        scale: 0,
        opacity: 0,
      },
      {
        duration: 1,
        opacity: 1,
        scale: 1,
        ease: "sine.out",
        stagger: {
          amount: 0.5,

        },
      });

    ScrollTrigger.create({
      trigger: gridItem,
      animation: anim1,
    });
  }
});


/*** POINTS ANIMATION INFO***/
$(".product-info-top").each(function (i) {
  var pointCircle = $(this).find(".point-circle");
  if (pointCircle.length) {
    var anim2 = gsap.fromTo(
      pointCircle,
      { x: 50 },
      {
        duration: 1,
        x: 0,
        ease: "bounce.out",
        stagger: {
          amount: 1,
        },
      });

    ScrollTrigger.create({
      trigger: pointCircle,
      animation: anim2,
    });
  }
});

$(".product-categories-container").each(function () {
  let blockID = $(this).data("block-id");

  /*let productCategoriesSlider = $("#product-categories-slider-"+blockID).slick({
    arrows:false,
    touchThreshold: 1000,
    centerMode: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    variableWidth:false,
    arrows: true,
    infinite:true,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          centerPadding: '30px',
          arrows:false
        }
      }
    ]
  });*/
  /*let productCategoriesSlider = $("#product-categories-slider-"+blockID).flickity({
    cellAlign: 'left',
    contain: true,
    pageDots: false,
    freeScroll: true
  });*/

  const productCategoriesSlider = new Swiper('#product-categories-swiper-' + blockID, {
    freeMode: true,
    slidesPerView: 'auto',
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  let currentProductID = $("#product-categories-swiper-" + blockID).data("current-product-id");
  let slideToKey = $("#product-" + currentProductID).data("key");
  productCategoriesSlider.slideTo(slideToKey);
});

/****SOLUTIONS ANIMATIONS ****/
$(".solution-items").each(function (i) {
  var solutionItem = $(this).find('.solution-item');
  if (solutionItem) {
    gsap.fromTo(
      solutionItem,
      {
        scale: 0,
        opacity: 0,
      },
      {
        duration: 1,
        opacity: 1,
        scale: 1,
        stagger: {
          amount: 0.5,
          from: "center",
          grid: "auto",
          ease: "sine.out"
        },
        scrollTrigger: {
          trigger: solutionItem
        }
      });
  }
});





if ($("#path-container").length) {
  gsap.registerPlugin(MotionPathPlugin);
  gsap.registerPlugin(ScrollTrigger);
  gsap.timeline({
    scrollTrigger: {
      trigger: '#path-container',
      scrub: 2,
      start: 'top top',
      end: 'bottom bottom',
      markers: false,
      autoRotate: true
      //once:true,
      //onUpdate: ({progress}) => console.log(progress) //  info for position
    },
    defaults: { duration: 1, ease: 'none' }
  })
    .to('#floating-astro', {
      motionPath: {
        path: "M268.376,-208.571 C268.376,-208.571 357.704,957.534 356.346,995.197 345.797,1287.538 330.053,1627.141 338.505,1818.885 353.178,2151.775 376.297,2562.129 380.882,2586.855 394.877,2662.354 350.373,3244.26 364.969,3436.186 374.763,3564.97 306.158,4286.142 306.158,4286.142 ",
        align: "#path-container",
      }
    });
  //gsap.registerPlugin(MotionPathHelper);
  //MotionPathHelper.create("#floating-astro");
}


/*** PERFORMANCE ANIMATIONS***/

$(".performance-items").each(function (i, elem) {
  var performanceItems = $(elem);
  var performanceItem = performanceItems.find(".performance-item");
  if (performanceItem.length) {
    performanceItem.each((i, item) => {
      $op = (performanceItem.length - i) / 4;
      $(item).css("opacity", $op);
    });

    performanceItem.on("click", function () {
      performanceItems.find(".performance-item").removeClass("performance-active");
      $(this).addClass("performance-active");
    });
  }
});



$(".related-products-section").each(function (i) {
  let blockID = $(this).data("block-id");
  let relatedProductsSlider = $("#related-products-slider-" + blockID).slick({
    slidesToShow: 5,
    arrows: true,
    touchThreshold: 500,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          /*centerMode: true,
          centerPadding: '50px',
          arrows: false*/
        }
      }
    ]
  });
});



$(".menu-list a").on("mouseenter", function (e) {
  var target = $(this).data("menu");
  var level = $(this).data("level");
  if (level == "one") {
    $(".hidden-lists ul.level-two").removeClass("active-list");
    $(".hidden-lists ul.level-three").removeClass("active-list");
  }

  if (level == "two") {
    $(".hidden-lists ul.level-three").removeClass("active-list");
  }
  $("ul[data-menu=" + target + "]").addClass("active-list");
});

$(".mega-menu-wrapper").on("mouseleave", function () {
  $("ul.active-list").removeClass("active-list");
});

const scrambleElements = document.querySelectorAll(".scramble");
scrambleElements.forEach((element) => {
  applyScrambleText(element);
});

function applyScrambleText(element) {
  var tl = gsap.timeline({ scrollTrigger: { trigger: $(element) } });

  tl.to(".p-banner-content .product-description", { duration: 1, opacity: 1 });
}


$(".mission-filter").on("click", function () {
  $(".filter").removeClass("active");
  $(this).addClass("active");
  $(".mission-vision").css("transform", "translateX(0)");
});

$(".vision-filter").on("click", function () {
  $(".filter").removeClass("active");
  $(this).addClass("active");
  $(".mission-vision").css("transform", "translateX(-50%)");
});

/*$(".member-pic").on("click", function () {
  var n = $(this).data("popup");
  $("#" + n).addClass("open");
});*/
let isDraggable = false;
let startX, startY;
$(".member-pic").on("mousedown", function (e) {
  startX = e.pageX;
  startY = e.pageY;
  isDraggable = false;
});

$('.member-pic').on('mousemove', function (e) {
  if (Math.abs(e.pageX - startX) > 5 || Math.abs(e.pageY - startY) > 5) {
    isDraggable = true;
  }
});

$(".member-pic").on('mouseup', function () {
  if (!isDraggable) {
    var n = $(this).data("popup");
    $("#" + n).addClass("open");
  }

  isDraggable = false;

});

$(".team-popup .close-container").on("click", function () {
  $(this).parent().removeClass("open");
});


let animations = document.querySelectorAll(".animate");
animations.forEach(function (item, index) {
  var animation = $(item).data("animation");
  if (animation == "blackHighlighter") {
    gsap.fromTo(
      item,
      {
        opacity: 0,
        y: 50,
      },
      {
        scrollTrigger: {
          trigger: item,
          start: "top bottom-=100",
          end: "top top+=100",
        },
        y: 0,
        opacity: 1,
        duration: 0.5,
        onComplete() {
          $(item)
            .find(".black-highlighter")
            .addClass("animate-black-highlighter");
        },
      }
    );
  }

  if (animation == "fadeInUp") {
    gsap.fromTo(
      item,
      {
        opacity: 0,
        y: 20,
      },
      {
        scrollTrigger: {
          trigger: item,
        },
        opacity: 1,
        y: 0,
        stagger: 0.2,
      }
    );
  }

  if (animation == "fadeInDown") {
    gsap.fromTo(
      item,
      {
        opacity: 0,
        y: -20,
      },
      {
        scrollTrigger: {
          trigger: item,
        },
        opacity: 1,
        y: 0,
      }
    );
  }

  if (animation == "fadeIn") {
    gsap.fromTo(
      item,
      {
        opacity: 0,
      },
      {
        scrollTrigger: {
          trigger: item,
        },
        opacity: 1,
      }
    );
  }
});

jQuery(document).ready(function ($) {
  $('body').on('submit', '.wpcf7-form', function () {
    var submitButton = $(this).find('input[type="submit"]');

    submitButton.prop('disabled', true); // Disable the button
    //submitButton.val('Submitting...');   // Change button text

  });
});

var wpcf7Elm = document.querySelector('.wpcf7');

wpcf7Elm.addEventListener('wpcf7submit', function (event) {
  var submitButton = $(this).find('input[type="submit"]');

  submitButton.prop('disabled', false);
}, false);


/*** SKEW ***/

let proxy = { skew: 0 },
  skewSetter = gsap.quickSetter(".skewElem", "skewY", "deg"), // fast
  clamp = gsap.utils.clamp(-5, 5); // don't let the skew go beyond 20 degrees. 

ScrollTrigger.create({
  onUpdate: (self) => {
    let skew = clamp(self.getVelocity() / -500);
    // only do something if the skew is MORE severe. Remember, we're always tweening back to 0, so if the user slows their scrolling quickly, it's more natural to just let the tween handle that smoothly rather than jumping to the smaller skew.
    if (Math.abs(skew) > Math.abs(proxy.skew)) {
      proxy.skew = skew;
      gsap.to(proxy, { skew: 0, duration: 0.8, ease: "power3", overwrite: true, onUpdate: () => skewSetter(proxy.skew) });
    }
  }
});

// make the right edge "stick" to the scroll bar. force3D: true improves performance
if ($(".skewElem").length) {
  gsap.set(".skewElem", { transformOrigin: "right center", force3D: true });
}


/*** LEFT RIGHT ITEMS ***/
$(".left-right-items").each(function (i) {
  var $leftRightItem = $(this).find(".left-right-item");
  $leftRightItem.each(function (i, item) {
    gsap.fromTo($(item),
      {
        opacity: 0,
        y: 50,
      },
      {
        duration: 0.8,
        opacity: 1,
        y: 0,
        scrollTrigger: {
          trigger: $(item),
          start: "top 90%"
        }
      });
  });

});

gsap.registerPlugin(ScrollToPlugin);


var hash = window.location.hash;
if (hash) {
  scrollToHash(hash);
}

$('a[href]').on("click", function (e) {
  const currentURLWithoutParams = window.location.origin + window.location.pathname;
  const linkToCheck = $(this).attr("href");

  // Get the link without parameters and hash
  var linkWithoutParams = linkToCheck.split('?')[0];
  linkWithoutParams = linkWithoutParams.split('#')[0];

  // Compare the URLs without parameters
  if (currentURLWithoutParams === linkWithoutParams) {
    e.preventDefault();
    scrollToHash("#" + linkToCheck.split('#')[1]);
  }
});

$('a[href^="#"]').on("click", function (e) {
  e.preventDefault();
  const target = $(this).attr("href");
  if (target != "#") {
    scrollToHash(target);
  }

});

function scrollToHash(targ) {
  gsap.to(window, {
    duration: 1.5,
    scrollTo: {
      autoKill: true,
      y: targ,
      offsetY: $("header").height() + 50,
    }
  });
}

var $cpslider = $("#category-products-slider");
var $cpislider = $("#category-product-info-slider");

if ($cpslider) {

  let categoryProductsInfoSlider = $("#category-product-info-slider").slick({
    fade: true,
    draggable: false,
    arrows: false
  })
}

if ($cpislider) {
  let categoryProductsSlider = $("#category-products-slider").slick({
    centerMode: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerPadding: '50px',
    touchThreshold: 1000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
}

$(".category-product-item").on("click", function () {
  handleCategorySlideTransition($(this).data("key"));
});


$("#category-products-slider").on("afterChange", function (slick, currentSlide) {
  if (window.innerWidth <= 768) {
    handleCategorySlideTransition(currentSlide.currentSlide);
  }
});

function handleCategorySlideTransition(slideIndex) {
  $(".category-product-item").removeClass("category-active");
  $(".category-product-item[data-key='" + slideIndex + "']").addClass("category-active");
  $("#category-product-info-slider").slick("slickGoTo", slideIndex);
}


if ($("#about-us-half-sections")) {
  ScrollTrigger.matchMedia({
    "(min-width:1140px)": function () {
      ScrollTrigger.create({
        trigger: "#about-us-half-sections",
        pin: true,
        start: "top top+=70",
        end: "bottom top-=200",
        onUpdate: (self) => {
          if (self.direction == 1) {
            if (self.progress > 0.4) {
              $(".half-section-1").removeClass("is-active");
              $(".half-section-2").addClass("is-active");
            }
          } else {
            if (self.progress < 0.7) {
              $(".half-section-2").removeClass("is-active");
              $(".half-section-1").addClass("is-active");
            }
          }
        },
      });


    },
  });
}
if ("#leadership-team-slider") {
  $("#leadership-team-slider").slick({
    slidesToShow: 4,
    arrows: true,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
      breakpoint: 1199,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      }
    }
    ]
  });
}

if ($("#management-team-slider")) {
  $("#management-team-slider").slick({
    slidesToShow: 4,
    arrows: true,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
      breakpoint: 1199,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      }
    }
    ]
  });
}

if ($("#timeline-slider")) {
  var timelineSlider = $("#timeline-slider").slick({
    slidesToShow: 5,
    centerMode: true,
    infinite: true,
    touchThreshold: 1000,
    autoplay: false,
    arrows: false,
    responsive: [{
      breakpoint: 1199,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        centerPadding: '60px'
      }
    }]
  });
  $(".timeline-date").on("click", function () {
    $("#timeline-slider").slick("slickGoTo", $(this).data("key"));
  });
}



$("#search-btn").on("click", function (e) {
  e.preventDefault();
  $(".search-popup").addClass("open");
  $(".search-input").focus();
});

$(".close-container").on("click", function () {
  $(".search-popup").removeClass("open");
});

jQuery.event.special.touchstart = {
  setup: function (_, ns, handle) {
    this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
  }
};
jQuery.event.special.touchmove = {
  setup: function (_, ns, handle) {
    this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
  }
};
jQuery.event.special.wheel = {
  setup: function (_, ns, handle) {
    this.addEventListener("wheel", handle, { passive: true });
  }
};
jQuery.event.special.mousewheel = {
  setup: function (_, ns, handle) {
    this.addEventListener("mousewheel", handle, { passive: true });
  }
};


