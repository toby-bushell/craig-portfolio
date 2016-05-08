<!-- Start portfolio grid below -->
  <div class="o-layout-container">
<!-- Column 1 -->
<div class="c-portfolio-holder c-portfolio-holder-column1 >">
<?php $the_query = new WP_Query(array(
  'cat'     => 3,
  'meta_key'=> 'post-order',
  'orderby' => 'meta_value_num',
  'order'   => 'ASC'
)); ?>

<?php while( $the_query->have_posts() ) : $the_query->the_post();

   $caption = get_field('port-caption');?>

   <!-- Start portfolio content -->
    <li class="c-portfolio-item">

        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
           <?php the_post_thumbnail(); ?>
           <div class="c-portfolio-info">
             <h3 class="c-portfolio-info__caption"><?php echo get_the_title() ; ?></h3>
             <p class="c-portfolio-info__description"><?php echo $caption; ?><span style="background: <?php the_field('port-colour');?>" class="c-portfolio-info__underline"></span></p>
           </div>
       </a>

     </li>

  <?php endwhile; ?>  <?php wp_reset_query(); ?>

</div>
<!-- END Column 1 -->

<!-- Column 2 -->
<div class="c-portfolio-holder c-portfolio-holder-column2 >">
<?php $the_query = new WP_Query(array(
  'cat'     => 4,
  'meta_key'=> 'post-order',
  'orderby' => 'meta_value_num',
  'order'   => 'ASC'
)); ?>

<?php while( $the_query->have_posts() ) : $the_query->the_post();

   $caption = get_field('port-caption');?>

   <!-- Start portfolio content -->
    <li class="c-portfolio-item">

        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
           <?php the_post_thumbnail(); ?>
           <div class="c-portfolio-info">
             <h3 class="c-portfolio-info__caption"><?php echo get_the_title() ; ?></h3>
             <p class="c-portfolio-info__description"><?php echo $caption; ?><span style="background: <?php the_field('port-colour');?>" class="c-portfolio-info__underline"></span></p>
           </div>
       </a>

     </li>

  <?php endwhile; ?>  <?php wp_reset_query(); ?>

</div>

<!-- END Column 2 -->

<!-- Column 3 -->
<div class="c-portfolio-holder c-portfolio-holder-column3 >">
<?php $the_query = new WP_Query(array(
  'cat'     => 5,
  'meta_key'=> 'post-order',
  'orderby' => 'meta_value_num',
  'order'   => 'ASC'
)); ?>

<?php while( $the_query->have_posts() ) : $the_query->the_post();

   $caption = get_field('port-caption');?>

   <!-- Start portfolio content -->
    <li class="c-portfolio-item">

        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
           <?php the_post_thumbnail(); ?>
           <div class="c-portfolio-info">
             <h3 class="c-portfolio-info__caption"><?php echo get_the_title() ; ?></h3>
             <p class="c-portfolio-info__description"><?php echo $caption; ?><span style="background: <?php the_field('port-colour');?>" class="c-portfolio-info__underline"></span></p>
           </div>
       </a>

     </li>

  <?php endwhile; ?>  <?php wp_reset_query(); ?>

</div>
</div> <!-- layout container -->

<!-- END Column 3 -->
