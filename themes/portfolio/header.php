<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <h1 class="nav-option <?php if (is_page('Home')) echo 'current-page'; ?>"><a href="<?php echo site_url(); ?>">Home</a></h1>
      <h1 class="nav-option <?php if (get_queried_object_id() == 23) echo 'current-page'; else echo "failed"; ?>"><a href="<?php echo site_url('/blog'); ?>">All Projects</a></h1>
    </header>