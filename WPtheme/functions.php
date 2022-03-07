<?php
function my_scripts()
{
  // cssの読み込み
  wp_enqueue_style(
    "styles.css",
    get_template_directory_uri() . "/assets/css/styles.css",
    "",
    "",
    "all"
  );

  // swiperのcssの読み込み
  // 制作実績詳細ページ以外に読み込み
  if (!is_singular('works')) :
    wp_enqueue_style(
      "swiper.min.css",
      "//cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css",
      "",
      "",
      "all"
    );

    // 制作実績のswiper
    wp_enqueue_script(
      'works-swiper.js',
      get_template_directory_uri() . '/assets/js/works-swiper.js',
      "array( 'swiper','swiper.css' )",
      "filemtime( get_theme_file_path( '/assets/js/works-swiper.js' ) )",
      true
    );

  endif;

  // ページトップボタンのjs読み込み
  wp_enqueue_script(
    'page-top.js',
    get_template_directory_uri() . '/assets/js/page-top.js',
    "",
    "filemtime( get_theme_file_path( '/assets/js/page-top.js' ) )",
    true
  );

  // WordPressのデフォルトのjQueryを読み込まない
  wp_deregister_script('jquery');

  //jQuery-3.5.1の読み込み 
  wp_enqueue_script(
    "jquery",
    "//code.jquery.com/jquery-3.5.1.js"
  );

  // swiper-4.5.0の読み込み
  wp_enqueue_script(
    "swiper",
    "//cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"
  );

  // カテゴリのタブ
  wp_enqueue_script(
    'category-tab.js',
    get_template_directory_uri() . '/assets/js/category-tab.js',
    "array( 'jquery' )",
    "filemtime( get_theme_file_path( '/assets/js/category-tab.js' ) )",
    true
  );

  
  // ハンバーガーメニューのjs
  wp_enqueue_script(
    'hamburger.js',
    get_template_directory_uri() . '/assets/js/hamburger.js',
    "array( 'jquery' )",
    "filemtime( get_theme_file_path( '/assets/js/hamburger.js' ) )",
    true
  );
  
  // トップページにのみ適用
  if (is_home()) :
    
    // メインビューのswiper
    wp_enqueue_script(
      'mainview-swiper.js',
      get_template_directory_uri() . '/assets/js/mainview-swiper.js',
      "array( 'swiper','swiper.css')",
      "filemtime( get_theme_file_path( '/assets/js/mainview-swiper.js' ) )",
      true
    );

    // ヘッダースクロール時に色付与
    wp_enqueue_script(
      'header.js',
      get_template_directory_uri() . '/assets/js/header.js',
      "array( 'jquery' )",
      "filemtime( get_theme_file_path( '/assets/js/header.js' ) )",
      true
    );

  endif;

  // ヘッダースクロール時に色付与(固定ページとアーカイブページのみ)
  if (is_page() || is_archive()) :
    wp_enqueue_script(
      'sub-mv.js',
      get_template_directory_uri() . '/assets/js/sub-mv.js',
      "array( 'jquery' )",
      "filemtime( get_theme_file_path( '/assets/js/sub-mv.js' ) )",
      true
    );
  endif;

  // ヘッダースクロール時に色付与(個別投稿ページのみ)
  if (is_single()) :
    wp_enqueue_script(
      'not-mv.js',
      get_template_directory_uri() . '/assets/js/not-mv.js',
      "array( 'jquery' )",
      "filemtime( get_theme_file_path( '/assets/js/not-mv.js' ) )",
      true
    );
  endif;

  // 制作実績詳細ページのswiper
  // カスタム投稿タイプが制作実績の投稿のみに適用
  if (is_singular('works')) :
    wp_enqueue_script(
      'works-more__gallery.js',
      get_template_directory_uri() . '/assets/js/works-more__gallery.js',
      "array( 'swiper','swiper.css' )",
      "filemtime( get_theme_file_path( '/assets/js/works-more__gallery.js' ) )",
      true
    );

    // 制作実績詳細ページのswiperのcss読み込み
    wp_enqueue_style(
      "swiper.css",
      get_template_directory_uri() . "/assets/css/swiper.css",
      "",
      "",
      "all"
    );

  endif;
}

