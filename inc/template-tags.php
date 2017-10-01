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

if ( ! function_exists( 'all_excerpts_get_more_link' ) ) {
	/**
	 * Adds a custom read more link to all excerpts, manually or automatically generated
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function all_excerpts_get_more_link( $post_excerpt ) {

		return $post_excerpt . ' [...]<p><a class="btn btn-primary understrap-read-more-link" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More...',
		'understrap' ) . '</a></p>';
	}
}
add_filter( 'wp_trim_excerpt', 'all_excerpts_get_more_link' );
