<?php
/**
 * Skylayer Blueprint Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Skylayer Blueprint
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_SKYLAYER_BLUEPRINT_VERSION', '1.0.1' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'skylayer-blueprint-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_SKYLAYER_BLUEPRINT_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );



require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/danielslyman/skylayer-blueprint/',
	__FILE__,
	'skylayer-blueprint'
);

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('your-token-here');

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');
