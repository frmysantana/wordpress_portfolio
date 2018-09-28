<?php get_header(); ?>
  <main>
    <?php
      $i = 0;
      
      while(have_posts()) {
        $i += 1;
        the_post(); ?>

      <div class="container <?php if (is_home() AND get_post_count() == 1) {echo "project--single";} else {echo "project";} ?>">
      <!-- outputs an image element for the corresponsing project image with the class "archive-image" -->
        <figure class="project__image--mobile">
          <?php echo wp_get_attachment_image(get_field('project_image')[id], 'archiveSize', false, array("class" => "project__image")); ?>
        </figure>
        <div class="project__details">
          <h2 class="project__title"><?php the_title(); ?></h2>
          <p class="project__details--summary"><?php echo wp_trim_words(get_the_content(), 20); ?></p>
          <a class="project__details__read-more" href="<?php the_permalink(); ?>">Read more</a>
        </div>
      </div>

    <?php 
        if ($i != get_post_count()) echo "<hr class='container'>";
        else echo "<br>";
      }
      echo "<p class='container__pagination'>".paginate_links()."</p>";
    ?>
  </main>
<?php get_footer();
?>

