<footer>
  <?php wp_footer();?>
  <div id="footer-info">
    <?php dynamic_sidebar('contact-info'); ?>
    <?php dynamic_sidebar('business-hours'); ?>
  </div>
  <span>COPYRIGHT © 2020 INHABITENT</span>
  <img src='<?php echo get_template_directory_uri() . "/assets/images/logos/inhabitent-logo-text.svg";?>'>
</footer>
</body>
</html>