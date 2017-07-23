<?php
/**
 * Poppy Framework
 * @version 1.2
 * @date 21/07/2017
 *
 * @package Poppy Framework
 * @author  Active Net
 * @license GPL-2.0+
 * @link    http://www.active-net.it
 */

//* Add poppy.css
add_action( 'wp_enqueue_scripts', 'poppy_css' );
function poppy_css() {
	wp_enqueue_style( 'poppy-css-stylesheet', CHILD_URL . '/poppy-extension/poppy.css', array(), PARENT_THEME_VERSION );
}

/* Print an inline script to the footer to keep elements at the same height.
*  Usage: assign .match-height class to the elements
*/
add_action( 'wp_enqueue_scripts', 'poppy_match_height', 99 );
function poppy_match_height() {
	// If Woocommerce is activated, or a product page is showing, exit early to avoid conflicts with the same functionality in new Genesis themes.
	if ( class_exists( 'WooCommerce' ) && (is_shop() || is_product_category() || is_product_tag() ) ) {
		return;
	}
	wp_enqueue_script( 'poppy-match-height', get_stylesheet_directory_uri() . '/poppy-extension/js/jquery.matchHeight.min.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_add_inline_script( 'poppy-match-height', "jQuery(document).ready( function() { jQuery( '.match-height').matchHeight(); });" );
}

//* Enqueue parallax script.
add_action( 'wp_enqueue_scripts', 'enqueue_parallax_script' );
function enqueue_parallax_script() {

	if ( ! wp_is_mobile() ) {
		wp_enqueue_script( 'parallax-script', get_stylesheet_directory_uri() . '/poppy-extension/js/parallax.js', array( 'jquery' ), '1.0.0' );
	}

}