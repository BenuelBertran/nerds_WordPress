<?php

add_action( 'wp_enqueue_scripts', 'nerds_styles' );
add_action( 'wp_enqueue_scripts', 'nerds_scripts' );

function nerds_styles() {
  wp_enqueue_style( 'fonts-style', get_template_directory_uri() .'/assets/css/fonts.css' );
  wp_enqueue_style( 'normalize-style', get_template_directory_uri() .'/assets/css/normalize.css' );
  wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function nerds_scripts() {
  wp_enqueue_script( 'slider', get_template_directory_uri() .'/assets/js/main-page-slider.js', null, null, true );
  wp_enqueue_script( 'modal', get_template_directory_uri() .'/assets/js/modal-feedback.js', null, null, true );
}