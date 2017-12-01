<?php
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

/*defaults values*/
$trade_hub_customizer_defaults['trade-hub-featured-slider-category'] = 0;

/*category selection*/
$trade_hub_sections['trade-hub-home-featured-slider-category'] =
    array(
        'priority'       => 50,
        'title'          => __( 'Select From Category', 'trade-hub' ),
        'description'    => __( 'This option only work when you have selected "Category" in "settings Option".', 'trade-hub' ),
        'panel'          => 'trade-hub-featured-slider',
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
            'section'               => 'trade-hub-home-featured-slider-category',
            'type'                  => 'category_dropdown',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );
