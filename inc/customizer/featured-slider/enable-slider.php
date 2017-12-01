<?php
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

/*defaults values feature portfolio options*/
$trade_hub_customizer_defaults['trade-hub-feature-slider-enable'] = 1;

/*feature slider enable setting*/
$trade_hub_sections['trade-hub-feature-section-enable-setting'] =
    array(
        'priority'       => 10,
        'title'          => __( 'Enable Options', 'trade-hub' ),
        'panel'          => 'trade-hub-featured-slider',
    );

/*Feature section enable control*/
$trade_hub_settings_controls['trade-hub-feature-slider-enable'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-feature-slider-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Feature Slider', 'trade-hub' ),
            'section'               => 'trade-hub-feature-section-enable-setting',
        	'description'    		=> __( 'Enable "Feature slider" on checked' , 'trade-hub' ),
            'type'                  => 'checkbox',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );