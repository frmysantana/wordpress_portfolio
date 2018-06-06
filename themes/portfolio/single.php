<?php get_header(); ?>
  <div class="single">
    <?php 
      while(have_posts()) {
        the_post(); ?>
        <h2 class="section-title"><?php the_title(); ?></h2>
        <?php 
        echo "<div class='container'>";
        echo wp_get_attachment_image(get_field('project_image')[id]); ?>
        <a href="<?php the_field('live_link'); ?>">See the project live.</a>
        <a href="<?php the_field('repo_link'); ?>">See the project repo.</a>
        <?php the_content(); ?>
        <a href="<?php echo site_url('/blog') ?>">See all projects</a>
    <?php  
    echo "</div>";
    } 
    ?>
  </div>
<?php get_footer(); ?>
