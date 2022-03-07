  <!-- フッター -->

  <footer class="footer">
    <div class="footer__inner ">
      <h2 class="footer__logo"><a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo-link">
          CodeUps
        </a></h2>
      ï
      <?php
      // メニューIDを取得
      $menu_name = 'footer_nav';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);

      // メニューIDをもとにメニューの情報取得
      $menu_items = wp_get_nav_menu_items($menu->term_id);

      ?>

      <ul class="footer-nav__items">
        <!-- メニューの項目を取得してループ処理 -->
        <?php foreach ($menu_items as $item) : ?>
          <li class="footer-nav__item"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <small class="copyright u-mobile">&copy; 2021 CodeUps Inc.</small>


  </footer>
  <!-- ページ上部へスクロール -->
  <div class="page-top js-page-top"></div>


  <?php wp_footer(); ?>
  </body>

  </html>