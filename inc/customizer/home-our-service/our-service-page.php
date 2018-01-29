<?php
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_setting_controls;
global $trade_hub_customizer_defaults;

// deafults value
$trade_hub_customizer_defaults['trade_hub_our_service_enable_option'] = 1;
$trade_hub_customizer_defaults['trade_hub_our_service_title'] = esc_html__('GREAT PRODUCT OF COMPANY','trade_hub');
$trade_hub_customizer_defaults['trade_hub_our_service_sub_title'] = esc_html__('Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally','trade_hub');
$trade_hub_customizer_defaults['trade_hub_our_service_first_title'] = esc_html__('PSD TO HTML5/CSS3','trade_hub');
$trade_hub_customizer_defaults['trade_hub_our_service_first_sub_title'] = esc_html__('Paetos dignissim at cursus elefeind norma arcu.velim pellentesque uter justo magna gravida.','trade_hub');
$trade_hub_customizer_defaults['trade_hub_our_service_second_title'] = esc_html__('HOSTING & DOMAIN SERVICES','trade_hub');
$trade_hub_customizer_defaults['trade_hub_our_service_second_sub_title'] = esc_html__('Paetos dignissim at cursus elefeind norma arcu.velim pellentesque uter justo magna gravida.','trade_hub');
$trade_hub_customizer_defaults['trade_hub_our_service_third_title'] = esc_html__('GET PLAN YOUR BUSINESS','trade_hub');
$trade_hub_customizer_defaults['trade_hub_our_service_third_sub_title'] = esc_html__('Paetos dignissim at cursus elefeind norma arcu.velim pellentesque uter justo magna gravida.','trade_hub');

// create a section for our service section
$trade_hub_sections['trade-hub-our-service section']	=	array(
	'title'			=>	esc_html__('Our-Service-Section',''),
	'panel'			=>'trade-hub-main-homepage-panel',
	'priority'		=> 10
);

// create a setting control for our service enable option
$trade_hub_settings_controls['trade_hub_our_service_enable_option'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade_hub_our_service_enable_option']
	),
	'control'				=> array(
		'label'				=> esc_html__('Enable Our Service','trade_hub'),
		'section'			=> 'trade-hub-our-service section',
		'type'				=> 'checkbox',
		'priority'			=> 20,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service title text
$trade_hub_settings_controls['trade_hub_our_service_title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade_hub_our_service_title']
	),
	'control'				=> array(
		'label'				=> esc_html__(' Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service section',
		'type'				=> 'text',
		'priority'			=> 30,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service  sub-title text
$trade_hub_settings_controls['trade_hub_our_service_sub_title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade_hub_our_service_sub_title']
	),
	'control'				=> array(
		'label'				=> esc_html__('Sub-Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service section',
		'type'				=> 'text',
		'priority'			=> 40,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service first-title text
$trade_hub_settings_controls['trade_hub_our_service_first_title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade_hub_our_service_first_title']
	),
	'control'				=> array(
		'label'				=> esc_html__('First Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service section',
		'type'				=> 'text',
		'priority'			=> 50,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service  first sub-title text
$trade_hub_settings_controls['trade_hub_our_service_first_sub_title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade_hub_our_service_first_sub_title']
	),
	'control'				=> array(
		'label'				=> esc_html__('First-Sub-Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service section',
		'type'				=> 'text',
		'priority'			=> 60,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service second-title text
$trade_hub_settings_controls['trade_hub_our_service_second_title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade_hub_our_service_second_title']
	),
	'control'				=> array(
		'label'				=> esc_html__('Second Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service section',
		'type'				=> 'text',
		'priority'			=> 70,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service  second sub-title text
$trade_hub_settings_controls['trade_hub_our_service_second_sub_title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade_hub_our_service_second_sub_title']
	),
	'control'				=> array(
		'label'				=> esc_html__('Second-Sub-Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service section',
		'type'				=> 'text',
		'priority'			=> 80,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service third-title text
$trade_hub_settings_controls['trade_hub_our_service_third_title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade_hub_our_service_third_title']
	),
	'control'				=> array(
		'label'				=> esc_html__('Third Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service section',
		'type'				=> 'text',
		'priority'			=> 90,
		'active_callback' 	=> ''
	)
);

// create a setting control for our service  third sub-title text
$trade_hub_settings_controls['trade_hub_our_service_third_sub_title'] = array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade_hub_our_service_third_sub_title']
	),
	'control'				=> array(
		'label'				=> esc_html__('Third-Sub-Title Text','trade_hub'),
		'section'			=> 'trade-hub-our-service section',
		'type'				=> 'text',
		'priority'			=> 100,
		'active_callback' 	=> ''
	)
);