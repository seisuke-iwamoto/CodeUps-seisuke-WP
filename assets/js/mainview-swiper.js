"use strict";

// mainviewのswiper起動
var swipeOption = {
  loop: true,
  effect: 'fade',
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 2000,
};
new Swiper('.fade', swipeOption);
