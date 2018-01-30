<?php
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

/*defaults values feature portfolio options*/
$trade_hub_customizer_defaults['trade-hub-feature-slider-enable'] = 1;
$trade_hub_customizer_defaults['trade-hub-featured-slider-category'] = 0;
$trade_hub_customizer_defaults['trade-hub-featured-slider-pages'] = 0;
$trade_hub_customizer_defaults['trade-hub-fs-single-words'] = 30;
$trade_hub_customizer_defaults['trade-hub-fs-enable-title'] = 1;
$trade_hub_customizer_defaults['trade-hub-fs-enable-caption'] = 1;
$trade_hub_customizer_defaults['trade-hub-fs-button-text'] = __('View More','trade-hub');
$trade_hub_customizer_defaults['trade-hub-featured-slider-number'] = 5;
$trade_hub_customizer_defaults['trade-hub-featured-slider-selection'] = 'from-page';

/*feature slider enable setting*/
$trade_hub_sections['trade-hub-feature-slider-setting'] =
    array(
        'priority'       => 10,
        'title'          => __( 'Feature-Slider', 'trade-hub' ),
        'panel'          => 'trade-hub-main-homepage-panel',
    );

/*Feature section enable control*/
$trade_hub_settings_controls['trade-hub-feature-slider-enable'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-feature-slider-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Feature Slider', 'trade-hub' ),
            'section'               => 'trade-hub-feature-slider-setting',
            'description'           => __( 'Enable "Feature slider" on checked' , 'trade-hub' ),
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
            'label'                 =>  __( 'Number Of Slider', 'trade-hub' ),
            'section'               => 'trade-hub-feature-slider-setting',
            'type'                  => 'select',
            'choices'               => array(
                1 => __( '1', 'trade-hub' ),
                2 => __( '2', 'trade-hub' ),
                3 => __( '3', 'trade-hub' ),
                4 => __( '4', 'trade-hub' ),
                5 => __( '5', 'trade-hub' ),
                6 => __( '6', 'trade-hub' )
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
            'label'                 =>  __( 'Single Slider- Number Of Words', 'trade-hub' ),
            'description'           =>  __( 'If you do not have selected from - Custom', 'trade-hub' ),
            'section'               => 'trade-hub-feature-slider-setting',
            'type'                  => 'number',
            'priority'              => 30,
            'active_callback'       => '',
            'input_attrs' => array( 'min' => 1, 'max' => 200),
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
            'section'               => 'trade-hub-feature-slider-setting',
            'type'                  => 'select',
            'choices'               => array(
                'from-page' => __( 'Page', 'trade-hub' ),
                'from-category' => __( 'Category', 'trade-hub' ),
            ),
            'priority'              => 40,
            'active_callback'       => ''
        )
    );

/*creating setting control for trade-hub-fs-Category start*/
$trade_hub_settings_controls['trade-hub-featured-slider-category'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-featured-slider-category']
        ),
        'control' => array(
            'label'                 =>  __( 'Select Category For Slider', 'trade-hub' ),
            'description'           =>  __( 'If you have oly choosen category then page you need to select one from here', 'trade-hub' ),
            'section'               => 'trade-hub-feature-slider-setting',
            'type'                  => 'category_dropdown',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );



/*creating setting control for trade-hub-fs-page start*/
$trade_hub_repeated_settings_controls['trade-hub-featured-slider-pages'] =
    array(
        'repeated' => 6,
        'trade-hub-fs-pages-ids' => array(
            'setting' =>     array(
                'default'              => $trade_hub_customizer_defaults['trade-hub-featured-slider-pages'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select Page For Slide %s', 'trade-hub' ),
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
            'label'                 =>  __( 'Enable Title', 'trade-hub' ),
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
            'label'                 =>  __( 'Enable Caption', 'trade-hub' ),
            'section'               => 'trade-hub-feature-slider-setting',
            'type'                  => 'checkbox',
            'priority'              => 80,
            'active_callback'       => ''
        )
    );


$trade_hub_settings_controls['trade-hub-fs-button-text'] =
array(
    'setting' =>     array(
        'default'              => $trade_hub_customizer_defaults['trade-hub-fs-button-text']
    ),
    'control' => array(
        'label'                 =>  __( 'Slider Section Button Text', 'trade-hub' ),
        'section'               => 'trade-hub-feature-slider-setting',
        'type'                  => 'text',
        'priority'              => 90,
        'active_callback'       => ''
    )
);




