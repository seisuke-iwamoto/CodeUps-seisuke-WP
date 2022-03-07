jQuery(function($){
  $('.tab').on('click',function(){
    var idx=$('.tab').index(this);
    $(this).addClass('is-active').siblings('.tab').removeClass('is-active');
    $(this).closest('.blog-category').next('.blog-articles').find('.panel').removeClass('is-show');
    $('.panel').eq(idx).addClass('is-show');
    return false;
  });
});