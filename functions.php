<?php


function theme_styles() {

	wp_enqueue_style( 'pure_css', get_template_directory_uri() . '/css/pure-min.css' );
	wp_enqueue_style( 'pure_grid_css', get_template_directory_uri() . '/css/grids-responsive-min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

?>
