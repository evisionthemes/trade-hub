<?php
if ( ! function_exists( 'trade_hub_our_testimonial_array' ) ) :
    /**
     * Featured Slider array creation
     *
     * @since trade-hub 1.0.0
     *
     * @param null
     * @return array
     */
    function trade_hub_our_testimonial_array()
    {
        global $trade_hub_customizer_all_values;
        $trade_hub_testimonial_word_count = absint( $trade_hub_customizer_all_values['trade-hub-testimonial-single-word'] );
        $trade_hub_testimonial_number_page = absint( $trade_hub_customizer_all_values['trade-hub-testimonial-number-page'] );
        // $trade_hub_testimonial_contents_array = array();

        $trade_hub_testimonial_contents_array[0]['trade-hub-testimonial-title'] = __('JOHN DOE', 'trade-hub');
        $trade_hub_testimonial_contents_array[0]['trade-hub-testimonial-content'] = __('Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'trade-hub');
        $trade_hub_testimonial_contents_array[0]['trade-hub-testimonial-link'] = '#';
        $trade_hub_testimonial_contents_array[0]['trade-hub-testimonial-image'] = get_template_directory_uri().'/assets/images/bg1.jpg';

        $repeated_page = array('trade-hub-testimonial-pages-ids');
        $trade_hub_testimonial_args = array();

        $trade_hub_testimonial_posts =evision_customizer_get_repeated_all_value(3, $repeated_page);
        $trade_hub_home_testimonial_posts_ids = array();
        if( null != $trade_hub_testimonial_posts )
        {
            foreach( $trade_hub_testimonial_posts as $trade_hub_testimonial_post )
            {
                if(  0 != $trade_hub_testimonial_post['trade-hub-testimonial-pages-ids'] )
                {
                    $trade_hub_testimonial_posts_ids[] = $trade_hub_testimonial_post['trade-hub-testimonial-pages-ids'];
                    
                }
            }
            if( !empty( $trade_hub_testimonial_posts_ids ))
            {
                $trade_hub_testimonial_args =    array(
                    'post_type' => 'page',
                    'post_in' => $trade_hub_testimonial_posts_ids,
                    'posts_per_page' => 3,
                    'orderby' => 'post__in'
                );
            }
        }
        // the query
        if( !empty( $trade_hub_testimonial_args ))
        {
            $trade_hub_testimonial_contents_array = array(); /*again empty array*/
            $trade_hub_testimonial_post_query = new WP_Query( $trade_hub_testimonial_args );
            if ( $trade_hub_testimonial_post_query->have_posts() ) :
                $i = 0;
                while ( $trade_hub_testimonial_post_query->have_posts() ) : $trade_hub_testimonial_post_query->the_post();
                    $trade_hub_testimonial_contents_array[$i]['trade-hub-testimonial-title'] = get_the_title();
                    // var_dump($trade_hub_testimonial_contents_array);
                    $trade_hub_testimonial_contents_array[$i]['trade-hub-testimonial-content'] = trade_hub_words_count( $trade_hub_testimonial_word_count ,get_the_content());
                    $trade_hub_testimonial_contents_array[$i]['trade-hub-testimonial-link'] = get_permalink();
                    $thumb_image = '';
                    if(has_post_thumbnail())
                    {
                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
                        $thumb_image = $thumb['0'];
                    }

                    $trade_hub_testimonial_contents_array[$i]['trade-hub-testimonial-image'] = $thumb_image;
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        return $trade_hub_testimonial_contents_array;
    }
endif;

if ( ! function_exists( 'trade_hub_testimonial_section' ) ) :
    /**
     * Featured Slider
     *
     * @since trade-hub 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function trade_hub_testimonial_section()
    {
        global $trade_hub_customizer_all_values;
        if( 1 != $trade_hub_customizer_all_values['trade-hub-testimonial-enable-option'] )
        {
            return null;
        }
        $trade_hub_testimonial_main_title = $trade_hub_customizer_all_values['trade-hub-testimonial-title-text'];
        $trade_hub_testimonial_select_from_page =$trade_hub_customizer_all_values['trade-hub-testimonial-from-page'];
        $trade_hub_testimonial_arrays = trade_hub_our_testimonial_array( $trade_hub_testimonial_select_from_page );
        // var_dump($trade_hub_testimonial_arrays);
        if( is_array( $trade_hub_testimonial_arrays ))
        {
            
            $trade_hub_testimonial_number_page = $trade_hub_customizer_all_values['trade-hub-testimonial-number-page'];
       
            
            ?>
            <section class="testimonials-section section-wrapper"><!-- testimonials section start here -->
               <div class="container">
                  <div class="row">
                    <h1><?php echo esc_html($trade_hub_testimonial_main_title); ?></h1>
                    <div class="testimonials">
                        <?php 
                        $i = 1;
                        foreach ( $trade_hub_testimonial_arrays as $trade_hub_testimonial_array )
                        {
                        // print_r($trade_hub_testimonial_array); 
                            if ( $trade_hub_testimonial_number_page  < $i)
                            {
                                break;
                            }

                            // for($i =1;$i<$trade_hub_testimonial_number;$i++ )
                            // {
                            ?>
                            <div class="col-md-4 col-sm-4 col-xs-12 testimonials-wrapper">
                                <div class="testimonials-content">
                                    <div id="f1_container">
                                        <div id="f1_card" class="shadow">
                                            <div class="front face">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/3.jpg" />
                                            </div><!-- testimonials image -->
                                            <div class="back face center"><!-- put background image inline style here -->
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, whilen an unknown printer took a…</p>
                                            </div>
                                        </div>
                                    </div><!-- flip 1 container -->

                                    <h4><a href="#"><?php echo esc_html($trade_hub_testimonial_array['trade-hub-testimonial-title']);?></a></h4><!-- custom link for testimonials -->
                                </div><!-- testimonials content -->
                            </div><!-- wrapper -->
                            <?php
                            $i++;
                        // }
                        }
                        ?>              
                    </div><!-- testimonials -->
                  </div><!-- row -->
               </div><!-- container -->
            </section><!-- testimonials section end -->  
             <!-- our team section -->
            
        <?php
        }
    }
endif;
add_action( 'trade_hub_homepage', 'trade_hub_testimonial_section',50);