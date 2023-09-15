<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'manhdeptrai' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '0N{g >#s4}cZQ6]qUPE~4N4zS|kX_#E3T0n0_nK}1:gM>LqE(020.HOY8j&?a[ZK' );
define( 'SECURE_AUTH_KEY',  'qul@?mb:)u)78tvt(Y(R1UG+Qfb=Fc]%ihNa-Lb/45~:KUWF6S~3^`1nA3Z|i3:3' );
define( 'LOGGED_IN_KEY',    'eM[2ac$^@E4)LQKibi|T~J@N<ytLxnN|fjDP:rp^czKa$k6YWA6yR-67XjT4%EJy' );
define( 'NONCE_KEY',        'ub7)6|qX0/q0S#r(VFW!jgDSc4FEI`.D=eD5p +CzPKJ5XADA.N6F7f>R}*UI8tc' );
define( 'AUTH_SALT',        'fB<WYfNnpcq-~nQSe^tIJ@jr{]A[LJ@&Bch~5L^D|u7k>pw~iCL:q21^At2(o7FL' );
define( 'SECURE_AUTH_SALT', 'jm8cm);;hbX)YjCN0Y*ga)*Th4 5qNjr7,]Oa{^x2.Ds}L,S@--Qi0z.(<Na+g0T' );
define( 'LOGGED_IN_SALT',   '>dS>;V9;-nV?)s2v()KeI>TKKtsOo/$i{^`8:x4kc7FJT|k:I,ak<_K^Ks8l{DtY' );
define( 'NONCE_SALT',       'W_KW4Dvy76j_lHWopD#/)sH{Bf_yg1DrioARh/y!Ff <}K]~+@w``|eEKaB&Qxcu' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
