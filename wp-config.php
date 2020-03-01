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
define( 'DB_NAME', 'wpbbdd' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', 'q]oIDnI7L?di;8RW(8WLw]RFo_-l$mqhC~x)iN[JQfXUS};;<!@b4viVg?&--90N' );
define( 'SECURE_AUTH_KEY', '`(~Z9maP5+(3V*&qI_f+`OU_fMO?<$[oBa-C5,yz8A8gbH:*MepBFX`HQkA#srn;' );
define( 'LOGGED_IN_KEY', 'GO:kx9#2wntR:NE.khCEDxSxe#!TB8e`(LVQ:+ytSUUxS;Rw` zXCxqOJY RvtPh' );
define( 'NONCE_KEY', 'wdq?stplS.8*u0w@McQktr4;a%Hum?KKo4^ZQ%iUoG?ex3TX~.9/V({HY|$-,WV!' );
define( 'AUTH_SALT', '9(a6$TO7>G!be^;k@W92K~kPlN=;QhSp:sCMiu`~n<sG~P#5745<G:<B0pxGK?v)' );
define( 'SECURE_AUTH_SALT', '/@mBULx{*{_;9Q&!wZ`-=9J7| .@7gm8`/zOCD;AlCjGmx0|HN$5rku;G@$ys[%f' );
define( 'LOGGED_IN_SALT', '5K[b..}JtjLC0QBF3dH@g)UheKSKr+-Fgv}#>k)[@z1k&pl)w>K,TCP,ug=rM,@a' );
define( 'NONCE_SALT', '17d_WT5!FSzz_%q->iBlSmV~xX9wkDQ/>[uF=diTy:p|d(#R$u>#hcl!HX9j)F:Z' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'bbdd';


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

