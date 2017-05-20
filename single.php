<?php get_header(); ?>

<!-- Hero Image -->
<?php
$heroImage = get_field("hero_image");
$heroTitle = get_field("hero_title");
$heroSubTitle = get_field("hero_sub_title");
$heroInfo = get_field("hero_info");
?>

<div class="c-hero">
  <div class="c-hero__image" style="background-image: url(<?php echo $heroImage["url"];?>)"></div>
  <div class="c-hero__image-mobile"><img src="<?php echo $heroImage["url"];?>" alt="<?php echo $heroImage["alt"];?>"></div>

  <div class="o-site-container--med">
    <div class="c-hero__content">
      <div class="c-hero__title">
        <h1 style="border-color: <?php the_field('port-colour');?>"><?php echo $heroTitle; ?></h1>
      </div>
      <div class="c-hero__sub-title">
        <h4><?php echo $heroSubTitle; ?></h4>
      </div>
      <div class="c-hero__info">
        <p><?php echo $heroInfo; ?></p>
      </div>
    </div>
  </div>
</div>

<!-- Single Portfolio Slider -->

<?php
  if( have_rows('repeater_portfolio_images')):
  while ( have_rows('repeater_portfolio_images') ) : the_row();

    $images = get_sub_field('portfolio_images');
    $info = get_sub_field('gallery_information'); ?>

    <!-- Loop of gallery / images -->
    <div class="position-wrapper">
      <?php include "templates/slider.php"; ?><!-- position relative div -->
      <div class="c-portfolio__content">
        <div class="o-site-container--slim">
          <p><?php echo $info; ?></p>
        </div>
      </div>
    </div>

    <?php endwhile;?>
  <?php endif;?> <!-- End slider loop -->

  <script src="<?php bloginfo('template_directory');?>/js/slick.js"></script>


  <script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('.o-slider__holder').slick({
      dots: false,
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

 <!-- End loop -->
<?php wp_reset_query();?>
</div> <!-- slim layout -->
<div class="c-portfolio__separator"></div>
<?php get_template_part('templates/loop');?>

<?php get_footer(); ?>
