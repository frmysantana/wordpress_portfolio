    <footer  class="footer <?php 
    // conditionally apply fill classes only if their is 1 blog post summary on the blog page.
    // is_home() checks if the current page is the blog index
    if ((is_home() AND $post_count == 1) OR (is_404())) { echo 'footer--fill-page';} 
    ?>">
      <div class="container">
        <p>Designed and Coded by Fremy Santana.</p>
        <div class="footer__social">
          <p class="footer__social--title">Social Media</p>
          <a class="footer__link" href="https://github.com/frmysantana" target="_blank">Github</a>
          <a class="footer__link" href="https://www.linkedin.com/in/fremy-santana-5a714696" target="_blank">LinkedIn</a>
        </div>
        <p>I can be contacted through email at: <br> frmysantana@yahoo.com</p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>