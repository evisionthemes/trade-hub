<?php

if (!function_exists('tarde_hub_about_us_array') ) :
	
	function tarde_hub_about_us_array()
	{
		global $trade_hub_customizer_all_values;
		$trade_hub_about_us_single_word  = absint( $trade_hub_customizer_all_values['trade-hub-single-word'] );
		$trade_hub_about_us_button_text  = esc_html( $trade_hub_customizer_all_values['trade-hub-button-text'] );
		$trade_hub_about_us_content_array = array();
		$trade_hub_about_us_content_array[1]['trade-hub-about-us-title'] = esc_html__('WHY CHOOSE US','trade-huub');
		$trade_hub_about_us_content_array[1]['trade-hub-about-us-content'] = esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.','trade-huub');
		$trade_hub_about_us_content_array[1]['trade-hub-about-us-link'] = '#';
		$trade_hub_about_us_content_array[1]['trade-hub-about-us-image'] = get_template_directory_uri() .'/inc/images/1.jpg';

		$trade_hub_about_us_pages = array('trdae-hub-about-us-page-ids');
		$tarde_hub_about_pages_ids = array();

		if (null != $trade_hub_about_us_pages)
		{
			foreach ( $trade_hub_about_us_pages as $trade_hub_about_us_page )
			{
				if ( 0 != $trade_hub_about_us_page['trdae-hub-about-us-page-ids'] )
				{
					$tarde_hub_about_pages_ids[] = $trade_hub_about_us_page['trdae-hub-about-us-page-ids'];
				}
			}

			if ( 0 !=  $tarde_hub_about_pages_ids )
			{
				$trade_hub_about_us_ars = array(
					'post_type'			=> 'page',
					'posts_per_page'	=> 1,
					'post__in'			=> array_map(absint, $tarde_hub_about_pages_ids),
					'orderby'			=> 'post__in',
				);
			}
		}
		
		//the_query
		if ( !empty($trade_hub_about_us_ars) ) 
		{
			$trade_hub_about_us_content_array = array();
			$trade_hub_about_us_query = new WP_Query($trade_hub_about_us_ars); 
			if ( $trade_hub_about_us_query->have_posts() ) :
				$i = 0;
				while( $trade_hub_about_us_query->have_posts() ) :
					$trade_hub_about_us_query->the_post();
					$trade_hub_about_us_content_array[$i]['trade-hub-about-us-title'] = get_the_title();
					$trade_hub_about_us_content_array[$i]['trade-hub-about-us-content'] = trade_hub_words_count( $trade_hub_about_us_single_word ,get_the_content());
					$trade_hub_about_us_content_array[$i]['trade-hub-about-us-link']   =  get_permalink();
					$thumb_image = '';
					if ( has_post_thumbnail() )
					{
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
						$thumb_image = $thumb[0];
					}
					$trade_hub_about_us_content_array[$i]['trade-hub-about-us-image'] = $thumb_image;
					$i++;
				endwhile;
				wp_reset_post();
			endif;
			return trade_hub_about_us_content_array;
		}
	}

endif;

if ( !function_exists('tarde_hub_about_us') )  :

	function tarde_hub_about_us()
	{
		global $trade_hub_customizer_all_values;

		if ( 1  != $trade_hub_customizer_all_values['trade-hub-about-us-enable'] )
		{
			return null;
		}
		$trade_hub_about_number_page = $trade_hub_customizer_all_values['trade-hub-select_number_page'];
		$trade_hub_about_array = tarde_hub_about_us_array();
		if ( as_array($trade_hub_about_array) )
		{?>
			<section class="about-section section-wrapper"><!-- background image style here -->
			    <div class="container">
			        <div class="row">
			        	<?php 
			        		$i = 0;
			        		foreach( $trade_hub_about_array as $trade_hub_about_arrays )
			        		{
			        			if ( $trade_hub_about_number_page < $i )
			        			{
			        				break;
			        			}

			        	?>
			          <div class="feature-text-content-wrapper col-md-12">
			              <div class="content-left clearfix">   
			                <div class="col-md-6 col-xs-12 col-sm-6">
			                  <div class="left-text-content feature-section">
			                    <h3><a href="#"><?php echo esc_html($trade_hub_about_arrays['trade-hub-about-us-title']);?></a></h3>
			                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Lorem ipsum dolor sit amet, 
			                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Lorem ipsum dolor sit amet, consectetur adipiscing elit
			                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Lorem ipsum dolor sit amet, consectetur adipiscing elitconsectetur adipiscing elit</p>
			                    <a href="#" class="know-more">know more</a>
			                  </div>
			                </div><!-- col-md-6 -->                  
			              </div>
			           </div>
			           <?php
			           $i++;
			       }
			           ?>
			        </div>
		       </div>
		    </section><!-- about section -->

		<?php 
		}
	}
endif;
add_action('trade_hub_homepage','tarde_hub_about_us',18);