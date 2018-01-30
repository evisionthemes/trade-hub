<?php

global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

// defaults value
$trade_hub_customizer_defaults['trade-about-us-enable-option']  = 1;
$trade_hub_customizer_defaults['trade-about-us-select-page']  = '';
$trade_hub_customizer_defaults['trade-about-us-single-word']  = 30;
$trade_hub_customizer_defaults['trade-about-us-button-text']  = esc_html__('KNOW MORE','trade-hub');

// create a section for about us 
$trade_hub_sections['trade-hub-about-us-section']  =
array(
		'title'				=> esc_html__('About-Us','trade-hub'),
		'panel'				=> 'trade-hub-main-homepage-panel',
		'priority'			=> 260
	);

// create a setting control for enable option
$trade_hub_settings_controls['trade-contact-enable-option']  =
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-contact-enable-option']
	),
	'control'				=> array(
		'label'				=> esc_html__('Enable About US','trade-hub'),
		'section'			=> 'trade-hub-about-us-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback'	=> ''
	)
);

// create a setting control for single word
$trade_hub_settings_controls['trade-about-us-single-word']  =
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-about-us-single-word']
	),
	'control'				=> array(
		'label'				=> esc_html__('Enable About US','trade-hub'),
		'section'			=> 'trade-hub-about-us-section',
		'type'				=> 'number',
		'priority'			=> 20,
		'active_callback'	=> ''
	)
);

// create a setting control for single word
$trade_hub_settings_controls['trade-about-us-select-page']  =
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-about-us-select-page']
	),
	'control'				=> array(
		'label'				=> esc_html__('Select Page %s','trade-hub'),
		'section'			=> 'trade-hub-about-us-section',
		'type'				=> 'dropdown-pages',
		'priority'			=> 30,
		'active_callback'	=> ''
	)
);

// create a setting control for button-text
$trade_hub_settings_controls['trade-about-us-button-text']  =
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-about-us-button-text']
	),
	'control'				=> array(
		'label'				=> esc_html__('Button Text','trade-hub'),
		'section'			=> 'trade-hub-about-us-section',
		'type'				=> 'text',
		'priority'			=> 40,
		'active_callback'	=> ''
	)
);