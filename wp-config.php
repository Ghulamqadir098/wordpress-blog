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
define( 'DB_NAME', 'elen-blog' );

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
define( 'AUTH_KEY',         '~0IE6*$p,TTOJ~KVUkNJ -qy+5<|8t z[NQKf9CF^bsJ2b;|KMF1 Ek}YJp[:9FF' );
define( 'SECURE_AUTH_KEY',  'A&:xUUsQB`J:LOTI&6hxYk3q<kPkE%s3{oo .wU4JfYk;^Jfj+.KhD+6]$i{l.wE' );
define( 'LOGGED_IN_KEY',    '_%ec8]yyO{r2H?>Il$?^?r}r=F }J;@=EX}5JUnlqdWwr$ 6d_:>;hhY)Ulr@`5K' );
define( 'NONCE_KEY',        'p;,;5HMmT1Qx7)0r3:xU_725*:/h94n2&nky&{ZMIo0;ks(*vb8J)3D6QR3`j[13' );
define( 'AUTH_SALT',        '|#`a3NH-Jc)C*?lY&QY.[:9dM;8]i8h?f2]f;rzmS=BI~/&H^e,CR!0SQgAf{l~U' );
define( 'SECURE_AUTH_SALT', 'r-%O]MTY;6^GV%Dn3m}<CcV$!Y#bheV~TEb{r@$DTnd!HDMG}SXz|Nv6Z6E5y}2x' );
define( 'LOGGED_IN_SALT',   'K}H$KFmdUbS)GO5zvn_f@=KoV>ubPkU|Vd4e uC4w. tZ u]jUGz{N#?8llKASPa' );
define( 'NONCE_SALT',       'Nx+F%A]_~b3?VHL=r)v-Md^RGLY|pB:a u[x8!]ZPA<(-p0,aQr_6hAKJ96z+jk=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
