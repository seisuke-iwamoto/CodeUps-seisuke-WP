<?php get_header(); ?>

<div class="works-more">


  <!-- パンくずリスト -->

  <div class="breadcrumbs">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>

  <!-- 制作実績詳細タイトル -->
  <h2 class="works-more__title"><?php the_title(); ?></h2>

  <!-- 制作実績詳細の日時とカテゴリ -->
  <div class="works-more__info info-item">
    <p class="info-item__date"><?php the_time('Y.m.d'); ?></p>
    <p class="info-item__category"><?php the_category(','); ?></p>
  </div>

  <!-- 制作実績一覧 -->
  <!-- メイン -->
  <div class="works-more__gallery">
    <div class="swiper-container gallery-slider">
      <div class="swiper-wrapper">

        <!-- スライダーメイン画像をカスタムフィールドで出力 -->
        <?php
        $groupA = SCF::get('slider_main');
        foreach ($groupA as $fields) {
          $groupA = wp_get_attachment_image_src($fields['slider_img_main'], 'full');
        ?>

          <?php if ($groupA[0]) : ?>
            <div class="swiper-slide"><img src="<?php echo $groupA[0]; ?>" alt="スライダーのメイン画像です。"></div>
          <?php endif; ?>

        <?php } ?>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
    <!-- サムネイル -->

    <div class="swiper-container gallery-thumbs">
      <div class="swiper-wrapper">

        <!-- スライダーサムネイル画像をカスタムフィールドで出力 -->
        <?php
        $groupB = SCF::get('slider_thumbs');
        foreach ($groupB as $fields) {
          $groupB = wp_get_attachment_image_src($fields['slider_img_thumbs'], 'full');
        ?>

          <?php if ($groupB[0]) : ?>
            <div class="swiper-slide"><img src="<?php echo $groupB[0]; ?>" alt="スライダーのサムネイル画像です。"></div>
          <?php endif; ?>

        <?php } ?>

      </div>
    </div>
  </div>

  <!-- 制作実績詳細コンセプト -->
  <div class="works-more-concept">
    <div class="works-more-concept__inner">

      <!-- 制作実績詳細コンセプトのタイトルとテキストをカスタムフィールドで出力 -->
      <?php
      $groupC = SCF::get('works_more_block');
      foreach ($groupC as $fields) { ?>

        <?php if ($fields['works_title']) : ?>
          <div class="works-more-concept concept-item">
            <h3 class="concept-item__title"><?php echo $fields['works_title']; ?></h3>
            <p class="concept-item__text"><?php echo $fields['works_text']; ?></p>
          </div>
        <?php endif; ?>

      <?php } ?>


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
    <a href="<?php echo get_post_type_archive_link('works'); ?>" class="wp-pagenavi archivelink">一覧</a>

    <!-- 次の記事へ -->
    <?php
    $link = get_next_post_link('%link', 'NEXT');
    if ($link) {
      $link = str_replace('<a', '<a class="wp-pagenavi nextpostslink"', $link);
      echo $link;
    }
    ?>
  </div>

  <!-- おすすめ記事 -->
  <div class="works-more-article articles">
    <div class="articles__inner">
      <h3 class="articles__title--sp u-mobile">おすすめ記事</h3>
      <h3 class="articles__title--pc u-desktop">関連記事</h3>
      <div class="articles__content article">
        
        <!-- サブループ取得先 -->
        <?php
        $args = array(
          'post_type' => 'works',
          'posts_per_page' => 4,
          'meta_key' => 'post_views_count',
          'orderby' => 'meta_value_num',
          'order' => 'DESC'
        );

        // 記事のビュー数を更新
        setPostViews(get_the_ID());

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