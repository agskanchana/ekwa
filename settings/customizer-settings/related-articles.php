<?php
/***    add  Section to panels   ***/
   Kirki::add_section( 'related_articles', array(
    'title'          => esc_html__( 'Related articles', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'sections',
    'priority'       => 1,
) );
   
   

   Kirki::add_field( 'theme_config_id', [
	'type'        => 'select',
	'settings'    => 'select_article_design',
	'label'       => esc_html__( 'Related article design', 'kirki' ),
	'section'     => 'related_articles',
	'default'     => 'style-1',
	'placeholder' => esc_html__( 'Select an design...', 'kirki' ),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => Kirki_Helper::get_posts(
                    array(
                        'numberposts' => -1,
                        'post_type'   => 'ekwa_theme_resources',
                        'meta_key'		=> 'theme_resource_category',
                        'meta_value'	=> 'related-articles-sections'
                      ) 
    
    ),
] );
   


Kirki::add_field( 'theme_config_id', [
	'type'        => 'color-palette',
	'settings'    => 'articles-bg',
	'label'       => __( 'Section Background', 'kirki' ),
	'section'     => 'related_articles',
	'default'     => '#ffffff',
    'choices'     => [
                'colors' => ekwa_theme_colors(),
                'size' => 25,
                'style' => 'round'
    ],
] );




Kirki::add_field( 'theme_config_id', [
	'type'        => 'color-palette',
	'settings'    => 'articles-color-1',
	'label'       => __( 'Color 01', 'kirki' ),
	'section'     => 'related_articles',
	'default'     => '',
     'choices'     => [
                'colors' => ekwa_theme_colors(),
                'size' => 25,
                'style' => 'round'
    ],
] );


Kirki::add_field( 'theme_config_id', [
	'type'        => 'color-palette',
	'settings'    => 'articles-color-2',
	'label'       => __( 'Color 02', 'kirki' ),
	'section'     => 'related_articles',
	'default'     => '',
     'choices'     => [
                'colors' => ekwa_theme_colors(),
                'size' => 25,
                'style' => 'round'
    ],
] );

Kirki::add_field( 'theme_config_id', [
	'type'        => 'color-palette',
	'settings'    => 'articles-color-3',
	'label'       => __( 'Color 03', 'kirki' ),
	'section'     => 'related_articles',
	'default'     => '',
     'choices'     => [
                'colors' => ekwa_theme_colors(),
                'size' => 25,
                'style' => 'round'
    ],
] );

Kirki::add_field( 'theme_config_id', [
	'type'        => 'color-palette',
	'settings'    => 'articles-text-color',
	'label'       => __( 'Text Color', 'kirki' ),
	'section'     => 'related_articles',
	'default'     => '',
     'choices'     => [
                'colors' => ekwa_theme_colors(),
                'size' => 25,
                'style' => 'round'
    ],
] );

Kirki::add_field( 'theme_config_id', [
	'type'        => 'color-palette',
	'settings'    => 'articles-heading-color',
	'label'       => __( 'Heading Color', 'kirki' ),
	'section'     => 'related_articles',
	'default'     => '',
     'choices'     => [
                'colors' => ekwa_theme_colors(),
                'size' => 25,
                'style' => 'round'
    ],
] );



Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'enable_articles_carousel',
	'label'       => esc_html__( 'Enable Articles Carousel', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'related_articles',
	'default'     => true,
    'choices'     => [
		'on'  => esc_html__( 'Enable', 'kirki' ),
		'off' => esc_html__( 'Disable', 'kirki' ),
	],
] );

Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'articles-item-class',
	'label'    => esc_html__( 'Item class', 'kirki' ),
	'section'  => 'related_articles',
	'default'  => esc_html__( 'col-md-6', 'kirki' ),
	'priority' => 10,
    'active_callback' => [
        [
            'setting'  => 'enable_articles_carousel',
            'operator' => '==',
            'value'    => false,
        ]
    ],

] );





return slider_settings('articles', 'related_articles');