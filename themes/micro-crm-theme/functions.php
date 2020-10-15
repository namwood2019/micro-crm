<?php

// Load CSS files
function load_css(){
  wp_register_style('stylesheet', get_template_directory_uri() . '/src/css/main.css');
  wp_enqueue_style('stylesheet');

  wp_register_style('another_css', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('another_css');
}

add_action('wp_enqueue_scripts', 'load_css');

// Load Javascript files
function load_javascript(){
  wp_register_script('app-javascript', get_template_directory_uri() . '/src/js/app.js', 'jquery', 1, true);
  wp_enqueue_script('app-javascript');
}

add_action('wp_enqueue_scripts', 'load_javascript');


  // Register menus
  register_nav_menus(
    array(
      'primary'     => __('Primary Menu'),
      'footer'      => __('Footer Menu')
    )
  );