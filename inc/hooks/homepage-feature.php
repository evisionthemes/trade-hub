<?php
	if( ! function_exists('trade_hub_feature_array') ) :

		/**
		* trade-hub our fetaure section 
		* @since Trade Hub 1.0.0
		* @param null
     	* @return array
		*/

     	function  trade_hub_feature_array()
     	{
     		global $trade_hub_customizer_all_values;
     		
     		$trade_hub_fetaure_single_word = absint( $trade_hub_customizer_all_values['trade-hub-our-single-word-page'] );
     		$tarde_hub_feature_content_array = array();
     		$tarde_hub_feature_content_array[0]['trade-hub-feature-title'] = esc_html__('RESPONSIVE LAYOUT','trade-hub');
     		$tarde_hub_feature_content_array[0]['trade-hub-feature-content'] = esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','trade-hub');
     		$tarde_hub_feature_content_array[0]['trade-hub-our-feature-icon'] = 'fa-desktop';
     		$tarde_hub_feature_content_array[0]['trade-hub-feature-link'] = '#';
     		$tarde_hub_feature_content_array[0]['trade-hub-feature-image'] = get_template_directory_uri() .'/inc/assets/images/1.jpg';
     		
     		$trade_hub_our_feature_args = array();
     		$trade_hub_feature_icon_arrays = array();
     		$repeated = array('trade-hub-our-feature-icon','trade-hub-feature-pages-ids');
     		

     		$trade_hub_our_feature_post = evision_customizer_get_repeated_all_value(4,$repeated);
     		$trade_hub_feature_posts_ids = array();
     		if ( null != $trade_hub_our_feature_post )
     		{
     			foreach( $trade_hub_our_feature_post as $trade_hub_our_feature_posts)
     			{
     				if( isset ($trade_hub_our_feature_posts['trade-hub-feature-pages-ids'] ) && 0 != ($trade_hub_our_feature_posts['trade-hub-feature-pages-ids']) )
     				{
     					$trade_hub_feature_posts_ids[] = $trade_hub_our_feature_posts['trade-hub-feature-pages-ids'] ;
	     				if ( isset( $trade_hub_our_feature_posts['trade_hub_our-feature_icon'] ) )
	     				{
	     					$trade_hub_feature_page_icon = $$trade_hub_our_feature_posts['trade_hub_our-feature_icon'];
	     				}
	     				else
	     				{
	     					$trade_hub_feature_page_icon = 'fa-desktop';
	     				}
	     				$trade_hub_feature_icon_arrays[] = $trade_hub_feature_page_icon;

     				}
     			}	

	     		if ( !empty($trade_hub_feature_posts_ids) )
	     		{
	     			$trade_hub_our_feature_args =array(
	     				'post_type' 	=> 'page',
	     				'post_in'		=> $trade_hub_feature_posts_ids,
	     				'posts_per_page' => 4,
	     				'orderby'		=> 'post__in'
	     			);
	     		}
	     	}

	     	// the_query
	     	if ( !empty($trade_hub_our_feature_args) )
	     	{
	     		// var_dump($trade_hub_our_feature_args); 
	     		
	     		$tarde_hub_feature_content_array  = array();
	     		$tarde_hub_feature_post_query = new WP_Query( $trade_hub_our_feature_args);
	     		
	     		if ( $tarde_hub_feature_post_query->have_posts() ) :
	     			$i = 0;
	     			while( $tarde_hub_feature_post_query->have_posts() ) :

	     				$tarde_hub_feature_post_query->the_post();
	     				$tarde_hub_feature_content_array[$i]['trade-hub-feature-title'] = get_the_title();
	     				// var_dump($tarde_hub_feature_content_array);
	     				
	     				$tarde_hub_feature_content_array[$i]['trade-hub-feature-content'] = trade_hub_words_count($trade_hub_fetaure_single_word,get_the_content());

	     				$tarde_hub_feature_content_array[$i]['trade-hub-feature-link']  = get_permalink();
	     				$thumb_image = '';
	     				if ( has_post_thumbnail() )
	     				{
	     					$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id() ),'full' );
	     					$thumb_image = $thumb[0];
	     				}
	     				$tarde_hub_feature_content_array[$i]['trade-hub-feature-image'] = $thumb_image;

	     				if ( isset($trade_hub_feature_icon_arrays[$i]) )
	     				{
	     					$tarde_hub_feature_content_array[$i]['trade-hub-our-feature-icon'] =$trade_hub_feature_icon_arrays[$i];
	     				}
	     				else
	     				{
	     					$tarde_hub_feature_content_array[$i]['trade-hub-our-feature-icon'] = 'fa-desktop';

	     				}
	     				$i++;
	     			endwhile;
	     			wp_reset_postdata();
	     		endif;
	     	}
	     	// var_dump($tarde_hub_feature_content_array);
	     	return $tarde_hub_feature_content_array;


		}     	
	endif;		

