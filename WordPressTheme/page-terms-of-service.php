<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv">
    <div class="sub-mv__inner">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-img_sp.jpg" media="(max-width: 767px)" >
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-img_pc.jpg" alt="上空から見たゴルフコースの全貌">
      </picture>
      <div class="sub-mv__header js-mv-header">
        <h2 class="sub-mv__title sub-mv__title--page-terms-of-service" id="text">Terms of Service</h2>
      </div>
    </div>
  </div>

   <!-- パンくず -->
   <?php get_template_part('parts/breadcrumb') ?>


  <main>
  <section class="page-terms-of-service layout-page-common fadein">
    <div class="page-terms-of-service__inner inner">
      <div class="page-terms-of-service__header">
        <h2 class="page-terms-of-service__title"><?php the_title(); ?></h2>
        <p class="page-terms-of-service__lead">以下は、Webサイトで使用する一般的な利用規約の例です。</p>
      </div>
      <div class="page-terms-of-service__contents">
        <?php the_content(); ?>
      </div>
      <div class="page-terms-of-service__footer">
        <p class="page-terms-of-service__text">以上が、当社の利用規約の概要です。お客様のサービス利用にあたっては、本規約をお読みいただき、同意いただける場合のみサービスをご利用ください。</p>
      </div>
    </div>
  </section>
<?php get_footer(); ?>