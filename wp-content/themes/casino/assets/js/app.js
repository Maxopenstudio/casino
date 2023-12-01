$(document).ready(function () {
  $(".burger__icon").click(function () {
    $(this).hide();
    $(".burger__icon_close").show();
    $(".burger__block").addClass("open");
    $("html, body").addClass("ovh");
  });
  $(".burger__icon_close").click(function () {
    $(this).hide();
    $(".burger__icon").show();
    $(".burger__block").removeClass("open");
    $("html, body").removeClass("ovh");
  });
  if ($(window).width() < 769) {
    $(".menu__link").click(function () {
      //   $(".burger__icon_close").click();
    });
  }
  $(document).on("click", function (e) {
    if ($(window).width() > 768) {
      if ($(e.target).hasClass("menu__link")) {
        $(e.target).parent().find(".submenu").toggleClass("d__flex");
      } else {
        $(".submenu").removeClass("d__flex");
      }
    } else {
        if ($(e.target).hasClass("menu__link")) {
            $(e.target).parent().find(".submenu").slideToggle();
          }
    }
  });
  $(".search").click(function () {
    $(".searchModal").addClass("open");
    var overlay = "<div class='overlay'></div>";
    $("body").append(overlay);
  });
  $(document).on("click", ".overlay", function () {
    $(".searchModal").removeClass("open");
    $(".overlay").remove();
  });

  $(".cards").owlCarousel({
    loop: true,
    nav: true,
    mouseDrag: true,
    touchDrag: true,
    pullDrag: false,
    freeDrag: false,
    URLhashListener: false,
    dots: true,
    autoplay: false,
    margin: 20,
    responsive: {
      0: {
        items: 2,
      },
      576: {
        items: 3,
      },
      768: {
        items: 4,
      },
      992: {
        items: 5,
      },
      1400: {
        items: 6,
      },
    },
  });
  if ($(window).width() < 769) {
    $(".cards").owlCarousel("destroy");
  }
  $(window).on("resize", function () {
    if ($(window).width() < 769) {
      $(".cards").owlCarousel("destroy");
    } else {
      $(".cards").owlCarousel({
        loop: true,
        nav: true,
        mouseDrag: true,
        touchDrag: true,
        pullDrag: false,
        freeDrag: false,
        URLhashListener: false,
        dots: true,
        autoplay: false,
        margin: 20,
        responsive: {
          0: {
            items: 2,
          },
          576: {
            items: 3,
          },
          768: {
            items: 4,
          },
          992: {
            items: 5,
          },
          1400: {
            items: 6,
          },
        },
      });
    }
  });
  $(".pageTemplate .news").owlCarousel({
    loop: true,
    nav: true,
    mouseDrag: true,
    touchDrag: true,
    pullDrag: false,
    freeDrag: false,
    URLhashListener: false,
    dots: true,
    autoplay: false,
    margin: 20,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });
  if ($(window).width() < 769) {
    $(".pageTemplate .news").owlCarousel("destroy");
  }
  $(window).on("resize", function () {
    if ($(window).width() < 769) {
      $(".pageTemplate .news").owlCarousel("destroy");
    } else {
      $(".pageTemplate .news").owlCarousel({
        loop: true,
        nav: true,
        mouseDrag: true,
        touchDrag: true,
        pullDrag: false,
        freeDrag: false,
        URLhashListener: false,
        dots: true,
        autoplay: false,
        margin: 20,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          992: {
            items: 3,
          },
        },
      });
    }
  });
});
