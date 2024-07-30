<?php
/***    add  panels   ***/
   

   Kirki::add_panel( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'kirki' ),
    'description' => esc_html__( '', 'kirki' ),
) );
   
      /***    add  Section to panels   ***/
Kirki::add_section( 'select_blog_layout', array(
    'title'          => esc_html__( 'Select Blog Layout', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'blog',
    'priority'       => 1,
) );
   
Kirki::add_section( 'blog_settings', array(
    'title'          => esc_html__( 'Blog settings', 'kirki' ),
    'description'    => esc_html__( '', 'kirki' ),
    'panel'          => 'blog',
    'priority'       => 1,
) );
   
   




Kirki::add_field( 'theme_config_id', [
	'type'        => 'image',
	'settings'    => 'blog_header_image',
	'label'       => esc_html__( 'Blog header image', 'kirki' ),
	'section'     => 'blog_settings',
	'default'     => '',
] );
Kirki::add_field( 'theme_config_id', [
	'type'        => 'image',
	'settings'    => 'blog_header_image_webp',
	'label'       => esc_html__( 'Header image webp', 'kirki' ),
	'description' => esc_html__( 'Upload 360px webp image for mobile', 'kirki' ),
	'section'     => 'blog_settings',
	'default'     => '',
] );
Kirki::add_field( 'theme_config_id', [
	'type'        => 'image',
	'settings'    => 'blog_header_image_360',
	'label'       => esc_html__( 'Header image Small', 'kirki' ),
	'description' => esc_html__( 'Upload 360px  image for mobile', 'kirki' ),
	'section'     => 'blog_settings',
	'default'     => '',
] );

