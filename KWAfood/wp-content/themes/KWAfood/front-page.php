<?php get_header(); ?>

	<!-- Carrusel -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.svg" id="logoAbsoluto" alt="Logo KWA food">
	  <div class="carousel-inner">

	    <div class="carousel-item active">
	      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/slide1a.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/slide2a.jpg" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/slide3a.jpg" alt="Third slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
</div>
<!-- Termina el carrusel -->

</header>

<!-- fast menu -->
<section class="p-0" id="fastmenu">
	<div class="container-fluid">
		<div class="row fast">
			<div class="col-lg-2 col-md-6 dia l" data-page="lunes">
				<div class="di hide lun">
					<h2>2x1</h2>
					<h4>EMPANADAS</h4>
				</div>
			</div>	
			<div class="col-lg-2 col-md-6 dia m" data-page=" martes">
				<div class="di hide mar">
					<h2>BEBIDAS GRATIS</h2>
					
				</div>
			</div>
			<div class="col-lg-2 col-md-6 dia mi" data-page=" miercoles">
				<div class="di hide mie">
					<h2>$2.600</h2>
					<h4>SANDWICH + BEBIDA</h4>
				</div>					
			</div>
			<div class="col-lg-2 col-md-6 dia ju" data-page=" jueves">
				<div class="di hide jue">
					<h2>$4.000</h2>
					<h4>10 TEQUEÑOS</h4>
				</div>					
			</div>
			<div class="col-lg-2 col-md-6 dia vi" data-page=" viernes">
				<div class="di hide vie">
					<h2>2x1</h2>
					<h4>ESALADAS</h4>
				</div>					
			</div>
			<div class="col-lg-2 col-md-6 dia sado" data-page=" sabadom">
				<div class="di hide sa">
					<h2>$3.000</h2>
					<h4>SOPA, SECO Y JUGO</h4>
				</div>					
			</div>
		</div>	
	</div>

</section>

<!-- Comienza la Carta -->
<section class="p-0" id="lacarta">
	<div class="container-fluid">
	  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lacarta.svg" class="title" alt="la carta">
	</div>
  <div class="container-fluid p-0">
    <div class="row no-gutters popup-gallery">
      <div class="col-lg-4 col-sm-6">
        <a class="lacarta-box" href="">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/lacarta/clubhouse.jpg" alt="">
          <div class="lacarta-box-caption">
            <div class="lacarta-box-caption-content">
              <div class="project-category text-faded">
                Club House
              </div>
              <div class="project-name">
                Sandwich delicioso
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="lacarta-box" href="<?php echo get_template_directory_uri(); ?>/assets/images/lacarta/tequeños.jpg">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/lacarta/tequeños.jpg" alt="">
          <div class="lacarta-box-caption">
            <div class="lacarta-box-caption-content">
              <div class="project-category text-faded">
                Tequeños
              </div>
              <div class="project-name">
              Delicia
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="lacarta-box" href="<?php echo get_template_directory_uri(); ?>/assets/images/lacarta/empanadas.jpg">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/lacarta/empanadas.jpg" alt="">
          <div class="lacarta-box-caption">
            <div class="lacarta-box-caption-content">
              <div class="project-category text-faded">
                Empanadas
              </div>
              <div class="project-name">
                Consulta lña carta del día
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="lacarta-box" href="<?php echo get_template_directory_uri(); ?>/assets/images/lacarta/sandpollo.jpg">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/lacarta/sandpollo.jpg" alt="">
          <div class="lacarta-box-caption">
            <div class="lacarta-box-caption-content">
              <div class="project-category text-faded">
                Sandwich de Pollo
              </div>
              <div class="project-name">
                MDelicia de pechuga
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="lacarta-box" href="<?php echo get_template_directory_uri(); ?>/assets/images/lacarta/sandvege.jpg">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/lacarta/sandvege.jpg" alt="">
          <div class="lacarta-box-caption">
            <div class="lacarta-box-caption-content">
              <div class="project-category text-faded">
                Sandwich Vegetariano
              </div>
              <div class="project-name">
                  Champi
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="lacarta-box" href="<?php echo get_template_directory_uri(); ?>/assets/images/lacarta/golfeados.jpg">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/lacarta/golfeados.jpg" alt="">
          <div class="lacarta-box-caption">
            <div class="lacarta-box-caption-content">
              <div class="project-category text-faded">
                Golfeados
              </div>
              <div class="project-name">
                delicioso dulce
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Termina la Carta -->

<!-- Comienza el NOSOTROS -->
<section class="nosotros" id="us">
	<div class="container">
		<div class="row usTitulo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros.svg" class="title" alt="">
		</div>
		<div class="row us">
			<div class="col-md-6" id="nosotros">
				<p>KWA food trae a ti la sazon de la comida venezolano. Cada plato se elabora con el cariño que nos ofrece nuestra tierra. <br>
				Representando al pueblo de Cagua en el estado Aragua, perfectamente ubicado en el centro del pais, muy cerca de las costas del mar Caribe.</p>
				
			</div>
			<div class="col-md-6" id="nosotrosImg">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Plaza_Bolívar_de_Cagua.jpg" alt="plaza de Cagua">
			</div>
		</div>
	</div>	
</section>
<!--  Termina el NOSOTROS -->

<!-- CONTACTOS -->
<section id="contact">
	<div class="container-fluid">
		<div class="row contacto">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/contacto.png" class="title" alt="">
		</div>
		<div class="row">
			<div class="col-md-5 rrss">
			    <div class="recentco">
			      <h1>Comentarios recientes</h1>
			      <button type="button" id="boton" class="btn btn-dark">Publicar</button>
			      <br><br>
			      <table class="table table-striped table-hover" id="tabla">
			        <tr>
			          <th>Título</th>
			          <th>Contenido</th>
			        </tr>
			      </table>
			    </div>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-5 coment">
				<h2>Comenta y lo compartimos en nuestras RRSS</h2>
				<form>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Email o Apodo:</label>
				    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Escribe tu experiencia o recomendación:</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
				  </div>
				    <div class="form-group">
				    <label for="exampleFormControlFile1">Adjunta imagen:</label>
				    <input type="file" class="form-control-file" id="exampleFormControlFile1">
				  </div>
			</form>
		</div>
	</div>
</section>

<?php get_footer(); ?>


