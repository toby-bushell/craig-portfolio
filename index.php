<?php get_header(); ?>

<section id="content" role="main">

  <!-- Column 1 -->
<div class="c-portfolio-holder c-portfolio-holder-column1">
  <?php query_posts( 'cat=3' )?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <li class="c-portfolio-item">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
             <?php the_post_thumbnail(); ?>
             <div class="c-portfolio-info">
               <h3 class="c-portfolio-info__caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></h3>
               <p class="c-portfolio-info__description"><?php echo get_post(get_post_thumbnail_id())->post_content;?></p>
             </div>
         </a>
       </li>

    <?php endwhile; endif; ?>  <?php wp_reset_query(); ?>

  </div>
  <!-- END Column 1 -->

  <!-- Column 2 -->
<div class="c-portfolio-holder c-portfolio-holder-column2">
  <?php query_posts( 'cat=4' )?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <li class="c-portfolio-item">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
           <?php the_post_thumbnail(); ?>
           <div class="c-portfolio-info">
             <h3 class="c-portfolio-info__caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></h3>
             <p class="c-portfolio-info__description"><?php echo get_post(get_post_thumbnail_id())->post_content;?></p>
           </div>
       </a>
     </li>

  <?php endwhile; endif; ?>  <?php wp_reset_query(); ?>
</div>

  <!-- END Column 2 -->

  <!-- Column 3 -->
<div class="c-portfolio-holder c-portfolio-holder-column3">
  <?php query_posts( 'cat=5' )?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <li class="c-portfolio-item">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
           <?php the_post_thumbnail(); ?>
           <div class="c-portfolio-info">
             <h3 class="c-portfolio-info__caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></h3>
             <p class="c-portfolio-info__description"><?php echo get_post(get_post_thumbnail_id())->post_content;?></p>
           </div>
       </a>
     </li>

  <?php endwhile; endif; ?>  <?php wp_reset_query(); ?>
</div>

  <!-- END Column 3 -->



  <!-- <?php get_template_part( 'nav', 'below' ); ?> -->
</section>


<?php get_footer(); ?>
