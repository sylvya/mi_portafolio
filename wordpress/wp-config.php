<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'PORTAFOLIO');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'x54(g?Q}Bi9.k!OIKjm-u7JXo_mXMR =NCkx.7w]g8+shO_LH9!G8[rQJN|XH6,a');
define('SECURE_AUTH_KEY', '?%I)okHplI2{}u9^+&GdaR3sO=ofp~J,,@ ,9lXoVuWOkRo;Z_c{Gq_Tu !pQXU}');
define('LOGGED_IN_KEY', 'CwH,v9~eHA~`?R%-X%LS{(}1xGzcD7VmFZl&JIW|%pN%xmFq#DL}=YQ`:8t%7_>M');
define('NONCE_KEY', '1g&ANiZzCq]>FM;W.MR.TzWGG-0uh!(zU#+EoeQUx@^=C0rLP~uxKA^2<)^LQa|W');
define('AUTH_SALT', 'O`kYA9|$KdO~MyX!R,pSOLp9GLx+=.$B?zO|nFu`*CNo2.;)n|<_jTh`pL22L~Vz');
define('SECURE_AUTH_SALT', '5D#mhXzY5r..Z42tlKoNK6dH$qy`i=/NnJhlG_ ,LpE+8%38L*%!,U%$)Cp$)8pG');
define('LOGGED_IN_SALT', '6Y%<d=2L<PODcJLd%$iebTU7R_2(_z<0U{ {KO5mGV<a8[}_+NVLQzjIN|)&/t+V');
define('NONCE_SALT', '6bCMp{c|o}Z#P?a*/5GSe:pvBC5l3F~#]Ec0bfHKd_l~]M2&zvs1~~ySZMkEne;V');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

