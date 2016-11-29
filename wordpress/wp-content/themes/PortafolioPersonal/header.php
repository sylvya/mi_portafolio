<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portafolio Profesional</title>
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts.css">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>
<body>
	
	<header class="header"><!--menú-->
		<!--<?php 
			/*wp_nav_menu(
				array(
					'theme_location' => 'top-menu',
				)
			)*/
			?>-->
		<!-- <ul class="menu">
		 	<li><a href="#acerca-deMi">A cerca de Mi</a></li>
		 	<li><a href="#habilidades">Habilidades</a></li>
		 	<li><a href="#portafolio">Portafolio</a></li>
		 	<li><a href="#contacto">Contacto</a></li>
		 </ul>-->
		 	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			 <div class="container">
				<div class=""> 
					<?php 
						$defaults = array(
						'theme_location'  => 'menu-header',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					);

					wp_nav_menu( $defaults );
					?>
				</div>
			</div>
		 </nav>
	</header>
		