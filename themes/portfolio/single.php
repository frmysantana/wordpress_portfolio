<?php get_header(); ?>
  <div>
    <?php 
      while(have_posts()) {
        the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php echo wp_get_attachment_image(get_field('project_image')[id]); ?>
        <a href="<?php the_field('live_link'); ?>"><p>See the project live.</p>
        <a href="<?php the_field('repo_link'); ?>"<p>See the project repo.</p>
        <p><?php the_content(); ?></p>
        <a href="<?php echo site_url('/blog') ?>">See all projects</a>
    <?php  } 
    ?>
  </div>
<?php get_footer(); ?>
