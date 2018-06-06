<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container">
        <a href="<?php echo site_url(); ?>"><h1 class="nav-option <?php if (is_page('Home')) echo 'current-page'; ?>">HOME</h1></a>
        <a href="<?php echo site_url('/blog'); ?>"><h1 class="nav-option <?php if (get_queried_object_id() == 23) echo 'current-page'; else echo "failed"; ?>">ALL PROJECTS</h1></a>
      </div>      
    </header>