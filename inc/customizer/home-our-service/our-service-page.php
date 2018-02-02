<?php
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_setting_controls;
global $trade_hub_customizer_defaults;

// deafults value
$trade_hub_customizer_defaults['trade-hub-our-service-enable-option'] = 1;
$trade_hub_customizer_defaults['trade-hub-our-service-single-word'] = 25;
$trade_hub_customizer_defaults['trade-hub-our-service-title'] = esc_html__('GREAT PRODUCT OF COMPANY','trade_hub');
$trade_hub_customizer_defaults['trade-hub-our-service-sub-title'] = esc_html__('Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally','trade_hub');
$trade_hub_customizer_defaults['trade-hub-our-service-first-title'] = esc_html__('PSD TO HTML5/CSS3','trade_hub');
$trade_hub_customizer_defaults['trade-hub-our-service-first-sub-title'] = esc_html__('Paetos dignissim at cursus elefeind norma arcu.velim pellentesque uter justo magna gravida.','trade_hub');
$trade_hub_customizer_defaults['trade-hub-our-service-second-title'] = esc_html__('HOSTING & DOMAIN SERVICES','trade_hub');
$trade_hub_customizer_defaults['trade-hub-our-service-second-sub-title'] = esc_html__('Paetos dignissim at cursus elefeind norma arcu.velim pellentesque uter justo magna gravida.','trade_hub');
$trade_hub_customizer_defaults['trade-hub-our-service-third-title'] = esc_html__('GET PLAN YOUR BUSINESS','trade_hub');
$trade_hub_customizer_defaults['trade-hub-our-service-third-sub-title'] = esc_html__('Paetos dignissim at cursus elefeind norma arcu.velim pellentesque uter justo magna gravida.','trade_hub');

$trade_hub_customizer_defaults['trade-hub-our-service-image'] = get_template_directory_uri() .'/inc/assets/images/3.jpg';

// create a section for our service section
$trade_hub_sections['trade-hub-our-service-section']	=	array(
	'title'			=>	esc_html__('Our-Service','trade_hub'),
	'panel'			=>'trade-hub-main-homepage-panel',
	'priority'		=> 220
);

// create a setting control for our service enable option
$trade_hub_settings_controls['trade-hub-our-service-enable-option'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-our-service-enable-option']
	),
	'control'				=> array(
		'label'				=> esc_html__('Enable Our Service','trade_hub'),
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
		'label'				=> esc_html__('Select Number Of Word- Our Service','trade_hub'),
		'section'			=> 'trade-hub-our-service-section',
		'type'				=> 'number',
		'priority'			=> 10,
		'active_callback' 	=> ''
	)
);


// create a setting control for our service title text
$trade_hub_settings_controls['trade-hub-our-service-title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-our-service-title']
	),
	'control'				=> array(
		'label'				=> esc_html__(' Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service-section',
		'type'				=> 'text',
		'priority'			=> 30,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service  sub-title text
$trade_hub_settings_controls['trade-hub-our-service-sub-title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-our-service-sub-title']
	),
	'control'				=> array(
		'label'				=> esc_html__('Sub-Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service-section',
		'type'				=> 'textarea',
		'priority'			=> 40,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service first-title text
$trade_hub_settings_controls['trade-hub-our-service-first-title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-our-service-first-title']
	),
	'control'				=> array(
		'label'				=> esc_html__('First Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service-section',
		'type'				=> 'text',
		'priority'			=> 50,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service  first sub-title text
$trade_hub_settings_controls['trade-hub-our-service-first-sub-title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-our-service-first-sub-title']
	),
	'control'				=> array(
		'label'				=> esc_html__('First-Sub-Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service-section',
		'type'				=> 'textarea',
		'priority'			=> 60,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service second-title text
$trade_hub_settings_controls['trade-hub-our-service-second-title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-our-service-second-title']
	),
	'control'				=> array(
		'label'				=> esc_html__('Second Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service-section',
		'type'				=> 'text',
		'priority'			=> 70,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service  second sub-title text
$trade_hub_settings_controls['trade-hub-our-service-second-sub-title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-our-service-second-sub-title']
	),
	'control'				=> array(
		'label'				=> esc_html__('Second-Sub-Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service-section',
		'type'				=> 'textarea',
		'priority'			=> 80,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service third-title text
$trade_hub_settings_controls['trade-hub-our-service-third-title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-our-service-third-title']
	),
	'control'				=> array(
		'label'				=> esc_html__('Third Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service-section',
		'type'				=> 'text',
		'priority'			=> 90,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service  third sub-title text
$trade_hub_settings_controls['trade-hub-our-service-third-sub-title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-our-service-third-sub-title']
	),
	'control'				=> array(
		'label'				=> esc_html__('Third-Sub-Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service-section',
		'type'				=> 'textarea',
		'priority'			=> 100,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service image
$trade_hub_settings_controls['trade-hub-our-service-image'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-our-service-image']
	),
	'control'				=> array(
		'label'				=> esc_html__('Upload Image Service Section','trade_hub'),
		'section'			=> 'trade-hub-our-service-section',
		'type'				=> 'upload',
		'priority'			=> 110,
		'active_callback' 	=> ''
	)
);