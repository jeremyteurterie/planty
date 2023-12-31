<?php

/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$viewport_content = apply_filters('hello_elementor_viewport_content', 'width=device-width, initial-scale=1');
$enable_skip_link = apply_filters('hello_elementor_enable_skip_link', true);
$skip_link_url = apply_filters('hello_elementor_skip_link_url', '#content');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="nav-bar">
		<div>
			<a class='logo' href="http://planty.local/">
				<img class="logo-icon" alt="" src="http://planty.local/wp-content/uploads/2023/09/logo.png" />
				<div class="energy-drink">energy drink</div>
			</a>

		</div>

		<div class="item-menu">
			<div class="item1">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'custom-menu',
					'container' => false, // N'inclut pas de conteneur autour du menu
				));
				?>
			</div>
			<div class="btn-nav">
				<div class="btn-nav-child">
					<a class="commander" href="http://planty.local/commander">Commander</a>
				</div>
			</div>
		</div>
	</header>