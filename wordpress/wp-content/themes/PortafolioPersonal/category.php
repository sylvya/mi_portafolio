<?php get_header();?>
<?php 
	$idcategoria = get_query_var('cat');

	if ($idcategoria == 2) {
		?>
			<!--Inicia Jumbotron-->
	<div class="jumbotron datos-seccion">
		<div class="container ">
			<nav class="list-inline text-right lista-redes">
				<a  target="_blank" href="https://www.facebook.com/sildesweb" class="icon-redes">
					<span class="icon-facebook"></span>
				</a>
				
				<a  target="_blank" href="https://twitter.com/sildesweb" class="icon-redes">
					<span class="icon-twitter"></span>
				</a>
				<a target="_blank"  href=" https://www.linkedin.com/in/silvia-lopez-hernandez-622545112?trk=nav_responsive_tab_profile_pic" class="icon-redes">
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
					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/loader.gif" alt="loading" class="ajaxgif hideAjax">

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
					<nav class="list-inline text-right lista-redes">
						<a target="_blank" href="https://www.facebook.com/sildesweb" class="icon-redes">
							<span class="icon-facebook"></span>
						</a>
						<a target="_blank" href="https://twitter.com/sildesweb" class="icon-redes">
							<span class="icon-twitter"></span>
						</a>
						<a target="_blank" href=" https://www.linkedin.com/in/silvia-lopez-hernandez-622545112?trk=nav_responsive_tab_profile_pic" class="icon-redes">
							<span class="icon-linkedin"></span>
						</a>
					</nav>
					<h1 class="titulo-portafolio">Portafolio</h1><br><br>
					<p class="descripcion-portafolio ">Muestra de trabajos recientes</p><br><br>
				</div>
			</div>
			<section class="container-fluid">
					
					<?php global $wp_query;
						//En este punto le decimos que muestre los post type de acme_product
						$wp_query = new WP_Query("post_type=portafolio&post_status=publish");
						$i = 1;
						while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
							
								<?php
							  		/*echo $i;*/
							  		if ($i%2==0){
									   
								?>	<div class="row contenedor-trabajos">
										<div class="col-md-6 par">
											<div class="cont-desPortafolio-trabajos">
											  	<h2 class="titulo-descTrabajo"><?php the_title(); ?></h2>
												<p><?php the_content();  /*echo "el $i es par,";*/?></p>
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
									</div>
								<?php
									}else{ 
									    ?>
										    <div class="row contenedor-trabajos">
											    <div class="col-md-6 impar">
													<div class="cont-desPortafolio-trabajos">
													  	<h2 class="titulo-descTrabajo"><?php the_title(); ?></h2>
														<p><?php the_content(); /*echo "el $i es impar,";*/?></p>
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
											</div>
									    <?php
									}
							  	?>
								<?php 
									$i++;
								?>
						<?php endwhile; 
					?>
			</section>
			<?php
	}else if ($idcategoria == 5) {
		/*echo "Esta es la categoria 5";*/
		?>
			<!--Inicia Jumbotron-->
	
		<div class="jumbotron jumbotron-portafolio">
			<div class="container ">
				
				<nav class="list-inline text-right lista-redes">
					<a target="_blank" href="https://www.facebook.com/sildesweb" class="icon-redes">
						<span class="icon-facebook"></span>
					</a>
					
					<a target="_blank" href="https://twitter.com/sildesweb" class="icon-redes">
						<span class="icon-twitter"></span>
					</a>
					<a target="_blank" href=" https://www.linkedin.com/in/silvia-lopez-hernandez-622545112?trk=nav_responsive_tab_profile_pic" class="icon-redes">
						<span class="icon-linkedin"></span>
					</a>
				</nav>
				<h1 class="titulo-portafolio">Contacto</h1><br><br>
				<p class="descripcion-portafolio ">Si necesitas más información, quieres hacerme una sugerencia, tienes un proyecto u oportunidad me encantaría saber todo sobre él. <br>
				
				Sólo envíame un correo a través de este formulario.

				¡Gracias!
				</p><br><br>
				
			</div>
		</div>
		<section class="container cont-seccionContacto">
			<div class="row  ">
				<div class="col-md-8 contacto seccion-contacto">
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
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/loader.gif" alt="loading" class="ajaxgif hideAjax">
							<div class="msg"></div>
						</div>

						<div class="form-group">
							<input type="submit" name="submit" value="Send" class="btn btn-info btn-lg btn-secContacto" id="btn-contact">
						</div>
					</form>
				</div>
				<aside class="col-md-4 hidden-xs hidden-sm datos-contacto">
					<div class="col-md-12">
						<br>
						<a href="https://twitter.com/sildesweb" class="twitter-follow-button" data-size="large" data-show-screen-name="false" data-show-count="false">Follow @sildesweb</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
					<div class="col-md-12">
						<br>
						<a class="twitter-timeline" data-height="600" data-dnt="true" href="https://twitter.com/sildesweb">Tweets by sildesweb</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</aside>
			</div>
		</section>	

		<?php
	}else if ($idcategoria == 8) {
		?>
			<!--Inicia Jumbotron-->
	<div class="jumbotron datos-seccion">
		<div class="container ">
			<nav class="list-inline text-right lista-redes">
				<a target="_blank" href="https://www.facebook.com/sildesweb" class="icon-redes">
					<span class="icon-facebook"></span>
				</a>
				
				<a target="_blank" href="https://twitter.com/sildesweb" class="icon-redes">
					<span class="icon-twitter"></span>
				</a>
				<a target="_blank" href=" https://www.linkedin.com/in/silvia-lopez-hernandez-622545112?trk=nav_responsive_tab_profile_pic" class="icon-redes">
					<span class="icon-linkedin"></span>
				</a>
			</nav>
			<h1 class="titulo-principal">#MujeresEnDigital</h1><br><br>
		</div>
	</div>

	<section class="container">
		<article>
			<!--inicia the loop para mostrar custom post type habilidades-->
			<?php global $wp_query;
			//En este punto le decimos que muestre los post type de acme_product
			$wp_query = new WP_Query("post_type=mujeres_en_digital&post_status=publish");
			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

			    <?php 

					$imgconcurso = get_field('mujeres_en_digital');

					if( !empty($imgconcurso) ): ?>
						<figure class="col-md-12">
							<img class="img-responsive img-rounded" src="<?php echo $imgconcurso['url']; ?>" alt="<?php echo $imgconcurso['alt']; ?>" />
						</figure>

				<?php endif; ?>
			<?php endwhile; ?>

		</article>
	</section>
	<section class="container content-sobremi">
		
		<div class="col-md-12 curso">
			<h2 class="text-info">¿Porqué Quiero Ganar el concurso #MujeresEnDigital?</h2>
			<br><br><br>
			
				<div class="fb-like like" data-href="http://silviaswebservice.com/category/mujeresendigital/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true">
					
				</div>
			<div class="twitterFollow">
				<a  href="https://twitter.com/sildesweb" class="twitter-follow-button" data-show-count="false">Follow @sildesweb</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>

			<br><br>
			
				<?php global $wp_query;
					//En este punto le decimos que muestre los post type de acme_product
					$wp_query = new WP_Query("post_type=mujeres_en_digital&post_status=publish");
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					    <p class="texto-post">
							<?php the_content(); ?>
						</p>	
				<?php endwhile; ?>
				
			
		</div>
		<div class="col-md-4 curso">
			<img class="img-responsive img-rounded" src="<?php bloginfo('stylesheet_directory'); ?>/img/concursoinf.png" alt="concurso">
		</div>
		
	</section>
		<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>


		<?php
	}
	else{
		echo "error al mostrar la categoria";
	}
?>
<?php get_footer();?>