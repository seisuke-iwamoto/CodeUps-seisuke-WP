"use strict";

var slider = new Swiper('.gallery-slider', {
  slidesPerView: 1,
  centeredSlides: true,
  loop: true,
  loopedSlides: 6,
  //スライドの枚数と同じ値を指定
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
}); //サムネイル

var thumbs = new Swiper('.gallery-thumbs', {
  slidesPerView: 'auto',
  spaceBetween: 8,
  centeredSlides: true,
  loop: true,
  slideToClickedSlide: true
}); //4系～
//メインとサムネイルを紐づける

slider.controller.control = thumbs;
thumbs.controller.control = slider;