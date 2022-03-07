<?php get_header(); ?>

<!-- mainview -->

<section class="mainview">
  <div class="mainview__inner">
    <h2 class="mainview__title">メインタイトルが入ります</h2>
    <p class="mainview__subtitle">サブタイトルが入ります</p>
    <div class="swiper-container fade">
      <div class="swiper-wrapper mainview-wrapper">
        <div class="swiper-slide mainview-slide">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/mv-pc-1.png" media="(min-width: 768px)">
            <img class="slide-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/mv-1.png" alt="スライダー画像1">
          </picture>
        </div>
        <div class="swiper-slide mainview-slide">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/mv-pc-2.png" media="(min-width: 768px)">
            <img class="slide-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/mv-2.png" alt="スライダー画像2">
          </picture>
        </div>
        <div class="swiper-slide mainview-slide">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/mv-pc-3.png" media="(min-width: 768px)">
            <img class="slide-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/mv-3.png" alt="スライダー画像3">
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- お知らせ -->

<!-- サブループ取得先 -->
<?php
$args = array(
  'post_type' => 'news',
  'posts_per_page' => 1
);

$the_query = new WP_Query($args);
?>

<div class="news news-top">
  <div class="news__inner">
    <!-- ループ処理 -->
    <?php if ($the_query->have_posts()) : ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <ul class="news__list">
          <li class="news__list-item">
            <div class="news__list-content">
              <time class="news__list-date" datetime="Y.m.d"><?php the_time('Y.m.d'); ?></time>
              <span class="news__list-category"><?php the_category(','); ?></span>
            </div>
            <div class="news__list-text">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="news__btn--white u-desktop">
              <a href="<?php echo get_post_type_archive_link('news'); ?>" class="btn--white">すべて見る</a>
            </div>
          </li>
        </ul>
      <?php endwhile; ?>
    <?php endif; ?>
    <div class="news__btn u-mobile">
      <a href="<?php echo get_post_type_archive_link('news'); ?>" class="btn">すべて見る</a>
    </div>
  </div>
</div>
<?php
wp_reset_query();
?>


<!-- 事業内容 -->

<section class="content content__top">
  <div class="content__inner">
    <div class="content__header">
      <h2 class="content__title section-title">
        content
      </h2>
      <p class="content__sub-title sectiton-subtitle">事業内容</p>
    </div>
    <div class="content__grid">
      <div class="content__grid-item">
        <a href="<?php echo home_url('/content/'); ?>">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-pc.png" media="(min-width: 768px)">
            <img class="content__grid-item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-1.png" alt="経営理念ページへ1">
          </picture>
        </a>
        <p class="content__grid-item-text">経営理念ページへ</p>
      </div>

      <div class="content__grid-item">
        <a href="<?php echo home_url('/content/'); ?>">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-pc2.png" media="(min-width: 768px)">
            <img class="content__grid-item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-2.png" alt="理念1の画像">
          </picture>
        </a>
        <p class="content__grid-item-text">理念１へ</p>
      </div>

      <div class="content__grid-item">
        <a href="<?php echo home_url('/content/'); ?>">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-pc3.png" media="(min-width: 768px)">
            <img class="content__grid-item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-3.png" alt="理念２の画像">
          </picture>
        </a>
        <p class="content__grid-item-text">理念２へ</p>
      </div>

      <div class="content__grid-item">
        <a href="<?php echo home_url('/content/'); ?>">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-pc4.png" media="(min-width: 768px)">
            <img class="content__grid-item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-4.png" alt="理念3の画像">
          </picture>
        </a>
        <p class="content__grid-item-text">理念３へ</p>
      </div>
    </div>
  </div>
</section>


<!-- 制作実績 -->

<section class="works works__top">
  <div class="works__inner">
    <div class="works__header">
      <h2 class="works__title section-title">
        works
      </h2>
      <p class="works__sub-title sectiton-subtitle">制作実績</p>
    </div>
    <div class="works__bg">

      <div class="works__contents">
        <div class="swiper-container slide">
          <div class="swiper-wrapper works__swiper-wrapper">
            <div class="swiper-slide works__swiper-slide">
              <div class="works__img">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/works-pc1.png" media="(min-width: 768px)">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/works-sp1.jpg" alt="制作実績の画像１">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="works__img">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/works-pc2.png" media="(min-width: 768px)">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/works-sp2.jpg" alt="制作実績の画像１">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="works__img">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/works-pc3.png" media="(min-width: 768px)">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/works-sp3.jpg" alt="制作実績の画像１">
                </picture>
              </div>
            </div>
          </div>
          <!-- swiperのページネーション -->
          <div class="swiper-pagination"></div>
        </div>
        <div class="works__content">
          <h3 class="works__content-title">メインタイトルが入ります</h3>
          <p class="works__content-text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
          <div class="works__content-btn">
            <a href="<?php echo home_url('/works/'); ?>" class="btn">詳しく見る</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- 企業概要 -->
<section class="overview overview__top">
  <div class="overview__inner">
    <div class="overview__header">
      <h2 class="overview__title section-title">
        overview
      </h2>
      <p class="overview__sub-title sectiton-subtitle">企業概要</p>
    </div>
    <div class="overview__bg">
      <div class="overview__contents">
        <div class="overview__img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-pc.png" media="(min-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview-sp.jpg" alt="企業概要の画像">
          </picture>
        </div>
        <div class="overview__content">
          <h3 class="overview__content-title">メインタイトルが入ります</h3>
          <p class="overview__content-text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
          <div class="overview__content-btn">
            <a href="<?php echo home_url('/overview/'); ?>" class="btn">詳しく見る</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ブログ -->

<section class="blog blog__top">
  <div class="blog__inner">
    <div class="blog__l-inner l-inner">
      <div class="blog__header">
        <h2 class="blog__title section-title">
          blog
        </h2>
        <p class="blog__sub-title sectiton-subtitle">ブログ</p>
      </div>
      <div class="blog__list cards">

        <!-- サブループ取得先 -->
        <?php
        $args = array(
          'post_type' => 'blog',
          'posts_per_page' => 3
        );

        $the_query = new WP_Query($args);
        ?>
        <!-- ループ処理 -->
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="cards__item card">
              <div class="blog__new-icon">New</div>
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

      <div class="blog__btn">
        <a href="<?php echo home_url('/blog/'); ?>" class="btn">詳しく見る</a>
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