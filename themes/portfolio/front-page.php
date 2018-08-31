<?php get_header(); ?>
  <main>
    <section class="section-about">
      <h3 class="section-about__title">About</h3>
      <div class="container">
        <!-- <img width=""> -->
        <figure>
          <?php echo wp_get_attachment_image(get_the_author_meta('user_image', 1), 'singleSize', false, array("class" => "section-about__portrait")); ?>
          <figcaption class="section-about__portrait__caption">Click/tap image to see a description.</figcaption>
        </figure>
        <p class="section-about__bio"><?php echo get_the_author_meta('description', 1); ?></p>
      </div>        
    </section>
    <hr class="container">
    <section class="section__latest-projects">
        <h3 class="section__latest-projects__title">Latest Projects</h3>
        <?php 
        
        $projects = new WP_Query(array(
          'posts_per_page' => 2
        ));

        echo "<div class='container'>";
        while($projects->have_posts()) {
          $projects->the_post(); ?>
          <figure>
            <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image(get_field('project_image')[id], 'singleSize', false, array("class" => "section__latest-projects__screenshot")); ?></a>
            <figcaption class="section__latest-projects__screenshot__caption">Click/tap image to see more details.</figcaption>
          </figure>
        <?php }
        echo "</div>";
        ?>
        <a href="<?php echo site_url('/blog'); ?>"><h4 class="section__latest-projects__see-all">See all projects<h4></a> 
    </section>
  </main>
<?php get_footer(); ?>