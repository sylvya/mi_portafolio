<?php get_header(); ?>
	
	<!--Inicia Jumbotron-->
	<div class="jumbotron ">
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
			<h1 class="titulo-principal">A cerca del sitio.</h1><br><br>
				<p class="descripcion-principal">
					Hola. Soy Silvia, ahora estas navegando en mi portafolio profesional, mediante el cual expongo una muestra de mi trabajo, asi como las herramientas que domino, impulsando el mejor aprovechamiento y eficiencia de la web.
					<br><br>Disfrutalo!...
				</p>
		</div>
	</div>

	<div class="container">
		<!--inicia the loop para mostrar custom post type habilidades-->
		<?php global $wp_query;
		//En este punto le decimos que muestre los post type de acme_product
		$wp_query = new WP_Query("post_type=mis_habilidades&post_status=publish");
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		    <?php 

				$image = get_field('imagen_de_herramienta');

				if( !empty($image) ): ?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-xl-2 img-herramientas">
						<img class="img-responsive img-thumbnail imagen" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>

			<?php endif; ?>
		<?php endwhile; ?>
	</div>
<?php get_footer(); ?>