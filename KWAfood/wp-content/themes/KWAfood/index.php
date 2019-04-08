<?php get_header(); ?>


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


<?php get_footer(); ?>


