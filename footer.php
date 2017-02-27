  <footer>
		<div class="row">
			<div class="col-sm-12 footertxt">         
				<div class="container">
          <a class="footerlogo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Google" target="_blank" class="floatleft"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="Coastal Spray Logo" /></a>
  				<div class="mobileclearfix">
          <p><?php if ( ! dynamic_sidebar ('footer-widget') ): ?></p>
        <?php endif ?>
  			</div>
      </div>
    </div>
      <div class="row">
        <div class="col-sm-12 footercopyright">
          <div class="container">
            <p>&copy; <?php echo date(Y); ?> Coastal Spray / All Rights Reserved</p>
              <div class="socialfooter">
                <?php if ( ! dynamic_sidebar ('social-footer-widget') ): ?><?php endif ?>
              </div>
          </div>
        </div>
      </div>       
  </footer>

  <?php wp_footer(); ?>

</body> </html>
