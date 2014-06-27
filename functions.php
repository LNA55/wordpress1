<?php

// Ajouter des images à la une ("thumbnail")
add_theme_support( 'post-thumbnails' );

// Ajouter un menu : étape 1
// Utiliser Bootstrap dans un menu appelé "primary" et ajouter un second menu appelé "Secondary Menu"
// http://code.tutsplus.com/tutorials/how-to-integrate-bootstrap-navbar-into-wordpress-theme--wp-33410
function register_my_menus() { 
  register_nav_menus (
    array(
    'primary' => __( 'Primary Menu', 'blog' ),
    'secondary-nav' => __( 'Secondary Menu', 'blog' ),
    ) 
  );
}

add_action( 'init', 'register_my_menus' );

// Utiliser un menu avec Bootstrap -- https://github.com/twittem/wp-bootstrap-navwalker
require_once('wp_bootstrap_navwalker.php');