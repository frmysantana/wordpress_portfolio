<?php get_header(); ?>
  <div>
    <?php
      $i = 0;
      while(have_posts()) {
        $i += 1;
        the_post(); ?>
        <?php echo wp_get_attachment_image(get_field('project_image')[id]); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">Read more</a>
    <?php 
        if ($i < 3) echo "<hr>";
        else echo "<br>";
      }
      echo paginate_links();
    ?>
  </div>
<?php get_footer(); ?>
