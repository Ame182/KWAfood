<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset') ?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title><?php bloginfo('name'); ?></title> 
		<?php wp_head()?>

	</head>

<body>
	<?php 
	    $custom_logo_id = get_theme_mod('custom_logo');
	    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full');
	?>
			<!-- Navbar -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-light">
	  <div class="container">
	  	<a class="navbar-brand" href="#">
	  	<img src="<?php echo $logo[0]; ?>" width="100" height="100" class="d-inline-block align-top" id="navlogo" alt="">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <?php if (has_nav_menu('header-menu')) { ?>
			<?php wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container_id' => 'navbarResponsive',
				'container_class' => 'collapse navbar-collapse',
				'menu_class' => 'navbar-nav ml-auto',
			)
		); ?>
		<?php  } ?>
	  </div>

    </nav>
	  