"use strict";

// .mainview"を過ぎたらページトップスクロール出現
jQuery(function($){
$(function () {
  $(window).on("scroll", function () {
    var sliderHeight = $(".mainview").height();

    if (sliderHeight - 15 < $(this).scrollTop()) {
      $(".js-page-top").addClass("page-topscroll");
    } else {
      $(".js-page-top").removeClass("page-topscroll");
    }
  });
}); 
});

// #page-topをクリックした際の設定

jQuery(function($){
$('.page-top').click(function () {
  $('body,html').animate({
    scrollTop: 0 //ページトップまでスクロール

  }, 300); //ページトップスクロールの速さ。数字が大きいほど遅くなる

  return false; //リンク自体の無効化
});
});