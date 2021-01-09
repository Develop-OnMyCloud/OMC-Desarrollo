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
define( 'DB_NAME', 'pag-001' );

/** MySQL database username */
define( 'DB_USER', 'administrador' );

/** MySQL database password */
define( 'DB_PASSWORD', 'administrador' );

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
define( 'AUTH_KEY',         '^2rtN B!._`!GAS|6!Sq;r`0cF.bW4p8.W2r_h=}ewWA(W?SYS$r{H~z7xpQP*0:' );
define( 'SECURE_AUTH_KEY',  'kQ?=WV5{UzB {maqS~6yee=ilYC@D,Nl5[a|Z88M6P Ip]p;KQ`lD^~39$Kdl2j!' );
define( 'LOGGED_IN_KEY',    ' bx|WkdOLEvlz1DU82,iqv8Gm`<!M2N_gnxG/^tOV-6N-r;B+Jd5]a>a4e@,fZ:4' );
define( 'NONCE_KEY',        '`^2?[6%A82^~5=6St;9U+I[q-{^hVMl%@pM5J0#lmM!vwt5*m=W<,?|*-|9`52j<' );
define( 'AUTH_SALT',        'v3bBa$b(,q./o?/^#RJ#=4.ehOa/noj{=*7SbYC<eganu$fr@g7IQ/94vb)$?2L>' );
define( 'SECURE_AUTH_SALT', 'O8Z}7 0ew+>:8*x8tBb;Z7Jv1yn3R-}M.Hn4:2DzVzNL.W^i<Jdb<nPqhn-lSGm-' );
define( 'LOGGED_IN_SALT',   'dUF@GS{wOU965hBo6v}nwcNNoo6QX~j|0#6&JA855 /0ln;#9=Xj`57S)nZ0bZVt' );
define( 'NONCE_SALT',       'YNWc>}7@#E_~9!@tG-zW;v`/C,2Lt>`2?wBs^8y.?eg?;Eu?^e^{F<EaBW&[DoU>' );

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
