<?php $gallery_type = count($images) > 1 ? 'slider' : 'single' ;?>
<div class="o-slider__holder">


<!-- Loop images for slider -->
   <?php foreach( $images as $image ): ?>
    <div class="o-slider__single">
       <img class="o-slider__image" src="<?php echo $image['url']?>" alt="<?php echo $image['alt'];?>">
    </div>
    <?php endforeach;?>

  </div>
  <?php if($gallery_type === 'slider'): ?>
  <!-- Slider Prev and next arrows, initiated below -->
    <ul class="o-slider__arrows o-slider__arrows-<?php echo $counter;?>">
      <li class="o-slider__arrows-prev o-slider__arrows-prev-<?php echo $counter;?>">
        <img src="<?php bloginfo('template_directory');?>/images/arrow.png" alt="previous slider arrow">
      </li>
      <li class="o-slider__arrows-next o-slider__arrows-next-<?php echo $counter;?>">
        <img src="<?php bloginfo('template_directory');?>/images/arrow.png" alt="forward slider arrow">
      </li>
    </ul>
  <?php endif; ?>
  <!-- End arrows -->
</div>
