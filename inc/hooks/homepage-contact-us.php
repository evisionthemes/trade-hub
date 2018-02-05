<?php

if ( !function_exists('trade_hub_contact') ) :
	/**
	* trade-hub our service section 
	* @since Trade Hub 1.0.0
	* @param null
 	* @return null
	*/
 	function  trade_hub_contact()
 	{
 		global $trade_hub_customizer_all_values;
 		$trade_hub_follow_us_title_text    = $trade_hub_customizer_all_values['trade-follow-us-title-text'];
 		$trade_hub_latest_news_contact_us_title  = $trade_hub_customizer_all_values['trade-contact-main-title'];
 		$trade_hub_latest_news_contact_us_location = $trade_hub_customizer_all_values['trade-contact-localtion'];
 		$trade_hub_latest_news_contact_us_email = $trade_hub_customizer_all_values['trade-contact-email'];
 		$trade_hub_latest_news_contact_us_phone = $trade_hub_customizer_all_values['trade-contact-phone'];
 		

 		if ( 1 != $trade_hub_customizer_all_values['trade-contact-enable-option'] )
 		{
 			return null;
 		}
 		?>
 		<section class="contact-section section-wrapper">
     		<div class="left contact">
                <div class="contact-list">
                    <h2><?php echo esc_html($trade_hub_latest_news_contact_us_title);?></h2>
                    <ul>
                       <li><?php echo esc_html($trade_hub_latest_news_contact_us_location);?></li>
                       <li><?php echo esc_html($trade_hub_latest_news_contact_us_email);?></li>
                       <li><?php echo esc_html($trade_hub_latest_news_contact_us_phone);?></li>
                    </ul><!-- contact list -->
                </div>
            </div><!-- left content -->
     
            <div class="right social-nav-section">
                <div class="right-content">
                    <div class="about">
         	            <?php
                        $trade_hub_feature_slider_single_words_about = absint($trade_hub_customizer_all_values['trade-about-us-single-word'] );
                        $trade_hub_home_about_button_text = esc_html($trade_hub_customizer_all_values['trade-about-us-button-text']);
                        $trade_hub_home_about_posts = absint($trade_hub_customizer_all_values['trade-about-us-select-page']);
                        if( 0 ==$trade_hub_customizer_all_values['trade-about-us-enable-option'] )
                        {
                            return null;
                        }
    
                        if( !empty($trade_hub_home_about_posts ))
                        {
                           $trade_hub_feature_about_args =    array(
                                'post_type' => 'page',
                                'p' =>$trade_hub_home_about_posts,
                                'posts_per_page' => 1

                            );
                           $trade_hub_fature_about_section_post_query = new WP_Query($trade_hub_feature_about_args );
                            if ($trade_hub_fature_about_section_post_query->have_posts() ) :
                              while ($trade_hub_fature_about_section_post_query->have_posts() ) :$trade_hub_fature_about_section_post_query->the_post();
                                if(has_post_thumbnail())
                                {
                                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
                                }
                                else
                                {
                                    $thumb[0] = get_template_directory_uri() .'/assets/imgage/1.jpg';
                                }?>

        
                               <h2><?php the_title();?></h2>
                               <p><?php echo wp_kses_post(trade_hub_words_count( $trade_hub_feature_slider_single_words_about ,get_the_content()));?></p>
                               <a href="<?php the_permalink();?>" class="more"><?php echo esc_html($trade_hub_home_about_button_text);?></a>
                    </div><!-- about us section -->

                    <div class="social-icon-only social-nav">
                        <h2><?php echo esc_html($trade_hub_follow_us_title_text);?></h2>
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
            endwhile;
        endif;
    } 
}
endif;
add_action('trade_hub_homepage','trade_hub_contact',80);