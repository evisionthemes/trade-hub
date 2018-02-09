<?php
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

/*defaults values feature portfolio options*/
$trade_hub_customizer_defaults['trade-hub-feature-slider-enable'] = 0;
$trade_hub_customizer_defaults['trade-hub-featured-slider-category'] = 0;
$trade_hub_customizer_defaults['trade-hub-featured-slider-pages'] = 0;
$trade_hub_customizer_defaults['trade-hub-fs-single-words'] = 30;
$trade_hub_customizer_defaults['trade-hub-fs-enable-title'] = 1;
$trade_hub_customizer_defaults['trade-hub-fs-enable-caption'] = 1;
$trade_hub_customizer_defaults['trade-hub-fs-button-text'] = esc_html__('Know More','trade-hub');

// $trade_hub_customizer_defaults['trade-hub-fs-button-text'] = esc_html__('View More','trade-hub');
>>>>>>> 82d0e2079ba6b9e5d40a00c61a732e9e382e5b14
$trade_hub_customizer_defaults['trade-hub-featured-slider-number'] = 2;
$trade_hub_customizer_defaults['trade-hub-featured-slider-selection'] = 'from-page';

/*feature slider enable setting*/
$trade_hub_sections['trade-hub-feature-slider-setting'] =
    array(
        'priority'       => 10,
        'title'          => esc_html__( 'Feature-Slider', 'trade-hub' ),
        'panel'          => 'trade-hub-main-homepage-panel',
    );

/*Feature section enable control*/
$trade_hub_settings_controls['trade-hub-feature-slider-enable'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-feature-slider-enable']
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Enable Feature Slider', 'trade-hub' ),
            'section'               => 'trade-hub-feature-slider-setting',
            'description'           => esc_html__( 'Enable "Feature slider" on checked' , 'trade-hub' ),
            'type'                  => 'checkbox',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

/*No of feature slider selection*/
$trade_hub_settings_controls['trade-hub-featured-slider-number'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-featured-slider-number']
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Number Of Slider', 'trade-hub' ),
            'section'               => 'trade-hub-feature-slider-setting',
            'type'                  => 'select',
            'choices'               => array(
                1 => esc_html__( '1', 'trade-hub' ),
                2 => esc_html__( '2', 'trade-hub' )
            ),
            'priority'              => 20,
            'active_callback'       => ''
        )
    );

$trade_hub_settings_controls['trade-hub-fs-single-words'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-fs-single-words']
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Single Slider- Number Of Words', 'trade-hub' ),
            'description'           =>  esc_html__( 'If you do not have selected from - Custom', 'trade-hub' ),
            'section'               => 'trade-hub-feature-slider-setting',
            'type'                  => 'number',
            'priority'              => 30,
            'active_callback'       => '',
            'input_attrs' => array( 'min' => 1, 'max' => 200),
        )
    );



/*creating setting control for trade-hub-fs-page start*/
$trade_hub_repeated_settings_controls['trade-hub-featured-slider-pages'] =
    array(
        'repeated' => 2,
        'trade-hub-fs-pages-ids' => array(
            'setting' =>     array(
                'default'              => $trade_hub_customizer_defaults['trade-hub-featured-slider-pages'],
            ),
            'control' => array(
                'label'                 =>  esc_html__( 'Select Page For Slide %s', 'trade-hub' ),
                'section'               => 'trade-hub-feature-slider-setting',
                'type'                  => 'dropdown-pages',
                'priority'              => 60,
                'description'           => ''
            )
        ),
        'trade-hub-fs-pages-divider' => array(
            'control' => array(
                'section'               => 'trade-hub-feature-slider-setting',
                'type'                  => 'message',
                'priority'              => 60,
                'description'           => '<br /><hr />'
            )
        )
    );



$trade_hub_settings_controls['trade-hub-fs-enable-title'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-fs-enable-title']
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Enable Title', 'trade-hub' ),
            'section'               => 'trade-hub-feature-slider-setting',
            'type'                  => 'checkbox',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );

$trade_hub_settings_controls['trade-hub-fs-enable-caption'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-fs-enable-caption']
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Enable Caption', 'trade-hub' ),
            'section'               => 'trade-hub-feature-slider-setting',
            'type'                  => 'checkbox',
            'priority'              => 80,
            'active_callback'       => ''
        )
    );







