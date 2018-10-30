<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>
<body>
  <?php

        $menuParameters = [
          'theme_location'   => 'primary',
          'container'        => 'nav',
          'menu_class'       => 'nav navbar-nav navbar-right',
          'walker'           => new Walker_Nav_Primary()
        ];
  								$menu = wp_nav_menu($menuParameters);
  							?>
