<?php

if ( !function_exists('trade_hub_our_service') ) :
	/**
	* trade-hub our service section 
	* @since Trade Hub 1.0.0
	* @param null
 	* @return null
	*/
 	function  trade_hub_our_service()
 	{
 		global $trade_hub_customizer_all_values;
 		$trade_hub_our_service_single_word = absint($trade_hub_customizer_all_values['trade-hub-our-service-single-word']);
 		$trade_hub_our_service_title = esc_html__($trade_hub_customizer_all_values['trade-hub-our-service-title'], 'trade-hub' );
 		$trade_hub_our_service_sub_title = esc_html__($trade_hub_customizer_all_values['trade-hub-our-service-sub-title'], 'trade-hub' );
 		$trade_hub_our_service_first_title = esc_html__($trade_hub_customizer_all_values['trade-hub-our-service-first-title'], 'trade-hub' );
 		$trade_hub_our_service_first_sub_title = esc_html__($trade_hub_customizer_all_values['trade-hub-our-service-first-sub-title'], 'trade-hub' );
 		$trade_hub_our_service_second_title = esc_html__($trade_hub_customizer_all_values['trade-hub-our-service-second-title'], 'trade-hub' );
 		$trade_hub_our_service_second_sub_title = esc_html__($trade_hub_customizer_all_values['trade-hub-our-service-second-sub-title'], 'trade-hub' );
 		$trade_hub_our_service_third_title = esc_html__($trade_hub_customizer_all_values['trade-hub-our-service-third-title'], 'trade-hub' );
 		$trade_hub_our_service_third_sub_title = esc_html__($trade_hub_customizer_all_values['trade-hub-our-service-third-sub-title'], 'trade-hub' );
 		$trade_hub_our_service_image = $trade_hub_customizer_all_values['trade-hub-our-service-image'];

 		if ( ! $trade_hub_customizer_all_values['trade-hub-our-service-enable-option'] ) {
 			return null;
 		}
 		?>
 		<section class="portfolio-first section-wrapper container" id="portfolio">
	        <div class="background-image-div portfolio-left"  style="background-image: url(<?php echo esc_url($trade_hub_our_service_image);?>);"><!-- put background image link here -->
	        	<div class="bg-overlay">
	        	</div>
	       	</div><!-- background image div -->
	       	<div class="text-div right">
	         	<h2><?php echo esc_html($trade_hub_our_service_title);?></h2>
	        	<p class="portfolio-description"><?php echo wp_kses_post( trade_hub_words_count ( $trade_hub_our_service_single_word, $trade_hub_our_service_sub_title) ) ; ?></p>
	        	<div class="listing">
	            	<h3><?php echo esc_html($trade_hub_our_service_first_title);?></h3>
	            	<p><?php echo wp_kses_post( trade_hub_words_count ($trade_hub_our_service_single_word, $trade_hub_our_service_first_sub_title) ) ; ?></p>

	            	<h3><?php echo esc_html($trade_hub_our_service_second_title);?></h3>
	            	<p><?php echo wp_kses_post( trade_hub_words_count ($trade_hub_our_service_single_word, $trade_hub_our_service_second_sub_title) );?></p>

	            	<h3><?php echo esc_html($trade_hub_our_service_third_title);?></h3>
	            	<p><?php echo wp_kses_post( trade_hub_words_count ($trade_hub_our_service_single_word, $trade_hub_our_service_third_sub_title) ) ; ?></p>
	          	</div>
	       	</div><!-- right section -->
	    </section><!--portfolio section -->   

 	<?php
 	}


endif;
add_action('trade_hub_homepage','trade_hub_our_service',40);