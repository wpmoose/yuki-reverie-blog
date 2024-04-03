<?php
/**
 * Theme bootstrap
 *
 * @package Yuki Reverie Blog
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'yuki_reverie_blog_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'yuki_reverie_blog_VERSION', '1.0.0' );
}

if ( ! defined( 'yuki_reverie_blog_PATH' ) ) {
	define( 'yuki_reverie_blog_PATH', trailingslashit( get_stylesheet_directory() ) );
}

if ( ! defined( 'yuki_reverie_blog_URL' ) ) {
	define( 'yuki_reverie_blog_URL', trailingslashit( get_stylesheet_directory_uri() ) );
}

if ( ! defined( 'yuki_reverie_blog_ASSETS_URL' ) ) {
	define( 'yuki_reverie_blog_ASSETS_URL', yuki_reverie_blog_URL . 'assets/' );
}

if ( ! function_exists( 'yuki_reverie_blog_image_url' ) ) {
	/**
	 * Get image url
	 *
	 * @param $image
	 *
	 * @return string
	 */
	function yuki_reverie_blog_image_url( $image ) {
		return yuki_reverie_blog_ASSETS_URL . 'images/' . $image;
	}
}

// require customizer options
require_once yuki_reverie_blog_PATH . 'customizer.php';
require_once yuki_reverie_blog_PATH . 'starter-content.php';
