// エラーメッセージ位置変更
jQuery(function ($) {
  $(document).on('wpcf7invalid', function () { // ①
    $.ajax().always(function () { // ②
      $('.wpcf7-form-control-wrap').each(function (index, el) { // ③
        if ($(el).find('.wpcf7-not-valid-tip').length) { // ④
          $(el).find('.wpcf7-not-valid-tip').insertBefore($(el)) // ⑤
        }
      });
    });
  });
});