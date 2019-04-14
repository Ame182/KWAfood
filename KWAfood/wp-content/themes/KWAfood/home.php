<?php get_header(); ?>

<div class="container titulo blog">
	<div class="row">
		
		<img class="title section-heading text-center p-6 animated bounce delay-2s" src="<?php echo get_template_directory_uri(); ?>/assets/images/titulo.png">
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
	<div class="container-fluid gal">
		
		<div class="row no-gutters popup-gallery gall">

	      <?php
	        $arg = array(
	          'post_type'		 => 'galeria',
	          'posts_per_page' => 6
	        );

	        $get_arg = new WP_Query( $arg );

	        while ( $get_arg->have_posts() ) {
	          $get_arg->the_post();
	        ?>

			<?php echo get_template_part('_includes/loop' , 'gallery'); ?>

	        <?php } wp_reset_postdata();
	      ?>
	    </div>
	</div>
	

	
</section>

<?php get_footer(); ?>
