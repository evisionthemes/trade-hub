<?php
if( ! function_exists( 'trade_hub_excerpt_length' ) ) :

    /**
     * Excerpt length
     *
     * @since  trade-hub 1.0.0
     *
     * @param null
     * @return int
     */
    function trade_hub_excerpt_length( $length ){
        global $trade_hub_customizer_all_values;
        $excerpt_length = $trade_hub_customizer_all_values['trade-hub-excerpt-length'];
        if ( empty( $excerpt_length) ) {
            $excerpt_length = $length;
        }
        return absint( $excerpt_length );

    }

endif;
add_filter( 'excerpt_length', 'trade_hub_excerpt_length', 999 );


if ( ! function_exists( 'trade_hub_implement_read_more' ) ) :

    /**
     * Implement read more in excerpt.
     *
     * @since 1.0.0
     *
     * @param string $more The string shown within the more link.
     * @return string The excerpt.
     */
    function trade_hub_implement_read_more( $more ) {

        $flag_apply_excerpt_read_more = apply_filters( 'trade_hub_filter_excerpt_read_more', true );
        if ( true !== $flag_apply_excerpt_read_more ) {
            return $more;
        }

        $output = $more;
        $read_more_text = __('continue reading','trade-hub');
        if ( ! empty( $read_more_text ) ) {
            $output = ' <div class="read-more-text"><a href="' . esc_url( get_permalink() ) . '" class="read-more">' . esc_html( $read_more_text ) . '</a></div>';
            $output = apply_filters( 'trade_hub_filter_read_more_link' , $output );
        }
        return $output;

    }

endif;

add_action( 'excerpt_more', 'trade_hub_implement_read_more' );