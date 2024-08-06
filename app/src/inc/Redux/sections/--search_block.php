<?php

defined('ABSPATH') || exit;


// Front page sections start
Redux::set_section(
   $opt_name,
   array(
      'title' => esc_html__('Search block', 'rmbt_impex'),
      'id' => 'settings_search-block',
      'desc' => esc_html__('Search block settings', 'rmbt_impex'),
      'customizer_width' => '450',
      // 'subsection' => true,
      // 'icon'             => 'el el-front',
      'fields' => array(

         array(
            'id' => 'search-card-1_title',
            'type' => 'text',
            'title' => esc_html__('Title of Search first card', 'rmbt_impex'),
            'default' => esc_html__('Пошук по обладнанню', 'rmbt_impex'),
         ),
         array(
            'id' => 'search-card-1_text',
            'type' => 'text',
            'title' => esc_html__('Title of Search first card', 'rmbt_impex'),
            'default' => esc_html__('Дивитися', 'rmbt_impex'),
         ),
         array(
            'id' => 'search-card-1_link',
            'type' => 'text',
            'title' => esc_html__('Link for Search first card', 'rmbt_impex'),
         ),
         array(
            'id' => 'rmbt-search-card_img-id-1',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture for search-card article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/search-card-1.jpg'
            ),
         ),
         array(
            'id' => 'rmbt-search-card_img-alt-1',
            'type' => 'text',
            'title' => esc_html__('Image description for search-card', 'rmbt_impex'),
            'default' => esc_html__('search-card-1', 'rmbt_impex'),
         ),

         array(
            'id' => 'search-card-2_title',
            'type' => 'text',
            'title' => esc_html__('Title of Search second card', 'rmbt_impex'),
            'default' => esc_html__('Пошук по виробам', 'rmbt_impex'),
         ),
         array(
            'id' => 'search-card-2_text',
            'type' => 'text',
            'title' => esc_html__('Title of Search first card', 'rmbt_impex'),
            'default' => esc_html__('Дивитися', 'rmbt_impex'),
         ),

         array(
            'id' => 'rmbt-search-card_img-id-2',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture for search-card article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/search-card-2.jpg'
            ),
         ),
         array(
            'id' => 'rmbt-search-card_img-alt-2',
            'type' => 'text',
            'title' => esc_html__('Image description for search-card', 'rmbt_impex'),
            'default' => esc_html__('search-card-2', 'rmbt_impex'),
         ),

      ),
   ),
);
