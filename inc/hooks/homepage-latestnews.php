<?php

if ( ! function_exists( 'trade_hub_latest_news_array' ) ) :
    /**
     * Featured Slider array creation
     *
     * @since Trade Hub 1.0.0
     *
     * @param string $from_slider
     * @return array
     */
    function trade_hub_latest_news_array( ){
        global $trade_hub_customizer_all_values;
        // $trade_hub_latest_news_number = absint( $trade_hub_customizer_all_values['trade-hub-featured-slider-number'] );
        $trade_hub_latest_news_single_words = absint( $trade_hub_customizer_all_values['trade-hub-latest-news-single-word'] );
       
        $trade_hub_latest_news_contents_array[0]['trade-hub-latest-news-title'] = __('START YOUR BUSINESS','trade-hub');
        $trade_hub_latest_news_contents_array[0]['trade-hub-latest-news-content'] = __("Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas semper, dolor vitae venenatis cursus, enim ante commodo orci, non maximus ante lectus nec urna. Vivamus laoreet hendrerit",'trade-hub');
        $trade_hub_latest_news_contents_array[0]['trade-hub-latest-news-link'] = '#';
        $trade_hub_latest_news_contents_array[0]['trade-hub-latest-news-image'] = get_template_directory_uri()."/assets/images/1.jpg";
        // $repeated_page = array('trade-hub-fs-pages-ids');
        $trade_hub_latest_news_args = array();
            $trade_hub_latest_news_category = $trade_hub_customizer_all_values['trade-hub-latest-news-category'];
            if( 0 != $trade_hub_latest_news_category ){
                $trade_hub_latest_news_args =    array(
                    'post_type' => 'post',
                    'cat' => $trade_hub_latest_news_category,
                    'ignore_sticky_posts' => true
                );
            }
        

        if( !empty( $trade_hub_latest_news_args )){
            // the query
            $trade_hub_fature_section_post_query = new WP_Query( $trade_hub_latest_news_args );

            if ( $trade_hub_fature_section_post_query->have_posts() ) :
                $i = 0;
                while ( $trade_hub_fature_section_post_query->have_posts() ) : $trade_hub_fature_section_post_query->the_post();
                    $url ='';
                    if(has_post_thumbnail()){
                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
                        $url = $thumb['0'];
                    }
                    $trade_hub_latest_news_contents_array[$i]['ID'] = get_the_ID();
                    $trade_hub_latest_news_contents_array[$i]['trade-hub-latest-news-title'] = get_the_title();
                    if (has_excerpt()) {
                        $trade_hub_latest_news_contents_array[$i]['trade-hub-latest-news-content'] = get_the_excerpt();
                    }
                    else {
                        $trade_hub_latest_news_contents_array[$i]['trade-hub-latest-news-content'] = trade_hub_words_count( $trade_hub_latest_news_single_words ,get_the_content());
                    }
                    $trade_hub_latest_news_contents_array[$i]['trade-hub-latest-news-link'] = get_permalink();
                    $trade_hub_latest_news_contents_array[$i]['trade-hub-latest-news-image'] = $url;
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        return $trade_hub_latest_news_contents_array;
    }
endif;

if ( ! function_exists( 'trade_hub_latest_news' ) ) :
    /**
     * Featured Slider
     *
     * @since trade-hub 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function trade_hub_latest_news() 
    {
        global $trade_hub_customizer_all_values;

        if( ! $trade_hub_customizer_all_values['trade-hub-latest-news-enable-option'] ) {return null;
        }

        $trade_hub_latest_news_single_words = absint( $trade_hub_customizer_all_values['trade-hub-latest-news-single-word'] );
        $trade_hub_latest_news_button_text = $trade_hub_customizer_all_values['trade-hub-latest-news-button-text'];
        
        /*$trade_hub_latest_news_button_url = $trade_hub_customizer_all_values['trade-hub-latest-news-button-link'];*/
        $trade_hub_latest_news_selection_options = $trade_hub_customizer_all_values['trade-hub-latest-news-selection'];

        $trade_hub_latest_news_category = $trade_hub_customizer_all_values['trade-hub-latest-news-category'];
        if( $trade_hub_latest_news_category ) {
            $trade_hub_latest_news_args = array(
                'post_type' => 'post',
                'cat' => $trade_hub_latest_news_category,
                'posts_per_page' => 3,                    
                'ignore_sticky_posts' => true
            );
            $trade_hub_fature_section_post_query = new WP_Query( $trade_hub_latest_news_args );
            if( $trade_hub_fature_section_post_query->have_posts() ) :
                ?>
                <section class="section-wrapper" id="th-news">
                    <div class="container">
                      <div class="row">
                        <h1><?php echo esc_html( $trade_hub_customizer_all_values['trade-hub-latest-news-title-text'] ); ?></h1>
                            <?php while($trade_hub_fature_section_post_query->have_posts() ) : $trade_hub_fature_section_post_query->the_post();?>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                              
                              <div class="th-news-wrapper">
                                <div class="ribbon">
                                    <a href="<?php echo esc_url( get_category_link( $trade_hub_latest_news_category ) );?>">
                                        <span><?php esc_html_e( sprintf( __('%s','trade-hub'), get_cat_name( $trade_hub_latest_news_category ) ) );?></span>
                                    </a>
                                </div>
                                
                                <div class="news-image">
                                <?php if( has_post_thumbnail() ): ?>
                                    <?php the_post_thumbnail('full');?>
                                <?php else: ?>    
                                    <img class="img-responsive" src = "<?php echo esc_url( get_template_directory_uri().'/assets/image/no-image.png' ); ?>">
                                <?php endif;?>

                                </div><!-- img -->
                                
                                <div class="news-heading-content feature-section">
                                    <h3><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title();?></a></h3>
                                    <?php if( has_excerpt() ) : ?>
                                    <p><?php echo wp_kses_post( get_the_excerpt() );?></p>
                                    <p><?php else: ?>
                                        <?php echo  wp_kses_post( trade_hub_words_count( $trade_hub_latest_news_single_words ,get_the_content() ) ); ?></p>
                                    <?php endif;?>   
                                    <a href="<?php echo esc_url( get_day_link( get_the_time('Y'), get_the_time('m'), get_the_time('d') ) ); ?>"><?php echo esc_html( get_the_date('M j , Y') );?></a>
                                </div><!-- content -->

                               </div><!-- th-news-wrapper -->  

                            </div><!-- col-md-4 col-sm-4 col-xs-12 -->
                            <?php endwhile;?>
                            <div class="news-more-link col-md-12 clearfix">
                               <a href="<?php echo esc_url( get_category_link( $trade_hub_latest_news_category ) );?>" class="border-btn"><?php echo esc_html( $trade_hub_latest_news_button_text );?></a>
                            </div>
                      </div><!-- row -->
                    </div><!-- container -->
                </section><!-- section-wrapper -->
                <?php       
            endif;
        }
}
endif;
add_action( 'trade_hub_homepage', 'trade_hub_latest_news', 70 );