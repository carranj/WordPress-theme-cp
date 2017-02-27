<?php get_header('frontpage'); ?>
        <div class="col-xs-12 homeslide clear-pad">
          <div id="gallery" class="royalSlider rsDefault homepageslider">
            <?php if( have_rows('slideshow_home') ): ?>
            <?php while ( have_rows('slideshow_home') ) : the_row(); ?>        
          <!-- the_sub_field-->
                 
            	<div class="rsContent">
	            	<?php $homepageImage = get_sub_field('slide_image'); ?>
            	</div>

          <?php endwhile; else : ?>
          <?php endif; ?>
   
        </div>
        </div>
        <div class="clearfix"></div>
        <div class="container">
      <div class="col-md-8">
      	<div class="col-md-6 row">
      		<?php the_field('left_column_home'); ?>
      	</div>
      	<div class="col-md-6 row">
      		<?php the_field('middle_column_home'); ?>
      	</div>
      	<div class="col-md-12">
          <?php $statesservedhome = get_field('states_served_home');
           if( !empty($statesservedhome) ): ?>
             <img class="img-responsive" src="<?php echo $statesservedhome['url']; ?>" alt="<?php echo $statesserved['alt']; ?>" />
          <?php endif; ?>
          </div>
      </div>
      <div class="col-md-4 sidebarhome">
      	<?php $sidebarImage = get_field('image_right_column'); ?>
              <img class="home_sidebarimage img-responsive" src="<?php echo $sidebarImage['url']; ?>" alt="<?php echo $sidebarImage['alt']; ?>" />

      	<?php the_field('right_column_home'); ?>
      </div>

 	 </div>


   <?php get_footer(); ?> 