<?php
/**
 * Partials for Selective Refresh
 * 
 * @package Blossom_Feminine
 */
 
/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function blossom_feminine_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function blossom_feminine_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if( ! function_exists( 'blossom_feminine_get_footer_copyright' ) ) :
/**
 * Prints footer copyright
*/
function blossom_feminine_get_footer_copyright(){
    $copyright = get_theme_mod( 'footer_copyright' );
    echo '<span class="copyright">';
    if( $copyright ){
        echo wp_kses_post( $copyright );
    }else{        
        echo date_i18n( esc_html__( 'Y', 'blossom-feminine' ) );
        esc_html_e( ' Copyright ', 'blossom-feminine' ); 
        echo ' <a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a>. ';    
    }    
    echo '</span>';
}
endif;

if( ! function_exists( 'blossom_feminine_get_read_more' ) ) :
/**
 * Display blog readmore button
*/
function blossom_feminine_get_read_more(){
    return get_theme_mod( 'read_more_text', __( 'Read More', 'blossom-feminine' ) );    
}
endif;

if( ! function_exists( 'blossom_feminine_get_related_title' ) ) :
/**
 * Display blog readmore button
*/
function blossom_feminine_get_related_title(){
    return get_theme_mod( 'related_post_title', __( 'You may also like...', 'blossom-feminine' ) );
}
endif;