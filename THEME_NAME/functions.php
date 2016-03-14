<?php

  // Constants

  define( 'THEME_NAME', 'THEME_NAME' );
  define( 'THEMEROOT', get_stylesheet_directory_uri() );
  define( 'IMAGES', THEMEROOT . '/images' );
  define( 'SCRIPTS', THEMEROOT . '/js' );

  // Add Theme Support
  add_theme_support( 'title-tag' );
  add_theme_support( 'automatic-feed-links' );

  // Register Menus
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', THEME_NAME )
  ) );

  // Register sidebar

  if ( function_exists( 'register_sidebar') ) {

    register_sidebar(
      array(
        'name' => __( 'Right Sidebar', THEME_NAME ),
        'id' => 'sidebar-right',
        'description' => __( 'Right Sidebar content', THEME_NAME ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>'
      )
    );

  }

  // Post format and featured Image

  if ( function_exists( 'add_theme_support' )) {
    add_theme_support( 'post-formats', array( 'link', 'quote', 'gallery' ) );
    add_theme_support( 'post-thumbnails', array( 'post' ) );
  }

  // Load JS

  add_action( 'wp_enqueue_scripts', 'load_custom_scripts' );

  function load_custom_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0.0', 'all' );
    wp_enqueue_script( 'main_script', THEMEROOT . '/js/main.js', array('jquery'), '1.0.0', true );
  }
