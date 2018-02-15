<?php
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

/*font array*/
global $trade_hub_google_fonts;
$trade_hub_google_fonts = array(
    'Archivo+Narrow:400,400italic,700'          => esc_html__( 'Archivo Narrow', 'trade-hub' ),
    'Bitter:400,400italic,700'                  => esc_html__( 'Bitter', 'trade-hub' ),
    'Cookie'                                    => esc_html__( 'Cookie', 'trade-hub' ),
    'Roboto'                                    => esc_html__( 'Roboto', 'trade-hub' ),
    'Exo:400,300,400italic,600,800'             => esc_html__( 'Exo', 'trade-hub' ),
    'Kreon:400,300,700'                         => esc_html__( 'Kreon', 'trade-hub' ),
    'Lato:400,300,400italic,900,700'            => esc_html__( 'Lato', 'trade-hub' ),
    'Merriweather:400,400italic,300,900,700'    => esc_html__( 'Merriweather', 'trade-hub' ),
    'News+Cycle:400,700'                        => esc_html__( 'News Cycle', 'trade-hub' ),
    'Oxygen:400,300,700'                        => esc_html__( 'Oxygen', 'trade-hub' ),
    'Playball'                                  => esc_html__( 'Playball', 'trade-hub' ),
    'Ropa+Sans:400,400italic'                   => esc_html__( 'Ropa Sans', 'trade-hub' ),
    'Tangerine:400,700'                         => esc_html__( 'Tangerine', 'trade-hub' ),
    'Ubuntu:400,400italic,500,700'              => esc_html__( 'Ubuntu', 'trade-hub' ),
    'Yanone+Kaffeesatz:400,300,700'             => esc_html__( 'Yanone Kaffeesatz', 'trade-hub' ),
    'Raleway:100,100italic,400,700'             => esc_html__( 'Raleway', 'trade-hub' ),
    'Magra:400,700'                             => esc_html__( 'Magra', 'trade-hub' ),
    'Gudea:400,400i,700'                        => esc_html__( 'Gudea', 'trade-hub' ),
);

/*defaults values*/
$trade_hub_customizer_defaults['trade-hub-font-family-Primary']         = esc_html__( 'Roboto', 'trade-hub' );
$trade_hub_customizer_defaults['trade-hub-font-family-site-identity']   = esc_html__( 'Roboto', 'trade-hub' );
$trade_hub_customizer_defaults['trade-hub-font-family-title']           = esc_html__( 'Roboto', 'trade-hub' );


/*section*/
$trade_hub_sections['trade-hub-family'] =
    array(
        'priority'       => 20,
        'title'          => esc_html__( 'Font Family', 'trade-hub' ),
    );

$trade_hub_settings_controls['trade-hub-font-family-site-identity'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-font-family-site-identity'],
            
        ),
        'control' => array(
            'label'                 => esc_html__( 'Site Identity/Logo', 'trade-hub' ),
            'description'           => esc_html__( 'Site Identity font family', 'trade-hub' ),
            'section'               => 'trade-hub-family',
            'type'                  => 'select',
            'choices'               => $trade_hub_google_fonts,
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

/*setting - controls*/
$trade_hub_settings_controls['trade-hub-font-family-Primary'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-font-family-Primary'],
            
        ),
        'control' => array(
            'label'                 => esc_html__( 'Body ( paragraph ) Primary', 'trade-hub' ),
            'description'           => esc_html__( 'change primary font family', 'trade-hub' ),
            'section'               => 'trade-hub-family',
            'type'                  => 'select',
            'choices'               => $trade_hub_google_fonts,
            'priority'              => 15,
            'active_callback'       => ''
        )
    );


$trade_hub_settings_controls['trade-hub-font-family-title'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-font-family-title'],
            
        ),
        'control' => array(
            'label'                 => esc_html__( 'Title', 'trade-hub' ),
            'description'           => esc_html__( 'Title font will be changed', 'trade-hub' ),
            'section'               => 'trade-hub-family',
            'type'                  => 'select',
            'choices'               => $trade_hub_google_fonts,
            'priority'              => 20,
            'active_callback'       => ''
        )
    );