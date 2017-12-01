<?php
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

/*defaults values*/
$trade_hub_customizer_defaults['trade-hub-featured-slider-number'] = 5;
$trade_hub_customizer_defaults['trade-hub-featured-slider-selection'] = 'from-page';

/*feature slider setting*/
$trade_hub_sections['trade-hub-featured-slider-selection-setting'] =
    array(
        'priority'       => 20,
        'title'          => __( 'Settings Options', 'trade-hub' ),
        'panel'          => 'trade-hub-featured-slider',
    );

/*No of feature slider selection*/
$trade_hub_settings_controls['trade-hub-featured-slider-number'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-featured-slider-number']
        ),
        'control' => array(
            'label'                 =>  __( 'Number Of Slider', 'trade-hub' ),
            'section'               => 'trade-hub-featured-slider-selection-setting',
            'type'                  => 'select',
            'choices'               => array(
                1 => __( '1', 'trade-hub' ),
                2 => __( '2', 'trade-hub' ),
                3 => __( '3', 'trade-hub' ),
                4 => __( '4', 'trade-hub' ),
                5 => __( '5', 'trade-hub' ),
                6 => __( '6', 'trade-hub' )
            ),
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

/*feature slider selection from control*/
$trade_hub_settings_controls['trade-hub-featured-slider-selection'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-featured-slider-selection']
        ),
        'control' => array(
            'label'                 =>  __( 'Select Slider From', 'trade-hub' ),
            'description'           =>  __( 'After selecting one of the option, please go back and go to particular section to add', 'trade-hub' ),
            'section'               => 'trade-hub-featured-slider-selection-setting',
            'type'                  => 'select',
            'choices'               => array(
                'from-page' => __( 'Page', 'trade-hub' ),
                'from-category' => __( 'Category', 'trade-hub' ),
            ),
            'priority'              => 20,
            'active_callback'       => ''
        )
    );


