<?php

// カスタムヘッダー
add_theme_support(
  'custom-header',
  array(
    'width' => 950,
    'height' => 295,
    'header-text' => false,
    'default-image' => '%s/images/top/main_image.png',
  )
);
register_nav_menus(
    array(
        'place_global' => 'グローバル',
        'place_utility' => 'ユーティリティ'
    )
);

add_theme_support('post-thumbnails');
set_post_thumbnail_size(90, 90, true);
add_image_size('small_thumbnail', 61, 61, true);
add_image_size('large_thumbnail', 120, 120, true);
add_image_size('category_image', 658, 113, true);
add_image_size('pickup_thumbnail', 302, 123, true);

function change_child_pages_shortcode_css() {
    $url = get_template_directory_uri() . '/css/child-pages-shortcode/style.css';
    return $url;
}
add_filter('child-pages-shortcode-stylesheet', 'change_child_pages_shortcode_css');

// ウィジェット
register_sidebar(array(
    'name' => 'サイドバーウィジェットエリア（上）',
    'id' => 'primary-widget-area',
    'description' => 'サイドバー上部のウィジェットエリア',
    'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
  ));
  
  register_sidebar(array(
    'name' => 'サイドバーウィジェットエリア（下）',
    'id' => 'secondary-widget-area',
    'description' => 'サイドバー下部のウィジェットエリア',
    'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
  ));

  // 30文字表示抜粋（自動生成時）表示テンプレートタグの定義
function the_short_excerpt() {
  add_filter('excerpt_mblength', 'short_excerpt_length', 11);
  the_excerpt();
  remove_filter('excerpt_mblength', 'short_excerpt_length', 11);
}

function short_excerpt_length() {
  return 30; 
}

// 50文字表示抜粋表示テンプレートタグの定義
function the_pickup_excerpt() {
  add_filter('get_the_excerpt', 'get_pickup_excerpt', 0);
  add_filter('excerpt_mblength', 'pickup_excerpt_length', 11);
  the_excerpt();
  remove_filter('get_the_excerpt', 'get_pickup_excerpt', 0);
  remove_filter('excerpt_mblength', 'pickup_excerpt_length', 11);
}

// トップページのピックアップ（モール紹介）部分の抜粋文を切り詰める。
function get_pickup_excerpt($excerpt) {
  if ($excerpt) {
    $excerpt = strip_tags($excerpt);
    $excerpt_len = mb_strlen($excerpt);
    if ($excerpt_len > 50) {
      $excerpt = mb_substr($excerpt, 0, 50) . ' ...';
    }    
  }    
  return $excerpt;
}

function pickup_excerpt_length() {
  return 50;
}

// カテゴリー画像の表示
// 1.アイキャッチ画像が設定されている場合は、アイキャッチ画像を使用
// 2.アイキャッチ画像が設定されていない固定ページで、最上位の固定ページにアイキャッチ画像が設定されている場合は、そのアイキャッチ画像を使用
// それ以外の場合は、デフォルトの画像を表示
function the_category_image() {
  global $post;
  $image = ""; 

  if (is_singular() && has_post_thumbnail()) {
    $image = get_the_post_thumbnail(null, 'category_image', array('id' => 'category_image'));
  } elseif (is_page() && has_post_thumbnail(array_pop(get_post_ancestors($post)))) {
    $image = get_the_post_thumbnail(array_pop(get_post_ancestors($post)), 'category_image', array('id' => 'category_image'));
  }

  if ($image == "") {
    $src = get_template_directory_uri() . '/images/category/default.jpg';
    $image = '<img src="' . $src . '" class="attachment-category_image wp-post-image" alt="" id="category_image" />';
  }   
  echo $image;
}

