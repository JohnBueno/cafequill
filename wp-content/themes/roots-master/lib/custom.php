<?php
/**
 * Custom functions
 */
add_filter('widget_text', 'do_shortcode');


add_filter('roots_wrap_base', 'roots_wrap_base_cpts'); // Add our function to the roots_wrap_base filter

function roots_wrap_base_cpts($templates) {
    $cpt = get_post_type(); // Get the current post type
    if ($cpt) {
       array_unshift($templates, 'base-' . $cpt . '.php'); // Shift the template to the front of the array
    }
    return $templates; // Return our modified array with base-$cpt.php at the front of the queue
}

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

function page_content($pageName){
    $args = array("pagename"=>$pageName);
    $wp_query = new WP_Query($args); 
    //wp_reset_postdata();
    return $wp_query;
}

// [bartag foo="foo-value"]
function bartag_func( $atts ) {
    extract( shortcode_atts( array(
        'foo' => 'something',
        'bar' => 'something else',
    ), $atts ) );

    return "foo = {$foo}";
}
add_shortcode( 'bartag', 'bartag_func' );