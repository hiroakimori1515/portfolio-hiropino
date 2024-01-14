<?php get_header(); ?>
<main>
    <div class="mv js-mv">
      <div class="mv__inner">
        <div class="mv__header js-mv-header">
          <h2 class="mv__title">diving</h2>
          <p class="mv__subtitle">into the ocean</p>
        </div>
        <div class="mv__swiper swiper js-mv-swiper">
          <div class="swiper-wrapper">
            <?php
            $repeat_item = SCF::get_option_meta('main_images-options', 'main_images');
            foreach ($repeat_item as $fields) {
                $pc_main_id = $fields['pc_main'];
                $sp_main_id = $fields['sp_main'];
                $pc_main_data = wp_get_attachment_image_src($pc_main_id, 'full');
                $sp_main_data = wp_get_attachment_image_src($sp_main_id, 'full');
                $alt = get_post_meta($pc_main_id, '_wp_attachment_image_alt', true) ?: get_post($pc_main_id)->post_title;
                ?>
              <div class="mv__swiper-slide swiper-slide">
                  <img src="<?php echo esc_url($sp_main_data[0]); ?>"
                      srcset="<?php echo esc_attr($pc_main_data[0]); ?> 768w"
                      alt="<?php echo esc_attr($alt); ?>">
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

    <section id="campaign" class="campaign layout-campaign">
      <div class="campaign__inner inner">
        <div class="campaign__title section-header">
          <p class="section-header__entitle">Campaign</p>
          <h2 class="section-header__jatitle">キャンペーン</h2>
        </div>
        <div class="campaign__container">
          <div class="campaign__swiper swiper js-campaign-swiper">
            <ul class="swiper-wrapper">
            <?php
            $args = array('post_type' => 'campaign',
            'posts_per_page' => 8); 
            $the_query = new WP_Query($args); 
            ?>
            <?php if($the_query->have_posts()): ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
              <li class="campaign__slide swiper-slide">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__image">
                  <?php if(has_post_thumbnail( )): ?>
                  <?php the_post_thumbnail( ); ?>
                  <?php else: ?>
                  <img src="<?php echo get_template_directory_uri( ); ?>/assets/images/common/noimg.png" alt="">
                  <?php endif; ?>
                  </div>
                  <div class="campaign-card__inner">
                    <div class="campaign-card__head">
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'campaign_category');
                    if ($terms && !is_wp_error($terms)) {
                        $term = reset($terms); // 最初のタームを取得
                        echo '<p class="campaign-card__category">' . esc_html($term->name) . '</p>';
                    }
                    ?>
                      <h3 class="campaign-card__title"><?php the_title(); if(!get_field('campaign')) { echo '<br><span style="color:red;>">(本キャンペーンは終了しました）</span>';} ?></h3>
                    </div>
                    <div class="campaign-card__body">
                      <p class="campaign-card__menu-title"><?php the_field('campaign_1'); ?></p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-before"><?php the_field('campaign_2'); ?></p>
                        <p class="campaign-card__price-after"><?php the_field('campaign_3'); ?></p>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); endif; ?>
            </ul>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <div class="campaign__button">
          <a href="<?php echo esc_url( home_url( '/campaign/' ) );?>" class="button">View more<span></span></a>
        </div>
      </div>
    </section>

    <section id="about-us" class="about layout-about ">
      <div class="about__inner inner">
        <div class="about__title section-header">
          <p class="section-header__entitle">About us</p>
          <h2 class="section-header__jatitle">私たちについて</h2>
        </div>
        <div class="about__wrapper">
          <div class="about__images">
            <div class="about__image-left">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean1.jpg" alt="シーサーの画像">
            </div>
            <div class="about__image-right">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean2-sp.jpg" media="(max-width: 767px)" >
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean2.jpg" alt="海中の画像">
              </picture>
            </div>
          </div>
          <div class="about__body">
            <h3 class="about__heading">Dive into
              <br>the Ocean</h3>
            <div class="about__content">
              <p class="about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              <div class="about__button">
                <a href="<?php echo esc_url( home_url( '/about/' ) );?>" class="button">View more<span></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="information" class="information layout-information">
      <div class="information__inner inner">
        <div class="information__title section-header">
          <p class="section-header__entitle">Information</p>
          <h2 class="section-header__jatitle">ダイビング情報</h2>
        </div>
        <div class="information__contents">
          <div class="information__wrapper">
            <div class="information__image js-colorbox">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information.jpg" alt="熱帯魚の画像">
            </div>
          </div>
          <div class="information__content">
            <h3 class="information__heading">ライセンス取得</h3>
            <p class="information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関の「正規店」として店舗登録されています。<br>
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
            <div class="information__button">
              <a href="<?php echo esc_url( home_url( '/information/' ) );?>" class="button">View more<span></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="blog" class="blog layout-blog">
      <div class="blog__inner inner">
        <div class="blog__title section-header">
          <p class="section-header__entitle section-header__entitle--blog">Blog</p>
          <h2 class="section-header__jatitle section-header__jatitle--blog">ブログ</h2>
        </div>
        <ul class="blog__items blog-cards">
        <?php
            $args = array('post_type' => 'post',
            'posts_per_page' => 3); 
            $the_query = new WP_Query($args); 
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <li class="blog-cards__item blog-card">
            <a href="#" class="blog-card__link">
              <div class="blog-card__inner">
                <div class="blog-card__image">
                  <?php if(has_post_thumbnail( )): ?>
                  <?php the_post_thumbnail( ); ?>
                  <?php else: ?>
                  <img src="<?php echo get_template_directory_uri( ); ?>/assets/images/common/noimg.png" alt="">
                  <?php endif; ?>
                </div>
                <div class="blog-card__head">
                  <time class="blog-card__date" datetime="<?php the_time("c"); ?>"><?php the_time("Y.m.d"); ?></time>
                  <div class="blog-card__heading">
                    <h3 class="blog-card__title"><?php the_title(); ?></h3>
                  </div>
                </div>
                <div class="blog-card__body">
                <?php the_excerpt(); ?>
                </div>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); endif; ?>
        </ul>
        <div class="blog__button">
          <a href="<?php echo esc_url( home_url( '/blog/' ) );?>" class="button">View more<span></span></a>
        </div>
      </div>
    </section>

    <section id="voice" class="voice layout-voice">
      <div class="voice__inner inner">
        <div class="voice__title section-header">
          <p class="section-header__entitle">Voice</p>
          <h2 class="section-header__jatitle">お客様の声</h2>
        </div>
        <ul class="voice__items voice-cards">
        <?php
            $args = array('post_type' => 'voice',
            'posts_per_page' => 2); 
            $the_query = new WP_Query($args); 
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <li class="voice-cards__item voice-card">
            <a href="#" class="voice-card__link">
              <div class="voice-card__inner">
                <div class="voice-card__wrapper">
                  <div class="voice-card__image js-colorbox">
                  <?php if(has_post_thumbnail( )): ?>
                  <?php the_post_thumbnail( ); ?>
                  <?php else: ?>
                  <img src="<?php echo get_template_directory_uri( ); ?>/assets/images/common/noimg.png" alt="">
                  <?php endif; ?>
                  </div>
                  <div class="voice-card__head">
                    <div class="voice-card__meta">
                      <div class="voice-card__tag">
                        <?php 
                          $tags = get_the_tags();
                          foreach ( $tags as $tag ) {
                            echo $tag->name;
                          }
                        ?>
                      </div>
                      <?php
                      $terms = get_the_terms(get_the_ID(), 'voice_category');
                      if ($terms && !is_wp_error($terms)) {
                          $term = reset($terms); // 最初のタームを取得
                          echo '<div class="voice-card__category">' . esc_html($term->name) . '</div>';
                      }
                      ?>
                    </div>
                    <div class="voice-card__heading">
                      <h3 class="voice-card__title"><?php the_title(); ?></h3>
                    </div>
                  </div>
                </div>
                <div class="voice-card__body">
                <?php the_content(); ?>
                </div>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); endif; ?>
        </ul>
        <div class="voice__button">
          <a href="<?php echo esc_url( home_url( '/voice/' ) );?>" class="button">View more<span></span></a>
        </div>
      </div>
    </section>

    <section id="price" class="price layout-price">
      <div class="price__inner inner">
        <div class="price__title section-header">
          <p class="section-header__entitle">Price</p>
          <h2 class="section-header__jatitle">料金一覧</h2>
        </div>
        <div class="price__contents">
          <div class="price__image js-colorbox">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/priceimg.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean3.jpg" alt="ウミガメの画像">
            </picture>
          </div>
          <ul class="price__items">
            <li class="price__item">
              <div class="price__item-header">
                <h3 id="price1" class="price__item-title">ライセンス講習</h3>
              </div>
              <dl class="price__course">
              <?php
                $fields = SCF::get_option_meta('price-options', 'course-list');
                foreach ($fields as $field_name => $fields_value) {
              ?>
                <div class="price__course-wrapper">
                  <dt class="price__course-name"><?php echo esc_html($fields_value['course-name']); ?></dt>
                  <dd class="price__course-charge"><?php echo esc_html($fields_value['price']); ?></dd>
                </div>
              <?php } ?>
              </dl>
            </li>
            <li class="price__item">
              <div class="price__item-header">
                <h3 id="price2" class="price__item-title">体験ダイビング</h3>
              </div>
              <dl class="price__course">
              <?php
                $fields = SCF::get_option_meta('price-options', 'experience-diving');
                foreach ($fields as $field_name => $fields_value) {
              ?>
                <div class="price__course-wrapper">
                  <dt class="price__course-name"><?php echo esc_html($fields_value['diving-name']); ?></dt>
                  <dd class="price__course-charge"><?php echo esc_html($fields_value['price2']); ?></dd>
                </div>
              <?php } ?>
              </dl>
            </li>
            <li class="price__item">
              <div class="price__item-header">
                <h3 id="price3" class="price__item-title">ファンダイビング</h3>
              </div>
              <dl class="price__course">
              <?php
                $fields = SCF::get_option_meta('price-options', 'fun-diving');
                foreach ($fields as $field_name => $fields_value) {
              ?>
                <div class="price__course-wrapper">
                  <dt class="price__course-name"><?php echo esc_html($fields_value['fundiving-name']); ?></dt>
                  <dd class="price__course-charge"><?php echo esc_html($fields_value['price3']); ?></dd>
                </div>
              <?php } ?>
              </dl>
            </li>
            <li class="price__item">
              <div class="price__item-header">
                <h3 class="price__item-title">スペシャルダイビング</h3>
              </div>
              <dl class="price__course">
              <?php
                $fields = SCF::get_option_meta('price-options', 'special-diving');
                foreach ($fields as $field_name => $fields_value) {
              ?>
                <div class="price__course-wrapper">
                  <dt class="price__course-name"><?php echo esc_html($fields_value['special-diving-name']); ?></dt>
                  <dd class="price__course-charge"><?php echo esc_html($fields_value['price4']); ?></dd>
                </div>
              <?php } ?>
              </dl>
            </li>
          </ul>
        </div>
        <div class="price__button">
          <a href="<?php echo esc_url( home_url( '/price/' ) );?>" class="button">View more<span></span></a>
        </div>
      </div>
    </section>

   

<?php get_footer(); ?>