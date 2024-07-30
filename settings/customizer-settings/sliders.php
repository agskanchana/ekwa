<?php
/***    add  panels   ***/
   
   Kirki::add_panel( 'home_page_sliders', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Home Page Slider', 'kirki' ),
    'description' => esc_html__( '', 'kirki' ),
) );


   /***    add  Section to panels   ***/
   Kirki::add_section( 'carousel_one', array(
    'title'          => esc_html__( 'Carousel One', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'home_page_sliders',
    'priority'       => 1,
) );
   
   
   /***    add  Section to panels   ***/
   Kirki::add_section( 'mobile_banner', array(
    'title'          => esc_html__( 'Mobile banner', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'home_page_sliders',
    'priority'       => 1,
) );
   
 
 /*############################# carousel one Settings #############################*/

Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'enable_slider_one',
	'label'       => esc_html__( 'Enable Slider', 'kirki' ),
	'section'     => 'carousel_one',
	'default'     => '',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'kirki' ),
		'off' => esc_html__( 'Disable', 'kirki' ),
	],
] );


Kirki::add_field( 'theme_config_id', [
	'type'        => 'select',
	'settings'    => 'carousel_one_trans',
	'label'       => esc_html__( 'Transition', 'kirki' ),
	'section'     => 'carousel_one',
	'default'     => 'carousel-fade',
	'placeholder' => esc_html__( 'Select a transtition...', 'kirki' ),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'carousel-fade' => esc_html__( 'Crossfade', 'kirki' ),
		'slide' => esc_html__( 'Slide', 'kirki' ),
	],
] );


Kirki::add_field( 'theme_config_id', [
	'type'        => 'select',
	'settings'    => 'caption_one_animation_c1',
	'label'       => esc_html__( 'Caption one animation', 'kirki' ),
	'section'     => 'carousel_one',
	'default'     => 'fadeIn',
	'placeholder' => esc_html__( 'Select a Animation...', 'kirki' ),
	'priority'    => 11,
	'multiple'    => 1,
	'choices'     => [
		'animate__fadeIn' => esc_html__( 'fadeIn', 'kirki' ),
        'animate__fadeInUp' => esc_html__( 'fadeInUp', 'kirki' ),
        'animate__fadeInDown' => esc_html__( 'fadeInDown', 'kirki' ),
        'animate__fadeInLeft' => esc_html__( 'fadeInLeft', 'kirki' ),
        'animate__fadeInRight' => esc_html__( 'fadeInRight', 'kirki' ),
	],
] );

Kirki::add_field( 'theme_config_id', [
	'type'        => 'select',
	'settings'    => 'caption_two_animation_c1',
	'label'       => esc_html__( 'Caption two animation', 'kirki' ),
	'section'     => 'carousel_one',
	'default'     => 'fadeIn',
	'placeholder' => esc_html__( 'Select a Animation...', 'kirki' ),
	'priority'    => 13,
	'multiple'    => 1,
	'choices'     => [
		'animate__fadeIn' => esc_html__( 'fadeIn', 'kirki' ),
        'animate__fadeInUp' => esc_html__( 'fadeInUp', 'kirki' ),
        'animate__fadeInDown' => esc_html__( 'fadeInDown', 'kirki' ),
        'animate__fadeInLeft' => esc_html__( 'fadeInLeft', 'kirki' ),
        'animate__fadeInRight' => esc_html__( 'fadeInRight', 'kirki' ),
	],
] );



Kirki::add_field( 'theme_config_id', [
	'type'        => 'select',
	'settings'    => 'caption_three_animation_c1',
	'label'       => esc_html__( 'Button  animation', 'kirki' ),
	'section'     => 'carousel_one',
	'default'     => 'fadeIn',
	'placeholder' => esc_html__( 'Select a Animation...', 'kirki' ),
	'priority'    => 13,
	'multiple'    => 1,
	'choices'     => [
		'animate__fadeIn' => esc_html__( 'fadeIn', 'kirki' ),
        'animate__fadeInUp' => esc_html__( 'fadeInUp', 'kirki' ),
        'animate__fadeInDown' => esc_html__( 'fadeInDown', 'kirki' ),
        'animate__fadeInLeft' => esc_html__( 'fadeInLeft', 'kirki' ),
        'animate__fadeInRight' => esc_html__( 'fadeInRight', 'kirki' ),
	],
] );


