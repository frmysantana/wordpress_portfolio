<?php get_header(); ?>
  <main>
    <section class="section__latest-projects">
        <h3 class="section__latest-projects__title">Latest Projects</h3>
        <h2 class="section__latest-projects__sub-title">Click on an image to see more details.</h2>
        <?php 

        while (have_posts()) {
          the_post();
          $content = get_the_content();
        }

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
    <hr class="container">
    <section class="section-about">
      <h3 class="section-about__title">About</h3>
      <div class="container container--home-page">
        <!-- <img width=""> -->
        <figure class="portrait-figure">
          <?php echo wp_get_attachment_image(get_the_author_meta('user_image', 1), 'singleSize', false, array("class" => "section-about__portrait")); ?>
        </figure>
        <div class="containter--column">
          <p class="section-about__bio"><?php echo get_the_author_meta('description', 1); ?></p>
          <p class="section-about__bio">You can also see my resume <span class="resume-link"><?php echo $content; ?></span>.</p>
        </div>
      </div>        
    </section>
    <hr class="container">
    <section class="section-contact" id="contact">
      <h3 class="section-contact__title">Contact</h3>
    </section>
  </main>
<?php get_footer(); 
// [id]
?>
