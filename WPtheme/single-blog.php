<?php get_header(); ?>

<div class="blog-more">


  <!-- パンくずリスト -->

  <div class="breadcrumbs">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>

  <!-- ブログ記事詳細タイトル -->
  <h2 class="blog-more__title"><?php the_title(); ?></h2>

  <!-- ブログ記事詳細の日時とカテゴリ -->
  <div class="blog-more__info info-item">
    <time class="info-item__date" datetime="Y.m.d"><?php the_time('Y.m.d'); ?></time>
    <p class="info-item__category"><?php $cat = get_the_category();
                                    $cat = $cat[0]; {
                                      echo $cat->cat_name;
                                    } ?></p>
  </div>


  <!-- ブログ記事詳細 -->
  <div class="blog-more__article article-contents">
    <div class="article-contents__inner">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

  <!-- ページナビ -->

  <div class="wp-pagenavi pagenavi">

    <!-- 前の記事へ -->
    <?php
    // 次の記事のリンクを取得
    $link = get_previous_post_link('%link', 'PREV');
    if ($link) {
      // 出力されるaタグに指定したクラスを置き換え
      $link = str_replace('<a', '<a class="wp-pagenavi previouspostslink"', $link);
      echo $link;
    }
    ?>

    <!-- 記事一覧へ -->
    <a href="<?php echo get_post_type_archive_link('blog'); ?>" class="wp-pagenavi archivelink">一覧</a>

    <!-- 次の記事へ -->
    <?php
    $link = get_next_post_link('%link', 'NEXT');
    if ($link) {
      $link = str_replace('<a', '<a class="wp-pagenavi nextpostslink"', $link);
      echo $link;
    }
    ?>
  </div>



  <!-- おすすめ・関連記事 -->
  <div class="blog-more-article articles">
    <div class="articles__inner">
      <h3 class="articles__title--sp u-mobile">おすすめ記事</h3>
      <h3 class="articles__title--pc u-desktop">関連記事</h3>
      <div class="articles__content article">

        <!-- サブループ取得先 -->
        <?php
        $args = array(
          'post_type' => 'blog',
          'posts_per_page' => 4,
          'orderby' => 'rand'
        );

        $the_query = new WP_Query($args);
        ?>

        <!-- ループ処理 -->
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="article__item card">
              <a href="<?php the_permalink(); ?>">
                <div class="card__img">
                  <?php the_post_thumbnail('full', array('alt' => 'アイキャッチ画像')); ?> </div>
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
  </div>
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