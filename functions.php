<?php
/*
* Theme Functions
*
*@package Aquila
*/

function aquila_theme_scripts () {
	wp_enqueue_style('style-css', get_stylesheet_uri());
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', [], true);
}

add_action('wp_enqueue_scripts', 'aquila_theme_scripts');