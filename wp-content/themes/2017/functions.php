<?php

  if( function_exists('acf_add_options_page') ) {
	  $args = array(
		  'page_title' => 'Options'
	  );

	  acf_add_options_page( $args );
  }

  // Add Menu support to theme
  add_theme_support('menus');
  add_theme_support( 'post-thumbnails' );

  // Register theme menus
  function register_theme_menus()
  {
    register_nav_menus(
      array(
        'primary-menu' => __('Main Menu')
      )
    );
  }
  add_action('init', 'register_theme_menus');

  // Add styles and scripts
  function events_theme_scripts()
  {
    // Enqueue styles
    wp_enqueue_style('responsivenav', get_template_directory_uri().'/css/responsive-nav.css');
    wp_enqueue_style('style-info', get_template_directory_uri().'/style.css');
    wp_enqueue_style('styles', get_template_directory_uri().'/css/style.css');

    // Enqueue scripts
    wp_enqueue_script('responsivenav', get_template_directory_uri().'/js/responsive-nav.min.js', array('jquery'), '', true);
    wp_enqueue_script('googlemap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDzDUoXszVjzzcsEtWiWGFOIwVq87X-zGQ', array(), '', true);
    wp_enqueue_script('app', get_template_directory_uri().'/js/app.js', array('jquery'), '', true);
  }
  add_action('wp_enqueue_scripts', 'events_theme_scripts');

