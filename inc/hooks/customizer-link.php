<?php

if ( ! function_exists('customizer_link') ) : 


  /**
    * customizer link 
    *
    * @since trade-hub 1.0.0
    *
    * @param null
    * @return null
    */


	function customizer_link()
	{
		global $trade_hub_customizer_all_values;
		

		 if ( 1 != $trade_hub_customizer_all_values['trade-hub-feature-slider-enable'] && 1 != $trade_hub_customizer_all_values['trade-hub-our-service-enable-option']  &&  1 != $trade_hub_customizer_all_values['trade-hub-our-feature-section-enable']  ){
		 	
        if ( current_user_can( 'edit_theme_options' ) ) { ?>
            <section class="wrapper display-info">
                <div class="container">

                   <?php
                   
                    printf(esc_html__('All Section are based on page. Enable each Section from customizer for %1$s slider: Home page->slider->Enable feature slider. likewise to other sections %2$s %3$s click here %4$s ','trade-hub'), '<br />','<br />','<a class="button" href="' . esc_url( admin_url( 'customize.php' ) ) . '">', '</a>');
                    ?>

                   
                </div>
            </section>
             <?php }  
	}
}

endif ;
add_action('trade_hub_customizer_link','customizer_link',10);