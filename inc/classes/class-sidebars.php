<?php
/**
 * Register Sidebars
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Sidebars {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		add_action('widgets_init', [$this, 'register_sidebars']);
	}

	public function register_sidebars() {
		register_sidebar(array(
			'name' => __('Sidebar', 'aquila'),
			'id' => 'sidebar-1',
			'description' => __('Main Sidebar', 'aquila'),
			'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
			"after_widget" => '</div>',
			'befor_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
		register_sidebar(array(
			'name' => __('Footer', 'aquila'),
			'id' => 'sidebar-2',
			'description' => __('Footer Sidebar', 'aquila'),
			'before_widget' => '<div id="%1$s" class="widget widget-footer cell column %2$s">',
			"after_widget" => '</div>',
			'befor_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
}