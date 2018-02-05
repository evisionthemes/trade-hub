<?php
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

/*defaults values*/
$trade_hub_customizer_defaults['trade-hub-fs-single-words'] = 30;
$trade_hub_customizer_defaults['trade-hub-fs-enable-title'] = 1;
$trade_hub_customizer_defaults['trade-hub-fs-enable-caption'] = 1;
$trade_hub_customizer_defaults['trade-hub-fs-button-text'] = __('View More','trade-hub');

/*fs options*/
$trade_hub_sections['trade-hub-fs-slider-options'] =
    array(
        'priority'       => 80,
        'title'          => __( 'Slider Property', 'trade-hub' ),
        'panel'          => 'trade-hub-main-homepage-panel',
    );

$trade_hub_settings_controls['trade-hub-fs-single-words'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-fs-single-words']
        ),
        'control' => array(
            'label'                 =>  __( 'Single Slider- Number Of Words', 'trade-hub' ),
            'description'           =>  __( 'If you do not have selected from - Custom', 'trade-hub' ),
            'section'               => 'trade-hub-fs-slider-options',
            'type'                  => 'number',
            'priority'              => 5,
            'active_callback'       => '',
            'input_attrs' => array( 'min' => 1, 'max' => 200),
        )
    );

$trade_hub_settings_controls['trade-hub-fs-enable-title'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-fs-enable-title']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Title', 'trade-hub' ),
            'section'               => 'trade-hub-fs-slider-options',
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
            'section'               => 'trade-hub-fs-slider-options',
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
        'section'               => 'trade-hub-fs-slider-options',
        'type'                  => 'text',
        'priority'              => 90,
        'active_callback'       => ''
    )
);