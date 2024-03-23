<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv">
    <div class="sub-mv__inner">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-img.jpg" media="(max-width: 767px)" >
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-img.jpg" alt="上空からとらえたゴルフコースの全容">
      </picture>
      <div class="sub-mv__header js-mv-header">
        <h2 class="sub-mv__title">Contact</h2>
      </div>
    </div>
  </div>

   <!-- パンくず -->
   <?php get_template_part('parts/breadcrumb') ?>

  <main>
    <section class="page-contact layout-page-common">
      <div class="page-contact__inner inner">
        <div class="page-contact__contents form">
          <div class="form__error">
            <p class="form__error-text js-error"></p>
          </div>
            <?php echo  do_shortcode('[contact-form-7 id="b685072" title="お問い合わせ"]'); ?>
        </div>
      </div>
    </section>
<?php get_footer(); ?>