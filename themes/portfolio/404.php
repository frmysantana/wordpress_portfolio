<?php get_header(); ?>
  <main class="not-found">
    <h1 class="not-found__title">That page does not exist.</h1>
    <a href="<?php echo esc_url(site_url()); ?>" class="not-found__link">Return to the main site.</a>
  </main>
<?php get_footer(); ?>

