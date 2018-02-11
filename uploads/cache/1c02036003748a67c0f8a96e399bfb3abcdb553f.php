<?php 
  $args = array( 'posts_per_page' => 2 );
  $posts_object = new WP_Query( $args );
 ?>

<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.hero', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php ($i=0); ?>
  <?php while($posts_object->have_posts()): ?> <?php ($posts_object->the_post()); ?>
    <?php ($i++); ?>
    <?php echo $__env->make('partials.content-front-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endwhile; ?>
  
  <?php echo wp_reset_postdata(); ?>

  
  <?php echo $__env->make('partials.content-contact-form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>