<?php get_header(); ?>

<div class="error404">
  <div class="error404__inner">
      <h1 class="error404__title">404 Not Found</h1>
      <p class="error404__text">お探しのページは <br class="u-mobile"> 見つかりませんでした。</p>
    <div class="error404__btn ">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="btn">topへ</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>