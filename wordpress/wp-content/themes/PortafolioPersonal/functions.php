<?php 
add_theme_support('post-thumbnails');


function register_my_menus(){
	register_nav_menus(
		array(
			//menu-header es el id con el cual identifica
			//wordpress y nosotors el menu que estamos creando
			//el segundo parametro solo es una descripcion
			'menu-header' => __('Menú del encabezado')
		)
	);
}
add_action('init','register_my_menus');