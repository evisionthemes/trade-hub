<?php
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

// deafults value
$trade_hub_customizer_defaults['trade-hub-our-service-enable-option'] 		= 0;
$trade_hub_customizer_defaults['trade-hub-our-service-number-page']			= 3;
$trade_hub_customizer_defaults['trade-hub-our-service-single-word'] 		= 25;
$trade_hub_customizer_defaults['trade-hub-our-service-main_title'] 			=  	'';
$trade_hub_customizer_defaults['trade-hub-our-service-page']				= '';
$trade_hub_customizer_defaults['trade-hub-our-service-image'] 				=  	'';

// create a section for our service section
$trade_hub_sections['trade-hub-our-service-section']						=	array(
		'title'			=>	esc_html__( 'Our Service', 'trade-hub' ),
		'panel'			=> 'trade-hub-main-homepage-panel',
		'priority'		=> 220
	);

// create a setting control for our service enable option
$trade_hub_settings_controls['trade-hub-our-service-enable-option'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-our-service-enable-option']
	),
	'control'				=> array(
		'label'				=> esc_html__( 'Enable Our Service', 'trade-hub' ),
		'section'			=> 'trade-hub-our-service-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service enable option
$trade_hub_settings_controls['trade-hub-our-service-single-word'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-our-service-single-word']
	),
	'control'				=> array(
		'label'				=> esc_html__( 'Number of Words', 'trade-hub' ),
		'section'			=> 'trade-hub-our-service-section',
		'type'				=> 'number',
		'priority'			=> 10,
		'active_callback' 	=> ''
	)
);


// create a setting control for our service title text
$trade_hub_settings_controls['trade-hub-our-service-main_title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-our-service-main_title']
	),
	'control'				=> array(
		'label'				=> esc_html__( 'Title Text', 'trade-hub' ),
		'section'			=> 'trade-hub-our-service-section',
		'type'				=> 'text',
		'priority'			=> 30,
		'active_callback' 	=> ''
	)
);

// Select page for our-service section
$trade_hub_repeated_settings_controls['trade-hub-our-service-page']  =array(
	'repeated'	=> 3,
	'trade-hub-our-service-page-id'	=> array(
		'setting'	=> array(
			'default'	=> $trade_hub_customizer_defaults['trade-hub-our-service-page']
		),
		'control'	=> array(
			/* translators: %s: search term */
			'label'				=> esc_html__('Select Service Page %s','trade-hub'),
			'section'			=> 'trade-hub-our-service-section',
			'type'				=> 'dropdown-pages',
			'priority'			=> 40,
			'active_callback' 	=> ''
		),			
	)
);

// create a setting control for our service image
$trade_hub_settings_controls['trade-hub-our-service-image'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-our-service-image']
	),
	'control'				=> array(
		'label'				=> esc_html__( 'Upload Image', 'trade-hub' ),
		'section'			=> 'trade-hub-our-service-section',
		'type'				=> 'image',
		'priority'			=> 50,
		'active_callback' 	=> ''
	)
);

