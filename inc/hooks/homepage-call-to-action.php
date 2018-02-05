<?php

if ( !function_exists('trade_hub_call_to_action') ) :
/**
	* trade-hub call-to-action section 
	* @since Trade Hub 1.0.0
	* @param null
 	* @return null
	*/
	function trade_hub_call_to_action()
	{
		global $trade_hub_customizer_all_values;
		$trade_hub_call_action_main_text = esc_html($trade_hub_customizer_all_values['trade-hub-call-action-main-text']);
		$trade_hub_call_action_button_text = esc_html($trade_hub_customizer_all_values['trade-hub-call-action-button-text']);
		$trade_hub_call_action_button_url = $trade_hub_customizer_all_values['trade-hub-call-action-link'];

		if ( 1 != $trade_hub_customizer_all_values['trade-hub-call-action-enable-option'] )
		{
			return null;
		}?>
		<section class="callback-section section-wrapper" id="trade-hub-callback">
	        <div class="overlay-callback">
	        	<div class="container">
	            	<div class="col-md-7 call-toaction-text">
	              		<h1><?php echo esc_html($trade_hub_call_action_main_text); ?></h1>
	            	</div><!-- title -->
	            	<div class="col-md-5 call-to-action-btn">
	              		<a href="<?php echo esc_url($trade_hub_call_action_button_url);?>" class="border-btn" ><?php echo esc_html($trade_hub_call_action_button_text); ?></a>
	            	</div><!-- btn -->
	            </div><!-- container -->
	       </div><!-- overlay -->
	    </section><!-- call back section end --> 
	<?php 
	}

endif;
add_action('trade_hub_homepage','trade_hub_call_to_action',60);