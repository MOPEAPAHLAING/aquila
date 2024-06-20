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

function aquila_theme_scripts () {
	$url  = get_template_directory_uri();

	wp_enqueue_style('style-css', get_stylesheet_uri());
	wp_enqueue_style('bootstrap-css', $url . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

	wp_enqueue_script('main-js', $url . '/assets/main.js', [], true);
	wp_enqueue_script('bootstrap-js', $url . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);
}

add_action('wp_enqueue_scripts', 'aquila_theme_scripts');