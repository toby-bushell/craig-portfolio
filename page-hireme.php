<?php
/**
 * Template Name: Hire me
 */

get_header(); ?>

   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



      <div class="o-layout-container">
          <div class="o-site-container--slim o-site-container--center">
              <?php the_content();?>

            <a href="https://www.linkedin.com/in/fitzgeraldcraig" target="_blank">
              <div class="o-social"></div>
            </a>
        </div>
      </div>




   <?php endwhile; endif; ?>


<?php get_footer(); ?>
