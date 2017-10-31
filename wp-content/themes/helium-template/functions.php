<?php

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
   
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function register_my_menu() {
  register_nav_menu('new-menu','New Menu');


    
}
add_action( 'init', 'register_my_menu' );



    



add_filter('nav_menu_css_class','arg_menu_classes',10, 4);

function arg_menu_classes($classes, $item, $args) {
 
    $classes[] = 'nav-item'; // add classes
   
    return $classes;
}

?>