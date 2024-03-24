<?php
if (!is_404() && !is_page('contact') && !is_page('thanks')) {
?>
  <section id="contact" class="contact layout-contact">
    <div class="contact__inner inner">
      <div class="contact__contents">
        <div class="contact__left">
          <div class="contact__logo">
            <a href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/MirageBeach_logo-contact.png" alt="MirageBeachのロゴ画像"></a>
          </div>
          <div class="contact__info">
            <div class="contact__meta">
              <p>沖縄県那覇市1-1</p>
              <p>TEL:<a href="tel:01200000000" class="contact__tel">0120-000-0000</a></p>
              <p>営業時間:8:30-19:00</p>
              <p>定休日:毎週火曜日</p>
            </div>
            <div class="contact__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.997146371967!2d141.3509021105377!3d43.06252757101588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b297627507247%3A0x1b9ba84a4b04cdeb!2z5pyt5bmM5biC5pmC6KiI5Y-w!5e0!3m2!1sja!2sjp!4v1695843524992!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="contact__right">
          <div class="contact__title section-header">
            <p class="section-header__entitle section-header__entitle--contact">Contact</p>
            <h2 class="section-header__jatitle">お問合せ</h2>
            <p class="contact__message">ご予約・お問い合わせはコチラ</p>
            <div class="contact__button">
              <a href="<?php echo esc_url( home_url( '/contact/' ) );?>" class="button">Contact us<span></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </main>

<?php
}
?>

  <div id="to-top" class="to-top">
    <a href="#"><span></span></a>
  </div>



  <footer class="footer layout-footer <?php if (is_404()) echo 'layout-footer--page-contact'; ?> <?php if (is_404()) echo 'layout-footer--page-404'; ?>">
    <div class="footer__inner inner">
      <div class="footer__head">
        <div class="footer__logo"><a href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/MirageBeach_logo.png" alt="MirageBeachのロゴ画像"></a></div>
        <div class="footer__sns">
          <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.svg" alt="facebookのロゴ画像"></a>
          <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/InstagramLogo.svg" alt="instagramのロゴ画像"></a>
        </div>
      </div>
      <nav class="footer__nav footer-nav">
        <ul class="footer-nav__items">
          <li class="footer-nav__item">
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
          <li class="footer-nav__item">
            <a href="<?php echo esc_url( home_url( '/about/' ) );?>">私たちについて</a>
          </li>
          <li class="footer-nav__item">
            <a href="<?php echo esc_url( home_url( '/information/' ) );?>">ダイビング情報</a>
            <ul>
              <li><a href="<?php echo esc_url( home_url( '/information?tab=lesson' ) );?>">レッスン付き</a></li>
              <li><a href="<?php echo esc_url( home_url( '/information?tab=exclusive' ) );?>">限定プラン</a></li>
              <li><a href="<?php echo esc_url( home_url( '/information?tab=groups' ) );?>">グループ利用</a></li>
            </ul>
          </li>
          <li class="footer-nav__item">
            <a href="<?php echo esc_url( home_url( '/blog/' ) );?>">ブログ</a>
          </li>
          <li class="footer-nav__item">
            <a href="<?php echo esc_url( home_url( '/voice/' ) );?>">お客様の声</a>
          </li>
          <li class="footer-nav__item">
            <a href="<?php echo esc_url( home_url( '/price/' ) );?>">料金一覧</a>
            <ul>
              <li><a href="<?php echo esc_url( home_url( '/price/#price1' ) );?>">レッスン付き</a></li>
              <li><a href="<?php echo esc_url( home_url( '/price/#price2' ) );?>">限定プラン</a></li>
              <li><a href="<?php echo esc_url( home_url( '/price/#price3' ) );?>">グループ利用</a></li>
            </ul>
          </li>
          <li class="footer-nav__item">
            <a href="<?php echo esc_url( home_url( '/faq/' ) );?>">よくある質問</a>
          </li>
          <li class="footer-nav__item">
            <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) );?>">プライバシー<br class="u-mobile">ポリシー</a>
          </li>
          <li class="footer-nav__item">
            <a href="<?php echo esc_url( home_url( '/terms-of-service/' ) );?>">利用規約</a>
          </li>
          <li class="footer-nav__item">
            <a href="<?php echo esc_url( home_url( '/contact/' ) );?>">お問い合せ</a>
          </li>
        </ul>
      </nav>
      <div class="footer__copyright">
        <small>&copy; 2023 - 2024 Portfolio-Hiropino WebCoder. All Rights Reserved.</small>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>