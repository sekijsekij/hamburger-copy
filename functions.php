<?php
add_action('init', function () {
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
