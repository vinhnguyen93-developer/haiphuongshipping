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
define( 'DB_NAME', 'haiphuong' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'G$o-wLQ$31T6%M>Yy3O);,)xirwGS`8.rD*V>d6H9Biq*fU 2*@Xq/Aw3t|<U2QV' );
define( 'SECURE_AUTH_KEY',  '[vqkT!+m;|GOXxP;I+/h&FNl5/VDtEZKZ &PY,m3W.h%NFai[z;)C+]+}hE^EUgw' );
define( 'LOGGED_IN_KEY',    'SUdgIln2kP((WVRA-6MX@e6QjOAA<{d-L!k*2|S-DTW@qt?b}?xw.Sl#-,vMUA4a' );
define( 'NONCE_KEY',        'mDRXvoVH*v:^ j)+2nl g*hjpVg1oWxX8cNSq>:A bp)&}w8=d+ig/o)Y=&[`w{L' );
define( 'AUTH_SALT',        'QfO*sY|%_NoQA++MAH:L=cbf5*t]Dh4DROXRo:{<jQ1PoeQAVa.uG%)kIs#jeJ%5' );
define( 'SECURE_AUTH_SALT', 'Op!FzMo?^]3_#?l49c3khW4q*tpW|y8M=.(MXZ>4z:)C)H&J6%Y$wfd`Mq}Q@t{C' );
define( 'LOGGED_IN_SALT',   'Z1>GNrDf>521;R&^<=9MOu(Ww8*V05i]{25^0(< 2pQw1iI4N/.VWi_|UiKwekrG' );
define( 'NONCE_SALT',       '/{m_(B__p{$8cIAt%{`xiePSI`d>dUPG#%V,Q3Q[49<`cE%U.S)gJBL %:-P9N|%' );

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
