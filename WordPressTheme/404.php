<?php get_header(); ?>

<!-- // 404 エラーの場合、特定のスタイルを適用 -->
<?php if (is_404()) {
    echo '<style>';
    echo '.breadcrumb div { color: #ffffff; }'; // あなたが希望するスタイルに変更
    echo '</style>';
} ?>
   <main>
    <section class="page-404 layout-page-404">
      <div class="page-404__inner inner">
        <!-- パンくず -->
        <?php get_template_part('parts/breadcrumb') ?>
        <h2 class="page-404__title">404</h2>
        <p class="page-404__text">申し訳ありません。<br>
          お探しのページが見つかりません。</p>
        <div class="page-404__button">
          <a href="<?php echo esc_url(home_url()); ?>" class="button--page-404">Page TOP<span></span></a>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
