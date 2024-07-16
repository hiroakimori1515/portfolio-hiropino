<?php
/*
Template Name: Password Reset
*/
get_header();
?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv">
    <div class="sub-mv__inner">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-img_sp.jpg" media="(max-width: 767px)" >
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-img_pc.jpg" alt="上空から見たゴルフコースの全貌">
      </picture>
      <div class="sub-mv__header js-mv-header">
        <h2 class="sub-mv__title" id="text">会員登録のご案内</h2>
      </div>
    </div>
  </div>
   <!-- パンくず -->
   <?php get_template_part('parts/breadcrumb') ?>

  <main>
    <section class="page-membership-form layout-page-sitemap">
      <div class="page-membership-form__inner inner">
        <?php echo do_shortcode('[swpm_thank_you_page_registration]'); ?>
      </div>
    </section>

<?php get_footer(); ?>