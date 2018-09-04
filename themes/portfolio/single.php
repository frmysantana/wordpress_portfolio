<?php get_header(); ?>
  <main>
    <?php 
      while(have_posts()) {
        the_post(); ?>
        <h2 class="single__title"><?php the_title(); ?></h2>
        <?php 
        echo "<div class='single__container'>";
        echo wp_get_attachment_image(get_field('project_image')[id], 'singleSize', false, array('class' => 'single__screenshot')); ?>
        <a class="single__container__live" href="<?php the_field('live_link'); ?>" target="_blank">See the project live.</a>
        <a class="single__container__git" href="<?php the_field('repo_link'); ?>" target="_blank">See the project repo.</a>
        <?php the_content(); ?>
        <h4><a href="<?php echo site_url('/blog') ?>">See all projects</a></h4>
    <?php  
    echo "</div>";
    } 
    ?>
  </main>
<?php get_footer(); ?>
