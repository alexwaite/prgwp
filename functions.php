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

function custom_post_type() {
     
    register_post_type( 'gallery', array(
        'label'               => __( 'gallery', 'gallery' ),
        'description'         => __( 'Gallery news and reviews', 'gallery' ),
        'labels'              => array(
	        'name'                => _x( 'Gallerys', 'Post Type General Name', 'gallery' ),
	        'singular_name'       => _x( 'Gallery', 'Post Type Singular Name', 'gallery' ),
	        'menu_name'           => __( 'Gallerys', 'gallery' ),
	        'parent_item_colon'   => __( 'Parent Gallery', 'gallery' ),
	        'all_items'           => __( 'All Gallerys', 'gallery' ),
	        'view_item'           => __( 'View Gallery', 'gallery' ),
	        'add_new_item'        => __( 'Add New Gallery', 'gallery' ),
	        'add_new'             => __( 'Add New', 'gallery' ),
	        'edit_item'           => __( 'Edit Gallery', 'gallery' ),
	        'update_item'         => __( 'Update Gallery', 'gallery' ),
	        'search_items'        => __( 'Search Gallery', 'gallery' ),
	        'not_found'           => __( 'Not Found', 'gallery' ),
	        'not_found_in_trash'  => __( 'Not found in Trash', 'gallery' ),
	    ),
        'supports'            => array( 'title' ),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'menu_icon'			  => 'dashicons-images-alt',
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    ));

    register_post_type( 'team', array(
        'label'               => __( 'team', 'team' ),
        'description'         => __( 'Team members', 'team' ),
        'labels'              => array(
	        'name'                => _x( 'Team', 'Post Type General Name', 'team' ),
	        'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'team' ),
	        'menu_name'           => __( 'Team Members', 'team' ),
	        'parent_item_colon'   => __( 'Parent Team', 'team' ),
	        'all_items'           => __( 'All Team Members', 'team' ),
	        'view_item'           => __( 'View Team', 'team' ),
	        'add_new_item'        => __( 'Add New Team Member', 'team' ),
	        'add_new'             => __( 'Add New', 'team' ),
	        'edit_item'           => __( 'Edit Team Members', 'team' ),
	        'update_item'         => __( 'Update Team Members', 'team' ),
	        'search_items'        => __( 'Search Team Members', 'team' ),
	        'not_found'           => __( 'Not Found', 'team' ),
	        'not_found_in_trash'  => __( 'Not found in Trash', 'team' ),
	    ),
        'supports'            => array( 'title' ),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'menu_icon'			  => 'dashicons-groups',
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    ));
}
 
add_action( 'init', 'custom_post_type', 0 );





?>