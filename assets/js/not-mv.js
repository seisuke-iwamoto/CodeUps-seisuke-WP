"use strict";

jQuery(function ($) {
  $(function () {
    $(window).on("scroll", function () {
      var sliderHeight = $(".header").height();

      if (sliderHeight - 0 < $(this).scrollTop()) {
        $(".header").addClass("header__color");
      } else {
        $(".header").removeClass("header__color");
      }
    });
  });
});