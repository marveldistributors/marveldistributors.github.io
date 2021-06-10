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
define( 'AUTH_KEY',         'yM=Qu^5%x$!~>H*e0[=$#+aM7z3aE`Fph;nD9sP>yn(9zD3E~b[r*Csiv5hBV,6=' );
define( 'SECURE_AUTH_KEY',  '&.Qn=Mi]HbO[b9Y9_k=aaQ0]:| E2I0c{mp(9e%t$pHKD`n5}Z[Uy.eNmn4au[j8' );
define( 'LOGGED_IN_KEY',    '/Gg[Jt]W2vl[p3WPTt%jy&G0z5*,S{M=yq%cYxXIb{L6kAbCW<v@ls(1j$-]F|GN' );
define( 'NONCE_KEY',        'JR[@5tF@<gYr}NB;K(BfC}T?4/a3{O~0j02oWQiU{oZgy &in?!^bM{$FHnL/K=K' );
define( 'AUTH_SALT',        '2U5KvJ5B<|xC$:}=Q5Ra4pPoy?H8M0VHpQP!j,vYRD<&{w<Z24vz9|l*0fyQ+_2w' );
define( 'SECURE_AUTH_SALT', 'il *hA+@y%k$NRWIEEtV<aBuc:YO%]EI<I$u|C0e)9zyg@)id0,?%PE>(c7v~UaA' );
define( 'LOGGED_IN_SALT',   'be]!&pB?>j?ee%,kff({1d1 cn$APG<TjTO~o0vuE9NS#53 |Ee>j98^JRvO5?DV' );
define( 'NONCE_SALT',       'JTaWZYe4Yriv)wpaE0n9Yz+!QV~9Mpg)xFHTux=t$4X:Z;ERk<Qfp-bb>FCi9G02' );

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
