<?php get_header(); ?>


<script src="<?php bloginfo('template_directory');?>/js/slick.js"></script>

     <?php if( $images = get_field('portfolio_gallery') ):?>
     <div class="o-slider__holder">

     <?php foreach( $images as $image ): ?>
      <div class="o-slider__single">
         <img class="o-slider__image" src="<?php echo $image['url']?>" alt="<?php echo $image['alt'];?>">
      </div>
      <?php endforeach;?>
    </div>
  <?php endif;?>
  <script type="text/javascript">
  jQuery(document).ready(function(){

  jQuery('.o-slider__holder').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
    initialSlide : 2
  });

  });
</script>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
