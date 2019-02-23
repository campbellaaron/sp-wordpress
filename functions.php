<?php 

function myCss(){
    wp_enqueue_style('sp-css', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('fa-file', get_stylesheet_directory_uri() . '/fa/css/all.css');
    wp_enqueue_style('bst-file', get_stylesheet_directory_uri() . '/css/bootstrap-4.0.0.css');
    wp_enqueue_style('font-file', 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,600i,700,700i|Source+Sans+Pro:400,400i,600,700,700i');
}

add_action( 'wp_enqueue_scripts', 'myCss');

add_theme_support( 'post-thumbnails' );

remove_action('welcome_panel', 'wp_welcome_panel');







?>