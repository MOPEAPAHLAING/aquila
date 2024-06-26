<?php
/*
* Theme Functions
*
*@package Aquila
*/
if (!defined('AQUILA_DIR_PATH')) {
	define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}

require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';
require_once AQUILA_DIR_PATH . '/inc/helpers/template-tags.php';

function aquila_get_theme_instance() {
	\AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}

aquila_get_theme_instance();

function aquila_theme_scripts () {
	$url  = get_template_directory_uri();

	wp_enqueue_style('style-css', get_stylesheet_uri());
	wp_enqueue_style('bootstrap-css', $url . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

	wp_enqueue_script('main-js', $url . '/assets/main.js', ['jquery'], false, true);
	wp_enqueue_script('bootstrap-js', $url . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);
}

add_action('wp_enqueue_scripts', 'aquila_theme_scripts');

function setup_theme () {
	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo', [
		'header-text' => ['site-title', 'site-description'],
		'height' => 100,
		'width' => 400,
		'flex-height' => true, 
		'flex-width' => true
	]);

	add_theme_support ( 'custom-background', [
		'default-color' => '#fff',
		'default-image' => '',
		'default-repeat' => 'no-repeat'
	]);

	add_theme_support( 'post-thumbnails' );

	/**
	 * Register image size
	 */

	add_image_size('featured-thumbnail', 350, 233, true);

	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

	add_image_size( 'featured-thumbnail', 350, 233, true );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			]
		);

	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'align-wide' );
		
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 1240;
	}
}

add_action('after_setup_theme', 'setup_theme');



