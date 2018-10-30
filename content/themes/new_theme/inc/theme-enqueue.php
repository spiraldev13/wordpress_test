<?php


if (!function_exists('theme_scripts')):
// On ajoute ici ce qui sera executé dans les hooks WP_HEAD & WP_FOOTER
function theme_scripts() {

  // Mon fichier de style css
  wp_enqueue_style(
    'theme-app-css',
    get_theme_file_uri('/public/css/app.css'),
    ['theme-vendor-css']
    );

  wp_enqueue_style(
    'theme-vendor-css',
    get_theme_file_uri('/public/css/vendor.css'),
    []
    );

  // Je déclare mon app.js après vendor.js & dans le footer
  wp_enqueue_script(
    'theme-app-js',
    get_theme_file_uri('/public/js/app.js'),
    ['theme-vendor-js'],
    '1.0.0',
    true);

  // Je déclare mon vendor.js dans le footer
  wp_enqueue_script(
    'theme-vendor-js',
    get_theme_file_uri('/public/js/vendor.js'),
    [],
    '1.0.0',
    true);
}
endif;
add_action('wp_enqueue_scripts', 'theme_scripts');
