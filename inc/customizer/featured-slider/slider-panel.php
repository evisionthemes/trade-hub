<?php
global $trade_hub_panels;
/*creating panel for fonts-setting*/
$trade_hub_panels['trade-hub-featured-slider'] =
    array(
        'title'          => __( 'Home/Front Main Slider', 'trade-hub' ),
        'priority'       => 150
    );

/*slider selection from slider options */
require get_template_directory().'/inc/customizer/featured-slider/enable-slider.php';

/*slider selection from slider options */
require get_template_directory().'/inc/customizer/featured-slider/slider-settings.php';

/*slider selection from slider from page */
require get_template_directory().'/inc/customizer/featured-slider/slider-from-page.php';

/*slider selection from slider category */
require get_template_directory().'/inc/customizer/featured-slider/slider-from-category.php';

/*slider selection from custom slider property controll */
require get_template_directory().'/inc/customizer/featured-slider/slider-property.php';