<?php

defined('ABSPATH') || exit;

if (!class_exists('Redux')) {
	return;
}

// $opt_name = 'restaurant_site_options';
$opt_name = 'rmbt_pc_options';
$dir = dirname(__FILE__) . DIRECTORY_SEPARATOR;
$sample_patterns = array();

/*
 * ---> BEGIN ARGUMENTS
 */

$theme = wp_get_theme();

$args = array(
	'opt_name' => $opt_name,
	'display_name' => $theme->get('Name'),
	'display_version' => $theme->get('Version'),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type' => 'submenu',
	// Show the sections below the admin menu item or not.
	'allow_sub_menu' => false,
	// The text to appear in the admin menu.
	'menu_title' => esc_html__('Опции темы', 'rmbt_pc'),
	// The text to appear on the page title.
	'page_title' => esc_html__('Опции темы', 'rmbt_pc'),
	// Disable to create your own Google fonts loader.
	'disable_google_fonts_link' => false,
	// Show the panel pages on the admin bar.
	'admin_bar' => true,
	// Icon for the admin bar menu.
	'admin_bar_icon' => 'dashicons-portfolio',
	// Priority for the admin bar menu.
	'admin_bar_priority' => 50,
	// Sets a different name for your global variable other than the opt_name.
	'global_variable' => $opt_name,
	// Show the time the page took to load, etc. (forced on while on localhost or when WP_DEBUG is enabled).
	'dev_mode' => true,
	// Enable basic customizer support.
	'customizer' => true,
	// Allow the panel to open expanded.
	'open_expanded' => false,
	// Disable the save warning when a user changes a field.
	'disable_save_warn' => false,
	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority' => 90,
	// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent' => 'themes.php',
	// Permissions needed to access the options panel.
	'page_permissions' => 'manage_options',
	// Specify a custom URL to an icon.

	// Force your panel to always open to a specific tab (by id).
	'last_tab' => '',
	// Icon displayed in the admin panel next to your menu_title.
	'page_icon' => 'icon-themes',
	// Page slug used to denote the panel, will be based off page title, then menu title, then opt_name if not provided.
	'page_slug' => $opt_name,
	// On load save the defaults to DB before user clicks save.
	'save_defaults' => true,
	// Display the default value next to each field when not set to the default value.
	'default_show' => false,
	// What to print by the field's title if the value shown is default.
	'default_mark' => '*',
	// Shows the Import/Export panel when not used as a field.
	'show_import_export' => true,
	// The time transients will expire when the 'database' arg is set.
	'transient_time' => 60 * MINUTE_IN_SECONDS,
	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output' => true,
	// Allows dynamic CSS to be generated for customizer and google fonts,
	// but stops the dynamic CSS from going to the page head.
	'output_tag' => true,
	// Disable the footer credit of Redux. Please leave if you can help it.
	'footer_credit' => '',
	// If you prefer not to use the CDN for ACE Editor.
	// You may download the Redux Vendor Support plugin to run locally or embed it in your code.
	'use_cdn' => true,
	// Set the theme of the option panel.  Use 'wp' to use a more modern style, default is classic.
	'admin_theme' => 'wp',
	// Enable or disable flyout menus when hovering over a menu with submenus.
	'flyout_submenus' => true,
	// Mode to display fonts (auto|block|swap|fallback|optional)
	// See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display.
	'font_display' => 'swap',
	// HINTS.
	'hints' => array(
		'icon' => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color' => 'lightgray',
		'icon_size' => 'normal',
		'tip_style' => array(
			'color' => 'red',
			'shadow' => true,
			'rounded' => false,
			'style' => '',
		),
		'tip_position' => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect' => array(
			'show' => array(
				'effect' => 'slide',
				'duration' => '500',
				'event' => 'mouseover',
			),
			'hide' => array(
				'effect' => 'slide',
				'duration' => '500',
				'event' => 'click mouseleave',
			),
		),
	),

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database' => '',
	'network_admin' => true,
	'search' => true,
);



Redux::set_args($opt_name, $args);

/*
 * <--- END HELP TABS
 */



/*
 * ---> START SECTIONS
 */

// require_once dirname(__FILE__) . '/sections/front_page.php';
// require_once dirname(__FILE__) . '/sections/contacts.php';
// require_once dirname(__FILE__) . '/sections/social_networks.php';
// require_once dirname(__FILE__) . '/sections/equipment-categories.php';
// require_once dirname(__FILE__) . '/sections/equipment_categories_group.php';
// require_once dirname(__FILE__) . '/sections/archive-bakery.php';
// require_once dirname(__FILE__) . '/sections/search_block.php';




// require_once dirname(__FILE__) . '/sections/menu_page.php';
// require_once dirname(__FILE__) . '/sections/blog_page.php';
// require_once dirname(__FILE__) . '/sections/about_us_page.php';
// require_once dirname(__FILE__) . '/sections/search_page.php';
// require_once dirname(__FILE__) . '/sections/404_page.php';


// require_once dirname(__FILE__) . '/sections/header.php';
// require_once dirname(__FILE__) . '/sections/footer.php';
// require_once dirname(__FILE__) . '/sections/copyright.php';
// require_once dirname(__FILE__) . '/sections/phone_numbers.php';
// require_once dirname(__FILE__) . '/sections/app_buttons.php';









Redux::set_section(
	$opt_name,
	array(
		'id' => 'my-divide-sample',
		'type' => 'divide',
	)
);


//===============================================================================
//===============================================================================

// if (!function_exists('change_defaults')) {
// 	/**
// 	 * Filter hook for filtering the default value of any given field. Very useful in development mode.
// 	 *
// 	 * @param array $defaults Default value array.
// 	 *
// 	 * @return array
// 	 */
// 	function change_defaults(array $defaults): array
// 	{
// 		$defaults['str_replace'] = esc_html__('Testing filter hook!', 'your-textdomain-here');

// 		return $defaults;
// 	}
// }



// if (!function_exists('redux_custom_sanitize')) {
// 	/**
// 	 * Function to be used if the field sanitize argument.
// 	 * Return value MUST be the formatted or cleaned text to display.
// 	 *
// 	 * @param string $value Value to evaluate or clean.  Required.
// 	 *
// 	 * @return string
// 	 */
// 	function redux_custom_sanitize(string $value): string
// 	{
// 		$return = '';

// 		foreach (explode(' ', $value) as $w) {
// 			foreach (str_split($w) as $k => $v) {
// 				if (($k + 1) % 2 !== 0 && ctype_alpha($v)) {
// 					$return .= mb_strtoupper($v);
// 				} else {
// 					$return .= $v;
// 				}
// 			}

// 			$return .= ' ';
// 		}

// 		return $return;
// 	}
// }
