<?php
/**
 * Theme Setup
 *
 * @package understrap
 */

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();

    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), filemtime( get_stylesheet_directory() . '/css/child-theme.min.css' ) );
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), filemtime( get_stylesheet_directory() . '/css/child-theme.min.css' ), true );
}

//Allow Text widgets to execute shortcodes
add_filter('widget_text', 'do_shortcode');

// Add the testimonial image thumbnail size
add_action( 'after_setup_theme', 'testimonial_pic' );
function testimonial_pic() {
    add_image_size( 'testimonial-thumb', 200, 200, array( 'center', 'top' ) );
}