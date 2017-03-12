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
					Ahora estas navegando en mi portafolio profesional, mediante el cual expongo una muestra de mi trabajo, Habilidades y experiencias obtenidas durante el recorrido. <br><br>
					<strong>Disfrutalo!...	</strong>
				</p>
		</div>
	</div>
	<div class="container">
		<h2 class="text-info">Herramientas</h2><br>
		<!--inicia the loop para mostrar custom post type herramientas-->
		<?php global $wp_query;
			//En este punto le decimos que muestre los post type de acme_product
			$wp_query = new WP_Query("post_type=mis_herramientas&post_status=publish");
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
	<!--
		<div class="jumbotron ">
		<div class="container">
			<h2 class="habilidades col-md-3">Habilidades</h2><br>
			<div class="img-habilidad col-md-9">
				<img src="<?php //bloginfo('stylesheet_directory'); ?>/img/ico-web.png" alt="">
				<img src="<?php //bloginfo('stylesheet_directory'); ?>/img/ico-coding.png" alt="">
				<img src="<?php //bloginfo('stylesheet_directory'); ?>/img/ico-social.png" alt="">
			</div>
		</div>
	</div>
	-->
<?php get_footer(); ?>