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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'workingroot1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'j +i2gU(s>>9_:#qY8x,}lH@),[J=]_.*7eL([sKauqVVimeR&TQB,2RM$JJC@Et' );
define( 'SECURE_AUTH_KEY',  'mGg(m2,8J-Mx5?DfsQIt8!`)zB/~=v_We,oJzSoI<M;&3[Nq63&sbtvy{gG]p@eJ' );
define( 'LOGGED_IN_KEY',    'u0Ivp GyT|&X=+I<cIc1(/jJ7`VXq$kxcY)4vE.h~GF{+<=}0>t6}s|Z7yDY_C!l' );
define( 'NONCE_KEY',        'GQ`EgMY{$yQh<xdAM4Vdd2b<Cw/>%Y]dA?Nur)hXM]tCe}7qG`.sZ~IQ~V|C<nQ{' );
define( 'AUTH_SALT',        'jh7^GA+t6*C3C;[bQ2Yf)(My%Epx4|mH8+BEALw@{^tyzxy@*_v20_9}X$JUf`3W' );
define( 'SECURE_AUTH_SALT', '^-QcP-,w[fxCjB$q]XftEnr;j)=Mh5WBgw~DO-O6#sj .{#s7CqF)Jv;X%{%lCCd' );
define( 'LOGGED_IN_SALT',   'ca*-,Ig~y#tXL7lY>fF_gd;84-ftJmK6i=wyO<1N(bg0yL$:eG5Nx:3X8Pa!lYNZ' );
define( 'NONCE_SALT',       '%O4nwPuki0a5VImDH.Zw.k@G>gF{x6$`cvi[nZ?Z{g{wN%A80@a(tixT65^cy%aP' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
