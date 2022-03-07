<?php get_header(); ?>

<!-- メインビュー -->
<section class="contact-mv sub-mv">
  <div class="sub-mv__inner">
    <h1 class="sub-mv__title">お問い合わせ</h1>
  </div>
</section>

<!-- パンくずリスト -->

<div class="breadcrumbs">
  <?php if (function_exists('bcn_display')) {
    bcn_display();
  } ?>
</div>

<!-- お問い合わせフォーム -->
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>