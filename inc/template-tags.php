<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package understrap
 */

function d4tw_posted_on() {

	echo '<span class="byline">Posted on ' . get_the_date() . ' by ' . get_the_author() . '</span>'; // WPCS: XSS OK.
}

function d4tw_excerpt_length( $length ) {
        return 30;
    }
    add_filter( 'excerpt_length', 'd4tw_excerpt_length', 999 );

function understrap_all_excerpts_get_more_link( $post_excerpt ) {

		return $post_excerpt . '...';
	}
add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );