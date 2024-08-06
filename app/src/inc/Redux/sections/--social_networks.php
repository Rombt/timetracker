<?php
defined('ABSPATH') || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__('Social Networks Settings', 'rmbt_impex'),
		'id' => 'settings_social-networks',
		'customizer_width' => '400px',
		// 'icon'             => 'el el-network',
		'fields' => array(

			array(
				'id' => 'rmbt-social-networks_fb-section-start',
				'type' => 'section',
				'title' => esc_html__('Facebook section', 'rmbt_impex'),
				// 'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_impex'),
				'indent' => true
			),
			array(
				'id' => 'rmbt-social-networks_fb-link',
				'type' => 'text',
				'title' => esc_html__('Facebook link', 'rmbt_impex'),
				'default' => esc_url('https://www.facebook.com/'),
			),
			array(
				'id' => 'rmbt-social-networks_fb_img-id',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Facebook icon', 'rmbt_impex'),
				'compiler' => 'true',
				'preview_size' => 'full',
				// 'default' => array(
				// 	'url' => '/assets/img/icons/sprite.svg#facebook_1'
				// ),
			),

			array(
				'id' => 'rmbt-social-networks-fb_img-alt',
				'type' => 'text',
				'title' => esc_html__('Image description for FaceBook icon', 'rmbt_impex'),
				'default' => esc_html__('', 'rmbt_impex'),
			),


			array(
				'id'     => 'rmbt-social-networks_fb-section-end',
				'type'   => 'section',
				'indent' => false,
			),

			array(
				'id' => 'rmbt-social-networks_instagram-section-start',
				'type' => 'section',
				'title' => esc_html__('Instagram section', 'rmbt_impex'),
				// 'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_impex'),
				'indent' => true
			),


			array(
				'id' => 'rmbt-social-networks_instagram-link',
				'type' => 'text',
				'title' => esc_html__('Instagram link', 'rmbt_impex'),
				'default' => 'https://www.instagram.com/',
			),
			array(
				'id' => 'rmbt-social-networks_instagram_img-id',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Instagram icon', 'rmbt_impex'),
				'compiler' => 'true',
				'preview_size' => 'full',
				// 'default' => array(
				// 	'url' => '/assets/img/icon_instagram.png'
				// ),
			),

			array(
				'id' => 'rmbt-social-networks_instagram_img-alt',
				'type' => 'text',
				'title' => esc_html__('Image description for instagram icon', 'rmbt_impex'),
				'default' => esc_html__('', 'rmbt_impex'),
			),

			array(
				'id'     => 'rmbt-social-networks_instagram-section-end',
				'type'   => 'section',
				'indent' => false,
			),

			array(
				'id' => 'rmbt-social-networks_youtube-section-start',
				'type' => 'section',
				'title' => esc_html__('Youtube section', 'rmbt_impex'),
				// 'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_impex'),
				'indent' => true
			),

			array(
				'id' => 'rmbt-social-networks_youtube-link',
				'type' => 'text',
				'title' => esc_html__('Youtube link', 'rmbt_impex'),
				'default' => esc_url('https://youtube.com/'),
			),
			array(
				'id' => 'rmbt-social-networks-youtube_img-id',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Youtube icon', 'rmbt_impex'),
				'compiler' => 'true',
				'preview_size' => 'full',
				// 'default' => array(
				// 	'url' => '/assets/img/icon_youtube.png'
				// ),
			),
			array(
				'id' => 'rmbt-social-networks-youtube_img-alt',
				'type' => 'text',
				'title' => esc_html__('Image description for youtube icon', 'rmbt_impex'),
				'default' => esc_html__('', 'rmbt_impex'),
			),

			array(
				'id'     => 'rmbt-social-networks_youtube-section-end',
				'type'   => 'section',
				'indent' => false,
			),

		),
	)

);
