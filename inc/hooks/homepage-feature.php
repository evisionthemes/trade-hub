<?php
if ( ! function_exists( 'trade_hub_home_feature_array' ) ) :
    /**
     * trade_hub_feature_section_creation
     *
     * @since trade-hub 1.0.0
     *
     * @param null
     * @return array
     */
    function trade_hub_home_feature_array(  ){
        global $trade_hub_customizer_all_values;
        $trade_hub_home_feature_number = absint($trade_hub_customizer_all_values['trade-hub-our-select-number-page']);
        $trade_hub_home_feature_single_words = absint($trade_hub_customizer_all_values['trade-hub-our-single-word-page']);

        /*$trade_hub_home_feature_contents_array = array();

        $trade_hub_home_feature_contents_array[1]['trade-hub-home-feature-title'] = esc_html__('Clean Designs', 'trade-hub');
        $trade_hub_home_feature_contents_array[1]['trade-hub-home-feature-content'] = esc_html__("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.", 'trade-hub');
        $trade_hub_home_feature_contents_array[1]['trade-hub-home-feature-link'] = '#';
        $trade_hub_home_feature_contents_array[1]['trade-hub-home-feature-page-icon'] = 'fa-desktop';*/

        $trade_hub_icons_array = array('trade-hub-home-feature-page-icon');
        $trade_hub_home_feature_page = array('trade-hub-home-feature-pages-ids');
        
        $trade_hub_icons_arrays = evision_customizer_get_repeated_all_value(3 , $trade_hub_icons_array );
        

        $trade_hub_home_feature_posts = evision_customizer_get_repeated_all_value(3 , $trade_hub_home_feature_page);
        $trade_hub_home_feature_posts_ids = array();

        
        if( null != $trade_hub_home_feature_posts )
        {
            foreach( $trade_hub_home_feature_posts as $trade_hub_home_feature_post )
            {
                if( 0 != $trade_hub_home_feature_post['trade-hub-home-feature-pages-ids'] )
                {
                    $trade_hub_home_feature_posts_ids[] = $trade_hub_home_feature_post['trade-hub-home-feature-pages-ids'];
                }
                

                $trade_hub_home_feature_post =' fa-desktop';
                /*if( isset( $trade_hub_home_feature_post['trade-hub-our-feature-icon'] )) {
                    $trade_hub_home_feature_post = $trade_hub_home_feature_post['trade-hub-our-feature-icon'];
                }*/
                if( isset( $trade_hub_home_feature_post['trade-hub-home-feature-page-icon'] )) {
                    $trade_hub_home_feature_post = $trade_hub_home_feature_post['trade-hub-home-feature-page-icon'];
                }
                $trade_hub_icons_arrays[] = $trade_hub_home_feature_post;

            }
            if( !empty( $trade_hub_home_feature_posts_ids ))
            {
                $trade_hub_home_feature_args =    array(
                    'post_type' => 'page',
                    'post__in' => array_map( 'absint', $trade_hub_home_feature_posts_ids ),
                    'posts_per_page' => absint($trade_hub_home_feature_number),
                    'orderby' => 'post__in'
                );
            }
        }
       /* echo "<pre>";
        print_r($trade_hub_icons_arrays);
        die;*/
       
            // }

        // the query
        if( !empty( $trade_hub_home_feature_args ))
        {

            $trade_hub_home_feature_contents_array = array(); /*again empty array*/
            $trade_hub_home_feature_post_query = new WP_Query( $trade_hub_home_feature_args );
            if ( $trade_hub_home_feature_post_query->have_posts() ) :
                $i = 0;
                while ( $trade_hub_home_feature_post_query->have_posts() ) : $trade_hub_home_feature_post_query->the_post();
                    $trade_hub_home_feature_contents_array[$i]['trade-hub-home-feature-title'] = get_the_title();

                    $trade_hub_home_feature_contents_array[$i]['trade-hub-home-feature-content'] = has_excerpt() ? get_the_excerpt() : trade_hub_words_count( $trade_hub_home_feature_single_words, get_the_content() );
                    
                    $trade_hub_home_feature_contents_array[$i]['trade-hub-home-feature-link'] = get_permalink();

                    $trade_hub_home_feature_contents_array[$i]['trade-hub-home-feature-page-icon'] = 'fa-desktop';

                    if(isset( $trade_hub_icons_arrays[$i] )) {
                        $trade_hub_home_feature_contents_array[$i]['trade-hub-home-feature-page-icon'] = $trade_hub_icons_arrays[$i];
                    }
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
       /* echo "<pre>";
        print_r( $trade_hub_home_feature_contents_array );
        die;*/
        return $trade_hub_home_feature_contents_array;
    }
endif;

if ( ! function_exists( 'trade_hub_home_feature' ) ) :
   /**
     * trade_hub_feature_section_creation
     *
     * @since trade-hub 1.0.0
     *
     * @param null
     * @return array
     */
    function trade_hub_home_feature()
    {
        global $trade_hub_customizer_all_values;
        if( ! $trade_hub_customizer_all_values['trade-hub-our-feature-enable'] ) {
            return null;
        }
        $trade_hub_feature_arrays = trade_hub_home_feature_array();
        
        if( is_array( $trade_hub_feature_arrays ))
        {
            $trade_hub_home_feature_number = absint($trade_hub_customizer_all_values['trade-hub-our-select-number-page']);
            $trade_hub_home_feature_title = $trade_hub_customizer_all_values['trade-hub-our-feature-title-text'];
            ?>          

           <section class="feature-section section-wrapper" id="trade-hub-feature">
		        <div class="container">
		            <div class="row">
		             	<h1><?php echo esc_html($trade_hub_home_feature_title); ?></h1> 
		             	          
		             		<div class="feature-icon-content-wrapper col-md-12">

		             			<?php
		             				$i = 0;
                                    

		             				foreach ($trade_hub_feature_arrays as $trade_hub_feature_array)
		             				{
		             					if ( $trade_hub_home_feature_number < $i )
		             					{
		             						break;
		             					}?> 

		             					<div class="col-md-<?php echo intval( 12/$trade_hub_home_feature_number);?> col-sm-<?php echo intval( 12/$trade_hub_home_feature_number);?> col-xs-12">
				                  			<div class="feature-content">
				                     			<i class="fa <?php echo esc_attr($trade_hub_feature_array['trade-hub-home-feature-page-icon']);?>"></i>
				                     			<div class="content-right">
				                        			<h3><a href="<?php echo esc_url($trade_hub_feature_array['trade-hub-home-feature-link']);?>"><?php echo esc_html($trade_hub_feature_array['trade-hub-home-feature-title']);
				                        			 ?></a></h3>
				                        			<p><?php echo wp_kses_post($trade_hub_feature_array['trade-hub-home-feature-content']);?></p>
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
            <?php
        }
    }
endif;
add_action( 'trade_hub_homepage', 'trade_hub_home_feature', 20 );