<?php get_header(); ?>

<!-- メインビュー -->
<section class="content-mv sub-mv">
  <div class="sub-mv__inner">
    <h1 class="sub-mv__title">事業内容</h1>
  </div>
</section>

<!-- パンくずリスト -->

<div class="breadcrumbs">
  <?php if (function_exists('bcn_display')) {
    bcn_display();
  } ?>
</div>

<!-- 企業理念 -->
<section class="content-main">
  <div class="content-main__inner">
    <h2 class="content-main__title">企業理念</h2>
    <p class="content-main__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
  </div>
</section>

<!-- 企業理念一覧 -->
<section class="content-list">
  <div class="content-list__inner">
    <div class="content-list__items">
      <div class="content-list__items-img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-sub1-pc.jpg" media="(min-width: 768px)">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-sub1-sp.jpg" alt="企業理念１の画像です">
        </picture>
      </div>
      <div class="content-list__items-item">
        <h3 class="content-list__items-item-title">企業理念１</h3>
        <p class="content-list__items-item-text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
      </div>
    </div>

    <div class="content-list__items">
      <div class="content-list__items-img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-sub2-pc.jpg" media="(min-width: 768px)">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-sub2-sp.jpg" alt="企業理念２の画像です">
        </picture>
      </div>
      <div class="content-list__items-item">
        <h3 class="content-list__items-item-title">企業理念２</h3>
        <p class="content-list__items-item-text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
      </div>
    </div>

    <div class="content-list__items">
      <div class="content-list__items-img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-sub3-pc.jpg" media="(min-width: 768px)">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-sub3-sp.jpg" alt="企業理念３の画像です">
        </picture>
      </div>
      <div class="content-list__items-item">
        <h3 class="content-list__items-item-title">企業理念３</h3>
        <p class="content-list__items-item-text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
      </div>
    </div>

  </div>
</section>

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