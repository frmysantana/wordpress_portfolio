<?php get_header(); ?>
  <div class="container">
    <div>
      <h3>About</h3>
      <?php echo wp_get_attachment_image(get_the_author_meta('user_image', 1)); ?>
      <p><?php echo get_the_author_meta('description', 1); ?></p>
    </div>
    <hr>
    <div>
      <h3>Latest Projects</h3>
      <?php 
      // Projects Query here

      $projects = new WP_Query(array(
        'posts_per_page' => 1
      ));

      // while($projects->have_posts()) {
      //   $projects->the_post();
      //   print_r(the_title());
      
      
      print_r($projects->live_link);
      ?>
      <a><h4>See all projects<h4></a>      
    </div>
  </div>
<?php get_footer(); ?>