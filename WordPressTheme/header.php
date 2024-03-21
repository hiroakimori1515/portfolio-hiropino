<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="robots" content="noindex">
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/MirageBeach_logo.png" alt="CodeUpsのロゴ画像"></a>
      </h1>

      <div class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav class="header__pc-nav pc-nav">
        <?php
          wp_nav_menu(
            array(
              'depth' => '1',
              'theme_location' => 'global',
              'container' => 'false',
              'menu_class' => 'pc-nav__items',
            )
            );
         ?>
      </nav>

      <nav class="header__sp-nav sp-nav js-sp-nav">
        <div class="sp-nav__inner">
          <?php
            wp_nav_menu(
              array(
                'depth' => '2',
                'theme_location' => 'drawer',
                'container' => 'false',
                'menu_class' => 'sp-nav__items',
              )
            );
         ?>
        </div>
      </nav>
    </div>
  </header>
