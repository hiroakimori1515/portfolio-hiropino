<?php
function enqueue_styles_and_scripts() {
    // Google Font - Gotu
    wp_register_style('google-font-gotu', 'https://fonts.googleapis.com/css2?family=Gotu&display=swap');
    wp_enqueue_style('google-font-gotu');

    // Google Font - Lato
    wp_register_style('google-font-lato', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap');
    wp_enqueue_style('google-font-lato');

    // Google Font - Gentium Book Plus
    wp_register_style('google-font-gentium-book-plus', 'https://fonts.googleapis.com/css2?family=Gentium+Book+Plus:ital,wght@0,400;0,700;1,400;1,700&display=swap');
    wp_enqueue_style('google-font-gentium-book-plus');

    // Google Font - Zen Old Mincho
    wp_register_style('google-font-zen-old-mincho', 'https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@400;700&display=swap');
    wp_enqueue_style('google-font-zen-old-mincho');

    // Google Font - Libre Baskerville
    wp_enqueue_style('google-font-libre-baskerville', 'https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap', array(), null, 'all');

    // Google Font - Noto Sans JP
    wp_register_style('google-font-noto-sans', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap');
    wp_enqueue_style('google-font-noto-sans');

    // Google Font - Noto Serif JP
    wp_register_style('google-font-noto-serif', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;700&display=swap');
    wp_enqueue_style('google-font-noto-serif');

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');

    // 自身のCSS
    wp_enqueue_style('custom-css', get_theme_file_uri('/assets/css/style.css'), array(), null, 'all');
}

 // Favicon
function mytheme_add_favicon() {
  // ファビコンのURLを指定
  $favicon_url = get_theme_file_uri('/assets/images/common/favicon.svg');
  echo '<link rel="icon" href="' . esc_url($favicon_url) . '" type="image/svg+xml">';
}
add_action('wp_head', 'mytheme_add_favicon');


// スクリプトの追加
function enqueue_custom_scripts() {
    // GSAP
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js', array(), '3.11.0', true);

    // SplitType
    wp_enqueue_script('split-type', 'https://unpkg.com/split-type', array(), null, true);

    // jQuery
    wp_enqueue_script('jquery');

    // jQuery Validate
    wp_enqueue_script('jquery-validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js', array('jquery'), null, true);

    // jQuery Inview
    wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), null, true);

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), null, true);

    // カスタムスクリプト
    wp_enqueue_script('custom-script', get_theme_file_uri('/assets/js/script.js'), array('jquery'), null, true);

}

// アクションフックに関数を追加
add_action('wp_enqueue_scripts', 'enqueue_styles_and_scripts');
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

//アーカイブの表示件数変更
function change_posts_per_page($query)
{
  if(is_admin() || !$query->is_main_query())
    return;
  if($query->is_archive('voice')) {
    $query->set('posts_per_page', '6');
  }
  if($query->is_archive('campaign')) {
    $query->set('posts_per_page', '4');
  }
}
add_action('pre_get_posts','change_posts_per_page');

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

// ヘッダー、フッターのカスタムメニュー化
function my_menu_init() {
  register_nav_menus(
    array(
      'global' => 'グローバルメニュー',
      'drawer' => 'ドロワーメニュー',
      'footer' => 'フッターメニュー'
    )
  );
}
add_action('init','my_menu_init');

// functions.php に以下のコードを追加

function add_menu_description_to_link($item_output, $item, $depth, $args) {
  // メニュー項目の説明を取得
  $description = $item->post_content;

  // 説明がある場合はaタグに追加
  if (!empty($description)) {
      $item_output = preg_replace('/(<a.*?>[^<]*?)<\/a>/', '$1<div class="pc-nav__item-jatitle">' . esc_html($description) . '</div></a>', $item_output);
  }

  return $item_output;
}
add_filter('walker_nav_menu_start_el', 'add_menu_description_to_link', 10, 4);

/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page( 'portfolio-hiropino', 'よくある質問','manage_options', 'theme-options','','7' );
SCF::add_options_page( 'portfolio-hiropino', '料金一覧','manage_options', 'price-options','','7' );
SCF::add_options_page( 'portfolio-hiropino', 'ギャラリー','manage_options', 'gallery-options','','7' );
SCF::add_options_page( 'portfolio-hiropino', 'メイン画像','manage_options', 'main_images-options','','7' );

// 記事のPVを取得
function getPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count=='') {
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
  return $count.' Views';
}

// 記事のPVをカウントする
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count=='') {
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  } else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}

function cms_excerpt_more() {
  return '...';
}
add_filter( 'excerpt_more', 'cms_excerpt_more');

function cms_excerpt_length() {
  return 80;
}
add_filter('excerpt_mblength', 'cms_excerpt_length');
