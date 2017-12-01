<?php
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

/*defaults values*/
$trade_hub_customizer_defaults['trade-hub-enable-static-page'] = 1;

$trade_hub_customizer_defaults['trade-hub-alternate-layout'] = 1;
$trade_hub_customizer_defaults['trade-hub-default-layout'] = 'right-sidebar';
$trade_hub_customizer_defaults['trade-hub-single-post-image-align'] = 'full';
$trade_hub_customizer_defaults['trade-hub-excerpt-length'] = '50';
$trade_hub_customizer_defaults['trade-hub-archive-layout'] = 'thumbnail-and-excerpt';
$trade_hub_customizer_defaults['trade-hub-archive-image-align'] = 'full';

$trade_hub_sections['trade-hub-layout-options'] =
    array(
        'priority'       => 20,
        'title'          => __( 'Layout Options', 'trade-hub' ),
        'panel'          => 'trade-hub-theme-options',
    );

    /*home page static page display*/
$trade_hub_settings_controls['trade-hub-enable-static-page'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-enable-static-page'],
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Static Front Page', 'trade-hub' ),
            'description'           =>  __( 'If you disable this the static page will be disappera form the home page and other section from customizer will reamin as it is', 'trade-hub' ),
            'section'               => 'trade-hub-layout-options',
            'type'                  => 'checkbox',
            'priority'              => 10,
        )
    );

    /*home page static page display*/
$trade_hub_settings_controls['trade-hub-alternate-layout'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-alternate-layout'],
        ),
        'control' => array(
            'label'                 =>  __( 'Alternate Archive Image Alignment', 'trade-hub' ),
            'section'               => 'trade-hub-layout-options',
            'type'                  => 'checkbox',
            'priority'              => 10,
        )
    );
/*layout-options option responsive lodader start*/

$trade_hub_settings_controls['trade-hub-default-layout'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-default-layout'],
        ),
        'control' => array(
            'label'                 =>  __( 'Default Layout', 'trade-hub' ),
            'description'           =>  __( 'Please note that this section can be overridden for individual page/posts', 'trade-hub' ),
            'section'               => 'trade-hub-layout-options',
            'type'                  => 'select',
            'choices'               => array(
                'right-sidebar' => __( 'Content - Primary Sidebar', 'trade-hub' ),
                'left-sidebar' => __( 'Primary Sidebar - Content', 'trade-hub' ),
                'no-sidebar' => __( 'No Sidebar', 'trade-hub' )
            ),
            'priority'              => 10,
            'active_callback'       => ''
        )
    );


$trade_hub_settings_controls['trade-hub-single-post-image-align'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-single-post-image-align'],
        ),
        'control' => array(
            'label'                 =>  __( 'Alignment Of Image In Single Post/Page', 'trade-hub' ),
            'section'               => 'trade-hub-layout-options',
            'type'                  => 'select',
            'choices'               => array(
                'full' => __( 'Full', 'trade-hub' ),
                'right' => __( 'Right', 'trade-hub' ),
                'left' => __( 'Left', 'trade-hub' ),
                'no-image' => __( 'No image', 'trade-hub' )
            ),
            'priority'              => 40,
            'description'           =>  __( 'Please note that this setting can be override from individual post/page', 'trade-hub' ),
        )
    );

    $trade_hub_settings_controls['trade-hub-excerpt-length'] =
        array(
            'setting' =>     array(
                'default'              => $trade_hub_customizer_defaults['trade-hub-excerpt-length'],
            ),
            'control' => array(
                'label'                 =>  __( 'Excerpt Length (in words)', 'trade-hub' ),
                'section'               => 'trade-hub-layout-options',
                'type'                  => 'number',
                'priority'              => 40,
            )
        );

        $trade_hub_settings_controls['trade-hub-archive-layout'] =
            array(
                'setting' =>     array(
                    'default'              => $trade_hub_customizer_defaults['trade-hub-archive-layout'],
                ),
                'control' => array(
                    'label'                 =>  __( 'Archive Layout', 'trade-hub' ),
                    'section'               => 'trade-hub-layout-options',
                    'type'                  => 'select',
                    'choices'               => array(
                        'excerpt-only' => __( 'Excerpt Only', 'trade-hub' ),
                        'thumbnail-and-excerpt' => __( 'Thumbnail and Excerpt', 'trade-hub' ),
                        'full-post' => __( 'Full Post', 'trade-hub' ),
                        'thumbnail-and-full-post' => __( 'Thumbnail and Full Post', 'trade-hub' ),
                    ),
                    'priority'              => 55,
                )
            );