<?php
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_customizer_defaults;

/*defaults values*/
$trade_hub_customizer_defaults['trade-hub-site-identity-color'] = '#313131';
$trade_hub_customizer_defaults['trade-hub-primary-color'] = '#1ABC9C';
$trade_hub_customizer_defaults['trade-hub-color-reset'] = '';

/**
 * Reset color settings to default
 *
 * @since trade-hub 1.0.0
 */
if ( ! function_exists( 'trade_hub_color_reset' ) ) :
    function trade_hub_color_reset( ) {
        
            global $trade_hub_customizer_saved_values;
           $trade_hub_customizer_saved_values = trade_hub_get_all_options();
        if ( $trade_hub_customizer_saved_values['trade-hub-color-reset'] == 1 ) {
            global $trade_hub_customizer_defaults;
            global $trade_hub_customizer_saved_values;
            /*getting fields*/

            /*setting fields */
            $trade_hub_customizer_saved_values['trade-hub-site-identity-color'] = $trade_hub_customizer_defaults['trade-hub-site-identity-color'] ;
            $trade_hub_customizer_saved_values['trade-hub-primary-color'] = $trade_hub_customizer_defaults['trade-hub-primary-color'] ;
            remove_theme_mod( 'background_color' );
            $trade_hub_customizer_saved_values['trade-hub-color-reset'] = '';
            /*resetting fields*/
            trade_hub_reset_options( $trade_hub_customizer_saved_values );
        }
        else {
            return '';
        }
    }
endif;
add_action( 'customize_save_after','trade_hub_color_reset' );

$trade_hub_settings_controls['trade-hub-site-identity-color'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-site-identity-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Site Identity Color', 'trade-hub' ),
            'description'           =>  __( 'Site title and tagline color', 'trade-hub' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );

$trade_hub_settings_controls['trade-hub-primary-color'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-primary-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Primary Color', 'trade-hub' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );

$trade_hub_settings_controls['trade-hub-color-reset'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-color-reset'],
            'transport'            => 'postmessage',
        ),
        'control' => array(
            'label'                 =>  __( 'Reset', 'trade-hub' ),
            'description'           =>  __( 'Caution: Reset all color settings above to default. Refresh the page after saving to view the effects', 'trade-hub' ),
            'section'               => 'colors',
            'type'                  => 'checkbox',
            'priority'              => 220,
            'active_callback'       => ''
        )
    );