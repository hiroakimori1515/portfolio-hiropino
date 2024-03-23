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

  <main>
    <article class="common-column layout-page-common">
      <div class="common-column__inner inner">
        <div class="common-column__content">
          <ul class="blog-cards blog-cards--page-blog">
          <?php if (have_posts(  )): ?>
            <?php while(have_posts(  )): ?>
              <?php the_post(  ); ?>
              <li class="blog-cards__item blog-card">
                <a href="<?php the_permalink( ); ?>" class="blog-card__link">
                  <div class="blog-card__inner">
                    <div class="blog-card__image">
                      <?php if(has_post_thumbnail( )): ?>
                      <?php the_post_thumbnail( ); ?>
                      <?php else: ?>
                      <img src="<?php echo get_template_directory_uri( ); ?>/assets/images/common/noimg.png" alt="">
                      <?php endif; ?>
                    </div>
                    <div class="blog-card__head">
                      <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                      <div class="blog-card__heading">
                        <h3 class="blog-card__title"><?php the_title(); ?></h3>
                      </div>
                    </div>
                    <div class="blog-card__body">
                      <p class="blog-card__text"><?php the_excerpt(); ?></p>
                    </div>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
          </ul>
          
          <div class="common-column_pagenavi">
            <div class="wp-pagenavi">
            <?php wp_pagenavi(); ?>
            </div>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </article>
<?php get_footer(); ?>