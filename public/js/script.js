$(document).ready(function () {

  $(document).on("scroll", function () {
    if ($(document).scrollTop() > 100) {
      $(".navbar-brand").removeClass("large").addClass("small");
    } else {
      $(".navbar-brand").removeClass("small").addClass("large");
    }
  });
  // parallax

  //  if ($("div").is('.page')) {
  if ($('.parallax').length) {
    var y1 = $('.parallax').offset().top;
  }



  $(window).on('resize', function () {
    if ($('.parallax').length) {
      y1 = $('.parallax').offset().top;
    }

  });




  $(window).bind('scroll', function (e) {
    parallaxScroll();

  });


  //   $(document).scroll(function () {
  //     var y = ($(this).scrollTop()) + ($(window).height());
  //     if (y > y1) {
  //       parallaxScroll();
  //     }

  // });


  function parallaxScroll() {


    var scrolled = $(window).scrollTop();
    $('.parallax').css('background-position-y', (y1 / 2 - (scrolled * .2) + 'px'));


  }
  //  }

});