<?php get_header(); ?>
<section id="content" role="main">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="header">
         <h1 class="entry-title"><?php the_title(); ?></h1>
         <?php edit_post_link(); ?>
      </header>


      <div class="o-layout-container">

          <div class="c-portfolio-holder">
            <div class="c-portfolio-item">
              <img src="<?php bloginfo('template_directory');?>/images/birds.jpg">
            </div>
            <div class="c-portfolio-item">
              <img src="<?php bloginfo('template_directory');?>/images/birds.jpg">
            </div>
            <div class="c-portfolio-item">
              <img src="<?php bloginfo('template_directory');?>/images/birds.jpg">
            </div>
          </div>


          <div class="c-portfolio-holder">
            <div class="c-portfolio-item">
              <img src="<?php bloginfo('template_directory');?>/images/birds.jpg">
            </div>
            <div class="c-portfolio-item">
              <img src="<?php bloginfo('template_directory');?>/images/birds.jpg">
            </div>
            <div class="c-portfolio-item">
              <img src="<?php bloginfo('template_directory');?>/images/birds.jpg">
            </div>
          </div>

          
          <div class="c-portfolio-holder">
            <div class="c-portfolio-item">
              <img src="<?php bloginfo('template_directory');?>/images/birds.jpg">
            </div>
            <div class="c-portfolio-item">
              <img src="<?php bloginfo('template_directory');?>/images/birds.jpg">
            </div>
            <div class="c-portfolio-item">
              <img src="<?php bloginfo('template_directory');?>/images/birds.jpg">
            </div>
          </div>

      </div>


   </article>
   <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
   <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
