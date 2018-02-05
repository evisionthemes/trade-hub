<?php

global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

// defaults value
$trade_hub_customizer_defaults['trade-follow-us-title-text']  = esc_html__('Follow Us','trade-hub');

// create a setting control for button-text
$trade_hub_settings_controls['trade-follow-us-title-text']  =
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-follow-us-title-text']
	),
	'control'				=> array(
		'label'				=> esc_html__('Follow Us Text','trade-hub'),
		'section'			=> 'trade-hub-contact-section',
		'type'				=> 'text',
		'priority'			=> 10,
		'active_callback'	=> ''
	)
);