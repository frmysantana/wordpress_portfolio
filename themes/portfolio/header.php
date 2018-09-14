<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <?php $post_count = get_post_count();?>
  <body id="site_content-js"
    <?php 
      // conditionally apply fill classes only if their is 1 blog post summary on the blog page.
      // is_home() checks if the current page is the blog index
      if((is_home() AND $post_count == 1) OR (is_404())) { echo 'class="body--fill-page"';}
    ?>>
    <h1>todo: 1. responsive styling  2. add new resume</h1>

    <header class="header">
      <nav class="container">
        <a href="<?php echo site_url(); ?>">
          <h1 class="nav-option nav-option__home <?php if (is_page('Home')) echo 'nav-option--current-page'; ?>">
            Home
          </h1>
        </a>
        <a href="<?php echo site_url('/blog'); ?>">
          <h1 class="nav-option nav-option__projects <?php if (get_queried_object_id() == 23) echo 'nav-option--current-page'; else echo "failed"; ?>">
            Projects
          </h1>
        </a>
        <a class="nav-option" href="https://github.com/frmysantana" target="_blank">Github</a>
        <a class="nav-option" href="https://www.linkedin.com/in/fremy-santana-5a714696" target="_blank">LinkedIn</a>
        <p class="nav-option--email">Contact</p>
      </nav>      
    </header>