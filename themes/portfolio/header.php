<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <?php $post_count = get_post_count();?>
  <body <?php 
    // conditionally apply fill classes only if their is 1 blog post summary on the blog page.
    // is_home() checks if the current page is the blog index
    if(is_home() AND $post_count == 1) { echo 'class="body--fill-page"';} 
    ?>>
<H1>todo: 1. 404 PAGE! 2. responsive styling 3. add new resume</H1>

    <header>
      <div class="container">
        <a href="<?php echo site_url(); ?>"><h1 class="nav-option <?php if (is_page('Home')) echo 'current-page'; ?>">HOME</h1></a>
        <a href="<?php echo site_url('/blog'); ?>"><h1 class="nav-option <?php if (get_queried_object_id() == 23) echo 'current-page'; else echo "failed"; ?>">ALL PROJECTS</h1></a>
      </div>      
    </header>