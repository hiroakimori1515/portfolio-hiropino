<?php get_header(); ?>

  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-img_sp.jpg" media="(max-width: 767px)" >
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-img_pc.jpg" alt="グリーン場でパットを打つ3人の男性">
      </picture>
      <div class="sub-mv__header js-mv-header">
        <h2 class="sub-mv__title" id="text">FAQ</h2>
      </div>
    </div>
  </div>

   <!-- パンくず -->
   <?php get_template_part('parts/breadcrumb') ?>

  <main>
    <section class="page-faq layout-page-common ">
      <div class="page-faq__inner inner">
        <dl class="page-faq__accordion">
          <?php
          $fields = SCF::get_option_meta('theme-options', 'faq');
          foreach ($fields as $field_name => $fields_value) {
          ?>
            <dt class="page-faq__question js-accordion fadein"><?php echo esc_html($fields_value['question']); ?></dt>
            <dd class="page-faq__answer fadein"><?php echo esc_html($fields_value['answer']); ?></dd>
          <?php } ?>
        </dl>
      </div>
    </section>

<?php get_footer(); ?>
