<?php 
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

// default value for our feature 
$trade_hub_customizer_defaults['trade-hub-our-feature-enable'] 		= 1;
$trade_hub_customizer_defaults['trade-hub-our-feature-title-text'] 	= '';
$trade_hub_customizer_defaults['trade-hub-our-single-word-page'] 	= 25;
$trade_hub_customizer_defaults['trade-hub-our-feature-page'] 		= 0;
$trade_hub_customizer_defaults['trade-hub-our-feature-icon'] 		= esc_html__( 'fa-desktop', 'trade-hub' );

// section for our-feature-option
$trade_hub_sections['trade-hub-our-feature-section'] = 
	array(
			'title'			=> esc_html__( 'Our Feature', 'trade-hub' ),
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
					'label'				=> esc_html__( 'Enable Our Feature', 'trade-hub' ),
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
		'label'							=> esc_html__( 'Title Text', 'trade-hub' ),
		'section'						=> 'trade-hub-our-feature-section',
		'type'							=> 'text',
		'priority'						=> 20,
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
			'label'							=> esc_html__( 'Number of Words', 'trade-hub' ),
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
            	/* translators: %s: search term */
                'label'                 =>    esc_html__( 'Select Icon for Page %s', 'trade-hub' ),
                /* translators: %s: search term */
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
            	/* translators: %s: search term */
                'label'                 =>    esc_html__( 'Select Page %s', 'trade-hub' ),
                'section'               =>   'trade-hub-our-feature-section',
                'type'                  =>   'dropdown-pages',
                'priority'              =>   55,
                'description'           =>   ''
            )
        ),
        
    );
