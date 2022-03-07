"use strict";

jQuery(function ($) {
  $(function () {
    $(window).on("scroll", function () {
      var sliderHeight = $(".mainview").height();

      if (sliderHeight - 40 < $(this).scrollTop()) {
        $(".header").addClass("header__color");
      } else {
        $(".header").removeClass("header__color");
      }
    });
  });
});
