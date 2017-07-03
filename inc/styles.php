<?php
/**
 * D4TW register theme styles
 *
 * @package understrap
 */

// Add the theme fonts
function d4tw_enqueue_fonts () {
    wp_enqueue_style( 'Open Sans', 'https://fonts.googleapis.com/css?family=Open+Sans' );
    wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css?family=Roboto' );
    wp_enqueue_style( 'Droid Sans', 'https://fonts.googleapis.com/css?family=Droid+Sans' );
}
add_action('wp_enqueue_scripts', 'd4tw_enqueue_fonts');