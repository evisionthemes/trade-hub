<?php

global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

// create a panel for our-feature section

$trade_hub_panels['trade-hub-main-homepage-panel'] = 
	array(
		'title'  => esc_html__('Main-HomePage','trade-hub'),
		'priority' => 200
	);

// conetion of our -feature-section
require get_template_directory() .'/inc/customizer/home-feature-section/setting-frompage.php';

// conetion of our -service-section
require get_template_directory() .'/inc/customizer/home-our-service/our-service-page.php';
