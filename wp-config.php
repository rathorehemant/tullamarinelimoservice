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
define( 'DB_NAME', 'tullamarinelimoservice' );

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
define( 'AUTH_KEY',         'C]M7#ny$>d!.tp!-M3g8*hn]9chB7V41pwk[K;a#e[2BI9V?](u |mGAR[gl#@d=' );
define( 'SECURE_AUTH_KEY',  's/N @f5B(B(&Wj|lg96HUP7o+m7P2f.s1W<>ada>c[!(XDc9teP!9OWN[Ho`=<Bh' );
define( 'LOGGED_IN_KEY',    '$*-i|&qQQaXu7R?]bjFO {`%Kwc[^qh/`L,m/)ihAj|XgW^hU/2%;*kFar1gJhHO' );
define( 'NONCE_KEY',        'a-}RkO4]+A# lM 1!Kox-E!j4wCN^v[f cEEo-Vb{CAx?]x%v^i_Xzzg}DM#o(qy' );
define( 'AUTH_SALT',        'RYf{j%>E8SO:*Qq_*PhZ0d;LrbG~HtnuvGknL,M[Fyw*u6TZ>v][EHvL|ZojN6O]' );
define( 'SECURE_AUTH_SALT', 'cf/-/ex7+b}hJDnEhg0ti[B`M?GXzQ@gG/o@4{p<Nn5c|_ad}|4C-O*!h<By:{*r' );
define( 'LOGGED_IN_SALT',   's{s9|z!@jA~yFzxN1JN~nK8},$J~[X7;aiVJ+T:lS@}e7L6P %Ur(`#*@=52?Ohi' );
define( 'NONCE_SALT',       'sKfJvtqVL]?h&u<X.mY|:FbM}|=Ra;8u!q{dL5h1fMHhfnFB/EatEx+hjF>RujuL' );

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
