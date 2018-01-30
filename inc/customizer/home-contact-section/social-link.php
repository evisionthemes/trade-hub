<?php

global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

// defaults value
$trade_hub_customizer_defaults['trade-social-media-enable-option']  = 1;

// create a section for about us 
$trade_hub_sections['trade-hub-social-media-section']  =
array(
		'title'				=> esc_html__('Social-Link','trade-hub'),
		'panel'				=> 'trade-hub-main-homepage-panel',
		'priority'			=> 270
	);

// create a setting control for enable option
$trade_hub_settings_controls['trade-contact-enable-option']  =
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-contact-enable-option']
	),
	'control'				=> array(
		'label'				=> esc_html__('Enable Social Link','trade-hub'),
		'section'			=> 'trade-hub-social-media-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback'	=> ''
	)
);
