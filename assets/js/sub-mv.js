"use strict";

jQuery(function ($) {
  $(function () {
    $(window).on("scroll", function () {
      var sliderHeight = $(".sub-mv").height();

      if (sliderHeight - 0 < $(this).scrollTop()) {
        $(".header").addClass("header__color");
      } else {
        $(".header").removeClass("header__color");
      }
    });
  });
});