<?php

// JS & CSS //

add_action('wp_enqueue_scripts', 'wp_jsandcss');
function wp_jsandcss() {

  // Add main script
  wp_register_script( 'main' , get_stylesheet_directory_uri() . '/dist/js/main.js' );
  wp_enqueue_script('main');

  // Add main css
  wp_register_style( 'main', get_stylesheet_directory_uri() . '/dist/css/main.min.css', array(), false, 'all' );
  wp_enqueue_style( 'main' );
}
