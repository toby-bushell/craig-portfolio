<?php
/**
 * Template Name: Hire me
 */

get_header(); ?>

   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



      <div class="o-layout-container">
          <div class="o-site-container--slim o-site-container--center">
              <?php the_content();?>


              <div class="o-social">
                <a href="https://www.linkedin.com/in/fitzgeraldcraig" target="_blank"><img class="o-soclial__icon" src="http://icons.iconarchive.com/icons/danleech/simple/24/linkedin-icon.png" alt="craig fitzgerald linkein"></a>
              </div>
        </div>
      </div>




   <?php endwhile; endif; ?>


<?php get_footer(); ?>
