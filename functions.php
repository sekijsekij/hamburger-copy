<?php
add_action('init', function () {

//アイキャッチサムネイル生成
add_theme_support('post-thumbnails');
add_image_size('thumb100',100,100,true);
// add_image_size('thumb110',110,110,true);
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  add_theme_support('title-tag');
});

// function custom_wp_pagenavi_class_current( $class_name ) {
//   return 'c-pagenation';
// }
// add_filter( 'wp_pagenavi_class_current', 'custom_wp_pagenavi_class_pages' );



function my_script()
{
  wp_enqueue_script(
    'myscript',
    get_template_directory_uri() . '/js/main.js',
    array(),
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'my_script');

/**
 * メインクエリの内容を変更する
 */
add_action( 'pre_get_posts', 'my_pre_get_posts' );
function my_pre_get_posts($query) {
    // 管理画面、メインクエリ以外には設定しない
    if ( is_admin() || ! $query->is_main_query() ){
        return;
    }

    //カテゴリーページの場合3件表示
    if ( $query->is_category() ) {
        $query->set( 'posts_per_page', 3 );
        return;
    }
}