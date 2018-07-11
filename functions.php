<?php 

show_admin_bar( false );

function setup_styles_and_scripts() {
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . "/assets/bootstrap.min.css");
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js');
}
add_action( 'wp_enqueue_scripts', 'setup_styles_and_scripts' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


?>