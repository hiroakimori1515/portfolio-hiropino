<?php get_header(); ?>

  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-img-sp.jpg" media="(max-width: 767px)" >
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-img.jpg" alt="海中の画像">
      </picture>
      <div class="sub-mv__header js-mv-header">
        <h2 class="sub-mv__title">About us</h2>
      </div>
    </div>
  </div>

   <!-- パンくず -->
   <?php get_template_part('parts/breadcrumb') ?>

  <main>
    <section class="page-about layout-page-common">
      <div class="page-about__inner inner">
        <div class="page-about__wrapper">
          <div class="page-about__images">
            <div class="page-about__image-left">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about2.jpg" alt="ピンの上にゴルフボールをセットする男性の手">
            </div>
            <div class="page-about__image-right">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about1.jpg" media="(max-width: 767px)" >
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about1.jpg" alt="グリーン手前に深いバンカーのあるコース">
              </picture>
            </div>
          </div>
          <div class="page-about__body">
            <h3 class="page-about__heading">Dive into
              <br>the Ocean</h3>
            <div class="page-about__content">
              <p class="page-about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="gallery layout-gallery">
      <div class="gallery__inner inner">
        <div class="gallery__title section-header">
          <p class="section-header__entitle"> Gallery</p>
          <h2 class="section-header__jatitle">フォト</h2>
        </div>
        <div class="gallery__wrapper">
          <?php
            $repeat_item = SCF::get_option_meta( 'gallery-options', 'gallery' );
            foreach ($repeat_item as $fields ) {
            $image_url = wp_get_attachment_image_src($fields['gallery-image'] , 'full');
          ?>
          <div class="gallery__slide js-modal-trigger">
            <img src="<?php echo $image_url[0]; ?>" width="<?php echo $image_url[1]; ?>" height="<?php echo $image_url[2]; ?>" alt="海中の画像">
          </div>
          <?php } ?>
        </div>
        <div class="gallery__overlay"></div>
      </div>
    </section>

<?php get_footer(); ?>