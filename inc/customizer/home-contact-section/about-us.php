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



// create a setting control for single word
$trade_hub_settings_controls['trade-about-us-single-word']  =
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-about-us-single-word']
	),
	'control'				=> array(
		'label'				=> esc_html__('Single Word Number-About-US','trade-hub'),
		'section'			=> 'trade-hub-contact-section',
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
		'label'				=> esc_html__('Select Page','trade-hub'),
		'section'			=> 'trade-hub-contact-section',
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
		'section'			=> 'trade-hub-contact-section',
		'type'				=> 'text',
		'priority'			=> 40,
		'active_callback'	=> ''
	)
);