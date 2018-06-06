<?php

  function site_styles_n_scripts() {
    // wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Libre+Franklin:300,400');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime()); // load in style.css
  };

  add_action('wp_enqueue_scripts', 'site_styles_n_scripts');

  function portfolio_features() {
    add_theme_support('post-thumbnails');
    add_image_size('archiveSize', 360, 250, true);
  };

  add_action('after_setup_theme', 'portfolio_features');

  function get_post_count() {
    /* Used in index.php to conditionally output the hr's separating the individual posts. */
    global $wp_query;
    return $wp_query->post_count;
  }