<?php

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/css/animate.css');
  wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/animate.css');
  wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
  wp_enqueue_style( 'jasny-bootstrap', get_stylesheet_directory_uri() . '/css/jasny-bootstrap.min.css');
  wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css');
  wp_enqueue_style( 'owl.theme', get_stylesheet_directory_uri() . '/css/owl.theme.css');
  wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/css/responsive.css');
  wp_enqueue_style( 'scrolling-nav', get_template_directory_uri() . '/css/scrolling-nav.css');
 
  wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js');
 
 wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/jquery.min.js');
 wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/tether.min.js');
 wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
 wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js');
 wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/jquery.mixitup.js');
 wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/form-validator.min.js');
 wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/contact-form-script.js');
 wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/main.js.js');

   
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>