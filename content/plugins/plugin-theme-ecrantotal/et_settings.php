<?php
/*
Plugin Name: Plugin-Theme-EcranTotal
Description: Réglages pour le thème "nom du theme": Création menu personnalisée
Author: EcranTotal
Author URI: https://ecrantotal.eu
Version: 1.0.0
*/

// Je vérifie que mon fichier est bien executé dans un contexte de WordPress
if (!defined('WPINC')) {
  die('');
}

// Récuperation de la class Ecuries_cpt
require plugin_dir_path(__FILE__) . 'inc/Et_cpt.php';

$et_cpt = new Et_cpt();

// A l'activation
register_activation_hook(__FILE__, [$et_cpt, 'activation']);

// A la désactivation
register_deactivation_hook(__FILE__, [$et_cpt, 'deactivation']);
