    <footer  class="footer <?php 
    // conditionally apply fill classes only if their is 1 blog post summary on the blog page.
    // is_home() checks if the current page is the blog index
    if ((is_home() AND $post_count == 1) OR (is_404())) { echo 'footer--fill-page';} 
    ?>">
      <div class="container">
        <p class="footer__tag-line">Designed and Coded by Fremy Santana.<br> Hero image was taken by 
          <a href="https://unsplash.com/@markusspiske?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Markus Spiske">
              Markus Spiske
          </a>.
        </p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>

<!-- style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px"  -->