<?php get_header(); ?>

<div class="container titulo blog">
	<div class="row">
		
		<img class="title section-heading text-center p-6" src="<?php echo get_template_directory_uri(); ?>/assets/images/titulo.png">
		<span> NOTICIAS<?php the_field('news'); ?></span>
	</div>
</div>
<section>
	<div class="container-fluid blog">
		<div class="row">
		<?php
			$arg =array(
				'post_type' => 'post',
				'posts_per_page' => -1
			);

			$get_arg = new WP_Query($arg);


			while ($get_arg->have_posts()) {
				$get_arg->the_post();
			?>
			<?php echo get_template_part('_includes/loop' , 'posts'); ?>

	<?php } wp_reset_postdata(); ?>



		</div>
   </div>	
</section>
<section class="galeria">
	<div class="row no-gutters popup-gallery ">
      <?php
        $arg = array(
          'post_type'		 => 'imagenes',
          'posts_per_page' => 6
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>

          <div class="col-lg-4 col-sm-6">
  			<img class="lacarta-box" href="<?php the_post_thumbnail_url( 'small' ); ?> data-lity data-lity-desc">
              <?php the_post_thumbnail( 'data-lity', array( 'class' => 'img-fluid' ) ); ?>
          </div>

        <?php } wp_reset_postdata();
      ?>
    </div>
	
</section>

<?php get_footer(); ?>
