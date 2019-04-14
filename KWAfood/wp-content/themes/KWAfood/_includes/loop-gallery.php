<div class="col-lg-12 col-sm-12">
  <a class="lacarta-box" href="<?php the_post_thumbnail_url( 'large' ); ?>">
    <?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?>
    <div class="lacarta-box-caption">

      <div class="project-name">
        <p><?php the_content() ?></p>
      </div>
    </div>
  </a>
</div>