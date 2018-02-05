<?php 

global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

// defaults value
$trade_hub_customizer_defaults['trade-hub-latest-news-enable-option'] = 1;
$trade_hub_customizer_defaults['trade-hub-latest-news-title-text']  = esc_html__('Latest News','trade-hub');
$trade_hub_customizer_defaults['trade-hub-latest-news-select-from-page']  = '';
$trade_hub_customizer_defaults['trade-hub-latest-news-single-word']  = 30;
$trade_hub_customizer_defaults['trade-hub-latest-news-select-number-section']  = 3;


// create a section for latest news
$trade_hub_sections['trade-hub-latest-news-section'] = 
array(
	'title'				=> esc_html__('Latest-News','trade-hub'),
	'panel'				=> 'trade-hub-main-homepage-panel',
	'priority'			=> 250
);

// create a setting control for enable option
$trade_hub_settings_controls['trade-hub-latest-news-enable-option'] = 
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-latest-news-enable-option']
	),
	'control'				=> array(
		'label'				=> esc_html__('Enable Latest News','trade-hub'),
		'section'			=> 'trade-hub-latest-news-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback'	=> ''
	)
);

// create a setting control for title text
$trade_hub_settings_controls['trade-hub-latest-news-title-text'] = 
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-latest-news-title-text']
	),
	'control'				=> array(
		'label'				=> esc_html__('Title Text','trade-hub'),
		'section'			=> 'trade-hub-latest-news-section',
		'type'				=> 'text',
		'priority'			=> 20,
		'active_callback'	=> ''
	)
);

// create a setting control for single word
$trade_hub_settings_controls['trade-hub-latest-news-single-word'] = 
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-latest-news-single-word']
	),
	'control'				=> array(
		'label'				=> esc_html__('Select Number Of Word','trade-hub'),
		'section'			=> 'trade-hub-latest-news-section',
		'type'				=> 'number',
		'input_attr'		=> array('min' => 1, 'max' =>200),
		'priority'			=> 30,
		'active_callback'	=> ''
	)
);

// create a setting control select number secton
$trade_hub_settings_controls['trade-hub-latest-news-select-number-section'] = 
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-latest-news-select-number-section']
	),
	'control'				=> array(
		'label'				=> esc_html__('Select Number Of Section','trade-hub'),
		'section'			=> 'trade-hub-latest-news-section',
		'type'				=> 'select',
		'choices'			=> array(
			1				=> esc_html__('1','trade-hub'),
			2				=> esc_html__('2','trade-hub'),
			3				=> esc_html__('3','trade-hub')

		),
		'priority'			=> 40,
		'active_callback'	=> ''
	)
);

//create a section for select from page
$trade_hub_repeated_settings_controls['trade-hub-latest-news-select-from-page']  = 
array(
	'repeated'				=>3,
	'trade_hub_latest_news_page_id' => array(
		'setting'					=> array(
			'default'				=> $trade_hub_customizer_defaults['trade-hub-latest-news-select-from-page']
		),
		'control'					=> array(
			'label'					=> esc_html__('Select Page For Latest-News %s','trade-hub'),
			'section'				=> 'trade-hub-latest-news-section',
			'type'					=> 'dropdown-pages',
			'priority'				=> 50,
			'active_callback'		=> ''
		)

	),
);
        
