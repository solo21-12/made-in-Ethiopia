$(document).ready(function () {
  $('a[href^="#"]').on("click", function (event) {
    var target = $(this.getAttribute("href"));
    if (target.length) {
      event.preventDefault();
      $("html, body").stop().animate(
        {
          scrollTop: target.offset().top,
        },
        1000
      );
    }
  });

  $(window).scroll(function () {
    var scrollPos = $(this).scrollTop();

    $(".promotion-section, .products-section").each(function () {
      var sectionOffset = $(this).offset().top - $(window).height() / 2;

      if (scrollPos >= sectionOffset) {
        $(this).addClass("animated");
      }
    });
  });


  setTimeout(function () {
    $(".loading-indicator").fadeOut('slow');
  }, 2000);
});

$(document).ready(function () {
  $(window).scroll(function () {
    var scrollPos = $(this).scrollTop();
    var firstSectionOffset = $("#promotion").offset().top;

    if (scrollPos >= firstSectionOffset) {
      $("header").addClass("scrolled");
    } else {
      $("header").removeClass("scrolled");
    }
  });
});
