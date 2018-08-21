<?php
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

// defaults value;
$trade_hub_customizer_defaults['trade-hub-testimonial-enable-option'] 	= 1;
$trade_hub_customizer_defaults['trade-hub-testimonial-title-text'] 		= '';
$trade_hub_customizer_defaults['trade-hub-testimonial-single-word'] 	= 30;
$trade_hub_customizer_defaults['trade-hub-testimonial-from-page'] 		= 0;
$trade_hub_customizer_defaults['trade-hub-testimonial-number-page'] 	= 3;


// create  a section for testtimonials;
$trade_hub_sections['trade-hub-testimonial-sections'] = 
array(
	'title'			=> esc_html__( 'Testimonial', 'trade-hub' ),
	'panel'			=> 'trade-hub-main-homepage-panel',
	'priority'		=> 230
);

// settig control for testimonial enable option
$trade_hub_settings_controls['trade-hub-testimonial-enable-option'] =  
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-testimonial-enable-option'],
	),
	'control'				=> array(
		'label'				=> esc_html__( 'Enable Testimonial', 'trade-hub' ),
		'section'			=> 'trade-hub-testimonial-sections',
		'type'				=> 'checkbox',
		'pripority'			=> 20,
		'active_callback'	=> ''
	)
);

// settig control for testimonial title text
$trade_hub_settings_controls['trade-hub-testimonial-title-text'] =  
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-testimonial-title-text'],
	),
	'control'				=> array(
		'label'				=> esc_html__( 'Title Text', 'trade-hub' ),
		'section'			=> 'trade-hub-testimonial-sections',
		'type'				=> 'text',
		'pripority'			=> 30,
		'active_callback'	=> ''
	)
);

// settig control for testimonial single word
$trade_hub_settings_controls['trade-hub-testimonial-single-word'] =  
array(
	'setting'				=> array(
		'default'			=> $trade_hub_customizer_defaults['trade-hub-testimonial-single-word'],
	),
	'control'				=> array(
		'label'				=> esc_html__( 'Select Number Of Word', 'trade-hub' ),
		'section'			=> 'trade-hub-testimonial-sections',
		'type'				=> 'number',
		'pripority'			=> 40,
		'active_callback'	=> ''
	)
);


/*creating setting control for chrimbo-news-activities-page start*/
$trade_hub_repeated_settings_controls['trade-hub-testimonial-from-page'] =
    array(
        'repeated' => 3,
        'trade-hub-testimonial-pages-ids' => array(
            'setting' =>     array(
                'default'              => $trade_hub_customizer_defaults['trade-hub-testimonial-from-page'],
            ),
            'control' => array(
            	/* translators: %s: search term */
                'label'                 =>  esc_html__( 'Select Page For testimonial Section %s', 'trade-hub' ),
                'section'               => 'trade-hub-testimonial-sections',
                'type'                  => 'dropdown-pages',
                'priority'              => 50,
                'description'           => ''
            )
        ),
        'chrimbo-activities-pages-divider' => array(
            'control' => array(
                'section'               => 'trade-hub-testimonial-sections',
                'type'                  => 'message',
                'priority'              => 50,
                'description'           => '<br /><hr />'
            )
        )
    );

