<?php get_header(); ?>
  <div>
    <?php
      $i = 0;
      
      while(have_posts()) {
        $i += 1;
        the_post(); ?>
        <div class="container container__archive">
          <img class="archive-image"<?php echo wp_get_attachment_image(get_field('project_image')[id], 'archiveSize'); ?><img>
          <div class="column">
            <h2 class="archive-title"><?php the_title(); ?></h2>
            <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
            <a class="archive-read-more" href="<?php the_permalink(); ?>">Read more</a>
          </div>
        </div>
    <?php 
        if ($i != get_post_count()) echo "<hr class='container'>";
        else echo "<br>";
      }
      echo "<p class='container__pagination'>".paginate_links()."</p>";
    ?>
  </div>
<?php get_footer(); ?>
