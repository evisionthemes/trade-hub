<?php
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

/*defaults values*/
$trade_hub_customizer_defaults['trade-hub-footer-sidebar-number'] = 3;
$trade_hub_customizer_defaults['trade-hub-copyright-text'] = __('Copyright &copy; All right reserved.','trade-hub');
$trade_hub_customizer_defaults['trade-hub-enable-theme-name'] = 1;

$trade_hub_sections['trade-hub-footer-options'] =
    array(
        'priority'       => 150,
        'title'          => __( 'Footer Options', 'trade-hub' ),
        'panel'          => 'trade-hub-theme-options'
    );

$trade_hub_settings_controls['trade-hub-footer-sidebar-number'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-footer-sidebar-number'],
        ),
        'control' => array(
            'label'                 =>  __( 'Number of Sidebars In Footer Area', 'trade-hub' ),
            'section'               => 'trade-hub-footer-options',
            'type'                  => 'select',
            'choices'               => array(
                0 => __( 'Disable footer sidebar area', 'trade-hub' ),
                1 => __( '1', 'trade-hub' ),
                2 => __( '2', 'trade-hub' ),
                3 => __( '3', 'trade-hub' ),
                4 => __( '4', 'trade-hub' )
            ),
            'priority'              => 15,
            'description'           => '',
            'active_callback'       => ''
        )
    );

$trade_hub_settings_controls['trade-hub-copyright-text'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-copyright-text'],
        ),
        'control' => array(
            'label'                 =>  __( 'Copyright Text', 'trade-hub' ),
            'section'               => 'trade-hub-footer-options',
            'type'                  => 'text_html',
            'priority'              => 20,
        )
    );