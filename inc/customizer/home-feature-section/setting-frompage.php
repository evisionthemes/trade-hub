<?php 
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;


// default value for our feature 
$trade_hub_customizer_defaults['trade_hub_our-feature_section_enable'] = 1;
$trade_hub_customizer_defaults['trade_hub_our-feature_title_text'] = esc_html__('Our Amazing Feature','trade-hub');
$trade_hub_customizer_defaults['trade-hub-our-select-number-page'] = 4;
$trade_hub_customizer_defaults['trade-hub-our-single-word-page'] = 25;
$trade_hub_customizer_defaults['trade_hub_our-feature_page'] = '';
$trade_hub_customizer_defaults['trade_hub_our-feature_icon'] = esc_html__('fa fa-desktop','trade-hub');


// section for our-feature-option
$trade_hub_sections['trade_hub_our-feature-section'] = 
		array(
				'title'			=> esc_html__('Our-Feature','trade-hub'),
				'panel'				=> 'trade-hub-main-homepage-panel',
				'priority'			=> 20
		);

// create a setting control for our-feature section
$trade_hub_settings_controls['trade_hub_our-feature_section_enable'] = 
		array(
				'setting'					=> array(
						'default'			=> $trade_hub_customizer_defaults['trade_hub_our-feature_section_enable']	
				),
				'control'					=> array(
						'label'				=> esc_html__('Enable Feature','trade-hub'),
						'section'			=> 'trade_hub_our-feature-section',
						'type'				=> 'checkbox',
						'priority'			=> 10,
						'active_callback' 	=>''	
				)
		);

// create a sections control for title text
$trade_hub_settings_controls['trade_hub_our-feature_title_text'] = 
	array(
		'setting'							=> array(
			'default'						=> $trade_hub_customizer_defaults['trade_hub_our-feature_title_text']
		),
		'control'							=> array(
			'label'							=> esc_html__('Our Feaure title Text','trade-hub'),
			'section'						=> 'trade_hub_our-feature-section',
			'type'							=> 'text',
			'priority'						=> 20,
			'active_callback'				=> ''
		)
	);

// select number of page
 $trade_hub_settings_controls['trade-hub-our-select-number-page'] = 
	array(
		'setting'							=> array(
			'default'						=> $trade_hub_customizer_defaults['trade-hub-our-select-number-page']
		),
		'control'							=> array(
			'label'							=> esc_html__('Select Number Of Page','trade-hub'),
			'section'						=> 'trade_hub_our-feature-section',
			'type'							=> 'select',
			'choices'						=> array(
				1							=> esc_html__('1','trade-hub'),
				2							=> esc_html__('2','trade-hub'),
				3							=> esc_html__('3','trade-hub'),
				4							=> esc_html__('4','trade-hub')
			),
			'priority'						=> 30,
			'active_callback'				=> ''
		)
	);

// section control for single word
$trade_hub_settings_controls['trade-hub-our-single-word-page'] = 
	array(
		'setting'							=> array(
			'default'						=> $trade_hub_customizer_defaults['trade-hub-our-single-word-page']
		),
		'control'							=> array(
			'label'							=> esc_html__('Select Number Of Words','trade-hub'),
			'section'						=> 'trade_hub_our-feature-section',
			'type'							=> 'number',
			'input_attrs'					=> array('min' => 1, 'max'  => 300),
			'priority'						=> 40,
			'active_callback'				=> ''
		)
	);


$trade_hub_repeated_settings_controls['trade_hub_our-feature_page'] =
    array(
        'repeated' =>   4,
        'trade_hub_our-feature_icon' =>   array(
            'setting' =>       array(
                'default'              =>   $trade_hub_customizer_defaults['trade_hub_our-feature_icon'],
            ),
            'control' =>   array(
                'label'                 =>    esc_html__( 'Select Page For Our Feature Page Icon %s', 'trade-hub' ),
                'description'           =>   sprintf( esc_html__( 'Use font awesome icon: Eg: %1$s . %2$s See more here %3$s', 'trade-hub' ), 'fa-desktop','<a href="'.esc_url('http://fontawesome.io/cheatsheet/').'" target="_blank">','</a>' ),
                'section'               =>   'trade_hub_our-feature-section',
                'type'                  =>   'text',
                'priority'              =>   45,
            )
        ),
        

        'trade-hub-feature-pages-ids' =>   array(
            'setting' =>       array(
                'default'              =>   $trade_hub_customizer_defaults['trade_hub_our-feature_page'],
            ),
            'control' =>   array(
                'label'                 =>    esc_html__( 'Select Page For Our Page %s', 'trade-hub' ),
                'section'               =>   'trade_hub_our-feature-section',
                'type'                  =>   'dropdown-pages',
                'priority'              =>   55,
                'description'           =>   ''
            )
        ),
        
    );
