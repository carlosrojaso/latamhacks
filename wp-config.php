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
define('DB_NAME', 'latamhacks');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'latamhacks');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'xDPGqtSRiZ$');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '127.0.0.1');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '`5_RAR%3O5#*^ I++5Jlulh|Ke_{c2F+hn0C>S+zenp@bSqZjAs 6mdex$N&bAw?'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'd1t8@})S(#zI0qx-O&g(|oW|J)FUOg(E]?[=&L5O-N[xBO.5z]u~?+o3<rxPuB4n'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'HtltNM|~gRREG)M?PxGYT+6g-m|!R Ul2,eKM*ma}d8icL Z!/@,pHphK[|*hjPg'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'e#MJo;?3+06Hi=1)Kgqyf0bP?se+uVvPg5r$i+QU{|MiacTZT3]0~V]56%Jm#vzv'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'm(a$WV{{J`*K,Vhd}n0Fz7)|Z!vkPpaBOMj(g-~MF$i~-bz3ti{A([2tHSOWa*F<'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '56: oAYIR-+5mG/! -e|T`$93NWGsbb>J5QtG)MS..X$8j<NPpw*lMT6y@)$z|_y'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'dq#OEMpC.c62[)$VM ({qOhXe^A8MDy&k, _m3MqSp<,M$,;CVAm?a#.`;}D=<0S'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'r&g(Jp[{ p,`Iaxd-ry0_T|qy(Lrt[F!~6@en+rZ:Q%`&|PW0W*h`Zp_BH{gP7Cs'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

