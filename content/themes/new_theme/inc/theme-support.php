<?php

if (!function_exists('theme_setup')):


function theme_setup(){
    add_theme_support('title-tag');
    //RSS
    add_theme_support('automatic-feed-links');
    //Titre automatique


    // register_nav_menus([
    //     'header'     => 'Menu de navigation du header des pages',
    //     'header_home'    => 'Menu de navigation du header page d\'accueil',
    //
    //
    //
    // ]);
    // // Les images de mise en avant
    // add_theme_support('post-thumbnails');
}
endif;

add_action('after_setup_theme', 'theme_setup');




function theme_register_sidebars() {
    /*primary*/
    register_sidebar([
        'id' => 'primary',
        'name' => 'primary',
        'description' => 'main sidebar',
    ]);
}

add_action('widgets_init', 'theme_register_sidebars');



 if (function_exists('register_sidebar')) {
            // Sidebar Area
            register_sidebar(array(
            	'name' => __('SidebarPost'),
            	'id' => 'sidebarPost',
            	'description' => __('Sidebar pour les posts'),
            ));

            // Sidebar Area
            register_sidebar(array(
            	'name' => __('SidebarPaie'),
            	'id' => 'sidebarPaie',
            	'description' => __('Sidebar pour vos pages'),
            ));


            // register_sidebar(array(
            // 	'name' => __('Sessad', 'turf'),
            // 	'id' => 'sessad-page',
            // 	'description' => __('Sidebar pour les pages Sessad', 'turf'),
            // ));
        }


//PAGINATION
function awesome_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');

}
add_action('init', 'awesome_theme_setup');
