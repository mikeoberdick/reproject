<?php
/**
 * Setting up widgets
 *
 * @package understrap
 */

function d4tw_remove_primary_menu () {
	unregister_nav_menu( 'primary' );
}

add_action( 'after_setup_theme', 'd4tw_remove_primary_menu', 20 );

register_nav_menus( array(
	'logged_in' => 'Logged In Menu',
	'logged_out' => 'Logged Out Menu'
) );