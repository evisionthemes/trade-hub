<?php
if ( ! function_exists( 'trade_hub_featured_slider_array' ) ) :
    /**
     * Featured Slider array creation
     *
     * @since Trade Hub 1.0.0
     *
     * @param string $from_slider
     * @return array
     */
    function trade_hub_featured_slider_array( $from_slider ){
        global $trade_hub_customizer_all_values;
        $trade_hub_feature_slider_number = absint( $trade_hub_customizer_all_values['trade-hub-featured-slider-number'] );
        $trade_hub_feature_slider_single_words = absint( $trade_hub_customizer_all_values['trade-hub-fs-single-words'] );
        $trade_hub_feature_slider_contents_array[0]['trade-hub-feature-slider-title'] = __('START YOUR BUSINESS','trade-hub');
        $trade_hub_feature_slider_contents_array[0]['trade-hub-feature-slider-content'] = __("Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas semper, dolor vitae venenatis cursus, enim ante commodo orci, non maximus ante lectus nec urna. Vivamus laoreet hendrerit",'trade-hub');
        $trade_hub_feature_slider_contents_array[0]['trade-hub-feature-slider-link'] = '#';
        $trade_hub_feature_slider_contents_array[0]['trade-hub-feature-slider-image'] = get_template_directory_uri()."/assets/img/slider.jpg";
        $repeated_page = array('trade-hub-fs-pages-ids');
        $trade_hub_feature_slider_args = array();

        if ( 'from-category' ==  $from_slider ){
            $trade_hub_feature_slider_category = $trade_hub_customizer_all_values['trade-hub-featured-slider-category'];
            if( 0 != $trade_hub_feature_slider_category ){
                $trade_hub_feature_slider_args =    array(
                    'post_type' => 'post',
                    'cat' => $trade_hub_feature_slider_category,
                    'ignore_sticky_posts' => true
                );
            }
        }
        else{
            $trade_hub_feature_slider_posts = evision_customizer_get_repeated_all_value(6 , $repeated_page);
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

        if( 1 != $trade_hub_customizer_all_values['trade-hub-feature-slider-enable'] ){
            return null;
        }
        $trade_hub_feature_slider_selection_options = $trade_hub_customizer_all_values['trade-hub-featured-slider-selection'];
        $trade_hub_slider_arrays = trade_hub_featured_slider_array( $trade_hub_feature_slider_selection_options );


        if( is_array( $trade_hub_slider_arrays )){
        $trade_hub_feature_slider_number = absint( $trade_hub_customizer_all_values['trade-hub-featured-slider-number'] );
        $trade_hub_feature_enable_title = $trade_hub_customizer_all_values['trade-hub-fs-enable-title'];
        $trade_hub_feature_enable_caption = $trade_hub_customizer_all_values['trade-hub-fs-enable-caption'];
        $trade_hub_feature_enable_search = $trade_hub_customizer_all_values['trade-hub-search-enable'];
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
    <section class="feature-section section-wrapper" id="trade-hub-feature">
       <div class="container">
          <div class="row">
             <h1>our amazing feature</h1>            
             <div class="feature-icon-content-wrapper col-md-6">
               <div class="col-md-12">
                  <div class="feature-content">
                     <i class="fa fa-desktop"></i>
                     <div class="content-right">
                        <h3><a href="#">responsive layout</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                     </div>
                  </div>
               </div><!-- col-md-12 -->
               <div class="col-md-12">
                  <div class="feature-content">
                     <i class="fa fa-desktop"></i>
                     <div class="content-right">
                        <h3><a href="#">responsive layout</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                     </div>
                  </div>
               </div><!-- col-md-12 -->
               <div class="col-md-12">
                  <div class="feature-content">
                     <i class="fa fa-desktop"></i>
                     <div class="content-right">
                        <h3><a href="#">responsive layout</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                     </div>
                  </div>
               </div><!-- col-md-12 -->               
             </div><!-- md-6 -->
              <div class="feature-text-content-wrapper col-md-6">
               <div class="col-md-12">
                 <div class="content-left">                 
                   <div id="f1_container">
                    <div id="f1_card" class="shadow">
                      <div class="front face">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/3.jpg" />
                      </div>
                      <div class="back face center"><!-- put background image inline style here -->
                       <a href="#">About us</a>
                      </div>
                    </div>
                    </div>
                   <div class="left-text-content">
                    <h3><a href="#">something about us</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam Ut enim ad minim veniam</p>
                   </div>
                 </div>
               </div>
             </div>
          </div><!-- row -->
       </div><!-- container -->
    </section><!-- feature section end -->    
    <section class="portfolio-first section-wrapper" id="portfolio">
       <div class="background-image-div portfolio-left">
          <div class="bg-overlay">
            
          </div>
       </div><!-- background image div -->
       <div class="text-div right">
          <h2>GREAT PRODUCT OF COMPANY</h2>
          <p class="portfolio-description">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally</p>
          <div class="listing">
             <h3>PSD TO HTML5/CSS3</h3>
             <p>Paetos dignissim at cursus elefeind norma arcu.velim pellentesque 
                uter justo magna gravida.
             </p>
             <h3>HOSTING & DOMAIN SERVICES</h3>
             <p>Paetos dignissim at cursus elefeind norma arcu.velim pellentesque 
                uter justo magna gravida.
             </p>
             <h3>GET PLAN YOUR BUSINESS</h3>
             <p>Paetos dignissim at cursus elefeind norma arcu.velim pellentesque 
                uter justo magna gravida.
             </p>
          </div>
       </div><!-- right section -->
    </section><!--portfolio section -->      
   
    </section><!--portfolio section -->     
    <section class="testimonials-section section-wrapper">
       <div class="container">
          <div class="row">
             <h1>testimonials</h1>
             <div class="testimonials">
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
                      <h4><a href="#">John doe</a></h4><!-- custom link for testimonials -->
                   </div><!-- testimonials content -->
                </div><!-- wrapper -->
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
                      <h4><a href="#">John doe</a></h4><!-- custom link for testimonials -->
                   </div><!-- testimonials content -->
                </div><!-- wrapper -->
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
                      <h4><a href="#">John doe</a></h4><!-- custom link for testimonials -->
                   </div><!-- testimonials content -->
                </div><!-- wrapper -->               
             </div><!-- testimonials -->
          </div><!-- row -->
       </div><!-- container -->
    </section><!-- testimonials section end -->    
    <section class="callback-section section-wrapper" id="trade-hub-callback">
       <div class="overlay-callback">
         <div class="container">
            <div class="col-md-9 call-toaction-text">
              <h1>use this button for call to action</h1>
            </div><!-- title -->
            <div class="col-md-3 call-to-action-btn">
              <a href="#"" class="border-btn" >Buy now</a>
            </div><!-- btn -->
            </div><!-- container -->
       </div><!-- overlay -->
    </section><!-- call back section end -->   
    <section class="section-wrapper" id="th-news">
      <div class="container">
        <div class="row">
          <h1>latest news</h1>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="th-news-wrapper">
            <div class="ribbon"><span>POPULAR</span></div>
              <div class="news-image">
                 <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/3.jpg" />
              </div><!-- img -->
              <div class="news-heading-content feature-section">
                <h3><a href="#">dont miss our next event</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis dignissim ultrices. Suspendisse ut sollicitudin nisi. Fusce efficitur nec nunc nec bibendum. Praesent laoreet tortor quis velit facilisis faucibus. Maecenas sollicitudin lectus diam, non vehicula arcu ullamcorper ac. In pharetra, est vitae interdum tincidunt, urna ligula rutrum tellus, sit amet pharetra purus magna eu enim.</p>
                <a href="#" class="blog-meta">2017/9/10</a>
              </div><!-- content -->
            </div><!-- wrapper -->
          </div><!-- col-md-4 -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="th-news-wrapper">
            <div class="ribbon"><span>POPULAR</span></div>
              <div class="news-image">
                 <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/3.jpg" />
              </div><!-- img -->
              <div class="news-heading-content feature-section">
                <h3><a href="#">dont miss our next event</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis dignissim ultrices. Suspendisse ut sollicitudin nisi. Fusce efficitur nec nunc nec bibendum. Praesent laoreet tortor quis velit facilisis faucibus. Maecenas sollicitudin lectus diam, non vehicula arcu ullamcorper ac. In pharetra, est vitae interdum tincidunt, urna ligula rutrum tellus, sit amet pharetra purus magna eu enim.</p>
                <a href="#" class="blog-meta">2017/9/10</a>
              </div><!-- content -->
            </div><!-- wrapper -->
          </div><!-- col-md-4 -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="th-news-wrapper">
            <div class="ribbon"><span>POPULAR</span></div>
              <div class="news-image">
                 <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/3.jpg" />
              </div><!-- img -->
              <div class="news-heading-content feature-section">
                <h3><a href="#">dont miss our next event</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis dignissim ultrices. Suspendisse ut sollicitudin nisi. Fusce efficitur nec nunc nec bibendum. Praesent laoreet tortor quis velit facilisis faucibus. Maecenas sollicitudin lectus diam, non vehicula arcu ullamcorper ac. In pharetra, est vitae interdum tincidunt, urna ligula rutrum tellus, sit amet pharetra purus magna eu enim.</p>
                <a href="#" class="blog-meta">2017/9/10</a>
              </div><!-- content -->
            </div><!-- wrapper -->
          </div><!-- col-md-4 -->
          <div class="news-more-link col-md-12 clearfix">
            <a href="#" class="border-btn">browse more</a>
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </section><!-- blog section -->
    <section class="contact-section section-wrapper">
     <div class="left contact">
       <div class="contact-list">
         <h2>Contact us</h2>
         <ul>
           <li>new baneshwor, kathmandu, nepal</li>
           <li>test@gmail.com</li>
           <li>+977-123456789</li>
         </ul>
       </div>
     </div><!-- left content -->
     <div class="right social-nav-section">
       <div class="right-content">
         <div class="about">
           <h2>About Us</h2>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
           <a href="#" class="more">know more</a>
         </div><!-- about us section -->
         <div class="social-icon-only social-nav">
          <h2>follow us </h2>
            <div class="menu-social-links-container">
                <?php
                  wp_nav_menu( array(
                      'theme_location' => 'social',
                      'menu_id'        => 'social-menu',
                      'menu_class'     => 'trade-hub-social-menu',
                  ) );
                ?>        
            </div>
          </div><!-- social menu -->
       </div>
     </div>
    </section><!-- contact section -->
  <?php
  }
}
endif;
add_action( 'homepage-main-slider', 'trade_hub_featured_home_slider', 10 );