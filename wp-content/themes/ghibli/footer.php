<footer class="footer">
  <div class="footer-main">
    <div class="logo">
      <img src="<?= THEME_URL . '/dist/img/totoro.jpg' ?>">
    </div>
    <?php
    $menuArgs = array(
      'theme_location' => 'main_menu',
      'container'       => 'nav',
      'container_class' => 'main-menu',
      'items_wrap' => '%3$s',
    );
    wp_nav_menu( $menuArgs ); ?>
    <ul class="social-list">
      <li class="social-item"><?php include THEME_PATH . '/dist/img/facebook.svg'; ?></li>
      <li class="social-item"><?php include THEME_PATH . '/dist/img/twitter.svg'; ?></li>
    </ul>
  </div>
  <div class="footer-legal">
  © Studio Ghibli, all rights reserved
  </div>
</footer>

<?php wp_footer();  ?>
</body>
</html>
