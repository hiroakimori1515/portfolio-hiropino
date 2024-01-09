<?php get_header(); ?>

  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-img-sp.jpg" media="(max-width: 767px)" >
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-img.jpg" alt="波の上の画像">
      </picture>
      <div class="sub-mv__header js-mv-header">
        <h2 class="sub-mv__title">Price</h2>
      </div>
    </div>
  </div>

   <!-- パンくず -->
   <?php get_template_part('parts/breadcrumb') ?>

   <main >
    <section class="page-price layout-page-common">
      <div class="page-price__inner inner">
        <div class="page-price__contents">
          <ul class="page-price__items">
            <li id="price1" class="page-price__item">
              <div class="page-price__item-header">
                <div class="page-price__item-icon">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/animal_aquatic_nature_ocean_sea_icon.png" alt="クジラのアイコン画像">
                </div>
                <h3 class="page-price__item-title">ライセンス講習</h3>
              </div>
              <dl class="page-price__course">
              <?php
                $fields = SCF::get_option_meta('price-options', 'course-list');
                foreach ($fields as $field_name => $fields_value) {
              ?>
                <div class="page-price__course-wrapper">
                  <dt class="page-price__course-name"><?php echo esc_html($fields_value['course-name']); ?></dt>
                  <dd class="page-price__course-charge"><?php echo esc_html($fields_value['price']); ?></dd>
                </div>
              <?php } ?>
              </dl>
            </li>
            <li id="price2" class="page-price__item">
              <div class="page-price__item-header">
                <div class="page-price__item-icon">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/animal_aquatic_nature_ocean_sea_icon.png" alt="クジラのアイコン画像">
                </div>
                <h3 class="page-price__item-title">体験ダイビング</h3>
              </div>
              <dl class="page-price__course">
              <?php
                $fields = SCF::get_option_meta('price-options', 'experience-diving');
                foreach ($fields as $field_name => $fields_value) {
              ?>
                <div class="page-price__course-wrapper">
                  <dt class="page-price__course-name"><?php echo esc_html($fields_value['diving-name']); ?></dt>
                  <dd class="page-price__course-charge"><?php echo esc_html($fields_value['price2']); ?></dd>
                </div>
              <?php } ?>
              </dl>
            </li>
            <li id="price3" class="page-price__item">
              <div class="page-price__item-header">
                <div class="page-price__item-icon">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/animal_aquatic_nature_ocean_sea_icon.png" alt="クジラのアイコン画像">
                </div>
                <h3 class="page-price__item-title">ファンダイビング</h3>
              </div>
              <dl class="page-price__course">
              <?php
                $fields = SCF::get_option_meta('price-options', 'fun-diving');
                foreach ($fields as $field_name => $fields_value) {
              ?>
                <div class="page-price__course-wrapper">
                  <dt class="page-price__course-name"><?php echo esc_html($fields_value['fundiving-name']); ?></dt>
                  <dd class="page-price__course-charge"><?php echo esc_html($fields_value['price3']); ?></dd>
                </div>
              <?php } ?>
              </dl>
            </li>
            <li id="price4" class="page-price__item">
              <div class="page-price__item-header">
                <div class="page-price__item-icon">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/animal_aquatic_nature_ocean_sea_icon.png" alt="クジラのアイコン画像">
                </div>
                <h3 class="page-price__item-title">スペシャルダイビング</h3>
              </div>
              <dl class="page-price__course">
              <?php
                $fields = SCF::get_option_meta('price-options', 'special-diving');
                foreach ($fields as $field_name => $fields_value) {
              ?>
                <div class="page-price__course-wrapper">
                  <dt class="page-price__course-name"><?php echo esc_html($fields_value['special-diving-name']); ?></dt>
                  <dd class="page-price__course-charge"><?php echo esc_html($fields_value['price4']); ?></dd>
                </div>
              <?php } ?>
              </dl>
            </li>
          </ul>
        </div>
      </div>
    </section>

<?php get_footer(); ?>