"use strict";

jQuery(function ($) {
  //ナビバートグル
  $('.js-hamburger').on('click', function () {
    if ($('.js-hamburger').hasClass('is-open')) {
      $('.js-drawer-menu').fadeOut();
      $(this).removeClass('is-open');
    } else {
      $('.js-drawer-menu').fadeIn();
      $(this).addClass('is-open');
    }
  });
}); // ハンバーガーメニュークリック時にスクロール禁止

jQuery(function ($) {
  $(".js-hamburger").click(function () {
    $('body').toggleClass('noscroll');
  });
});
