<?php 

function styles_and_scripts() {
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
	wp_enqueue_script( 'jquery' );
}
add_action('wp_enqueue_scripts', 'styles_and_scripts');

function wpcodex_add_excerpt_support_for_pages() {
 add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );

add_theme_support( 'post-thumbnails' ); 

if ( function_exists('add_image_size') ) {
	add_image_size( 'catalog-thumbnail-size', 330, 330);
}
?>