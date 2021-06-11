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
define( 'DB_NAME', 'marveldistributors_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '}~?XL)-z:[$[{D_@0arm0za;i|4v|j_/UrK&p~^`w|Kbznp7,d$qznE56H+qHQa9' );
define( 'SECURE_AUTH_KEY',  '9;ujNd+C@SY.nV<mFg%lVCaGh>*mMx1:6j[%OoDVto;S+0J9H.)RED8@k$QaR-Y[' );
define( 'LOGGED_IN_KEY',    'f4F.2|q`1pFnEp,@+,Y&!QTY05Ygx;AnBsSw[-P2#=?~OT~xu ;dw0{ Zj rCbVv' );
define( 'NONCE_KEY',        'L*Fjp%mo{(g]aG _CyXa|&tcfDLt}g#Zqip]=#H<V> a_eZy%vzOU>+~BAqX6Y,O' );
define( 'AUTH_SALT',        'wnSJHt9<P`5]5q^Wt$4/@un~@w1BH6TB^:]J],6CY]),1C{/AqUis8X{zV:[TjI<' );
define( 'SECURE_AUTH_SALT', 'V{{u*jcv*1VLjmU.r;=RtY0]Ag81a5q<}Wi@EJ*6$hU4_Kbv43Rme(.upeEcgrJ(' );
define( 'LOGGED_IN_SALT',   '$g-U(_j-S%f*2BOKm0vu5d<@^{K:}=^0-R@]fYJl2ZR]1~A @S~a[ Qrnh,|3Z!C' );
define( 'NONCE_SALT',       '1bX4|$$?M8DUf;|$!wZCYF<pnsvxDLHj@dn?*a1mu&,qXn)F$}9V[i*NYr^^Dz%E' );

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
