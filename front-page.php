<?php
/**
 * Infinity Pro.
 *
 * This file adds the front page to the Infinity Pro Theme.
 *
 * @package Infinity
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/infinity/
 */

add_action( 'genesis_meta', 'infinity_front_page_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 * @since 1.0.0
 */
function infinity_front_page_genesis_meta() {	

		// Add front-page body class.
		add_filter( 'body_class', 'infinity_body_class' );
		function infinity_body_class( $classes ) {

			$classes[] = 'front-page';

			return $classes;

		}		

	}

// Run the Genesis loop.
genesis();
