"use strict";

var slider = new Swiper('.gallery-slider', {
  slidesPerView: 1,
  centeredSlides: false,
  loop: true,
  loopedSlides: 8,
  //スライドの枚数と同じ値を指定
  // 767px以下のオプション
  breakpoints: {
    767: {
      centeredSlides: true
    }
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
});

//サムネイル

var thumbs = new Swiper('.gallery-thumbs', {
  slidesPerView: "auto",
  spaceBetween: 8,
  centeredSlides: false,
  loop: true,
  slideToClickedSlide: true,
  // 767px以下のオプション
  breakpoints: {
    767: {
      spaceBetween: 24,
      centeredSlides: true
    }
  }
}); //4系～
//メインとサムネイルを紐づける

slider.controller.control = thumbs;
thumbs.controller.control = slider;