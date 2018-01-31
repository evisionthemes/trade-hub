<?php
	if( ! function_exists('trade_hub_feature_array') ) :

		/**
		* trade-hub fetaure section 
		* @since Trade Hub 1.0.0
		* @param null
     	* @return array
		*/

     	function  trade_hub_feature_array()
     	{
     		global $trade_hub_customizer_all_values;
     		$trade_hub_feature_number_page = absint( $trade_hub_customizer_all_values['trade-hub-our-select-number-page'] );
     		$trade_hub_fetaure_single_word = absint( $trade_hub_customizer_all_values['trade-hub-our-single-word-page'] );
     		$tarde_hub_feature_content_array[0]['trade-hub-feature-title'] = esc_html__('RESPONSIVE LAYOUT','trade-hub');
     		$tarde_hub_feature_content_array[0]['trade-hub-feature-content'] = esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','trade-hub');
     		$tarde_hub_feature_content_array[0]['trade']
     		$tarde_hub_feature_content_array[0]['trade-hub-feature-link'] = '#';
     		$tarde_hub_feature_content_array[0]['trade-hub-feature-image'] = get_template_directory_uri() .'/inc/assets/images/1.jpg';
     		
     		$trade_hub_our_feature_args = array();
     		$trade_hub_feature_icon_arrays = array();
     		$repeated_page = array('trade_hub_our-feature_icon','trade-hub-feature-pages-ids');

     		$trade_hub_our_feature_post = evision_customizer_get_repeated_all_value(4,$repeated_page);
     		$trade_hub_feature_posts_ids = array();

     		if ( null != $trade_hub_our_feature_post )
     		{
     			foreach( $trade_hub_our_feature_post as $trade_hub_our_feature_posts)
     			{
     				if( isset ($trade_hub_our_feature_posts['trade-hub-feature-pages-ids'] ) && 0! = ($trade_hub_our_feature_posts['trade-hub-feature-pages-ids']) )
     				{
     					$trade_hub_feature_posts_ids[] = $trade_hub_our_feature_posts['trade-hub-feature-pages-ids'] ;

     				}
     				if ( isset( $trade_hub_our_feature_posts['trade_hub_our-feature_icon'] ) )
     				{
     					$trade_hub_feature_page_icon = $$trade_hub_our_feature_posts['trade_hub_our-feature_icon'];
     				}
     				else
     				{
     					$trade_hub_feature_page_icon = 'fa-desktop';
     				}
     				$trade_hub_feature_icon_array[] = $trade_hub_feature_page_icon;
     			}
     		}

     		if ( !empty($trade_hub_our_feature_post) )
     		{
     			$trade_hub_our_feature_args =array(
     				'post_type' 	=> 'page',
     				'post_in'		=> $trade_hub_our_feature_args;
     				'post_per_page' => 4,
     				'order_by'		=> 'post_in'
     			);
     		}
     	}

     	// the_query
     	if ( !empty($trade_hub_our_feature_args) )
     	{
     		$i = 0;
     		$tarde_hub_feature_content_array  = array();
     		$tarde_hub_feature_post_query = new WP_Query();
     		if ( $tarde_hub_feature_post_query-> have_post() ) :
     			while( $tarde_hub_feature_post_query->have_post() ) :
     				$tarde_hub_feature_post_query->the_post();
     				$tarde_hub_feature_content_array[$i]['trade-hub-feature-title'] = get_the_title();
     				$tarde_hub_feature_content_array[$i]['trade-hub-feature-content'] = trade_hub_word_count($trade_hub_fetaure_single_word,get_content);
     				$tarde_hub_feature_content_array[$i]['trade-hub-feature-link']  = get_permlaink();
     				$thumb_image = '';
     				if ( has_post_thumbnail() )
     				{
     					$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id() ),'full' );
     					$thumb_image = $thumb[0];
     				}
     				$tarde_hub_feature_content_array[$i]['trade-hub-feature-image'] = $thumb_image;

     				if ( isset($trade_hub_feature_icon_arrays[$i]) )
     				{
     					$tarde_hub_feature_content_array[$i]['trade_hub_our-feature_icon'] =$trade_hub_feature_icon_arrays[$i];
     				}
     				else
     				{
     					$tarde_hub_feature_content_array[$i]['trade_hub_our-feature_icon'] = 'fa-desktop';
     				}
     				$i++;
     			endwhile;
     		endif;
     	}

	endif;		