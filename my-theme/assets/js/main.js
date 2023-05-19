jQuery(document).ready(function ($) {
  loadAllScripts($);
    barba.init({
        sync: true,

        transitions: [
            {
                async leave(data) {
                    const done = this.async();

                    pageTransition();
                    await delay(1000);
                    done();
                },
            },
        ],
    });

    barba.hooks.after((data) => {
      loadAllScripts($);
    });
});

function loadAllScripts($) {  
  $(".slider").slick({
    dots: false,
    arrows: true,
    swipe: true,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
        },
      },
    ],
  });

  $(".mobile-slider").slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
  });

  $(".mobile-slider .slick-dots li button").addClass("light-dots");

  $(".mobile-slider").on(
    "afterChange",
    function (event, slick, currentSlide, nextSlide) {
      if (currentSlide === 2 || currentSlide === 3) {
        $(".mobile-slider .slick-dots li button").addClass("dark-dots");
      } else {
        $(".mobile-slider .slick-dots li button").removeClass("dark-dots");
        $(".mobile-slider .slick-dots li button").addClass("light-dots");
      }
    }
  );

  $(".video-modal").click(function () {
    $(".modal-wrap").css("display", "-webkit-box");
    $(".modal-video").css("display", "-webkit-box");
  });

  // close the modal
  $(".close-modal").click(function () {
    $(".modal-wrap").hide();

    // Close video
    var url = $(".iframe_video").attr("src");
    $(".iframe_video").attr("src", "");
    $(".iframe_video").attr("src", url);
  });

  // Group Holding Button
  var menuTimeout;
  $("button.menu-button").hover(
    function () {
      clearTimeout(menuTimeout);
      $(".dropdown").fadeIn(400).removeClass("hide");
    },
    function () {
      menuTimeout = setTimeout(function () {
        $(".dropdown").fadeOut(200).addClass("hide");
      });
    }
  );

  $(".dropdown").hover(
    function () {
      clearTimeout(menuTimeout);
      $(this).removeClass("hide");
    },
    function () {
      menuTimeout = setTimeout(function () {
        $(".dropdown").fadeOut(400).addClass("hide");
      });
    }
  );

  $(".hamburger").click(function () {
    var isMenuOpen = $(".mobile-menu").hasClass("menu-open");
    $(this).toggleClass("is-active");
    $("body").toggleClass("menu-open");
    $(".mobile-menu").toggleClass("menu-open");

    if (!isMenuOpen) {
      $(".mobile-menu").removeClass("slideAway").animate({ top: "0" }, 500);
      $(".mobile-menu").addClass("slideInUp");
      $(".floating-container .column").addClass("fadeInUp delayed");
      $(".mobile-container").addClass("fadeInUp delayed");
    } else {
      $(".mobile-menu").removeClass("slideInUp");
      $(".floating-container .column").removeClass("fadeInUp delayed");
      $(".mobile-container").removeClass("fadeInUp delayed");
      $(".mobile-menu")
        .css({ top: "0", display: "block" })
        .animate({ top: "100%" }, 500, function () {
          $(this).removeClass("slideAway"); // hide menu after animation completes
        })
        .addClass("slideAway");
    }
  });

  $(".mobile-menu li:has(ul) > a").click(function (e) {
    e.preventDefault();
    $(this).parent("li").toggleClass("active");
    $(this).siblings(".sub-menu").toggleClass("show");
  });

  var isDropdownShown = false;
  
$(".m_button").click(function () {
    var dropdownHeight = $(".dropdown-mobile").outerHeight(true); // get the height of the dropdown
    var menu = $(".mobile-menu-items"); // get the menu

    if (isDropdownShown) {
        $(".dropdown-mobile").addClass("hide");
        isDropdownShown = false;
        menu.css({ position: "relative", top: "0", transition: "all 0.3s ease-in-out" });
    } else {
        $(".dropdown-mobile").removeClass("hide");
        isDropdownShown = true;
        menu.css({ position: "relative", top: -dropdownHeight + "px", transition: "all 0.3s ease-in-out" });
    }
});

  

  $(".m_button").click(function () {});
  $(".footer-menu li:has(ul) > a").click(function (e) {
    e.preventDefault();
    $(this).parent("li").toggleClass("active");
    $(this).siblings(".sub-menu").toggleClass("show");
  });

  $("a.column-title").click(function (e) {
    e.preventDefault();
    $(this).toggleClass("active");
    $(".footer .block-container .posts").toggleClass("active");
  });

  $("a.row-title").click(function (e) {
    e.preventDefault();
    $(this).toggleClass("active");
    $(".footer .text-p").toggleClass("active");
  });

}

const delay = (n = 2000) => {
  return new Promise((resolve) => {
    setTimeout(resolve, n);
  });
};

const pageTransition = () => {
  const tl = gsap.timeline();
  tl.to(".loading-screen", {
    duration: 1.2,
    width: "100%",
    left: "0%",
    ease: "Expo.easeInOut",
  });

  tl.to(".loading-screen", {
    duration: 1,
    width: "100%",
    left: "100%",
    ease: "Expo.easeInOut",
    delay: 0.3,
  });

  tl.set(".loading-screen", {
    left: "-100%",
  });

  $('a[href="#"]').click(function() {
    alert("Hello Href");
})
};
