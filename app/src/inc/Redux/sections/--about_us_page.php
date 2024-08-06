<?php 
defined( 'ABSPATH' ) || exit;


// Menu page sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('About Us Page', 'restaurant-site'),
      'id'               => 'settings_about_us-page',
      'desc'             => esc_html__('About us page settings', 'restaurant-site'),
      'customizer_width' => '450',
      'subsection' => true,
      // 'icon'             => 'el el-home',
      'fields'           => array(
         array(
            'id'       => 'about_us_title',
            'type'     => 'text',
            'title'    => esc_html__('About Us Title', 'restaurant-site'),
            'default'  => esc_html__('Our History','restaurant-site'),
         ),
         array(
            'id'       => 'about_us_subtitle',
            'type'     => 'editor',
				'args'    => array(
					'media_buttons' => false,
					// 'textarea_rows' => 5,
				),            
            'title'    => esc_html__('About Us subtitle', 'restaurant-site'),
            'default'  => esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, quam! Dolor dolores veniam natus doloribus ducimus doloremque iure odio dolore a quod! Qui aliquam cumque voluptatum accusamus ipsam numquam repudiandae dicta, ad est iste sit tempore debitis laboriosam exercitationem porro perspiciatis adipisci '),
         ), 
         array(
            'id'       => 'about_us_video',
            'type'     => 'text',
            'title'    => esc_html__('Add Link to your video', 'restaurant-site'),
            'default'  => esc_url('https://youtu.be/Kw6d2MjkILQ'),
         ),
         array(
            'id'       => 'description-about_us_video',
            'type'     => 'editor',
				'args'    => array(
					'media_buttons' => false,
					// 'textarea_rows' => 5,
				),            
            'title'    => esc_html__('Description video', 'restaurant-site'),
            'default'  => esc_html__('Our restaurant video'),
         ),            
      ),
   )
);