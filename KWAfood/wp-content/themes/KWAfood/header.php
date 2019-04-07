<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset') ?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title><?php bloginfo('name'); ?></title> 
		<?php wp_head()?>

	</head>

	<body>
				<!-- Navbar -->
		<nav class="navbar fixed-top navbar-expand-lg navbar-light">
		  <a class="navbar-brand" href="#">
		  	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logob.jpg" width="100" height="100" class="d-inline-block align-top" id="navlogo" alt="">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Pomociones <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#us">Nosotros</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#contact">Contáctos</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          La Carta
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="#lacarta">Empanadas</a>
		          <a class="dropdown-item" href="#lacarta">Snadwich</a>
		          <a class="dropdown-item" href="#lacarta">Tequeños</a>
		          <a class="dropdown-item" href="#lacarta">Ensaladas</a>
		          <a class="dropdown-item" href="#lacarta">Mucho más...</a>
		        </div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="blog.html">Blog</a>
		      </li>
		    </ul>
		  </div>
		</nav>