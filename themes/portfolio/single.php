<?php get_header(); ?>
  <main>
    <?php 
      while(have_posts()) {
        the_post(); ?>
        <h2 class="single__title"><?php the_title(); ?></h2>
        <?php 
          echo "<div class='single__container'>";
          echo wp_get_attachment_image(get_field('project_image')[id], 'singleSize', false, array('class' => 'single__screenshot'));
          
          if (get_post_field('live_link', get_the_ID()) AND get_post_field('repo_link', get_the_ID())) {
            echo '<div class="links">';
            echo '<a class="single__container__live button single" href="'.get_post_field('live_link', get_the_ID()).'" target="_blank">See Live.</a>';
            echo '<a class="single__container__git button" href="'.get_post_field('repo_link', get_the_ID()).'" target="_blank">See Repo.</a>';            
            echo '</div>';
          } elseif (get_post_field('live_link', get_the_ID())) {
            echo '<div class="links links--single">';
            echo '<a class="single__container__live button single" href="'.get_post_field('live_link', get_the_ID()).'" target="_blank">See Live.</a>';
            echo '</div>';
          } else {
            echo '<div class="links links--single">';
            echo '<a class="single__container__git button" href="'.get_post_field('repo_link', get_the_ID()).'" target="_blank">See Repo.</a>';            
            echo '</div>';
          }
            
          the_content(); ?>
        <h4><a href="<?php echo site_url('/blog') ?>">&larr; Back to all projects</a></h4>
    <?php  
    echo "</div>";
    } 
    ?>
  </main>
<?php get_footer(); ?>
