<?php get_header(); ?>


<!-- Single Portfolio Slider -->



<script src="<?php bloginfo('template_directory');?>/js/slick.js"></script>
<div class="position-wrapper">
  <div class="o-slider__holder">

    <!-- If youtube video place first in slider -->
    <?php $youtube = get_field('port-youtube');?>
    <?php if($youtube): ?>
      <div class="o-slider__single">
      <?php echo wp_oembed_get($youtube); ?>
    </div>
    <?php endif; // Close loops for optional content ?>


  <!-- Loop images for slider -->
    <?php if( $images = get_field('portfolio_gallery') ):?>
     <?php foreach( $images as $image ): ?>
      <div class="o-slider__single">
         <img class="o-slider__image" src="<?php echo $image['url']?>" alt="<?php echo $image['alt'];?>">
      </div>
      <?php endforeach;?>

    </div>



  <!-- Slider Prev and next arrows, initiated below -->
    <ul class="o-slider__arrows">
      <li class="o-slider__arrows-prev">
        <img src="<?php bloginfo('template_directory');?>/images/arrow.png" alt="previous slider arrow">
      </li>
      <li class="o-slider__arrows-next">
        <img src="<?php bloginfo('template_directory');?>/images/arrow.png" alt="forward slider arrow">
      </li>
    </ul>
    <!-- End arrows -->
</div> <!-- position relative div -->


  <?php endif;?> <!-- End slider loop -->

  <script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('.o-slider__holder').slick({
      dots: true,
      infinite: true,
      speed: 300,
      prevArrow: jQuery('.o-slider__arrows-prev'),
      nextArrow: jQuery('.o-slider__arrows-next'),
      responsive: [
        {
          breakpoint: 512,
          settings: 'unslick'
        }
      ]
    });
  });
</script> <!-- End Slider -->

<!-- Start single post loop -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="c-portfolio-item--single o-site-container--slim">
          <!-- Header -->
          <h2 class="c-portfolio-info__caption"><?php echo get_the_title() ; ?></h2>

          <!-- Caption -->
          <?php $caption = get_field('port-caption');?>
          <?php if($caption) : ?>
            <p class="c-portfolio-info__description"><?php echo $caption; ?><span style="background: <?php the_field('port-colour');?>" class="c-portfolio-info__underline"></span></p>
          <?php endif; ?>


          <?php $picker = get_field('port-colour'); ?> <!-- Colour Picker -->

          <!-- Get Colour picker for custom colouring -->
          <?php if($picker) : ?>
            <style type="text/css">
               .slick-active .o-slider__pagination  {
                   color: <?php the_field('port-colour');?>;
                 }
               .c-portfolio-item--single .c-portfolio-info__description::before {
                   border-color: <?php the_field('port-colour');?>;
               }
             </style>
           <?php endif; ?> <!-- End colour picker -->



    <div class="c-portfolio__content">
        <?php the_content(); ?>
    </div>

    <!-- More Info -->
    <?php $moreInfo = get_field('more-info');?>
    <?php if($moreInfo) : ?>
      <p class="c-portfolio-info__content"><?php echo $moreInfo ?></p>
    <?php endif; ?>


  </div>

<?php endwhile; endif;  ?> <!-- End loop -->
<?php wp_reset_query();?>
</div> <!-- slim layout -->
<div class="c-portfolio__separator"></div>
<?php get_template_part('templates/loop');?>

<?php get_footer(); ?>
