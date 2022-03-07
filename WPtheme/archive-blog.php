<?php get_header(); ?>


<!-- メインビュー -->
<section class="blog-mv sub-mv">
  <div class="sub-mv__inner">
    <h1 class="sub-mv__title">ブログ</h1>
  </div>
</section>

<!-- パンくずリスト -->

<div class="breadcrumbs">
  <?php if (function_exists('bcn_display')) {
    bcn_display();
  } ?>
</div>




<!-- 制作実績カテゴリメニュー -->
<div>
  <div class="blog-category">
    <div class="blog-category__inner">
      <div class="blog-category__menu tab-group">
        <div class="blog-category__list tab is-active">ALL</div>
        <div class="blog-category__list tab">ブログ</div>
        <div class="blog-category__list tab">制作実績</div>
        <div class="blog-category__list tab">お知らせ</div>
      </div>
    </div>
  </div>

  <!-- ブログ記事一覧 -->
  <div class="blog-articles">
    <div class="blog-articles__inner l-inner panel-group">
      <!-- カテゴリ ALL -->
      <div class="panel is-show">
        <div class="blog__list cards">
          <!-- ループ処理 -->
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="cards__item card">
                <a href="<?php the_permalink(); ?>">
                  <div class="card__img">
                    <?php the_post_thumbnail('full', array('alt' => 'アイキャッチ画像')); ?>
                  </div>
                  <div class="card__body">
                    <h3 class="card_title"><?php the_title(); ?></h3>
                    <p class="card__text"><?php echo get_the_excerpt(); ?></p>
                    <div class="card__info">
                      <p class="card__category"><?php $cat = get_the_category();
                                                $cat = $cat[0]; {
                                                  echo $cat->cat_name;
                                                } ?></p>
                      <time class="card__date" datetime="Y.m.d"><?php the_time('Y.m.d'); ?></time>
                    </div>
                  </div>
                </a>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

<!--       <!-- カテゴリ ブログ -->
      <div class="panel">
        <div class="blog__list cards">
          <!-- ループ処理 -->
          <?php
          $cat_posts = get_posts(array(
            'post_type' => 'blog',
            'category_name' => 'blog',
            'posts_per_page' => 9,
            'orderby' => $orderby,
            'order' => $order,

          ));
          global $post;
          if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>
              <div class="cards__item card">
                <a href="<?php the_permalink(); ?>">
                  <div class="card__img">
                    <?php the_post_thumbnail('full', array('alt' => 'アイキャッチ画像')); ?>
                  </div>
                  <div class="card__body">
                    <h3 class="card_title"><?php the_title(); ?></h3>
                    <p class="card__text"><?php echo get_the_excerpt(); ?></p>
                    <div class="card__info">
                      <p class="card__category"><?php $cat = get_the_category();
                                                $cat = $cat[0]; {
                                                  echo $cat->cat_name;
                                                } ?></p>
                      <time class="card__date" datetime="Y.m.d"><?php the_time('Y.m.d'); ?></time>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

      <!-- カテゴリ 制作実績 -->
      <div class="panel">
        <div class="blog__list cards">
          <!-- ループ処理 -->       
          <?php
          $cat_posts = get_posts(array(
            'post_type' => 'blog',
            'category_name' => 'works',
            'posts_per_page' => 9,
            'orderby' => $orderby,
            'order' => $order,
          ));
          global $post;
          if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>
              <div class="cards__item card">
                <a href="<?php the_permalink(); ?>">
                  <div class="card__img">
                    <?php the_post_thumbnail('full', array('alt' => 'アイキャッチ画像')); ?>
                  </div>
                  <div class="card__body">
                    <h3 class="card_title"><?php the_title(); ?></h3>
                    <p class="card__text"><?php echo get_the_excerpt(); ?></p>
                    <div class="card__info">
                      <p class="card__category"><?php $cat = get_the_category();
                                                $cat = $cat[0]; {
                                                  echo $cat->cat_name;
                                                } ?></p>
                      <time class="card__date" datetime="Y.m.d"><?php the_time('Y.m.d'); ?></time>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

      <!-- カテゴリ お知らせ -->
      <div class="panel">
        <div class="blog__list cards">
          <!-- ループ処理 -->
          <?php
          $cat_posts = get_posts(array(
            'post_type' => 'blog',
            'category_name' => 'news',
            'posts_per_page' => 9,
            'orderby' => $orderby,
            'order' => $order,
          ));
          global $post;
          if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>
              <div class="cards__item card">
                <a href="<?php the_permalink(); ?>">
                  <div class="card__img">
                    <?php the_post_thumbnail('full', array('alt' => 'アイキャッチ画像')); ?>
                  </div>
                  <div class="card__body">
                    <h3 class="card_title"><?php the_title(); ?></h3>
                    <p class="card__text"><?php echo get_the_excerpt(); ?></p>
                    <div class="card__info">
                      <p class="card__category"><?php $cat = get_the_category();
                                                $cat = $cat[0]; {
                                                  echo $cat->cat_name;
                                                } ?></p>
                      <time class="card__date" datetime="Y.m.d"><?php the_time('Y.m.d'); ?></time>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div> -->

    </div>
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