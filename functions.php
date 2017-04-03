<?php
function cns_enqueue_style() {
    if ( is_child_theme() ) {
      // load parent stylesheet first if this is a child theme
      wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'style.css', false );
    }
    // load active theme stylesheet in both cases
    wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), false );

    if( is_home() ){
      wp_enqueue_script( 'theme-stylesheet', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array( 'jquery' ), true );
      wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . '/assets/css/flexslider.css', false );
    }

}

add_action( 'wp_enqueue_scripts', 'cns_enqueue_style' );

/* Creates Theme Option Page */
include 'inc/theme-options.php';

/**
* Registers Navigation menus for the main navigation bar and top social media bar
*/
register_nav_menus( array(
  'top'    => __( 'Top Menu', 'bioenergyshow' ),
) );

/**
* Allow featured image on post edit pages
*/
add_theme_support( 'post-thumbnails', array( 'post','sponsor' ) ); 
