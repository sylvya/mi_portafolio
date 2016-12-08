<?php get_header();?>
<?php 
	$idcategoria = get_query_var('cat');

	if ($idcategoria == 2) {
		?>
			<!--Inicia Jumbotron-->
	<div class="jumbotron datos-seccion">
		<div class="container ">
			<nav class="list-inline text-right lista-redes">
				<a href="https://www.facebook.com/SilviaLoph" class="icon-redes">
					<span class="icon-facebook"></span>
				</a>
				
				<a href="https://twitter.com/sildesweb" class="icon-redes">
					<span class="icon-twitter"></span>
				</a>
				<a href=" https://www.linkedin.com/in/silvia-lopez-hernandez-622545112?trk=nav_responsive_tab_profile_pic" class="icon-redes">
					<span class="icon-linkedin"></span>
				</a>
			</nav>
			<h1 class="titulo-principal">Sobre Mí</h1><br><br>

			<p class="descripcion-principal ">Soy Silvia, Desarrollador Web FrontEnd "colaborando con la interfaz y experiencia del usuario, haciendo de la web un lugar mejor."</p>

			<!--inicia the loop para mostrar custom post type habilidades-->
			<?php global $wp_query;
			//En este punto le decimos que muestre los post type de acme_product
			$wp_query = new WP_Query("post_type=sobre_mi&post_status=publish");
			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

			    <?php 

					$image = get_field('sobre_mi_perfil');

					if( !empty($image) ): ?>
						<figure class="perfil">
							<img class="img-perfil" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</figure>

				<?php endif; ?>
			<?php endwhile; ?>
		</div>
	</div>

	<section class="container content-sobremi">
		<div class="col-md-8 acercademi">
			<h2 class="text-info">Sobre mí</h2><br>
			
				<?php global $wp_query;
					//En este punto le decimos que muestre los post type de acme_product
					$wp_query = new WP_Query("post_type=sobre_mi&post_status=publish");
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					    <p>
							<?php the_content(); ?>
						</p>	
				<?php endwhile; ?>
		
			
		</div>
		<div class="col-md-4 contacto">
			<h2 class="text-info">Contacto</h2><br>
			<form method="POST" id="form-contacto" action="">
				<div class="form-group">
					<label for="nombre-completo">Nombre*</label>
					<input type="text" name="name"  class="form-control" placeholder="First & Last Name" id="name">
					<p class="text-danger"></p>
				</div>
				<div class="form-group">
					<label for="email">Email*</label>
					<input type="email" name="email" class="form-control" placeholder="example@domain.com" id="email">
				</div>
				<div class="form-group">
					<label for="nombre-completo">Asunto*</label>
					<input type="text" name="subject" class="form-control" placeholder="Subject" id="name" id="subject">
					<p class="text-danger"></p>
				</div>
				<div class="form-group">
					<label for="message">Mensaje*</label>
					<textarea name="message" id="message" rows="6" class="form-control" id="name"></textarea>
				</div>
				<div class="procesando">
					<img src="img/loader.gif" alt="loading" class="ajaxgif hideAjax">
					<div class="msg"></div>
				</div>

				<div class="form-group">
					<input type="submit" name="submit" value="Send" class="btn btn-info btn-lg btn-secContacto" id="btn-contact">
				</div>
			</form>
		</div>
	</section>
		<?php
	}else if ($idcategoria == 4) {
		?>
			<div class="jumbotron jumbotron-portafolio">
				<div class="container ">
					<h1 class="titulo-portafolio">Portafolio</h1><br><br>
					<p class="descripcion-portafolio ">Muestra de trabajos recientes</p><br><br>
				</div>
			</div>
			<section class="container-fluid">
				<div class="row contenedor-tabajos">	
					<?php global $wp_query;
						//En este punto le decimos que muestre los post type de acme_product
						$wp_query = new WP_Query("post_type=portafolio&post_status=publish");
						$i = 1;
						while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
							
								<div class="col-md-6">
									<div class="cont-desPortafolio-trabajos">
									  	<h2 class="titulo-descTrabajo"><?php the_title(); ?></h2>
									  	
										<p><?php the_content(); ?></p>
										<a href="http://mrpazzo.com.mx/?" class=" btn btn-primary btn-portafolio">VIEW WEBSITE</a>
									</div>
								</div>
								<div class="col-md-6 content-imagenTrabajo">
									<?php
										$proyecto = get_field('portafolio');
										if( !empty($proyecto) ): ?>
											<figure class="figure">
												<img class="img-responsive imagen-portafolio" alt="pazzo" src="<?php echo $proyecto['url']; ?>" alt="<?php echo $proyecto['alt']; ?>" />
											</figure>

									<?php endif; ?>
								</div>
								<?php 
									$i++;
								?>
						<?php endwhile; 
					?>
				</div>
			</section>
			<?php
	}else if ($idcategoria == 5) {
		echo "Esta es la categoria 5";
	}

	else{
		echo "error al mostrar la categoria";
	}

?>
<?php get_footer();?>