Kirki::add_field( 'theme_config_id', [
	'type'        => 'radio-image',
	'settings'    => 'slider-text-align',
	'label'       => esc_html__( 'Text Align', 'kirki' ),
	'section'     => 'carousel_one',
	'default'     => 'center',
	'priority'    => 10,
	'choices'     => [
		'left' => get_template_directory_uri() . '/images/customizer/text-left.png',
        'center'   => get_template_directory_uri() . '/images/customizer/text-center.png',
		'right'  => get_template_directory_uri() . '/images/customizer/text-right.png',
	],
] );


 
 Kirki::add_field( 'theme_config_id', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Slides ', 'kirki' ),
	'section'     => 'carousel_one',
	'priority'    => 30,
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Slide', 'kirki' ),
	],
	'button_label' => esc_html__('Add new Slide ', 'kirki' ),
	'settings'     => 'slider_one_fields',
	'default'      => '',
	'fields' => [
        'slider_image' => [
            'type'        => 'image',
            'label'       => esc_html__( 'Slider Image', 'kirki' ),
            'description' => esc_html__( '', 'kirki' ),
            'default'     => '',
        ],
		'caption_one' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Caption one', 'kirki' ),
			'description' => esc_html__( '', 'kirki' ),
			'default'     => 'This is First Caption',
		],
        'caption_two' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Caption Two', 'kirki' ),
			'description' => esc_html__( '', 'kirki' ),
			'default'     => 'This is Second Caption',
		],
        'button_text' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Button text', 'kirki' ),
			'description' => esc_html__( '', 'kirki' ),
			'default'     => 'Contact us today',
		],
        
        'link_to' => [
			'type'        => 'dropdown-pages',
			'label'       => esc_html__( 'Page Link to', 'kirki' ),
			'description' => esc_html__( 'Page Link to', 'kirki' ),
			'default'     => '',
		],
        
        
	],
    
] );

/***** mobile banner */


Kirki::add_field( 'theme_config_id', [
	'type'        => 'image',
	'settings'    => 'mobile-banner',
	'label'       => esc_html__( 'Mobile banner image Webp', 'kirki' ),
	'description' => esc_html__( 'Image size should be 360px', 'kirki' ),
	'section'     => 'mobile_banner',
    'default'     => '',
	'choices'     => [
		'save_as' => 'id',
	],
] );
 
Kirki::add_field( 'theme_config_id', [
	'type'        => 'image',
	'settings'    => 'mobile-banner-2',
	'label'       => esc_html__( 'Mobile banner image fall back (jpg, png)', 'kirki' ),
	'description' => esc_html__( 'Image size should be 360px', 'kirki' ),
	'section'     => 'mobile_banner',
	'default'     => '',
    'choices'     => [
		'save_as' => 'id',
	],
] );
 
 
 Kirki::add_field( 'theme_config_id', [
	'type'        => 'code',
	'settings'    => 'mobile-caption-1',
	'label'       => esc_html__( 'Caption one', 'kirki' ),
	'description' => esc_html__( 'you can put html codes if needed', 'kirki' ),
	'section'     => 'mobile_banner',
	'default'     => '',
	'choices'     => [
		'language' => 'html',
	],
] );
 Kirki::add_field( 'theme_config_id', [
	'type'        => 'code',
	'settings'    => 'mobile-caption-2',
	'label'       => esc_html__( 'Caption two', 'kirki' ),
	'description' => esc_html__( 'you can put html codes if needed', 'kirki' ),
	'section'     => 'mobile_banner',
	'default'     => '',
	'choices'     => [
		'language' => 'html',
	],
] );
 
 
 Kirki::add_field( 'theme_config_id', [
	'type'        => 'dropdown-pages',
	'settings'    => 'mobile-banner-linkedto',
	'label'       => esc_html__( 'Page linked to', 'kirki' ),
	'section'     => 'mobile_banner',
	'default'     => '',
] );
 
 
 
 