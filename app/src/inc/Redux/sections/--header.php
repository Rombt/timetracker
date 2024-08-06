<?php
defined('ABSPATH') || exit;


// Header sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__('Header settings', 'restaurant-site'),
		'id' => 'settings_header',
		'desc' => esc_html__('Settings header site', 'restaurant-site'),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(
			array(
				'id' => 'logo_site',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Site logo', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/logo.png'
				),
			),
			array(
				'id' => 'background-title-img',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Background title image', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/background-title-page-block.jpg'
				),
			),
			array(
				'id' => 'search_icon',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Search icon', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
			),
			array(
				'id' => 'icon_cart',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Icon cart', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
			),
			array(
				'id' => 'icon_button_book',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Icon button book', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/icon_plate.png'
				),
			),
			array(
				'id' => 'modal_menu_location',
				'type' => 'button_set',
				'title' => esc_html__('Location for modal drop-down menu', 'restaurant-site'),
				//Must provide key => value pairs for options
				'options' => array(
					'1' => 'Viewport',
					'2' => 'Heder menu'
				),
				'default' => '1',
			),
			array(
				'id' => 'modal_menu_side',
				'type' => 'button_set',
				'title' => __('Side for modal drop-down menu', 'restaurant-site'),
				'desc' => __('Your modal menu will be from the indicated side ', 'restaurant-siter'),
				//Must provide key => value pairs for options
				'options' => array(
					'1' => 'left',
					'2' => 'right'
				),
				'default' => '1',
			),
		)
	)
);
