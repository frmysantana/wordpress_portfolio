<?php

  function site_styles_n_scripts() {
    // wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Libre+Franklin:300,400');
    // wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime()); // load in style.css
    add_theme_support('post-thumbnails');
  };

  add_action('wp_enqueue_scripts', 'site_styles_n_scripts');