<?php

global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

// defaults value's
$trade_hub_customizer_defaults['trade-hub-call-action-enable-option']  = 1;
$trade_hub_customizer_defaults['trade-hub-call-action-button-text']  = esc_html__('VIEW MORE','trade-hub');
$trade_hub_customizer_defaults['trade-hub-call-action-single-word']	= 30;
$trade_hub_customizer_defaults['trade-hub-call-action-select-page']	= '';


// create a section for call to action
$trade_hub_sections['trade-hub-call-action-section'] = 
array(
	'title'					=> esc_html__('Call-To-Action','trade-hub'),
	'panel'					=> 'trade-hub-main-homepage-panel',
	'priority'				=> 240
);

// create a setting control for enable option
$trade_hub_settings_controls['trade-hub-call-action-enable-option']  =
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-call-action-enable-option']
	),
	'control'				=> array(
		'label'				=> esc_html__('Enable Call to Action','trade-hub'),
		'section'			=> 'trade-hub-call-action-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback'	=> ''
	)
);

// create a setting control for single word
$trade_hub_settings_controls['trade-hub-call-action-single-word']  =
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-call-action-single-word']
	),
	'control'				=> array(
		'label'				=> esc_html__('Select Number Of Word','trade-hub'),
		'section'			=> 'trade-hub-call-action-section',
		'type'				=> 'text',
		'priority'			=> 20,
		'active_callback'	=> ''
	)
);

// create a setting control for page
$trade_hub_settings_controls['trade-hub-call-action-select-page']  =
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-call-action-select-page']
	),
	'control'				=> array(
		'label'				=> esc_html__('Select The Page %s','trade-hub'),
		'section'			=> 'trade-hub-call-action-section',
		'type'				=> 'dropdown-pages',
		'priority'			=> 30,
		'active_callback'	=> ''
	)
);

// create a setting control for single word
$trade_hub_settings_controls['trade-hub-call-action-button-text']  =
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-call-action-button-text']
	),
	'control'				=> array(
		'label'				=> esc_html__('Button Text','trade-hub'),
		'section'			=> 'trade-hub-call-action-section',
		'type'				=> 'text',
		'priority'			=> 40,
		'active_callback'	=> ''
	)
);


