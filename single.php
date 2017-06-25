<?php get_header(); ?>

<!-- Hero Image -->
<?php
$heroImage = get_field("hero_image");
$heroImageMob = get_field("hero_image_mobile");
$heroTitle = get_field("hero_title");
$heroSubTitle = get_field("hero_sub_title");
$heroInfo = get_field("hero_info");
?>

<div class="c-hero">
  <div class="c-hero__image" style="background-image: url(<?php echo $heroImage["url"];?>)"></div>
  <div class="c-hero__image-mobile"><img src="<?php echo $heroImageMob["url"];?>" alt="<?php echo $heroImageMob["alt"];?>"></div>

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
$counter = 0;
if( have_rows('portfolio_content') ):

     // loop through the rows of data
    while ( have_rows('portfolio_content') ) : the_row();

        if( get_row_layout() == 'portfolio_content_gallery' ):



            //  Single Portfolio Slider
            if( have_rows('repeater_porfolio_images')):
            while ( have_rows('repeater_porfolio_images') ) : the_row();


                $images = get_sub_field('portfolio_images');
                $info = get_sub_field('gallery_information');


                 ?>

                <!-- Loop of gallery / images -->
                <div class="position-wrapper">
                <?php include "templates/slider.php"; ?>
                <?php $counter++; ?>
                <!-- position relative div -->
                <?php if ($info) : ?>
                  <div class="c-portfolio__content">
                      <div class="o-site-container--slim">
                          <p><?php echo $info; ?></p>
                      </div>
                  </div>
                <?php endif; ?>
                </div>

                <?php endwhile;?>
            <?php endif;?> <!-- End slider loop -->

         <!-- End Slider -->

      <?php elseif( get_row_layout() == 'portfolio_content_video' ):?>
          <?php


          // get iframe HTML
          $iframe = get_sub_field('portfolio_video');


          // use preg_match to find iframe src
          preg_match('/src="(.+?)"/', $iframe, $matches);
          $src = $matches[1];

          if(get_sub_field('loop_id')){
            $params = array(
              'controls'    => 0,
              'hd'        => 1,
              'autohide'    => 1,
              'autoplay'    => 0,
              'loop'    => 1,
              'playlist' => get_sub_field('loop_id'),
              'showinfo'    => 0,
              'rel'         => 0,
              'iv_load_policy' => 3
            );
          } else {
              $params = array(
                'controls'    => 0,
                'hd'        => 1,
                'autohide'    => 1,
                'autoplay'    => 0,
                'loop'    => 1,
                'showinfo'    => 0,
                'rel'         => 0,
                'iv_load_policy' => 3
              );
        }


          // add extra params to iframe src


          $new_src = add_query_arg($params, $src);

          $iframe = str_replace($src, $new_src, $iframe);


          // add extra attributes to iframe html
          $attributes = 'frameborder="0"';

          $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
          ?>

          <div class="o-media-embed"><?php echo $iframe;?></div>
          <?php
        endif;
    endwhile;
endif ?>

<!-- Start single post loop -->

 <!-- End loop -->
<?php wp_reset_query();?>
</div> <!-- slim layout -->
<div class="c-portfolio__separator"></div>
<div class "c-portfolio__separator-header" style="text-align:center">
  <h4>See more work</h4>
</div>
<?php get_template_part('templates/loop');?>


<?php get_footer(); ?>
