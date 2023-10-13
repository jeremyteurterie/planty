<?php

/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

define('HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0');

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles()
{

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20);

// register custom menu
function register_custom_menu()
{
	register_nav_menu('custom-menu', __('Menu personnalisé', 'Hello Elementor Child'));
}
add_action('after_setup_theme', 'register_custom_menu');

// hook for admin link
function add_admin_link($items, $args)
{
	if (is_user_logged_in() && $args->theme_location == 'custom-menu') {
		$items .= '<li id="admin"><a href="' . get_admin_url() . '">Admin</a></li>';
	}
	return $items;
}

add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