if ( !function_exists('trade_hub_feature_section') ) :

	/**
     * our-Featured section
     *
     * @since trade-hub 1.0.0
     *
     * @param null
     * @return null
     *
     */
	function trade_hub_feature_section()
	{

		global $trade_hub_customizer_all_values;

		if ( 1 != $trade_hub_customizer_all_values['trade-hub-our-feature-section-enable'] )
		{
			return null;
		}

		$trade_hub_our_feature_array = trade_hub_feature_array();
		
		if(is_array($trade_hub_our_feature_array))
			// var_dump($trade_hub_our_feature_array);
		{
			$trade_hub_title_text = $trade_hub_customizer_all_values['trade-hub-our-feature-title-text'];
			$trade_hub_feature_number_page = absint( $trade_hub_customizer_all_values['trade-hub-our-select-number-page'] );
			
			?>
			<section class="feature-section section-wrapper" id="trade-hub-feature">
		        <div class="container">
		            <div class="row">
		             	<h1><?php echo esc_html($trade_hub_title_text); ?></h1> 
		             	          
		             		<div class="feature-icon-content-wrapper col-md-12">

		             			<?php
		             				$i = 0;
		             				foreach ($trade_hub_our_feature_array as $trade_hub_our_feature_arrays)
		             				{
		             					if ( $trade_hub_feature_number_page < $i )
		             					{
		             						break;
		             					}?> 

		             					<div class="col-md-4 col-sm-4 col-xs-12">
				                  			<div class="feature-content">
				                     			<i class="fa fa-desktop"></i>
				                     			<div class="content-right">
				                        			<h3><a href="#"><?php echo esc_html($trade_hub_our_feature_arrays['trade-hub-feature-title']);
				                        			 ?></a></h3>
				                        			<p><?php echo wp_kses_post($trade_hub_our_feature_arrays['trade-hub-feature-content']);?></p>
				                     			</div><!--content -->
				                  			</div><!-- feature content -->
		               					</div><!-- col-md-12 -->
		             				    <?php
				               			$i++;
				               		}
				               		?>         
		          	   		</div><!-- md-6 -->
            
		         		 </div><!-- row -->
		        	</div><!-- container -->
   			</section><!-- feature section end --> 

   			<section class="about-section section-wrapper"><!--about section start -->
		      	<div class="container">
		        	<div class="row">
		          		<div class="feature-text-content-wrapper col-md-12">
		              		<div class="content-left clearfix">   
		                		<div class="col-md-6 col-xs-12 col-sm-6">
		                  			<div class="left-text-content feature-section">
		                    			<h3><a href="#">Why choose us</a></h3>
					                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Lorem ipsum dolor sit amet, 
					                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Lorem ipsum dolor sit amet, consectetur adipiscing elit
					                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Lorem ipsum dolor sit amet, consectetur adipiscing elitconsectetur adipiscing elit</p>
		                    			<a href="#" class="know-more">know more</a>
		                  			</div>
		               			</div><!-- col-md-6 -->                  
		             		</div>
		           		</div>
		        	</div>
		      	</div>
    		</section><!-- about section -->

		<?php }
	}
endif;
add_action('trade_hub_homepage','trade_hub_feature_section',20);