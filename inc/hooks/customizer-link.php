<?php

if ( ! function_exists('customizer_link') ) : 


  /**
    * customizer link 
    *
    * @since business-craft 1.0.0
    *
    * @param null
    * @return null
    */


 function customizer_link() {
    global $trade_hub_customizer_all_values;   

    if ( current_user_can('manage_options') && ( 'posts' != get_option('show_on_front') &&  0 == $trade_hub_customizer_all_values['trade-hub-about-us-enable'] &&  0 == $trade_hub_customizer_all_values['trade-hub-feature-slider-enable'] &&  0 == $trade_hub_customizer_all_values['trade-hub-call-action-enable-option']  &&   0 == $trade_hub_customizer_all_values['trade-hub-our-feature-enable'] &&  0 == $trade_hub_customizer_all_values['trade-hub-latest-news-enable-option'] &&  0 == $trade_hub_customizer_all_values['trade-hub-our-service-enable-option'] &&  0 == $trade_hub_customizer_all_values['trade-hub-testimonial-enable-option'] ) ) :
    
    ?>
    <section class="container trade-hub-no-opton">
        <p>All Section are based on page. Enable each Section from customizer for 
          slider: main-homePage->feature-slider->Enable feature slider. likewise to other sections </p>
        <a href="<?php echo esc_url( admin_url('/customize.php') );?>"><?php esc_html_e( 'Goto Customizer','trade-hub' );?></a>
    </section>
  <?php
endif;
 }

endif;
add_action('trade_hub_show_message_if_no_option_selected','customizer_link',10);