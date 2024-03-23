<?php get_header(); ?>
 <!-- 下層ページのメインビュー -->
 <div class="sub-mv">
    <div class="sub-mv__inner">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-bg.jpg" media="(max-width: 767px)" >
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-bg.jpg" alt="夕陽の中プレイするゴルファー">
      </picture>
      <div class="sub-mv__header js-mv-header">
        <h2 class="sub-mv__title">Blog</h2>
      </div>
    </div>
  </div>
<!-- パンくず -->
 <?php get_template_part('parts/breadcrumb') ?>

 <?php
    // 記事のビュー数を更新(ログイン中・クローラーは除外)
    if (!is_user_logged_in() && !is_robots()) {
      setPostViews(get_the_ID());
    }
  ?>
 <main>
  <?php if (have_posts(  )): ?>
    <?php while(have_posts(  )): ?>
      <?php the_post(  ); ?>
      <article class="common-column layout-page-common">
        <div class="common-column__inner inner">
          <div class="common-column__content single">
            <time class="single__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
            <h2 class="single__title"><?php the_title(); ?></h2>
            <div class="single__image">
              <?php if(has_post_thumbnail( )): ?>
              <?php the_post_thumbnail( ); ?>
              <?php else: ?>
              <img src="<?php echo get_template_directory_uri( ); ?>/assets/images/common/noimg.png" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php endif; ?>
            </div>
            <div class="single__content">
              <?php the_content(); ?>
            </div>
            <div class="common-column_pagenavi common-column_pagenavi--single">
              <div class="wp-pagenavi">
                <?php
                $prev = get_previous_post();
                if ( ! empty( $prev ) ) {
                  $prev_url = esc_url( get_permalink( $prev->ID ) );
                }
                $next = get_next_post();
                if ( ! empty( $next ) ) {
                  $next_url = esc_url( get_permalink( $next->ID ) );
                }
                ?>
                  <?php if ( ! empty( $prev ) ) : ?>
                  <a href="<?php echo $prev_url; ?>" class="previouspostslink"></a>
                  <?php endif; ?>
                  <?php if ( ! empty( $next ) ) : ?>
                  <a href="<?php echo $next_url; ?>" class="nextpostslink"></a>
                  <?php endif; ?>
              </div>
            </div>
          </div>
          <?php get_sidebar(); ?>

        </div>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>