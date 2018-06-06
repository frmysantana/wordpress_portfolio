<?php get_header(); ?>
    <div id="about">
      <h3>About</h3>
      <div class="container">
        <?php echo wp_get_attachment_image(get_the_author_meta('user_image', 1)); ?>
        <p><?php echo get_the_author_meta('description', 1); ?></p>
      </div>        
    </div>
    <hr class="container">
    <div id="latest-projects">
      
        <h3>Latest Projects</h3>
        <?php 
        
        $projects = new WP_Query(array(
          'posts_per_page' => 2
        ));

        echo "<div class='container'>";
        while($projects->have_posts()) {
          $projects->the_post(); ?>
          <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image(get_field('project_image')[id]); ?></a>
        <?php }
        echo "</div>";
        ?>
        <a href="<?php echo site_url('/blog'); ?>"><h4>See all projects<h4></a> 
    </div>
<?php get_footer(); ?>