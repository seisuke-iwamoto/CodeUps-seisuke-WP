"use strict";

// worksのswiper起動
var swipeOption = {
  loop: true,
  effect: 'slide',
  autoplay: {
    delay: 3000,
    disableOnInteraction: false
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  }
};
new Swiper('.slide', swipeOption);