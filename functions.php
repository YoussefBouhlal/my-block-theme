<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package My Block Theme
 * @since 1.0.0
 */

namespace MyBlockTheme;

/**
 * Enqueue the scripts and styles.
 * 
 * @since 1.0.0
 */
function enqueue_scripts_styles() {
	wp_enqueue_style( 'my-block-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_scripts_styles' );

/**
 * Set up theme defaults and register various WordPress features.
 * 
 * @since 1.0.0
 */
function setup() {

    add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );