<?php get_header(); ?>

   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



      <div class="o-site-container o-layout-container">
          <div class="o-site-container--slim">
            <?php the_content();?>



            <?php $aboutImage = get_field('about-image');

            if($aboutImage):?>

              <div class="c-content__image">
                <img src="<?php echo $aboutImage['url'];?>" alt="<?php echo $aboutImage['alt'];?>">
              </div>

            <?php endif; ?> <!-- Endif for image -->
        </div>
      </div>




   <?php endwhile; endif; ?>

<?php get_footer(); ?>
