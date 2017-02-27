<?php get_header(); ?>
<div class="topbanner">
    
  <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2015/08/Subpage-Headers-News.jpg" alt="News" />

</div>
  
    <div class="container">
      
     <div class="row page-header">
          <div class="col-sm-12">
            <h1><strong>News</strong> | Industrial Ground and Site Maintenance  </h1>
          </div>
      </div>
        <div class="col-md-9">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="post">
              <h2 class="postings"><a href ="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_category(', '); ?> 
                <br><br>
              <?php the_excerpt(); ?>
              <a style="font-family: 'Oswald', sans-serif;" href="<?php the_permalink(); ?>">Read More <i class="fa fa-caret-square-o-right"></i></a>
            <p><em>Share this article:</em> <a href="http://www.facebook.com/sharer.php?u="> <i class="fa fa-facebook-square"></i></a> 
                                            <a href="http://twitter.com/share?url=&text="> <i class="fa fa-twitter-square"></i></a> 
              <p><em> 
                <span class="blogdate"><?php echo the_time ('F j, Y');?></span>
              </p>
              
              <hr>

            </article>
          
          <?php endwhile; else: ?>
          
          <?php endif; ?>

        </div>
         <?php get_sidebar('blog'); ?>
        
    </div>

   <?php get_footer(); ?> 