<?php
/**
 * Bootstraps the Theme.
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME {
	use Singleton;

	protected function __construct() {

		// load class.
		Assets::get_instance();
		Menus::get_instance();
		Meta_Boxes::get_instance();
		Sidebars::get_instance();
		$this->set_hooks();
	}

	protected function set_hooks() {
		// actions and filters
	}
}