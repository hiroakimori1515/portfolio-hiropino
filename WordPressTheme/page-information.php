<?php get_header(); ?>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-img-sp.jpg" media="(max-width: 767px)" >
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-img.jpg" alt="海中の画像">
      </picture>
      <div class="sub-mv__header js-mv-header">
        <h2 class="sub-mv__title">Information</h2>
      </div>
    </div>
  </div>

   <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>


  <main>
    <div class="page-information-tab layout-page-information-tab">
      <div class="page-information-tab__inner inner">
        <ul class="page-information-tab__list">
          <li class="page-information-tab__menu js-tab current" data-tab="license">ライセンス<br class="u-mobile">講習</li>
          <li class="page-information-tab__menu js-tab" data-tab="fundiving">ファン<br class="u-mobile">ダイビング</li>
          <li class="page-information-tab__menu js-tab" data-tab="diving">体験<br class="u-mobile">ダイビング</li>
        </ul>
        <div class="page-information-tab__content-group">
          <div class="page-information-tab__content-box page-information-card js-content" data-tab="license">
            <div class="page-information-card__inner">
              <div class="page-information-card__head">
                <h3 class="page-information-card__title">ライセンス講習</h3>
                <p class="page-information-card__text">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！</p>
              </div>
              <div class="page-information-card__image">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/license-sp.jpg" media="(max-width: 767px)" >
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/license.jpg" alt="海中の画像">
                </picture>
              </div>
            </div>
          </div>
          <div class="page-information-tab__content-box page-information-card js-content" data-tab="fundiving">
            <div class="page-information-card__inner">
              <div class="page-information-card__head">
                <h3 class="page-information-card__title">ファンダイビング</h3>
                <p class="page-information-card__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
              </div>
              <div class="page-information-card__image">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fundiving.jpg" media="(max-width: 767px)" >
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fundiving.jpg" alt="海中の画像">
                </picture>
              </div>
            </div>
          </div>
          <div class="page-information-tab__content-box page-information-card js-content" data-tab="diving">
            <div class="page-information-card__inner">
              <div class="page-information-card__head">
                <h3 class="page-information-card__title">体験ダイビング</h3>
                <p class="page-information-card__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
              </div>
              <div class="page-information-card__image">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/diving-sp.jpg" media="(max-width: 767px)" >
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/diving.jpg" alt="海中の画像">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>