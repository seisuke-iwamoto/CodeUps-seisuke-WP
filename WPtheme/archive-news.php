<?php get_header(); ?>

<!-- メインビュー -->
<section class="news-mv sub-mv">
  <div class="sub-mv__inner">
    <h1 class="sub-mv__title">お知らせ</h1>
  </div>
</section>

<!-- パンくずリスト -->

<div class="breadcrumbs">
  <?php if (function_exists('bcn_display')) {
    bcn_display();
  } ?>
</div>

<!-- お知らせ一覧 -->


<div class="news news-sub">
  <div class="news-sub__inner">
    <!-- ループ処理 -->
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <ul class="news__list news__list-sub">
          <li class="news__list-contents">
            <div class="news__list-content">
              <time class="news__list-date" datetime="Y.m.d"><?php the_time('Y.m.d'); ?></time>
              <span class="news__list-category"><?php the_category(','); ?></span>
            </div>
            <div class="news__list-text">
              <a href="<?php the_permalink(); ?> " class="news__list-text news__list-text--yellow"><?php the_title(); ?></a>
            </div>
          </li>
        </ul>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>


<!-- ページナビ -->

<div class="pagenavi">
  <?php wp_pagenavi(); ?>
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