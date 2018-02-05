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

// conetion of  feature slider
require get_template_directory() .'/inc/customizer/featured-slider/feature-slider-setting.php';

// conetion of our -feature-section
require get_template_directory() .'/inc/customizer/home-feature-section/setting-frompage.php';

// conetion of our -service-section
require get_template_directory() .'/inc/customizer/home-our-service/our-service-page.php';

// conetion of  testimonial section
require get_template_directory() .'/inc/customizer/home-testimonial/setting.php';

// conetion of  call to action section
require get_template_directory() .'/inc/customizer/home-call-to-action/setting.php';

// conetion of  contact  section
require get_template_directory() .'/inc/customizer/home-contact-section/contact.php';

// conetion of  about-us  section
require get_template_directory() .'/inc/customizer/home-contact-section/about-us.php';

// conetion of  social link  section
// require get_template_directory() .'/inc/customizer/home-contact-section/social-link.php';

// conetion of  latest news
require get_template_directory() .'/inc/customizer/home-latest-news/from-page-setting.php';


