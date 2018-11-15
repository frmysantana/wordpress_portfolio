<?php

  function site_styles_n_scripts() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Libre+Franklin:300,400');
    wp_enqueue_style('portfolio_main_styles', esc_url(get_stylesheet_uri()), NULL, microtime()); // load in style.css
  };

  add_action('wp_enqueue_scripts', 'site_styles_n_scripts');

  function portfolio_features() {
    add_theme_support('post-thumbnails');

    /* SIZES    
    550*450 - my image, home page latest project, & individual projects
    364 * 254 - blog archive pages
    1912 * 400 - hero image in header
    */

    add_image_size('archiveSize', 360, 250, true);
    add_image_size('singleSize', 550, 450, true);
    add_image_size('heroSize', 1912, 400);
  };

  add_action('after_setup_theme', 'portfolio_features');

  function get_post_count() {
    /* Used in index.php to conditionally output the hr's separating the individual posts. */

    global $wp_query;
    return $wp_query->post_count;
  };