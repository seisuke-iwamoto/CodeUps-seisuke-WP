<?php get_header(); ?>


<!-- メインビュー -->
<section class="overview-mv sub-mv">
  <div class="sub-mv__inner">
    <h1 class="sub-mv__title">企業概要</h1>
  </div>
</section>

<!-- パンくずリスト -->

<div class="breadcrumbs">
  <?php if (function_exists('bcn_display')) {
    bcn_display();
  } ?>
</div>

<!-- 企業概要一覧 -->
<div class="overview-contents">
  <div class="overview-contents__inner">
    <table class="overview-contents__table table-list">
      <tr class="table-list__item">
        <th class="table-list__title">会社名</th>
        <td class="table-list__text">株式会社CodeUps</td>
      </tr>
      <tr class="table-list__item">
        <th class="table-list__title">設立</th>
        <td class="table-list__text">テキストが入ります。</td>
      </tr>
      <tr class="table-list__item">
        <th class="table-list__title">資本金</th>
        <td class="table-list__text">テキストが入ります。</td>
      </tr>
      <tr class="table-list__item">
        <th class="table-list__title">売上高</th>
        <td class="table-list__text">テキストが入ります。</td>
      </tr>
      <tr class="table-list__item">
        <th class="table-list__title">代表者</th>
        <td class="table-list__text">テキストが入ります。</td>
      </tr>
      <tr class="table-list__item">
        <th class="table-list__title">従業員数</th>
        <td class="table-list__text">テキストが入ります。</td>
      </tr>
      <tr class="table-list__item">
        <th class="table-list__title">事業内容</th>
        <td class="table-list__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</td>
      </tr>
      <tr class="table-list__item">
        <th class="table-list__title">所在地</th>
        <td class="table-list__text">東京駅</td>
      </tr>
    </table>
  </div>
</div>

<!-- アクセスGoogleマップ -->
<div class="access">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2036.732087866047!2d139.74430826829146!3d35.65899941513445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1637578788843!5m2!1sja!2sjp" width="1100" height="367" style="border:0;" allowfullscreen="" loading="lazy">
  </iframe>
</div>

<!-- お問い合わせ -->
<section class="contact contact__top">
  <div class="contact__inner">
    <div class="l-inner">
      <h2 class="contact__title section-title">
        contact
      </h2>
      <p class="contact__sub-title sectiton-subtitle">お問い合わせ</p>
      <p class="contact__text section-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      <div class="contact__btn">
        <a href="<?php echo home_url('/contact/'); ?>" class="btn">お問い合わせへ</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>