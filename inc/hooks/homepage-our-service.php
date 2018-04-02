<?php
if ( ! function_exists( 'trade_hub_our_service_array' ) ) :
    /**
     * trade_hub_testimonial
     *
     * @since trade-hub 1.0.0
     *
     * @param null
     * @return array
     */
    function trade_hub_our_service_array(  ){
        global $trade_hub_customizer_all_values;
        $trade_hub_our_service_number = absint($trade_hub_customizer_all_values['trade-hub-our-service-number-page']);
        $trade_hub_our_service_single_words = absint($trade_hub_customizer_all_values['trade-hub-our-service-single-word']);

        $trade_hub_our_service_contents_array = array();

        $trade_hub_our_service_contents_array[1]['trade-hub-our_service-title'] = esc_html__('JOHN DOE', 'trade-hub');
        $trade_hub_our_service_contents_array[1]['trade-hub-our_service-content'] = esc_html__("Importance of education tells us the value of education in our life. Education means a lot in everyone’s life as it facilitates our learning, knowledge and skill.", 'trade-hub');
        $trade_hub_our_service_contents_array[1]['trade-hub-our_service-link'] = '#';
        
        $trade_hub_our_service_page = array('trade-hub-our-service-page-id');
        $trade_hub_our_service_posts = evision_customizer_get_repeated_all_value(3 , $trade_hub_our_service_page);
        $trade_hub_our_service_posts_ids = array();

        if( null != $trade_hub_our_service_posts )
        {
            foreach( $trade_hub_our_service_posts as $trade_hub_our_service_post )
            {
                if( 0 != $trade_hub_our_service_post['trade-hub-our-service-page-id'] )
                {
                    $trade_hub_our_service_posts_ids[] = $trade_hub_our_service_post['trade-hub-our-service-page-id'];
                }
                 
            }
            if( !empty( $trade_hub_our_service_posts_ids ))
            {
                $trade_hub_our_service_args =    array(
                    'post_type' => 'page',
                    'post__in' => array_map( 'absint', $trade_hub_our_service_posts_ids ),
                    'posts_per_page' => absint($trade_hub_our_service_number),
                    'orderby' => 'post__in'
                );
            }
        }
        // the query
        if( !empty( $trade_hub_our_service_args ))
        {

            $trade_hub_our_service_contents_array = array(); /*again empty array*/
            $trade_hub_our_service_post_query = new WP_Query( $trade_hub_our_service_args );
            if ( $trade_hub_our_service_post_query->have_posts() ) :
                $i = 1;
                while ( $trade_hub_our_service_post_query->have_posts() ) : $trade_hub_our_service_post_query->the_post();
                    $trade_hub_our_service_contents_array[$i]['trade-hub-our_service-title'] = get_the_title();
                    if (has_excerpt())
                    {
                        $trade_hub_our_service_contents_array[$i]['trade-hub-our_service-content'] = get_the_excerpt();
                    }
                    else
                    {
                        $trade_hub_our_service_contents_array[$i]['trade-hub-our_service-content'] = trade_hub_words_count( $trade_hub_our_service_single_words ,get_the_content());
                    }
                    $trade_hub_our_service_contents_array[$i]['trade-hub-our_service-link'] = get_permalink();
                    
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        return $trade_hub_our_service_contents_array;
    }
endif;

if ( ! function_exists( 'trade_hub_our_service' ) ) :
       /**
     * trade_hub_testimonial
     *
     * @since trade-hub 1.0.0
     *
     * @param null
     * @return array
     *
     */
    function trade_hub_our_service()
    {
        global $trade_hub_customizer_all_values;
        if( ! $trade_hub_customizer_all_values['trade-hub-our-service-enable-option'] )
        {
            return null;
        }
        $trade_hub_our_service_arrays = trade_hub_our_service_array(  );
        if( is_array( $trade_hub_our_service_arrays ))
        {
            $trade_hub_our_service_single_words = absint($trade_hub_customizer_all_values['trade-hub-our-service-single-word']);
            $trade_hub_our_service_number = absint($trade_hub_customizer_all_values['trade-hub-testimonial-number-page']);
            $trade_hub_our_service_title  = esc_html__($trade_hub_customizer_all_values['trade-hub-our-service-title']);
            $trade_hub_our_service_image  = $trade_hub_customizer_all_values['trade-hub-our-service-image'];
            ?>          

            <section class="portfolio-first section-wrapper container" id="portfolio">
                <div class="background-image-div portfolio-left"  style="background-image: url(<?php echo esc_url($trade_hub_our_service_image);?>);"><!-- put background image link here -->
                    <div class="bg-overlay">
                    </div>
                </div><!-- background image div -->
                    <div class="text-div right">
                        <?php if( !empty($trade_hub_our_service_title) ) { ?>
                                <h2><?php echo esc_html($trade_hub_our_service_title);?></h2>
                                <?php } ?>
                        <?php 
                        $i = 1;
                        foreach ( $trade_hub_our_service_arrays as $trade_hub_our_service_array )
                        { 
                            if ( $trade_hub_our_service_number  < $i)
                            {
                                break;
                            }
                            ?>
                                <div class="listing">
                                    <?php if ( !empty($trade_hub_our_service_array['trade-hub-our_service-title']) ) { ?>
                                    <h3><?php echo esc_html($trade_hub_our_service_array['trade-hub-our_service-title']);?></h3>
                                    <?php } ?>
                                    <p><?php echo wp_kses_post( trade_hub_words_count ($trade_hub_our_service_single_words, $trade_hub_our_service_array['trade-hub-our_service-content']) ) ; ?></p>

                                    
                                </div>
                            
                            <?php
                            $i++;
                        }
                        ?>              
                    </div><!-- testimonials -->
            </section><!-- testimonials section end -->  
            <?php
        }
    }
endif;
add_action( 'trade_hub_homepage', 'trade_hub_our_service', 40 );