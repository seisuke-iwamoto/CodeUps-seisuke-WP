<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico" />
  <!-- フォント -->
  <link href="//fonts.cdnfonts.com/css/playlist" rel="stylesheet">
  <link rel="preconnect" href="//fonts.googleapis.com">
  <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
  <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="//fonts.googleapis.com">
  <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
  <link href="//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


  <!-- ヘッダー -->

  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo"><a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo-link">
          CodeUps
        </a></h1>

      <!-- ハンバーガーメニュー -->

      <button class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <?php
      // メニューIDを取得
      $menu_name = 'global_nav_sp';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);

      // メニューIDをもとにメニューの情報取得
      $menu_items = wp_get_nav_menu_items($menu->term_id);

      ?>
      <div class="sp-nav js-drawer-menu ">
        <ul class="sp-nav__items">
          <!-- メニューの項目を取得してループ処理 -->
          <?php foreach ($menu_items as $item) : ?>
            <li class="sp-nav__item"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
          <?php endforeach; ?>

        </ul>
      </div>

      <!-- PCグローバルナビ -->
      <?php
      // メニューIDを取得
      $menu_name = 'global_nav_pc';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);

      // メニューIDをもとにメニューの情報取得
      $menu_items = wp_get_nav_menu_items($menu->term_id);
      ?>

      <div class="pc-nav">
        <ul class="pc-nav__items">
          <?php foreach ($menu_items as $item) : ?>
            <li class="pc-nav__item"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
          <?php endforeach; ?>
          <li class="pc-nav__item--white"><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
        </ul>
      </div>

    </div>
  </header>