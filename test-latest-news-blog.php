<?php

if ( ! function_exists( 'trade_hub_latest_news_array' ) ) :
    /**
     * Blog Section
     *
     * @since trade-hub 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function trade_hub_latest_news_array() {
        global $trade_hub_customizer_all_values;
        global $post;
        $author_id=$post->post_author;
        $trade_hub_latest_news_title = $trade_hub_customizer_all_values['trade-hub-latest-news-title-text'];
        $trade_hub_latest_news_button_text = $trade_hub_customizer_all_values['trade-hub-latest-news-button-text'];
        $trade_hub_latest_news_button_link = $trade_hub_customizer_all_values['trade-hub-latest-news-button-link'];
        $trade_hub_latest_news_single_words = absint( $trade_hub_customizer_all_values['trade-hub-latest-news-single-word'] );
        
        $trade_hub_latest_news_category = $trade_hub_customizer_all_values['trade-hub-latest-news-category'];
        if( 1 != $trade_hub_customizer_all_values['trade-hub-latest-news-enable-option'] )
        {
            return null;
        }
        ?>
		<section class="section-wrapper" id="th-news">
                <div class="container">
                    <div class="row">
                        <h1><?php echo esc_html($trade_hub_latest_news_title);?></h1>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="th-news-wrapper">
                            	<?php
		                            $trade_hub_latest_news_args = array(
		                                'post_type' => 'post',
		                                'posts_per_page' => 3,
		                                'cat'           => absint($trade_hub_latest_news_category),
		                                'ignore_sticky_posts' => 1,
		                            );
                            		$trade_hub_latest_news_query = new WP_Query($trade_hub_latest_news_args);
                            		if ($trade_hub_latest_news_query->have_posts()) :
                                		while ($trade_hub_latest_news_query->have_posts()) : $trade_hub_latest_news_query->the_post();
                                    		if(has_post_thumbnail())
                                    		{
                                        		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' );
                                        		$url = $thumb['0'];
                                    		}
                                    		else
                                    		{
                                        		$url = get_template_directory_uri().'/assets/img/3.jpg';
                                    		} ?>
                                			<div class="ribbon"><a href="#"><span>POPULAR</span></a></div>
                                				<div class="news-image">
                                    				<img class="img-responsive" style="background-image: url('<?php echo esc_url( $url )?>');" />
                                				</div><!-- img -->
                                				<div class="news-heading-content feature-section">
                                    				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    				<p>
				                                    	<?php
				                                            if ( has_excerpt() )
				                                            {
				                                                the_excerpt();
				                                            } 
				                                            else
				                                            {
				                                                $content_blog = get_the_content();
				                                                echo wp_kses_post(trade_hub_words_count( $trade_hub_latest_news_single_words, $content_blog ));
				                                            } ?>
                                    				</p>
				                                    <?php

				                                        $archive_year  = get_the_time('Y'); 
				                                        $archive_month = get_the_time('m'); 
				                                        $archive_day   = get_the_time('d'); 
				                                    ?>
                                    
                                  					<a href="<?php echo esc_url(get_day_link($archive_year, $archive_month, $archive_day) ); ?>"><?php echo esc_html(get_the_date('M j , Y') );?></a>
                                				</div><!-- content -->
		                                	<?php endwhile; 
		                                wp_reset_postdata();
		                            endif;
		                            ?>     
                            </div><!-- wrapper -->
                        </div><!-- col-md-4 -->
                        <div class="news-more-link col-md-12 clearfix">
                            <a href="<?php echo esc_url($trade_hub_latest_news_button_link);?>" class="border-btn"><?php echo esc_html($trade_hub_latest_news_button_text);?></a>
                        </div>
                    </div><!-- row -->
                </div><!-- container -->
            </section><!-- blog section -->    

        <?php
    }
endif;
add_action( 'trade_hub_homepage', 'trade_hub_latest_news_array',19 );