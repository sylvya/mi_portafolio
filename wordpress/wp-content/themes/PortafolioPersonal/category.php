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
			<h1 class="titulo-principal">Acerca de mí</h1><br><br>
			<p class="descripcion-principal ">Soy Silvia, Desarrollador Web FrontEnd "colaborando con la interfaz y experiencia del usuario, haciendo de la web un lugar mejor."</p>
			
			<figure class="perfil">
				<img src="img/perfil.jpg" alt="perfil" class="img-perfil">
			</figure>
		</div>
	</div>

	<section class="container">
		<div class="row ">
			<div class="col-md-8 acercademi">
				<h2 class="text-info">Acerca de Mi.</h2><br>
				<p class="text-justify">
					Hola, Mi nombre es Silvia López Hernández, desarrollador web Front-End.<br><br>
					Originalmente inicie mi experiencia laboral en el área de Soporte Técnico y al mismo tiempo desempeñando tareas propias del área de sistemas. Tras decidir mi especialidad me he enfocado al Desarrollo Web independiente, proporcionando mis servicios como Freelance. <br><br>

					Mediante los trabajos que he realizado desde entonces, he obtenido experiencia con cada uno de ellos y de igual manera continúo en  el camino del aprendizaje con nuevas herramientas. 
					<br><br>

					Me gradue de la Lic. En Ciencias de la Informática y posteriormente cursé la Maestría en Sistemas Computacionales. <br><br>
			
				</p>
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
		</div>
	</section>
		<?php
	}else if ($idcategoria == 4) {
		echo "esta es la categoria 4";
	}else if ($idcategoria == 5) {
		echo "Esta es la categoria 5";
	}

	else{
		echo "error al mostrar la categoria";
	}

?>
<?php get_footer();?>