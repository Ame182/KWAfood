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

			<div class="col-md-4 mt-5">
				<h2><?php the_title() ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/IMG-20190321-WA0027.jpg" id="news" alt="">
				<p><?php the_excerpt() ?></p>
				<a class="btn btn-dark" href="<?php get_permalink() ?>">Lee más</a>

			</div>
	<?php } wp_reset_postdata(); ?>



			</div>
	   </div>	
	</section>

<?php get_footer(); ?>


