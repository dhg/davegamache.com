   <footer class="footer">
      <div class="back-to-top">
        <a href="#">Back to top</a>
      </div>
      <div class="footer-nav">
        <?php echo previous_post_link('%link', 'Previous'); ?>
        <?php if(get_adjacent_post(false, '', true) && get_adjacent_post(false, '', false)) {
          echo " / ";
        } ?>
        <?php echo next_post_link('%link', 'Next'); ?>
      </div>
      <aside class="offsite-links">
        <a class="twitter-link" href="http://www.twitter.com/dhg">Twitter</a> |
        <a class="dribbble-link" href="http://dribbble.com/dhgamache">Dribble</a> |
        <a class="rss-link" href="<?php bloginfo('rss2_url'); ?>">RSS</a>
      </aside>
    </footer>

  </div> <!-- / .wrapper -->

  <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.masonry.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>

</body>
</html>
