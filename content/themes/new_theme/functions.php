<?php

require get_theme_file_path('inc/theme-support.php');

require get_theme_file_path('inc/theme-enqueue.php');

require get_theme_file_path('inc/theme-clean.php');

require get_template_directory() . '/inc/walker.php';

// require get_theme_file_path('inc/customizer.php');


// add_filter( 'wp_nav_menu_objects', 'submenu_limit', 10, 2 );
// function submenu_limit( $items, $args ) {
//     if ( empty($args->submenu) )
//         return $items;
//     $parent_id = array_pop( wp_filter_object_list( $items, array( 'title' => $args->submenu ), 'and', 'ID' ) );
//     $children  = submenu_get_children_ids( $parent_id, $items );
//     foreach ( $items as $key => $item ) {
//         if ( ! in_array( $item->ID, $children ) )
//             unset($items[$key]);
//     }
//     return $items;
// }
// function submenu_get_children_ids( $id, $items ) {
//     $ids = wp_filter_object_list( $items, array( 'menu_item_parent' => $id ), 'and', 'ID' );
//     foreach ( $ids as $id ) {
//         $ids = array_merge( $ids, submenu_get_children_ids( $id, $items ) );
//     }
//     return $ids;
// }
