<?php
global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

/*font array*/
global $trade_hub_google_fonts;
$trade_hub_google_fonts = array(
    'Archivo+Narrow:400,400italic,700' => 'Archivo Narrow',
    'Bitter:400,400italic,700' => 'Bitter',
    'Cookie' => 'Cookie',
    'Roboto'=> 'Roboto',
    'Exo:400,300,400italic,600,800' => 'Exo',
    'Kreon:400,300,700' => 'Kreon',
    'Lato:400,300,400italic,900,700' => 'Lato',
    'Merriweather:400,400italic,300,900,700' => 'Merriweather',
    'News+Cycle:400,700' => 'News Cycle',
    'Oxygen:400,300,700' => 'Oxygen',
    'Playball' => 'Playball',
    'Ropa+Sans:400,400italic' => 'Ropa Sans',
    'Tangerine:400,700' => 'Tangerine',
    'Ubuntu:400,400italic,500,700' => 'Ubuntu',
    'Yanone+Kaffeesatz:400,300,700' => 'Yanone Kaffeesatz',
    'Raleway:100,100italic,400,700' => 'Raleway',
    'Magra:400,700' => 'Magra',
    'Gudea:400,400i,700' => 'Gudea',

);

/*defaults values*/
$trade_hub_customizer_defaults['trade-hub-font-family-Primary'] = 'Gudea:400,400i,700';
$trade_hub_customizer_defaults['trade-hub-font-family-site-identity'] = 'Roboto';
$trade_hub_customizer_defaults['trade-hub-font-family-title'] = 'Magra:400,700';


/*section*/
$trade_hub_sections['trade-hub-family'] =
    array(
        'priority'       => 20,
        'title'          => __( 'Font Family', 'trade-hub' ),
    );

$trade_hub_settings_controls['trade-hub-font-family-site-identity'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-font-family-site-identity'],
            
        ),
        'control' => array(
            'label'                 => __( 'Site Identity/Logo', 'trade-hub' ),
            'description'           => __( 'Site Identity font family', 'trade-hub' ),
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
            'label'                 => __( 'Body ( paragraph ) Primary', 'trade-hub' ),
            'description'           => __( 'change primary font family', 'trade-hub' ),
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
            'label'                 => __( 'Title', 'trade-hub' ),
            'description'           => __('title font will be changed', 'trade-hub'),
            'section'               => 'trade-hub-family',
            'type'                  => 'select',
            'choices'               => $trade_hub_google_fonts,
            'priority'              => 20,
            'active_callback'       => ''
        )
    );