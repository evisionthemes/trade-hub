<?php 
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

// default value for our feature 
$trade_hub_customizer_defaults['trade-hub-our-feature-enable'] 		= 0;
$trade_hub_customizer_defaults['trade-hub-our-feature-title-text'] 	= esc_html__( 'Our Amazing Feature', 'trade-hub' );
$trade_hub_customizer_defaults['trade-hub-our-select-number-page'] 	= 3;
$trade_hub_customizer_defaults['trade-hub-our-single-word-page'] 	= 25;
$trade_hub_customizer_defaults['trade-hub-our-feature-page'] 		= 0;
$trade_hub_customizer_defaults['trade-hub-our-feature-icon'] 		= esc_html__( 'fa fa-desktop', 'trade-hub' );

// section for our-feature-option
$trade_hub_sections['trade-hub-our-feature-section'] = 
	array(
			'title'			=> esc_html__( 'Our-Feature', 'trade-hub' ),
			'panel'			=> 'trade-hub-main-homepage-panel',
			'priority'		=> 20
	);

// create a setting control for our-feature section
$trade_hub_settings_controls['trade-hub-our-feature-enable'] = 
	array(
			'setting'					=> array(
					'default'			=> $trade_hub_customizer_defaults['trade-hub-our-feature-enable']	
			),
			'control'					=> array(
					'label'				=> esc_html__( 'Enable Feature', 'trade-hub' ),
					'section'			=> 'trade-hub-our-feature-section',
					'type'				=> 'checkbox',
					'priority'			=> 10,
					'active_callback' 	=> ''	
			)
	);

// create a sections control for title text
$trade_hub_settings_controls['trade-hub-our-feature-title-text'] = 
array(
	'setting'							=> array(
		'default'						=> $trade_hub_customizer_defaults['trade-hub-our-feature-title-text']
	),
	'control'							=> array(
		'label'							=> esc_html__( 'Our Feaure title Text', 'trade-hub' ),
		'section'						=> 'trade-hub-our-feature-section',
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
		'label'							=> esc_html__( 'Select Number Of Page', 'trade-hub' ),
		'section'						=> 'trade-hub-our-feature-section',
		'type'							=> 'select',
		'choices'						=> array(
			1							=> esc_html__( '1', 'trade-hub' ),
			2							=> esc_html__( '2', 'trade-hub' ),
			3							=> esc_html__( '3', 'trade-hub' )
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
			'label'							=> esc_html__( 'Select Number Of Words', 'trade-hub' ),
			'section'						=> 'trade-hub-our-feature-section',
			'type'							=> 'number',
			'input_attrs'					=> array('min' => 1, 'max'  => 300),
			'priority'						=> 40,
			'active_callback'				=> ''
		)
	);


$trade_hub_repeated_settings_controls['trade-hub-our-feature-page'] =
    array(
        'repeated' =>   3,
        'trade-hub-home-feature-page-icon' =>   array(
            'setting' =>       array(
                'default'              =>   $trade_hub_customizer_defaults['trade-hub-our-feature-icon'],
            ),
            'control' =>   array(
                'label'                 =>    esc_html__( 'Select Page For Our Feature Page Icon %s', 'trade-hub' ),
                'description'           =>   sprintf( esc_html__( 'Use font awesome icon: Eg: %1$s . %2$s See more here %3$s', 'trade-hub' ), 'fa-desktop', '<a href="' . esc_url( 'https://fontawesome.com/icons' ) . '" target="_blank">', '</a>' ),
                'section'               =>   'trade-hub-our-feature-section',
                'type'                  =>   'text',
                'priority'              =>   45,
            )
        ),
        

        'trade-hub-home-feature-pages-ids' =>   array(
            'setting' =>       array(
                'default'              =>   $trade_hub_customizer_defaults['trade-hub-our-feature-page'],
            ),
            'control' =>   array(
                'label'                 =>    esc_html__( 'Select Page For Our Page %s', 'trade-hub' ),
                'section'               =>   'trade-hub-our-feature-section',
                'type'                  =>   'dropdown-pages',
                'priority'              =>   55,
                'description'           =>   ''
            )
        ),
        
    );
