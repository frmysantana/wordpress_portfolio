    <footer  class="footer <?php 
    // conditionally apply fill classes only if their is 1 blog post summary on the blog page.
    // is_home() checks if the current page is the blog index
    if ((is_home() AND $post_count == 1) OR (is_404())) { echo 'footer--fill-page';} 
    ?>">
      <div class="container">
        <p class="footer__tag-line">Designed and Coded by Fremy Santana.</p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>