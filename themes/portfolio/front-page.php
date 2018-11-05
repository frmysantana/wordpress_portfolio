<?php get_header(); ?>
  <main>
    <section class="section__latest-projects">
        <h3 class="section__latest-projects__title">Latest Projects</h3>
        <h2 class="section__latest-projects__sub-title">Click on an image to see more details.</h2>
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
        wp_reset_postdata();
        ?>
        <a href="<?php echo site_url('/blog'); ?>"><h4 class="section__latest-projects__see-all">See all projects &rarr;<h4></a> 
    </section>

    <hr class="container">
    
    <section class="section-about" id="about">
      <h3 class="section-about__title">About Me</h3>
      <div class="container container--home-page">
        <!-- <img width=""> -->
        <div class="containter--column section-about__bio">
          <p>
            Hello! I am a Front-End Web Developer living in the Northern New Jersey area. I have taught myself HTML, CSS, JavaScript (including React), and WordPress development through the wonder that is the Internet.
            <?php echo wp_get_attachment_image(get_the_author_meta('user_image', 1), 'singleSize', false, array("class" => "section-about__portrait")); ?> 
            I’m constantly looking to improve my skills through a mix of online courses, personal projects, freelance work, and talking with other developers in the various programming groups that I participate and volunteer in.
            <!-- <figure class="portrait-figure"> -->
              <!-- <?php echo wp_get_attachment_image(get_the_author_meta('user_image', 1), 'singleSize', false, array("class" => "section-about__portrait")); ?> -->
            <!-- </figure> -->
            If anything you see on my website piques your interest, feel free to use my <a href="<?php echo site_url('/contact'); ?>">contact page</a> to send me a message! You can also see my <a href="<?php echo wp_get_attachment_url(159); ?>">resume here</a>.</p>

          <p class="u-top-margin">
            Outside of web development, I am avidly curious about music. I enjoy (deeply) listening and trying various styles/genres of music. 
            I’ll give pretty much anything at least a decent shot. I am also greatly interested in the natural sciences. 
            In fact, before programming I completed a Bachelor’s of Science degree in Applied Mathematics and Applied Physics. 
            Although life has taken me down a different path after college, I am still greatly interested in these fields, and hope to one day be able to use my programming skills to help further a scientific or engineering pursuit, such as A.I., biotechnology, or space exploration.
          </p>
        </div>
      </div>        
    </section>
  
  </main>
<?php get_footer(); 
?>

<!-- <a href="<?php echo wp_get_attachment_url(104); ?>"> -->