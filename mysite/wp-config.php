<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbmysite' );

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
define( 'AUTH_KEY',         '9Nj5IkEc0,w%AqILQ55NOa@]b*1Jq|1oLy~aQr~Iskyp0%~GnOGD%(qGU7CcwI7[' );
define( 'SECURE_AUTH_KEY',  'T`Bx$no&Cx_iwIft;uWh[Y:%=]9xQ`O6HdVY)<1yAO_$}s$^iY_*dUVJCDVZ;V,=' );
define( 'LOGGED_IN_KEY',    'IiSwz(,;JM??=I)wEPa*u$}kmH6~<q`5=hlUQSgq>f[6!roxW_e._TfyVm,4>w_e' );
define( 'NONCE_KEY',        'R.~:$JvtCn5AeRtTJ:1K nLrm ),?ch~BcVz?w(3t1rq3,zf%J[D{*7RkR.~7SD#' );
define( 'AUTH_SALT',        'f^)DHQ$w@TTcxQP,kGLZl- HFWOVE4oTo909pG|`aHT?O+b,L>B3uB|MDE}zR$h)' );
define( 'SECURE_AUTH_SALT', 'xtm,!)h/XnfJr5$FTaE4KI#/C448G:sg_3~%pm0tXM(RNdr[W-U=IdA~kU2.dG9m' );
define( 'LOGGED_IN_SALT',   ')e((g!R%a S_^;U6edw!BS5rg_{W<Fm;@*BvSBm7D{z~~4iPKeq?Re %XvY1$2EM' );
define( 'NONCE_SALT',       '+cz;{X:%Mf1(QFSWMWUw,[}qqj/oejHQQPpU&zZKTA_Me}60&^eyqh!]0U(]zNS`' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
