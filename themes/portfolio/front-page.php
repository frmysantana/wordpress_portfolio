<?php get_header(); ?>
  <main>
    <section class="section-about">
      <h3 class="section-about__title">About</h3>
      <div class="container container--home-page">
        <!-- <img width=""> -->
        <figure class="portrait-figure">
          <?php echo wp_get_attachment_image(get_the_author_meta('user_image', 1), 'singleSize', false, array("class" => "section-about__portrait")); ?>
        </figure>
        <p class="section-about__bio"><?php echo get_the_author_meta('description', 1); ?></p>
      </div>        
    </section>
    <hr class="container">
    <section class="section__latest-projects">
        <h3 class="section__latest-projects__title">Latest Projects</h3>
        <h2 class="section__latest-projects__sub-title">Click one an image to see more details.</h2>
        <?php 
        
        $projects = new WP_Query(array(
          'posts_per_page' => 2
        ));

        echo "<div class='container container--home-page'>";
        while($projects->have_posts()) {
          $projects->the_post(); ?>
          <figure>
            <a class="section__latest-projects__link" href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image(get_field('project_image')[id], 'singleSize', false, array("class" => "section__latest-projects__screenshot")); ?></a>
            <figcaption class="section__latest-projects__screenshot__caption">Click/tap image to see more details.</figcaption>
          </figure>
        <?php }
        echo "</div>";
        ?>
        <a href="<?php echo site_url('/blog'); ?>"><h4 class="section__latest-projects__see-all">See all projects &rarr;<h4></a> 
    </section>
  </main>
<?php get_footer(); ?>