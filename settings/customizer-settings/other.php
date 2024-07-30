<?php
/***    add  panels   ***/
   
   Kirki::add_panel( 'miscellaneous', array(
    'priority'    => 24,
    'title'       => esc_html__( 'Miscellaneous', 'kirki' ),
    'description' => esc_html__( '', 'kirki' ),
) );
   

      /***    add  Section to panels   ***/
   Kirki::add_section( 'buttons', array(
    'title'          => esc_html__( 'Buttons', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'miscellaneous',
    'priority'       => 1,
) );
   
   /*#########################  Animations Settings #######################*/
   
   Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'ani_fadeIn',
	'label'       => esc_html__( 'Fade In', 'kirki' ),
	'section'     => 'animations',
	'default'     => '',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'kirki' ),
		'off' => esc_html__( 'Disable', 'kirki' ),
	],
] );
   
   
Kirki::add_field( 'theme_config_id', [
	'type'        => 'select',
	'settings'    => 'button_styles',
	'label'       => esc_html__( 'Select Styles', 'kirki' ),
	'section'     => 'buttons',
	'default'     => 'style-1',
	'placeholder' => esc_html__( 'Select an option...', 'kirki' ),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'style-1' => esc_html__( 'Style 1', 'kirki' ),
		'style-2' => esc_html__( 'Style 2', 'kirki' ),
		'style-3' => esc_html__( 'Style 3', 'kirki' ),
		'style-4' => esc_html__( 'Style 4', 'kirki' ),
	],
] );



   Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'btn_custom_styles',
	'label'       => esc_html__( 'Custome Styles', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'buttons',
	'default'     => false,
    'choices'     => [
		'on'  => esc_html__( 'Enable', 'kirki' ),
		'off' => esc_html__( 'Disable', 'kirki' ),
	],
] );



Kirki::add_field( 'theme_config_id', [
	'type'        => 'color',
	'settings'    => 'button_color_1',
	'label'       => __( 'Button Color 1', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'buttons',
	'default'     => '#000000',
    'active_callback' => [
        [
            'setting'  => 'btn_custom_styles',
            'operator' => '==',
            'value'    => true,
        ]
    ],

] );

Kirki::add_field( 'theme_config_id', [
	'type'        => 'color',
	'settings'    => 'button_color_2',
	'label'       => __( 'Button Color 2', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'buttons',
	'default'     => '#ffffff',
    'active_callback' => [
        [
            'setting'  => 'btn_custom_styles',
            'operator' => '==',
            'value'    => true,
        ]
    ],
] );
