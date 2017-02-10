<?php

  add_image_size( 'video-xs', 85  , 35,  true );
  add_image_size( 'video-sm', 720 , 405, true );
  add_image_size( 'video-lg', 1280, 720, true );

  function register_my_menu() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
    register_nav_menu('schedule-menu',__( 'Schedule' ));
  }
  add_action( 'init', 'register_my_menu' );

  add_theme_support( 'post-thumbnails' );



/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function theme_name_wp_title( $title, $sep ) {
   if ( is_feed() ) {
      return $title;
   }
   
   global $page, $paged;

   // Add the blog name
   $title .= get_bloginfo( 'name', 'display' );

   // Add the blog description for the home/front page.
   $site_description = get_bloginfo( 'description', 'display' );
   if ( $site_description && ( is_home() || is_front_page() ) ) {
      $title .= " $sep $site_description";
   }

   // Add a page number if necessary:
   if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
      $title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
   }

   return $title;
}
add_filter( 'wp_title', 'theme_name_wp_title', 10, 2 );