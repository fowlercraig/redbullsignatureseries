<?php

  add_image_size( 'video-xs', 85  , 35,  true );
  add_image_size( 'video-sm', 720 , 405, true );
  add_image_size( 'video-lg', 1280, 720, true );

  function register_my_menu() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

  add_theme_support( 'post-thumbnails' );