<?php
/**
 * Theme functions and definitions
 *
 * @package construction_business
 */

if ( ! function_exists( 'construction_business_enqueue_styles' ) ) :
	/**
	 * @since Construction Business 1.0.0
	 */
	function construction_business_enqueue_styles() {
		wp_enqueue_style( 'construction-business-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'construction-business-style', get_stylesheet_directory_uri() . '/style.css', array( 'construction-business-style-parent' ), '1.0.0' );
		wp_enqueue_style( 'construction-business-google-fonts', '//fonts.googleapis.com/css?family=Hind:300,400,500,600,700', false );
	}
endif;
add_action( 'wp_enqueue_scripts', 'construction_business_enqueue_styles', 99 );