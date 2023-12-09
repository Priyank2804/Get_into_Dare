<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u592171055_nbyBb' );

/** Database username */
define( 'DB_USER', 'u592171055_447OH' );

/** Database password */
define( 'DB_PASSWORD', 'fihoIf4hNQ' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'qU8YJHbb.DgYB4H/FsFR.{o/iG^C4Z_K7je1fO@6u?%,%QE/lLVa(r$G6g (T?{S' );
define( 'SECURE_AUTH_KEY',   '!2Sv[~^jTZek%cs6~Bw_0>:w.Oi8mWtu5KM{8{t#U01Z*%u02F[2/}/ZGhiX5,f/' );
define( 'LOGGED_IN_KEY',     ']ungpO#-HYKKA>IqJkUV8RI|yamDAo8XXm%,[|+wDk3_Bpru<)<$G}/=V)O|37I?' );
define( 'NONCE_KEY',         'igxHN(+Co1S40C.nem1#3ah3N}r$EbOr]ymL)7^t3$f4eIUYh2}l/=Pi2:(yD^ji' );
define( 'AUTH_SALT',         'atOh43BRtn4sDE,#@%kW3@t%xBO%-1Q:4pJ0#TMa$u~~L$T([uuV/FINjh(0)PY4' );
define( 'SECURE_AUTH_SALT',  '7tG!dS8nFkX#+&vXF=W($vG,l@?lUFO||f#WA%g}&&<A,v:SXz8kYKdK@N)rEn-j' );
define( 'LOGGED_IN_SALT',    'Y9/6L@ejq!:%Kwjyg);iV2fiS^=?<x/9w49Fz^j:Uq%(az$d<`pBlu;m)=?,bECr' );
define( 'NONCE_SALT',        'msFx)Vz$Ud*w?4BuG3i,3e:6cA2,u%oPo!sy2+^gKC~VHiMfIMK?tU$GM8:IvVAG' );
define( 'WP_CACHE_KEY_SALT', '6R&led-be?9dP1#9jnhzFt93N8~B_jvmvgHAc)lFj[#;D@Pbvfh-9!ZE}gCyDouk' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
