<?php

if ( ! function_exists( 'trade_hub_featured_slider_array' ) ) :
    /**
     * Featured Slider array creation
     *
     * @since Trade Hub 1.0.0
     *
     * @param string null
     * @return array
     */
    function trade_hub_featured_slider_array( ){
        global $trade_hub_customizer_all_values;
        $trade_hub_feature_slider_number = absint( $trade_hub_customizer_all_values['trade-hub-featured-slider-number'] );
        $trade_hub_feature_slider_single_words = absint( $trade_hub_customizer_all_values['trade-hub-fs-single-words'] );
        $trade_hub_feature_slider_contents_array[0]['trade-hub-feature-slider-title'] = __('START YOUR BUSINESS','trade-hub');
        $trade_hub_feature_slider_contents_array[0]['trade-hub-feature-slider-content'] = __("Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas semper, dolor vitae venenatis cursus, enim ante commodo orci, non maximus ante lectus nec urna. Vivamus laoreet hendrerit",'trade-hub');
        $trade_hub_feature_slider_contents_array[0]['trade-hub-feature-slider-link'] = '#';
        $trade_hub_feature_slider_contents_array[0]['trade-hub-feature-slider-image'] = get_template_directory_uri()."/assets/img/slider.jpg";
        $repeated_page = array('trade-hub-fs-pages-ids');
        $trade_hub_feature_slider_args = array();
      
        $trade_hub_feature_slider_posts = evision_customizer_get_repeated_all_value(2 , $repeated_page);
        $trade_hub_feature_slider_posts_ids = array();
        if( null != $trade_hub_feature_slider_posts ) {
            foreach( $trade_hub_feature_slider_posts as $trade_hub_feature_slider_post ) {
                if( 0 != $trade_hub_feature_slider_post['trade-hub-fs-pages-ids'] ){
                    $trade_hub_feature_section_posts_ids[] = $trade_hub_feature_slider_post['trade-hub-fs-pages-ids'];
                }
            }

            if( !empty( $trade_hub_feature_section_posts_ids )){
                $trade_hub_feature_slider_args =    array(
                    'post_type' => 'page',
                    'post__in' => $trade_hub_feature_section_posts_ids,
                    'posts_per_page' => $trade_hub_feature_slider_number,
                    'orderby' => 'post__in'
                );
            }

        }
        
        if( !empty( $trade_hub_feature_slider_args )){
            // the query
            $trade_hub_fature_section_post_query = new WP_Query( $trade_hub_feature_slider_args );

            if ( $trade_hub_fature_section_post_query->have_posts() ) :
                $i = 0;
                while ( $trade_hub_fature_section_post_query->have_posts() ) : $trade_hub_fature_section_post_query->the_post();
                    $url ='';
                    if(has_post_thumbnail()){
                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'trade-hub-main-banner' );
                        $url = $thumb['0'];
                    }
                    $trade_hub_feature_slider_contents_array[$i]['trade-hub-feature-slider-title'] = get_the_title();
                    if (has_excerpt()) {
                        $trade_hub_feature_slider_contents_array[$i]['trade-hub-feature-slider-content'] = get_the_excerpt();
                    }
                    else {
                        $trade_hub_feature_slider_contents_array[$i]['trade-hub-feature-slider-content'] = trade_hub_words_count( $trade_hub_feature_slider_single_words ,get_the_content());
                    }
                    $trade_hub_feature_slider_contents_array[$i]['trade-hub-feature-slider-link'] = get_permalink();
                    $trade_hub_feature_slider_contents_array[$i]['trade-hub-feature-slider-image'] = $url;
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        return $trade_hub_feature_slider_contents_array;
    }
endif;

if ( ! function_exists( 'trade_hub_featured_home_slider' ) ) :
    /**
     * Featured Slider
     *
     * @since trade-hub 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function trade_hub_featured_home_slider() {
        global $trade_hub_customizer_all_values;
        if( ! $trade_hub_customizer_all_values['trade-hub-feature-slider-enable'] ){
            return null;
        }
        $trade_hub_feature_slider_selection_options = $trade_hub_customizer_all_values['trade-hub-featured-slider-selection'];
        $trade_hub_slider_arrays = trade_hub_featured_slider_array( $trade_hub_feature_slider_selection_options );


        if( is_array( $trade_hub_slider_arrays )){
        $trade_hub_feature_slider_number = absint( $trade_hub_customizer_all_values['trade-hub-featured-slider-number'] );
        $trade_hub_feature_enable_title = $trade_hub_customizer_all_values['trade-hub-fs-enable-title'];
        $trade_hub_feature_enable_caption = $trade_hub_customizer_all_values['trade-hub-fs-enable-caption'];
        // $trade_hub_feature_enable_search = $trade_hub_customizer_all_values['trade-hub-search-enable'];
        $trade_hub_feature_button_text = $trade_hub_customizer_all_values['trade-hub-fs-button-text'];

    ?>

      <section id="banner-section" class="banner-section"><!-- banner section -->
        <div class="banner-wrapper">
        <?php
        $i = 1;
        foreach( $trade_hub_slider_arrays as $trade_hub_slider_array ){
            if( $trade_hub_feature_slider_number < $i){
                break;
            }
            if(empty($trade_hub_slider_array['trade-hub-feature-slider-image'])){
                $trade_hub_feature_slider_image = get_template_directory_uri().'/assets/img/no-image-1260_530.png';
            }
            else{
                $trade_hub_feature_slider_image =$trade_hub_slider_array['trade-hub-feature-slider-image'];
            }
            ?>
                  <div class="banner-slider" style="background-image: url(<?php echo esc_url($trade_hub_feature_slider_image); ?>);">
                    <div class="overlay">
                      <?php if ((1 == $trade_hub_feature_enable_title) || (1 == $trade_hub_feature_enable_caption)){?>
                          <div class="banner-content-inner">
                              <?php if( 1 == $trade_hub_feature_enable_title) {
                                  ?>
                                      <h2 class="sec-title"><?php echo esc_html( $trade_hub_slider_array['trade-hub-feature-slider-title'] );?></h2>
                                  <?php
                              }
                              if( 1 == $trade_hub_feature_enable_caption){
                                  ?>
                                  <div class="text-content">
                                      <?php echo wp_kses_post( $trade_hub_slider_array['trade-hub-feature-slider-content'] );?>
                                  </div>
                                  <div class="btn-holder">
                                      <a href="<?php echo esc_url( $trade_hub_slider_array['trade-hub-feature-slider-link'] );?>" class="border-btn"><?php echo esc_html($trade_hub_feature_button_text); ?></a>
                                  </div>
                                  <?php
                              }?>      
                          </div>
                      <?php } ?>
                    </div><!-- overlay -->
                  </div><!-- slider content -->   
              <?php
          $i++;
          }
          ?>

    </div><!-- wrapper -->
    </section><!-- section -->
    <!-- home page sections -->
  
  <?php
  }
}
endif;
add_action( 'trade_hub_homepage', 'trade_hub_featured_home_slider', 10 );

