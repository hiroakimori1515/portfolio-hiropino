<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv">
    <div class="sub-mv__inner">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-img.jpg" media="(max-width: 767px)" >
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-img.jpg" alt="上空から見たゴルフコースの全貌">
      </picture>
      <div class="sub-mv__header js-mv-header">
        <h2 class="sub-mv__title" id="text">Site MAP</h2>
      </div>
    </div>
  </div>

   <!-- パンくず -->
   <?php get_template_part('parts/breadcrumb') ?>

  <main>
   <section class="sitemap layout-page-sitemap fadein">
    <div class="sitemap__inner inner">
      <div class="sitemap__contents">
        <nav class="footer-nav">
          <ul class="footer-nav__items footer-nav__items--sitemap">
            <li class="footer-nav__item footer-nav__item--sitemap">
              <a href="<?php echo esc_url( home_url( '/campaign/' ) );?>">キャンペーン</a>
              <ul>
                <li>
                  <?php
                    $terms = get_terms('campaign_category');
                    foreach ( $terms as $term ) {
                    echo '<a href="'.get_term_link($term).'">'.esc_html($term->name).'</a>';
                    }
                  ?>
                </li>
              </ul>
            </li>
            <li class="footer-nav__item footer-nav__item--sitemap">
              <a href="<?php echo esc_url( home_url( '/about/' ) );?>">私たちについて</a>
            </li>
            <li class="footer-nav__item footer-nav__item--sitemap">
              <a href="<?php echo esc_url( home_url( '/information/' ) );?>">ダイビング情報</a>
              <ul>
                <li><a href="<?php echo esc_url( home_url( '/information?tab=license' ) );?>">ライセンス講習</a></li>
                <li><a href="<?php echo esc_url( home_url( '/information?tab=diving' ) );?>">体験ダイビング</a></li>
                <li><a href="<?php echo esc_url( home_url( '/information?tab=fundiving' ) );?>">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="footer-nav__item footer-nav__item--sitemap">
              <a href="<?php echo esc_url( home_url( '/blog/' ) );?>">ブログ</a>
            </li>
            <li class="footer-nav__item footer-nav__item--sitemap">
              <a href="<?php echo esc_url( home_url( '/voice/' ) );?>">お客様の声</a>
            </li>
            <li class="footer-nav__item footer-nav__item--sitemap">
              <a href="<?php echo esc_url( home_url( '/price/' ) );?>">料金一覧</a>
              <ul>
                <li><a href="<?php echo esc_url( home_url( '/price#price1' ) );?>">ライセンス講習</a></li>
                <li><a href="<?php echo esc_url( home_url( '/price#price2' ) );?>">体験ダイビング</a></li>
                <li><a href="<?php echo esc_url( home_url( '/price#price3' ) );?>">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="footer-nav__item footer-nav__item--sitemap">
              <a href="<?php echo esc_url( home_url( '/faq/' ) );?>">よくある質問</a>
            </li>
            <li class="footer-nav__item footer-nav__item--sitemap">
              <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) );?>">プライバシー<br class="u-mobile">ポリシー</a>
            </li>
            <li class="footer-nav__item footer-nav__item--sitemap">
              <a href="<?php echo esc_url( home_url( '/terms-of-service/' ) );?>">利用規約</a>
            </li>
            <li class="footer-nav__item footer-nav__item--sitemap">
              <a href="<?php echo esc_url( home_url( '/contact/' ) );?>">お問い合せ</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
   </section>
<?php get_footer(); ?>