<?php get_header(); ?>

<!-- メインビュー -->
<section class="works-mv sub-mv">
  <div class="sub-mv__inner">
    <h1 class="sub-mv__title">制作実績</h1>
  </div>
</section>

<!-- パンくずリスト -->

<div class="breadcrumbs">
  <?php if (function_exists('bcn_display')) {
    bcn_display();
  } ?>
</div>

<!-- 制作実績カテゴリメニュー -->
<div class="works-category">
  <div class="works-category__inner">
    <ul class="works-category__menu">
      <li class="works-category__list"><a href="">ALL</a></li>
      <li class="works-category__list"><a href="">カテゴリ1</a></li>
      <li class="works-category__list"><a href="">カテゴリカテゴリ</a></li>
      <li class="works-category__list"><a href="">カテ</a></li>
    </ul>
  </div>
</div>

<!-- 制作実績カテゴリ一覧 -->
<div class="works-items">
  <div class="works-items__inner">
    <!-- ループ処理 -->
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="works-items__item grid-item">
          <a href="<?php the_permalink(); ?> ">
            <div class="grid-item__img">
            <?php the_post_thumbnail('full', array('alt' => 'アイキャッチ画像')); ?>
            </div>
            <p class="grid-item__category"><?php $cat = get_the_category();
                                            $cat = $cat[0]; {
                                              echo $cat->cat_name;
                                            } ?></p>
            <p class="grid-item__title"><?php the_title(); ?></p>
          </a>
        </div>
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