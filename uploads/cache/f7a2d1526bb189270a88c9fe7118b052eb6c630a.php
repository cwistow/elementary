<div class="entry">
  <div class="row">
    <?php if($i%2!=0): ?>
      <?php if(has_post_thumbnail()): ?>
        <div class="col-xs-12 col-xl-6">
          <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid">
        </div>
      <?php endif; ?>
      <div class="col-xs-12 col-xl-6">
        <div class="title"><?php (the_title()); ?></div>
        <div class="text"><?php (the_content()); ?></div>
      </div>
    <?php else: ?>
      <?php if(has_post_thumbnail()): ?>
        <div class="col-xs-12 col-xl-6 order-xl-2">
          <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid">
        </div>
      <?php endif; ?>
      <div class="col-xs-12 col-xl-6 order-xl-1">
        <div class="title"><?php (the_title()); ?></div>
        <div class="text"><?php (the_content()); ?></div>
      </div>
    <?php endif; ?>
  </div>
</div>