<?php
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

/*defaults values*/
$trade_hub_customizer_defaults['trade-hub-featured-slider-pages'] = 0;

/*page selection*/
$trade_hub_sections['trade-hub-feature-slider-pages'] =
    array(
        'priority'       => 40,
        'title'          => __( 'Select From Page', 'trade-hub' ),
        'description'    => __( 'This option only work when you have selected "Page" in "Settings Options".', 'trade-hub' ),
        'panel'          => 'trade-hub-featured-slider',
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
                'section'               => 'trade-hub-feature-slider-pages',
                'type'                  => 'dropdown-pages',
                'priority'              => 60,
                'description'           => ''
            )
        ),
        'trade-hub-fs-pages-divider' => array(
            'control' => array(
                'section'               => 'trade-hub-fs-selection-setting',
                'type'                  => 'message',
                'priority'              => 60,
                'description'           => '<br /><hr />'
            )
        )
    );

