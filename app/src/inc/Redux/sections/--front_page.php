<?php

defined('ABSPATH') || exit;


// Front page sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__('Front page', 'rmbt_impex'),
		'id' => 'settings_front-page',
		'desc' => esc_html__('Front page settings', 'rmbt_impex'),
		'customizer_width' => '450',
		// 'subsection' => true,
		// 'icon'             => 'el el-front',
		'fields' => array(

			array(
				'id' => 'rmbt-no-img',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('This picture will show if main picture is absent', 'rmbt_impex'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),
			array(
				'id' => 'rmbt-no-img_alt',
				'type' => 'text',
				'title' => esc_html__('Description for picture than is absent', 'rmbt_impex'),
			),

			array(
				'id' => 'rmbt-news-block_section-title',
				'type' => 'text',
				'title' => esc_html__('Title of News Block', 'rmbt_impex'),
				'default' => esc_html__('Останні новини', 'rmbt_impex'),
			),

			/*------------------ main_slider_screen accordion ------------------*/
			array(
				'id' => 'main_slider_screen-start',
				'type' => 'accordion',
				'title' => esc_html__('Title Section', 'rmbt_impex'),
				'subtitle' => 'Add your content to the section \'Title\'',
				'position' => 'start',
			),
			array(
				'id' => 'main_slider_screen-gallery',
				'type' => 'gallery',
				'title' => esc_html__('Add/Edit Gallery on the main screen ', 'rmbt_impex'),
			),
			array(
				'id' => 'front_page_title',
				'type' => 'text',
				'title' => esc_html__('Front page title', 'rmbt_impex'),
				'default' => __(wp_kses('Український виробник', 'post'), 'rmbt_impex'),
			),
			array(
				'id' => 'front_page_subtitle',
				'type' => 'text',
				'title' => esc_html__('Front page title', 'rmbt_impex'),
				'default' => __(wp_kses('хлібопекарського і кондитерського обладнання', 'post'), 'rmbt_impex'),
			),
			array(
				'id' => 'front_page_slogan',
				'type' => 'text',
				'title' => esc_html__('Front page subtitle', 'rmbt_impex'),
				'default' => esc_html__('Завжди надійний постачальник!', 'rmbt_impex'),
			),
			array(
				'id' => 'button_title',
				'type' => 'text',
				'title' => esc_html__('Title of Main Screen Button', 'rmbt_impex'),
				'default' => esc_html__('Зв`язатись з нами', 'rmbt_impex'),
			),
			array(
				'id' => 'button_href',
				'type' => 'text',
				'title' => esc_html__('Link for button', 'rmbt_impex'),
				'default' => esc_html__('#', 'rmbt_impex'),
			),
			array(
				'id' => 'background_picture',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Picture for Background', 'rmbt_impex'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/prapor-ukrainy.jpg'
				),
			),
			array(
				'id' => 'main_slider_screen-end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ /main_slider_screen accordion ------------------*/

			/*------------------ Introduction accordion ------------------*/
			array(
				'id' => 'introduction-start',
				'type' => 'accordion',
				'title' => esc_html__('Introduction Section', 'rmbt_impex'),
				'subtitle' => 'Add your content to the section \'Introduction\'',
				'position' => 'start',
			),
			array(
				'id' => 'introduction_section-title',
				'type' => 'text',
				'title' => esc_html__('Introduction Section title', 'rmbt_impex'),
				'default' => esc_html__('Запрошуємо до нас', 'rmbt_impex'),
			),
			array(
				'id' => 'introduction_section-text',
				'type' => 'textarea',
				'title' => esc_html__('Introduction Section Text', 'rmbt_impex'),
			),
			array(
				'id' => 'introduction_first_block-title',
				'type' => 'text',
				'title' => esc_html__('Front page title', 'rmbt_impex'),
				'default' => esc_html__('Виробляємо', 'rmbt_impex'),
			),
			array(
				'id' => 'introduction_first_block-text',
				'type' => 'textarea',
				'title' => esc_html__('Introduction First Block Text', 'rmbt_impex'),
			),
			array(
				'id' => 'introduction_second_block-title',
				'type' => 'text',
				'title' => esc_html__('Front page title', 'rmbt_impex'),
				'default' => esc_html__('Ремонтуємо', 'rmbt_impex'),
			),

			array(
				'id' => 'introduction_second_block-text',
				'type' => 'textarea',
				'title' => esc_html__('Introduction Second Block Text', 'rmbt_impex'),
			),

			array(
				'id' => 'introduction_image',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Picture for Introduction Block', 'rmbt_impex'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),
			array(
				'id' => 'introduction_image_alt',
				'type' => 'text',
				'title' => esc_html__('Description of introduction image', 'rmbt_impex'),
			),
			array(
				'id' => 'introduction-end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ /Introduction accordion ------------------*/


			/*------------------ Best Sellers accordion ------------------*/
			array(
				'id' => 'best-sellers_start',
				'type' => 'accordion',
				'title' => esc_html__('Best Sellers', 'rmbt_impex'),
				'subtitle' => 'Add your content to the section \'Best Sellers\'',
				'position' => 'start',
			),
			array(
				'id' => 'best-sellers_section-title',
				'type' => 'text',
				'title' => esc_html__(
					'Best Sellers Section title',
					'rmbt_impex'
				),
				'default' => esc_html__('Хіти продажу', 'rmbt_impex'),
			),
			array(
				'id' => 'best-sellers_section_text',
				'type' => 'textarea',
				'title' => esc_html__('best-sellers Section Text', 'rmbt_impex'),
			),
			/*------------------  the start of image block -----------------*/
			array(
				'id' => 'best-sellers-goods-one_title',
				'type' => 'text',
				'title' => esc_html__(
					'Best Sellers of Goods number one',
					'rmbt_impex'
				),
				'default' => esc_html__('Ротаційна піч Impex Rotor (на пелетах)', 'rmbt_impex'),
			),
			array(
				'id' => 'best-sellers_image-one',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Picture of Best Sellers of Goods number one', 'rmbt_impex'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),
			array(
				'id' => 'best-sellers_image-one_alt',
				'type' => 'text',
				'title' => esc_html__('Description of image', 'rmbt_impex'),
			),
			array(
				'id' => 'best-sellers_href-one',
				'type' => 'text',
				'title' => esc_html__('Link To Page Goods', 'rmbt_impex'),
			),

			/*------------------  the end of image block -----------------*/
			/*------------------  the start of image block -----------------*/

			array(
				'id' => 'best-sellers-goods-two_title',
				'type' => 'text',
				'title' => esc_html__(
					'Best Sellers of Goods number two',
					'rmbt_impex'
				),
				'default' => esc_html__('Відсадочна машина Impex Drop-600', 'rmbt_impex'),
			),

			array(
				'id' => 'best-sellers_image-two',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Picture of Best Sellers of Goods number two', 'rmbt_impex'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),

			array(
				'id' => 'best-sellers_image-two_alt',
				'type' => 'text',
				'title' => esc_html__('Description of image', 'rmbt_impex'),
			),
			array(
				'id' => 'best-sellers_href-two',
				'type' => 'text',
				'title' => esc_html__('Link To Page Goods', 'rmbt_impex'),
			),
			/*------------------  the end of image block -----------------*/
			/*------------------  the start of image block -----------------*/

			array(
				'id' => 'best-sellers-goods-three_title',
				'type' => 'text',
				'title' => esc_html__(
					'Best Sellers of Goods number three',
					'rmbt_impex'
				),
				'default' => esc_html__('Глазурувальна машина Impex EM-300', 'rmbt_impex'),
			),

			array(
				'id' => 'best-sellers_image-three',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Picture of Best Sellers of Goods number three', 'rmbt_impex'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),
			array(
				'id' => 'best-sellers_image-three_alt',
				'type' => 'text',
				'title' => esc_html__('Description of image', 'rmbt_impex'),
			),
			array(
				'id' => 'best-sellers_href-three',
				'type' => 'text',
				'title' => esc_html__('Link To Page Goods', 'rmbt_impex'),
			),
			/*------------------  the end of image block -----------------*/

			array(
				'id' => 'best-sellers_end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ /Best Sellers accordion ------------------*/


			/*------------------ the start benefits-block accordion ------------------*/
			array(
				'id' => 'benefits-block_start',
				'type' => 'accordion',
				'title' => esc_html__('Benefit section', 'rmbt_impex'),
				'subtitle' => 'Add your content to the section \'benefits-block\'',
				'position' => 'start',
			),
			array(
				'id' => 'rmbt-benefits-block_section-title',
				'type' => 'text',
				'title' => esc_html__('benefits-block Section Title', 'rmbt_impex'),
				'default' => esc_html__('', 'rmbt_impex'),
			),
			/*------------------  the start of first article block-----------------*/
			array(
				'id' => 'rmbt-benefits-block_article-title-1',
				'type' => 'text',
				'title' => esc_html__('Title of first article', 'rmbt_impex'),
				'default' => esc_html__('', 'rmbt_impex'),
			),
			array(
				'id' => 'rmbt-benefits-block_article-text-1',
				'type' => 'textarea',
				'title' => esc_html__('Text of first article', 'rmbt_impex'),
			),
			/*------------------  the end of first article block -----------------*/
			/*------------------  the start of second article block-----------------*/
			array(
				'id' => 'rmbt-benefits-block_article-title-2',
				'type' => 'text',
				'title' => esc_html__('Title of second article', 'rmbt_impex'),
				'default' => esc_html__('', 'rmbt_impex'),
			),
			array(
				'id' => 'rmbt-benefits-block_article-text-2',
				'type' => 'textarea',
				'title' => esc_html__('Text of second article', 'rmbt_impex'),
			),
			/*------------------  the end of second article block -----------------*/
			/*------------------  the start of third article block-----------------*/
			array(
				'id' => 'rmbt-benefits-block_article-title-3',
				'type' => 'text',
				'title' => esc_html__('Title of third article', 'rmbt_impex'),
				'default' => esc_html__('', 'rmbt_impex'),
			),
			array(
				'id' => 'rmbt-benefits-block_article-text-3',
				'type' => 'textarea',
				'title' => esc_html__('Text of third article', 'rmbt_impex'),
			),
			/*------------------  the end of third article block -----------------*/
			/*------------------  the start of fourth article block-----------------*/
			array(
				'id' => 'rmbt-benefits-block_article-title-4',
				'type' => 'text',
				'title' => esc_html__('Title of fourth article', 'rmbt_impex'),
				'default' => esc_html__('', 'rmbt_impex'),
			),
			array(
				'id' => 'rmbt-benefits-block_article-text-4',
				'type' => 'textarea',
				'title' => esc_html__('Text of fourth article', 'rmbt_impex'),
			),
			/*------------------  the end of fourth article block -----------------*/
			array(
				'id' => 'rmbt-benefits-bg-picture_img-id',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Picture for benefits-bg-picture article', 'rmbt_impex'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),
			array(
				'id' => 'rmbt-benefits-bg-picture_img-alt',
				'type' => 'text',
				'title' => esc_html__('Image description for benefits-bg-picture', 'rmbt_impex'),
				'default' => esc_html__('', 'rmbt_impex'),
			),
			array(
				'id' => 'benefits-block_end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ the end benefits-block accordion ------------------*/


			/*------------------ the start facts-block accordion ------------------*/
			array(
				'id' => 'facts-block_start',
				'type' => 'accordion',
				'title' => esc_html__('Facts Block Section', 'rmbt_impex'),
				'subtitle' => 'Add your content to the section \'Facts Block\'',
				'position' => 'start',
			),
			/*------------------  the start of first article block-----------------*/
			array(
				'id' => 'rmbt-facts-block_article-title-1',
				'type' => 'text',
				'title' => esc_html__('Title of first article', 'rmbt_impex'),
				'default' => esc_html__('партнерів', 'rmbt_impex'),
			),
			array(
				'id' => 'rmbt-facts-block_article-text-1',
				'type' => 'text',
				'title' => esc_html__('Text of first article', 'rmbt_impex'),
			),
			/*------------------  the end of first article block -----------------*/
			/*------------------  the start of first article block-----------------*/
			array(
				'id' => 'rmbt-facts-block_article-title-2',
				'type' => 'text',
				'title' => esc_html__('Title of first article', 'rmbt_impex'),
				'default' => esc_html__('проектів', 'rmbt_impex'),
			),
			array(
				'id' => 'rmbt-facts-block_article-text-2',
				'type' => 'text',
				'title' => esc_html__('Text of first article', 'rmbt_impex'),
			),
			/*------------------  the end of first article block -----------------*/
			/*------------------  the start of first article block-----------------*/
			array(
				'id' => 'rmbt-facts-block_article-title-3',
				'type' => 'text',
				'title' => esc_html__('Title of first article', 'rmbt_impex'),
				'default' => esc_html__('співробітників', 'rmbt_impex'),
			),
			array(
				'id' => 'rmbt-facts-block_article-text-3',
				'type' => 'text',
				'title' => esc_html__('Text of first article', 'rmbt_impex'),
			),
			/*------------------  the end of first article block -----------------*/
			array(
				'id' => 'facts-block_end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ the end facts-block accordion ------------------*/


			/*------------------ the start  accordion ------------------*/
			array(
				'id' => 'clients-portfolio_start',
				'type' => 'accordion',
				'title' => esc_html__('Clients Portfolio Section', 'rmbt_impex'),
				'subtitle' => 'Add your content to the section \'Clients Portfolio\'',
				'position' => 'start',
			),

			array(
				'id' => 'clients-portfolio_gallery',
				'type' => 'gallery',
				'title' => esc_html__('Add/Edit Gallery on the main screen ', 'rmbt_impex'),
			),

			array(
				'id' => 'clients-portfolio_end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ the end  accordion ------------------*/














			// /*------------------ the start benefits-block accordion ------------------*/
			// array(
			// 	'id' => 'benefits-block_start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('benefits-block section', 'rmbt_impex'),
			// 	'subtitle' => 'Add your content to the section \'benefits-block\'',
			// 	'position' => 'start',
			// ),
			// array(
			// 	'id' => 'rmbt-benefits-block_section-title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('benefits-block Section Title', 'rmbt_impex'),
			// 	'default' => esc_html__('', 'rmbt_impex'),
			// ),
			// /*------------------  the start of first article block-----------------*/
			// array(
			// 	'id' => 'rmbt-benefits-block_article-title-1',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Title of first article', 'rmbt_impex'),
			// 	'default' => esc_html__('', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'rmbt-benefits-block_article-text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Text of first article', 'rmbt_impex'),
			// ),
			// /*------------------  the end of first article block -----------------*/
			// array(
			// 	'id' => 'benefits-block_end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),
			// /*------------------ the end benefits-block accordion ------------------*/








			// array(
			// 	'id' => 'front_page_slogan',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Front page slogan', 'rmbt_impex'),
			// 	'default' => esc_html__('Explore food Menu'),
			// ),
			// array(
			// 	'id' => 'front_page_slogan_label',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Front Page label', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/exlore-food-menu.png'
			// 	),
			// ),



			// array(
			// 	'id' => 'about-section-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('About Section', 'rmbt_impex'),
			// 	'subtitle' => 'Add your content to the section \'About\'',
			// 	'position' => 'start',
			// ),
			// array(
			// 	'id' => 'about_section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('About Section Title', 'rmbt_impex'),
			// 	'default' => esc_html__('About Restaurant ', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'about_section_text',
			// 	'type' => 'textarea',
			// 	'title' => esc_html__('About Section Text', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'about_section_button_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('About Button Title', 'rmbt_impex'),
			// 	'default' => esc_html__('READ MORE', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'about_section_button_href',
			// 	'type' => 'text',
			// 	'title' => esc_html__('About Button link', 'rmbt_impex'),
			// 	'default' => get_front_url() . "/about/",
			// ),
			// array(
			// 	'id' => 'about_section_img_1',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 1', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'about_section_img_2',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 2', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'about_section_img_3',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 3', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'about_section_img_4',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 4', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'read_revie_button',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Read Revie Button', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/orang-sercle.png'
			// 	),
			// ),
			// array(
			// 	'id' => 'read_revie_icon',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Read Revie Icon', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/icon_reviews.png'
			// 	),
			// ),
			// array(
			// 	'id' => 'read_revie_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Read Revie Text', 'rmbt_impex'),
			// 	'default' => __(wp_kses('READ <p>REVIEWS</p>', array('p' => array())), 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'front_delivery_icon',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Front Delivery Icon', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/icon_phone.png'
			// 	),
			// ),
			// array(
			// 	'id' => 'front_delivery_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Front Delivery Text', 'rmbt_impex'),
			// 	'default' => __(wp_kses('CALL US NOW FOR <p>FRONT DELIVERY</p>', array('p' => array())), 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'about-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),

			// array(
			// 	'id' => 'today-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Today Section', 'rmbt_impex'),
			// 	'subtitle' => 'Add your content to the section \'Today\'',
			// 	'position' => 'start',
			// ),

			// array(
			// 	'id' => 'today_section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Front page title', 'rmbt_impex'),
			// 	'default' => esc_html__('Today Special', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'today-gallery',
			// 	'type' => 'gallery',
			// 	'title' => esc_html__('Add/Edit Today Gallery', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'today_section_footer_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Footer Text', 'rmbt_impex'),
			// 	'default' => __(wp_kses('front <p> delivery </p>', array('p' => array())), 'rmbt_impex'),
			// ),

			// array(
			// 	'id' => 'today-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),

			// array(
			// 	'id' => 'restaurant_menu-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Restaurant Menu', 'rmbt_impex'),
			// 	'subtitle' => 'Add your content to the section \'Restaurant Menu\'',
			// 	'position' => 'start',
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Restaurant Menu Section Title', 'rmbt_impex'),
			// 	'default' => esc_html__('Food Menu', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_button_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Restaurant Menu Button Title', 'rmbt_impex'),
			// 	'default' => esc_html__('Explor food menu', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_button_href',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Restaurant Menu Button link', 'rmbt_impex'),
			// 	'default' => get_front_url() . "/food-menu-items/",
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_img_1',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag right', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_311x311.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_img_2',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag left', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_267x414.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_img_3',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag down', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_241x241.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_icon_first_item_menu',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Icon of the first menu item', 'rmbt_impex'),
			// 	'subtitle' => esc_html__('Set if this item is for all food categories', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/icon_all.png'
			// 	),
			// ),

			// array(
			// 	'id' => 'restaurant_menu-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),


			// array(
			// 	'id' => 'clients-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Clients section', 'rmbt_impex'),
			// 	'subtitle' => 'Add your content to the section \'Clients Menu\'',
			// 	'position' => 'start',
			// ),

			// array(
			// 	'id' => 'clients-section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Clients menu section title', 'rmbt_impex'),
			// 	'default' => esc_html__('Happy Clients', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'clients-section_background_img',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Background Img', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/background-clients-block.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'clients-section_avatar_default',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Default avatar of client', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'thumbnail',
			// 	'default' => array(
			// 		'url' => '/assets/img/icons/sprite.svg#avatar_default'
			// 	),
			// ),

			// array(
			// 	'id' => 'clients-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),

			// array(
			// 	'id' => 'reserve-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Reserve section', 'rmbt_impex'),
			// 	'subtitle' => 'Add your content to the section \'Reserve Menu\'',
			// 	'position' => 'start',
			// ),

			// array(
			// 	'id' => 'reserve-section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section title', 'rmbt_impex'),
			// 	'default' => esc_html__('Reserve your table', 'rmbt_impex'),
			// ),

			// array(
			// 	'id' => 'reserve-section_background_img',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Reserve Section Img', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_559x334.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'reserve-section_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section title', 'rmbt_impex'),
			// 	'default' => esc_html__(wp_kses('<span>for a reservation</span>', 'rmbt_impex')),
			// ),
			// array(
			// 	'id' => 'reserve-section_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section text', 'rmbt_impex'),
			// 	'default' => esc_html__(wp_kses('You can also call <span>for a reservation</span>', 'rmbt_impex')),
			// ),
			// array(
			// 	'id' => 'reserve-section_button-title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section button title', 'rmbt_impex'),
			// 	'default' => esc_html__('Make reservation', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'reserve-section_button-href',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section button href', 'rmbt_impex'),
			// 	'default' => esc_url('#'),
			// ),

			// array(
			// 	'id' => 'reserve-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),
		),
	),
);
