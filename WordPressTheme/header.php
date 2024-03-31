<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="robots" content="noindex">
  <link rel="icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/common/favicon.svg">
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
        <div class="sp-nav__inner inner">
          <ul class="sp-nav__items">
            <li class="sp-nav__item">
              <a href="<?php echo esc_url( home_url( '/campaign/' ) );?>">キャンペーン</a>
              <ul>
                <li><a href="<?php echo esc_url( home_url( '/campaign_category/campaign_2' ) );?>">レッスン付き</a></li>
                <li><a href="<?php echo esc_url( home_url( '/campaign_category/campaign_1' ) );?>">限定プラン</a></li>
                <li><a href="<?php echo esc_url( home_url( '/campaign_category/campaign_3' ) );?>">グループ利用</a></li>
              </ul>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url( home_url( '/about/' ) );?>">私たちについて</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url( home_url( '/information/' ) );?>">プレイ情報</a>
              <ul>
                <li><a href="<?php echo esc_url( home_url( '/information?tab=lesson' ) );?>">レッスン付き</a></li>
                <li><a href="<?php echo esc_url( home_url( '/information?tab=exclusive' ) );?>">限定プラン</a></li>
                <li><a href="<?php echo esc_url( home_url( '/information?tab=groups' ) );?>">グループ利用</a></li>
              </ul>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url( home_url( '/blog/' ) );?>">ブログ</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url( home_url( '/voice/' ) );?>">お客様の声</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url( home_url( '/price/' ) );?>">料金一覧</a>
              <ul>
                <li><a href="<?php echo esc_url( home_url( '/price/#price1' ) );?>">レッスン付き</a></li>
                <li><a href="<?php echo esc_url( home_url( '/price/#price2' ) );?>">限定プラン</a></li>
                <li><a href="<?php echo esc_url( home_url( '/price/#price3' ) );?>">グループ利用</a></li>
              </ul>
            </li>
            <li class="sp-nav__item">
              <a href=<?php echo esc_url( home_url( '/faq/' ) );?>">よくある質問</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) );?>">プライバシー <br>ポリシー</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url( home_url( '/terms-of-service/' ) );?>">利用規約</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url( home_url( '/contact/' ) );?>">お問い合せ</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
