<aside class="common-column__sidebar sidebar">

  <div class="sidebar__inner">
    <div class="sidebar__content fadein">
      <h3 class="sidebar__title">人気記事</h3>
      <div class="sidebar__body">
        <ul class="sidebar__items">
          <?php
            $args = array(
              'post_type' => 'post',
              'meta_key' => 'post_views_count',
              'orderby' => 'meta_value_num',
              'posts_per_page' => 3,
              'order'=>'DESC',
            );
            $the_view_query = new WP_Query( $args );
            if ($the_view_query->have_posts()):
              while($the_view_query->have_posts()): $the_view_query->the_post();
          ?>
          <li class="sidebar__item popular-posts-card">
            <a href="<?php the_permalink(); ?>" class="popular-posts-card__link">
              <div class="popular-posts-card__inner">
                <div class="popular-posts-card__image">
                  <?php if(has_post_thumbnail()): ?>
                      <img src="<?php the_post_thumbnail_url('medium'); ?>"
                          srcset="<?php the_post_thumbnail_url('medium'); ?> 768w, 
                                  <?php the_post_thumbnail_url('large'); ?> 1024w"
                          sizes="(max-width: 768px) 100vw, (max-width: 1024px) 100vw, 1024px"
                          alt="">
                  <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimg.png" alt="">
                  <?php endif; ?>
                </div>
                <div class="popular-posts-card__body">
                  <time class="popular-posts-card__date" datetime="<?php the_time("c"); ?>"><?php the_time("Y.m.d"); ?></time>
                  <h4 class="popular-posts-card__title"><?php the_title(); ?></h4>
                </div>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      </div>
    </div>
    <div class="sidebar__content fadein">
      <h3 class="sidebar__title">口コミ</h3>
      <div class="sidebar__body">
        <ul class="sidebar__items">
          <?php
              $args = array('post_type' => 'voice',
              'posts_per_page' => 1); 
              $the_query = new WP_Query($args); 
          ?>
          <?php if($the_query->have_posts()): ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <li class="sidebar__item">
            <div class="sidebar__voice-card">
              <div class="sidebar__voice-image">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>"
                        srcset="<?php the_post_thumbnail_url('medium'); ?> 768w, 
                                <?php the_post_thumbnail_url('large'); ?> 1024w"
                        sizes="(max-width: 768px) 100vw, (max-width: 1024px) 100vw, 1024px"
                        alt="">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimg.png" alt="">
                <?php endif; ?>
              </div>
              <div class="sidebar__voice-body">
                <div class="sidebar__voice-tag">
                <?php 
                  $tags = get_the_tags();
                  foreach ( $tags as $tag ) {
                    echo $tag->name;
                  }
                ?>
                </div>
                <h4 class="sidebar__voice-title"><?php the_title(); ?></h4>
              </div>
            </div>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); endif; ?>
        </ul>
        <div class="sidebar__button">
          <a href="<?php echo esc_url( home_url( '/voice/' ) );?>" class="button shiny">View more<span></span></a>
        </div>
      </div>
    </div>
    <div class="sidebar__content fadein">
      <h3 class="sidebar__title">キャンペーン</h3>
      <div class="sidebar__body">
        <ul class="sidebar__items sidebar__items--campaign">
        <?php
            $args = array('post_type' => 'campaign',
            'posts_per_page' => 2); 
            $the_query = new WP_Query($args); 
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <li class="sidebar__item">
            <div class="campaign-card">
              <div class="campaign-card__image">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>"
                        srcset="<?php the_post_thumbnail_url('medium'); ?> 768w, 
                                <?php the_post_thumbnail_url('large'); ?> 1024w"
                        sizes="(max-width: 768px) 100vw, (max-width: 1024px) 100vw, 1024px"
                        alt="">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimg.png" alt="">
                <?php endif; ?>
              </div>
              <div class="campaign-card__inner campaign-card__inner--lower-page">
                <div class="campaign-card__head">
                  <h3 class="campaign-card__title campaign-card__title--lower-page"><?php the_title(); if(!get_field('campaign')) { echo '<br><span style="color:red;>">(本キャンペーンは終了しました）</span>';} ?></h3>
                </div>
                <div class="campaign-card__body campaign-card__body--lower-page">
                  <p class="campaign-card__menu-title"><?php the_field('campaign_1'); ?></p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__price-before"><?php the_field('campaign_2'); ?></p>
                    <p class="campaign-card__price-after campaign-card__price-after--lower-page"><?php the_field('campaign_3'); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); endif; ?>
        </ul>
        <div class="sidebar__button">
          <a href="<?php echo esc_url( home_url( '/campaign/' ) );?>" class="button shiny">View more<span></span></a>
        </div>
      </div>
    </div>
    <div class="sidebar__content fadein">
      <h3 class="sidebar__title">アーカイブ</h3>
      <div class="sidebar__body">
        <div class="sidebar__items sidebar__items--archive archive">
          <dl class="sidebar__item archive__menu">
          <?php
            $year_prev = null;
            $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
                    YEAR( post_date ) AS year,
                    COUNT( id ) as post_count FROM $wpdb->posts
                    WHERE post_status = 'publish' and post_date <= now( )
                    and post_type = 'post'
                    GROUP BY month , year
                    ORDER BY post_date DESC");

            $first = true; // 最初の要素かどうかを示すフラグ

            foreach($months as $month):
            $year_current = $month->year;
            if ($year_current != $year_prev):
            if ($year_prev != null):
          ?>
          <?php endif; ?>
            <dt class="archive__year is-active"><?php echo $month->year; ?></dt>
            <dd class="archive__lists">
              <ul class="archive__list">
              <?php $first = false; // 最初の要素が表示されたのでフラグを false に設定
                            endif;?>
                <li class="archive__list-item"><a href="<?php echo esc_url( home_url( '/' ) ) ; ?><?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)); ?>"><?php echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月</a></li>
              </ul>
              <?php $year_prev = $year_current; endforeach;?>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
</aside>