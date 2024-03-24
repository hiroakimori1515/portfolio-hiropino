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
    <section class="page-contact-thanks layout-page-common fadein">
      <div class="page-contact-thanks__inner inner">
        <div class="page-contact-thanks__message">
          <p class="page-contact-thanks__message-top">お問い合わせ内容を送信完了しました。</p>
          <p class="page-contact-thanks__message-bottom">このたびは、お問い合わせ頂き<br class="u-mobile">
            誠にありがとうございます。<br>
            お送り頂きました内容を確認の上、<br class="u-mobile">
            3営業日以内に折り返しご連絡させて頂きます。<br>
            また、ご記入頂いたメールアドレスへ、<br class="u-mobile">
            自動返信の確認メールをお送りしております。</p>
        </div>
      </div>
    </section>

<?php get_footer(); ?>