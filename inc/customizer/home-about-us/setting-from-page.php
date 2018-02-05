<?php

global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;



// defaults value
$trade_hub_customizer_defaults['trade-hub-about-us-enable']  = 1;
$trade_hub_customizer_defaults['trade-hub-single-word']		 = 25;
$trade_hub_customizer_defaults['trdae-hub-about-us-page']   = 0;
$trade_hub_customizer_defaults['trade-hub-button-text']		= esc_html__('KNOW MORE','trade-hub');
$trade_hub_customizer_defaults['trade-hub-button-link']		= '#';	
$trade_hub_customizer_defaults['trade-hub-select_number_page']		= 1;		


// craate a section  for testimonial
$trade_hub_sections['trade-hub-about-us-section'] = 
array(
	'title'				=> esc_html('About-Us','trade-hub'),
	'panel'				=> 'trade-hub-main-homepage-panel',
	'priority'			=> 30
);

// cerate setting control 
$trade_hub_settings_controls['trade-hub-about-us-enable']  = 
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-about-us-enable'],
	),
	'control'				=> array(
		'label'				=> esc_html__('Enable About-Us','trade-hub'),
		'section'			=> 'trade-hub-about-us-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callvack'	=> ''
	)
);

$trade_hub_settings_controls['trade-hub-single-word']  = 
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-single-word'],
	),
	'control'				=> array(
		'label'				=> esc_html__('Select Number Of words-About-us','trade-hub'),
		'section'			=> 'trade-hub-about-us-section',
		'type'				=> 'number',
		'inuput_attr'		=> array('min'=>1,'max'=>200),
		'priority'			=> 20,
		'active_callvack'	=> ''
	)
);

$trade_hub_settings_controls['trdae-hub-about-us-page']  = 
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trdae-hub-about-us-page'],
	),
	'control'				=> array(
		'label'				=> esc_html__('Select Page For About Us','trade-hub'),
		'section'			=> 'trade-hub-about-us-section',
		'type'				=> 'dropdown-pages',
		'priority'			=> 30,
		'active_callvack'	=> ''
	)
);

$trade_hub_settings_controls['trade-hub-button-text']  = 
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-button-text'],
	),
	'control'				=> array(
		'label'				=> esc_html__('Button Text','trade-hub'),
		'section'			=> 'trade-hub-about-us-section',
		'type'				=> 'text',
		'priority'			=> 40,
		'active_callvack'	=> ''
	)
);

$trade_hub_settings_controls['trade-hub-button-link']  = 
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-button-link'],
	),
	'control'				=> array(
		'label'				=> esc_html__('Button url','trade-hub'),
		'section'			=> 'trade-hub-about-us-section',
		'type'				=> 'url',
		'priority'			=> 50,
		'active_callvack'	=> ''
	)
);

