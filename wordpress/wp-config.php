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
define('AUTH_KEY', 'BURiWdbv(.z#Lj=9@8S=rqX-J!hZ8_by<9(M@J4W*vB.TcOu@OWtQt1F3>UUAr>*');
define('SECURE_AUTH_KEY', 'e%y(.`^v7?Ap4IyZ9fHSj8O 39kD.I;TOghE%|c-,ik!@|7WXl|SoXAS&@6wuVxu');
define('LOGGED_IN_KEY', 'G+w^5cuC<S |<*v^08DcE!/?B%n%i(]*aP{wQR1z]y@!C9x(KJAw5hxx2im)IUeM');
define('NONCE_KEY', 'oa)zPW~=NW{i9pj(pld+c_<x`1JQglyVZZiMc,R>36<&BTl*~jD*1OLV[!5[cVy)');
define('AUTH_SALT', ',y<y9B(3fDCNX<ZSf_8}F{x$<l-K@792J9$DO$f-b$6NR!Y.1GQI?`}k;ixjDCH/');
define('SECURE_AUTH_SALT', 'Lys<*F0(Ba{{Wf?wj2.omhJD[:;x4ze+Zyqf$9|M v7&WL]_~j-4%.(:*pO:GfXk');
define('LOGGED_IN_SALT', 'p&`U?$5lIXtAAFq|&2rt0)`W2HoZ]NB>da}C`Hi#lsNd<kR NRPTw,m@6)Q((ULu');
define('NONCE_SALT', 'Hz()_ifHf}.v#<M6O(~uaYv%rfDs#Bv&Iirhrz_?RjlKv!6{|UBG|n/)7Ha6`qD:');

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

