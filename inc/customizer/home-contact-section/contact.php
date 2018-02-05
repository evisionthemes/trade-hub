<?php 

global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

// default's value
$trade_hub_customizer_defaults['trade-contact-enable-option']  = 1;
$trade_hub_customizer_defaults['trade-contact-main-title']  = esc_html__('Contact Us','trade-hub');
$trade_hub_customizer_defaults['trade-contact-localtion']  = esc_html__('NEW BANESHOWER,KATHMANDU NEPAL','trade-hub');
$trade_hub_customizer_defaults['trade-contact-email']  = esc_html__('Evisionitnepal@gmail.com','trade-hub');
$trade_hub_customizer_defaults['trade-contact-phone']  = esc_html__('+977-1234567890','trade-hub');


// create a section for call to action
$trade_hub_sections['trade-hub-contact-section'] = 
array(
	'title'					=> esc_html__('Contact','trade-hub'),
	'panel'					=> 'trade-hub-main-homepage-panel',
	'priority'				=> 260
);

// create a setting control for enable option
$trade_hub_settings_controls['trade-contact-enable-option']  =
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-contact-enable-option']
	),
	'control'				=> array(
		'label'				=> esc_html__('Enable Contact Section','trade-hub'),
		'section'			=> 'trade-hub-contact-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback'	=> ''
	)
);


// create a setting control fortitle text
$trade_hub_settings_controls['trade-contact-main-title']  =
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-contact-main-title']
	),
	'control'				=> array(
		'label'				=> esc_html__('Enable Contact Section','trade-hub'),
		'section'			=> 'trade-hub-contact-section',
		'type'				=> 'text',
		'priority'			=> 15,
		'active_callback'	=> ''
	)
);


// setting control for contact us  location
$trade_hub_settings_controls['trade-contact-localtion']  = 
array(
		'setting'					=> array(
			'default'				=> $trade_hub_customizer_defaults['trade-contact-localtion']
		),
		'control'					=> array(
			'label'					=> esc_html__('Contact-Location','trade-hub'),
			'section'				=> 'trade-hub-contact-section',
			'type'					=> 'text',
			'priority'				=> 20,
			'active_callback'		=> ''
		)
	);


// setting control for contact us  email
$trade_hub_settings_controls['trade-contact-email']  = 
array(
		'setting'					=> array(
			'default'				=> $trade_hub_customizer_defaults['trade-contact-email']
		),
		'control'					=> array(
			'label'					=> esc_html__('Contact-Email','trade-hub'),
			'section'				=> 'trade-hub-contact-section',
			'type'					=> 'text',
			'priority'				=> 20,
			'active_callback'		=> ''
		)
	);

// setting control for contact us  email
$trade_hub_settings_controls['trade-contact-phone']  = 
array(
		'setting'					=> array(
			'default'				=> $trade_hub_customizer_defaults['trade-contact-phone']
		),
		'control'					=> array(
			'label'					=> esc_html__('Contact-Phone','trade-hub'),
			'section'				=> 'trade-hub-contact-section',
			'type'					=> 'text',
			'priority'				=> 20,
			'active_callback'		=> ''
		)
	);

