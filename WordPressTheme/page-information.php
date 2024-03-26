<?php get_header(); ?>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-img.jpg" media="(max-width: 767px)" >
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-img.jpg" alt="バンカーに入ったボールと打つ準備をしたアイアン">
      </picture>
      <div class="sub-mv__header js-mv-header">
        <h2 class="sub-mv__title">Information</h2>
      </div>
    </div>
  </div>

   <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>


  <main>
    <div id="information" class="page-information-tab layout-page-information-tab fadein">
      <div class="page-information-tab__inner inner">
        <ul class="page-information-tab__list">
          <li class="page-information-tab__menu js-tab current" data-tab="lesson">レッスン<br class="u-mobile">付き</li>
          <li class="page-information-tab__menu js-tab" data-tab="exclusive">限定<br class="u-mobile">プラン</li>
          <li class="page-information-tab__menu js-tab" data-tab="groups">グループ<br class="u-mobile">利用</li>
        </ul>
        <div class="page-information-tab__content-group">
          <div class="page-information-tab__content-box page-information-card js-content" data-tab="lesson">
            <div class="page-information-card__inner">
              <div class="page-information-card__head fadein">
                <h3 class="page-information-card__title">レッスン付き</h3>
                <p class="page-information-card__text">初心者から上級者まで向けたレッスンプランです。専門のインストラクターによる個別指導で、基本的なスウィング技術から戦略的なコース攻略まで、幅広くスキルアップを目指せます。グループレッスンも用意されており、仲間と共に楽しみながら上達することが可能です。</p>
              </div>
              <div class="page-information-card__image fadein">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information.jpg" alt="生徒にスイングレッスンをしているレッスンプロの様子">
              </div>
            </div>
          </div>
          <div class="page-information-tab__content-box page-information-card js-content" data-tab="exclusive">
            <div class="page-information-card__inner">
              <div class="page-information-card__head fadein">
                <h3 class="page-information-card__title">限定プラン</h3>
                <p class="page-information-card__text">日の出や夕暮れの美しい時間、または季節の変わり目に合わせた特別プラン。サマー・サンライズスペシャルやオータム・ゴールドラウンドなど、限定的な時間や季節に応じた美しいコースを楽しむことができます。これらのプランを通じて、ゴルフの新たな魅力を発見しましょう。</p>
              </div>
              <div class="page-information-card__image fadein">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_6.jpg" alt="朝日に照らされたゴルフコースの様子">
              </div>
            </div>
          </div>
          <div class="page-information-tab__content-box page-information-card js-content" data-tab="groups">
            <div class="page-information-card__inner">
              <div class="page-information-card__head fadein">
                <h3 class="page-information-card__title">グループ利用</h3>
                <p class="page-information-card__text">友人、家族、職場の同僚と一緒に楽しむためのプラン。グループ割引や特別イベントの手配が可能で、プレイ後の懇親会なども楽しめます。共有の楽しい体験を通じて、互いの絆を深めることができるプランです。</p>
              </div>
              <div class="page-information-card__image fadein">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/golfers.jpg" alt="一緒にゴルフを楽しむ4人の男性">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>