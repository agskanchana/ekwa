<?php
/***    add  panels   ***/
      Kirki::add_panel( 'sections', array(
    'priority'    => 21,
    'title'       => esc_html__( 'Sections', 'kirki' ),
    'description' => esc_html__( '', 'kirki' ),
) );
      

   
   
Kirki::add_field( 'theme_config_id', [
	'type'        => 'slider',
	'settings'    => 'section_paddings',
	'label'       => esc_html__( 'Section Padding', 'kirki' ),
    'description' => esc_html__( 'Padding top and bottom', 'kirki' ),
	'section'     => 'section_ordering',
	'default'     => 50,
	'choices'     => [
		'min'  => 0,
		'max'  => 400,
		'step' => 5,
	],
] );




   
Kirki::add_field( 'theme_config_id', [
	'type'        => 'sortable',
	'settings'    => 'section_order',
	'label'       => esc_html__( 'Section Ordering', 'kirki' ),
	'section'     => 'section_ordering',
	'default'     => [
		'main-content',
	],
	'choices'     => [
		'main-content' => esc_html__( 'Main Content', 'kirki' ),
        'before-after-section' => esc_html__( 'Before After Section', 'kirki' ),
        'related-articles' => esc_html__( 'Related Articles', 'kirki' ),
        'custom-section-1' => esc_html__( 'Custom Section 01', 'kirki' ),
        'custom-section-2' => esc_html__( 'Custom Section 02', 'kirki' ),
        'custom-section-3' => esc_html__( 'Custom Section 03', 'kirki' ),
	],
	'priority'    => 10,
] );





   