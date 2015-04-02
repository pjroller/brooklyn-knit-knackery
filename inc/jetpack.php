<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Brooklyn Knit-Knackery
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function brooklyn_knit_knackery_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'brooklyn_knit_knackery_jetpack_setup' );
