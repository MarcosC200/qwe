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
define( 'DB_NAME', 'qwe' );

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
define( 'AUTH_KEY',         'nuJkLZxu =|rZwp%.rc,5r:Jrv}3e]a0<p+DkY2pcY2#L;Y;X5xHe3o*/)c9-Kj:' );
define( 'SECURE_AUTH_KEY',  'caK1&m)013h$vaIR=tm4Cb[d&x=PL~P:A?ch{3<`fUmYz5Ddv;0%#sF;k4*$Cwjn' );
define( 'LOGGED_IN_KEY',    'sqs2Kf !Irbjd)V[^]d8<x{Tf fN.V;l:*MWA3oM^%Wov]^xz3(*5yu(*<?[.Y>n' );
define( 'NONCE_KEY',        'gioxwC>N>h*1{A<?QIBmiE|QHHY%;8zP)e.mWgS7Cy-HhNte [gv`ty^S-N_6Z%G' );
define( 'AUTH_SALT',        '&$=$d4E&fHmP{*L+oc*?>XJHeP1>E.*OUB&61rZeq][@;c+P|8oxE{C3+S9?PFd4' );
define( 'SECURE_AUTH_SALT', 'sb3b<i5CqT3O-;]WfK{#P/%qImh;bWT#h.,V0>Ef&,y^AgUy0JC%<0vePPZrWE M' );
define( 'LOGGED_IN_SALT',   'XjE/8!j?EN$;cL yh)E638-f!7Y/+SNA@WyjQ7+@DSD26xL(jWcW@x[[0bI4(WgE' );
define( 'NONCE_SALT',       'vdwH-$k_OAhAkzn&LoM3AxKiFu#4:O )|[ljaV/z&%Bt&wRD;8MIp$FEqrp&ZNQ0' );

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