add_action('wp_enqueue_scripts', 'my_scripts');


add_action('init', function () {
  // アイキャッチ画像設定
  add_theme_support('post-thumbnails');
  // タイトルタグ自動生成
  add_theme_support('title_tag');


  // メニューをサポート
  register_nav_menus([
    'global_nav_pc' => 'グローバルナビゲーションPC',
    'global_nav_sp' => 'グローバルナビゲーションSP',
    'footer_nav' => 'フッターナビゲーション'
  ]);

  //投稿タイプを追加
  register_post_type('news', [
    'label' => 'お知らせ',
    'public' =>  true,
    'menu_position' => 5,
    'has_archive' => true,
    'taxonomies' => array('news_cat', 'news_tag', 'category', 'post_tag'),
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields','excerpt'),
    'show_in_rest' => true
  ]);

  register_post_type('blog', [
    'label' => 'ブログ',
    'public' =>  true,
    'menu_position' => 5,
    'has_archive' => true,
    'taxonomies' => array('blog_cat', 'blog_tag', 'category', 'post_tag'),
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields','excerpt'),
    'show_in_rest' => true
  ]);

  register_post_type('works', [
    'label' => '制作実績',
    'public' =>  true,
    'menu_position' => 5,
    'has_archive' => true,
    'taxonomies' => array('works_cat', 'works_tag', 'category', 'post_tag'),
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields','excerpt'),
    'show_in_rest' => true,
  ]);
});

// 各ページのタイトルを取得
function setup_theme()
{
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'setup_theme');


// パンくずリストのプラグインの不具合対策
function add_bcn_manage_options_to_admin()
{
  // gets the administrator role
  $role = get_role('administrator');

  // would allow the administrator to manage breadcrumbs. Fix needed due the conflict in Breadcrumb NavXT version 7 with some other plugin.
  $role->add_cap('bcn_manage_options');
}
add_action('admin_init', 'add_bcn_manage_options_to_admin');

// ブログ一覧ページの表示件数を９件に指定
function my_posts_per_page($query)
{
  if (is_admin() || !$query->is_main_query())
    return;
  if ($query->is_post_type_archive('blog')) {
    $query->set('posts_per_page', 9);
  }

  if ($query->is_post_type_archive('works')) {
    $query->set('posts_per_page', 6);
  }

  if ($query->is_post_type_archive('news')) {
    $query->set('posts_per_page', 10);
  }
}
add_action('pre_get_posts', 'my_posts_per_page');

// 問い合わせフォームの送信完了ページを設定
function add_thanks_page()
{
  echo <<< EOD
  <script>
  document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = '//seisuke.biz/contact/thanks/';
  }, false );
  </script>
  EOD;
}
add_action('wp_footer', 'add_thanks_page');

//記事のビュー数メタデータを作成・更新する関数
function setPostViews() {
  $post_id = get_the_ID();
  $custom_key = 'post_views_count';
  $view_count = get_post_meta($post_id, $custom_key, true);  //現在のビュー数を取得
  //すでにメタデータがあるかどうかで処理を分ける
  if ($view_count === '') {
      delete_post_meta($post_id, $custom_key);
      add_post_meta($post_id, $custom_key, '0');
  } else {
      $view_count++;
      update_post_meta($post_id, $custom_key, $view_count);
  }
}

//functions.phpにて定義・記事のビュー数を取得する関数
function getPostViews($post_id = null) {
  $post_id = $post_id ? $post_id : get_the_ID();
  $custom_key = 'post_views_count';
  $view_count = get_post_meta($post_id, $custom_key, true);
  if ($view_count === '') {
      //まだメタデータが存在していなければ
      delete_post_meta($post_id, $custom_key);
      add_post_meta($post_id, $custom_key, '0');
      $view_count = 0;
  }
  return $view_count.' Views';  //'Views' の部分は好きな表示に変えてOK。
}