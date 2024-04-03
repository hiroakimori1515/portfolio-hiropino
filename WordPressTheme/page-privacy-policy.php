<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv">
    <div class="sub-mv__inner">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-img.jpg" media="(max-width: 767px)" >
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-img.jpg" alt="上空から見たゴルフコースの全貌">
      </picture>
      <div class="sub-mv__header js-mv-header">
        <h2 class="sub-mv__title" id="text">Privacy Policy</h2>
      </div>
    </div>
  </div>

   <!-- パンくず -->
   <?php get_template_part('parts/breadcrumb') ?>

  <main>
  <section class="page-privacy-policy layout-page-common fadein">
    <div class="page-privacy-policy__inner inner">
      <div class="page-privacy-policy__header">
        <h2 class="page-privacy-policy__title"><?php the_title(); ?></h2>
        <p class="page-privacy-policy__lead">以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。</p>
      </div>
      <div class="page-privacy-policy__contents">
        <?php the_content(); ?>
      </div>
      <div class="page-privacy-policy__footer">
        <p class="page-privacy-policy__text">以上が、当社のプライバシーポリシーの概要です。お客様の個人情報保護のために、常に努めてまいります。</p>
      </div>
    </div>
  </section>
<?php get_footer(); ?>