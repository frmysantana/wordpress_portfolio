<?php get_header(); ?>
    <main>
        <?php 
            while(have_posts()) {
                the_post(); ?>
                <div class="container">
                    <?php the_content(); ?>                    
                <div>
        <?php
            }
        ?>
  </main>
<?php get_footer(); ?>