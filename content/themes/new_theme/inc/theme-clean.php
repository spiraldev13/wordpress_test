<?php

// Supprime WP EMOJI
remove_action( 'wp_head', 'print_emoji_detection_script', 7);
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_print_styles', 'print_emoji_styles');

// Supprime le lien vers Windows Live Editor Manifest
remove_action( 'wp_head', 'wlwmanifest_link' );

// Supprime le lien RSD + XML
remove_action( 'wp_head', 'rsd_link' );

// Supprime la meta generator
remove_action( 'wp_head', 'wp_generator' );

// Supprime les extra feed rss
remove_action( 'wp_head', 'feed_links_extra', 3 );

// Supprime les feeds des Posts et des Commentaires
remove_action( 'wp_head', 'feed_links', 2 );




// Suppression du Welcome panel
remove_action('welcome_panel', 'wp_welcome_panel');

// Fonction qui contient notre widget
function wpo_dashboard_widget_function() {
  ?>
  <div class="acceuil">
    <h2>Find Your Job !</h2>
    <p>Réaliser par Jonathan, Cyril, Ludovic et Audrey</p>
  </div>
  <?php
}

// Fonction qui déclare notre widget
function wpo_add_dashboard_widget() {
  wp_add_dashboard_widget('wpo_summary_dashboard_widget', 'Notre Projet', 'wpo_dashboard_widget_function');
}

// On greffe au hook "wp_dashboard_setup" la fonction de déclaration du widget
// add_action('wp_dashboard_setup', 'wpo_add_dashboard_widget');

//Remove WordPress Footer Credits
function wpo_remove_footer_admin() {
	return 'Réalisé par EcranTotal';
}
add_filter('admin_footer_text', 'wpo_remove_footer_admin');

//Remove WordPress version in footer
function wpo_remove_version_footer() {
	remove_filter( 'update_footer', 'core_update_footer' );
}
add_action( 'admin_menu', 'wpo_remove_version_footer' );
