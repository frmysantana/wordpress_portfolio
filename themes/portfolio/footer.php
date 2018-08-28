    <footer <?php 
    // conditionally apply fill classes only if their is 1 blog post summary on the blog page.
    // is_home() checks if the current page is the blog index
    if ((is_home() AND $post_count == 1) OR (is_404())) { echo 'class="footer--fill-page"';} 
    ?>>
      <div class="container">
        <p class="footer-author">Designed and Coded by Fremy Santana.</p>
        <div class="social-media-div">
          <p id="social-media">Social Media</p>
          <a href="https://github.com/frmysantana" target="_blank">Github</a>
          <a href="https://www.linkedin.com/in/fremy-santana-5a714696" target="_blank">LinkedIn</a>
        </div>
        <p class="footer-contact">I can be contacted through email at: <br> frmysantana@yahoo.com</p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>