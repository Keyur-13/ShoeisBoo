<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shoeisboo_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'keyur123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F%C{jT3/m+g_E*3aER[O.jshCAA=l8kVGGR]c-3l}h}7Mv<;,{><Yo_]kjNm]w0x' );
define( 'SECURE_AUTH_KEY',  'f8L![{`C,MoB,X6oA;Z?wR?LujLYs$A{Q,pD)h!Wd50w<.tboM]-x?(Gzh|4ABcs' );
define( 'LOGGED_IN_KEY',    'p3~Ykedc3v}^$.~})-RaO7*N;tn2v=1D=L&a*r-KT*>l-,a ,!m@N%uRhBxUN4_7' );
define( 'NONCE_KEY',        'No[qR!pWxFv+J8fGh:/a}s$qcb%;D[dKD&n[-jo46 tE|c~0.2b^i^4FF4 7^D}1' );
define( 'AUTH_SALT',        '#3E4(I`$GG50=89r+3e W(gvde7KOPC?Y+SE>Uuh%SDrs=IILjlkDhBR<1(UMdQ8' );
define( 'SECURE_AUTH_SALT', 'eM+09L9c#zkJO8Em%kISj+7yT5#3.=ey~7):xdg6AyXUzjH<a@h`y`QNK@-wssTy' );
define( 'LOGGED_IN_SALT',   '*R|0A{i$!l5u93GvDM` jUME`F`.D1^VrfXrUsn*5sRY2mTLpw`3@Y4!O|^ZBOm^' );
define( 'NONCE_SALT',       'MWc7oG2Yu{T?bJ4:txoLZ43~>$Qxq8yV+E3G^j}X7#Kcm/Joa:IAFd}$gJ2bpRH(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
