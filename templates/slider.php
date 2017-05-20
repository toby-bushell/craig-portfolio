<div class="o-slider__holder">

  <!-- If youtube video place first in slider -->
  <?php $youtube = get_field('port-youtube');?>
  <?php if($youtube): ?>
    <div class="o-slider__single">
    <?php echo wp_oembed_get($youtube); ?>
  </div>
  <?php endif; // Close loops for optional content ?>


<!-- Loop images for slider -->
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
</div>
