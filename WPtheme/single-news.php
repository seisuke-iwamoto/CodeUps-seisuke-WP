<?php get_header(); ?>

<div class="blog-more">


  <!-- パンくずリスト -->

  <div class="breadcrumbs">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>

  <!-- お知らせ記事詳細タイトル -->
  <h2 class="blog-more__title"><?php the_title(); ?></h2>

  <!-- お知らせ記事詳細の日時とカテゴリ -->
  <div class="blog-more__info info-item">
    <time class="info-item__date" datetime="Y.m.d"><?php the_time('Y.m.d'); ?></time>
    <p class="info-item__category"><?php $cat = get_the_category();
                                    $cat = $cat[0]; {
                                      echo $cat->cat_name;
                                    } ?></p>
  </div>


  <!-- お知らせ記事詳細 -->
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
    <a href="<?php echo get_post_type_archive_link('news'); ?>" class="wp-pagenavi archivelink">一覧</a>

    <!-- 次の記事へ -->
    <?php
    $link = get_next_post_link('%link', 'NEXT');
    if ($link) {
      $link = str_replace('<a', '<a class="wp-pagenavi nextpostslink"', $link);
      echo $link;
    }
    ?>
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