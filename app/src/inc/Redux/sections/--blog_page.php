<?php


// Blog page sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__('Blog Page', 'restaurant-site'),
		'id' => 'settings_blog-page',
		'desc' => esc_html__('Blog page settings', 'restaurant-site'),
		'customizer_width' => '450',
		'subsection' => true,
		'fields' => array(

			array(
				'id' => 'title_into_background_title_image_blog',
				'type' => 'checkbox',
				'title' => esc_html__('Title into Background title image', 'restaurant-site'),
				'desc' => esc_html__('You need the Title into Background title image', 'restaurant-site'),
				'default' => '1',
			),

			array(
				'id' => 'article-blog_share-link',
				'type' => 'text',
				'title' => esc_html__('The Link Share ', 'restaurant-site'),
				'default' => esc_url('????????'),		//todo
			),
			array(
				'id' => 'article-icons_share_icon',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Share link icon', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/article-blog-share.png'
				),
			),

			array(
				'id' => 'article-blog_instagram-link',
				'type' => 'text',
				'title' => esc_html__('Instagram link', 'restaurant-site'),
				'default' => 'https://www.instagram.com/',
			),
			array(
				'id' => 'article-blog_instagram_icon',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Instagram icon', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/article-blog-instagram.png'
				),
			),

			array(
				'id' => 'article-blog_facebook-link',
				'type' => 'text',
				'title' => esc_html__('Facebook link', 'restaurant-site'),
				'default' => '"https://www.facebook.com/sharer/sharer.php?u=https:',
			),
			array(
				'id' => 'article-blog_facebook_icon',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Facebook icon', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/article-blog-facebook.png'
				),
			),

			array(
				'id' => 'article-blog_twitt-link',
				'type' => 'text',
				'title' => esc_html__('Twitter link', 'restaurant-site'),
				'default' => esc_url('https://twitter.com/share?url=https:'),
			),
			array(
				'id' => 'article-blog_twitt_icon',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Twitter icon', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/article-blog-twitter.png'
				),
			),

			array(
				'id' => 'no-thumbnail',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('If post does`t have thumbnail', 'restaurant-site'),
				'subtitle' => esc_html__('For a large size thumbnail', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-thumbnail.jpg'
				),
			),

			array(
				'id' => 'no-small-thumbnail',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('If post does`t have thumbnail', 'restaurant-site'),
				'subtitle' => esc_html__('For a small size thumbnail', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-thumbnail.jpg'
				),
			),

			array(
				'id' => 'article-blog_button-title',
				'type' => 'text',
				'title' => esc_html__('Button title', 'restaurant-site'),
				'default' => esc_html__('read more', 'restaurant-site'),
			),
			array(
				'id' => 'icon-heart-pasive',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('The Like  Icon', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/article-blog-heart-new.png'
				),
			),
			array(
				'id' => 'icon-heart-active',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('The Active Like  Icon', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/article-blog-heart-new-active.png'
				),
			),
		),
	)
);
