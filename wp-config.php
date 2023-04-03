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
define( 'DB_NAME', 'nailest_website' );

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
define( 'AUTH_KEY',         '.(c=oeTx(?(Ae,h)V9U6iA}aQ9)K}$m J#~DO_Wq$iqr(~=H>VbRDj1ic9&a=epK' );
define( 'SECURE_AUTH_KEY',  '/s)_tW@n}PfT+_g<yH?;`Am[;qQ?t):%8DGT|*4t:rwfq>Vh>@0gDra}_POj 7sv' );
define( 'LOGGED_IN_KEY',    'k~}SoIvQwNkZL;BB~@g}$NF<m<:nZ!A?zxt:_q>f) *qXy`&.zrrN)-,YB]y_=PT' );
define( 'NONCE_KEY',        '-dFZFxNtdpud0-tXau3w:{C*83>~rYHqF:&dxLx!psSA`T_kcK|(.%Pa>5V1UU<h' );
define( 'AUTH_SALT',        '^]O8>@u}[/sXuI#1Ge:E+v(S(a=vw6T&EiFp (?sbDTeSjds3)&6~sE]1_&18z8S' );
define( 'SECURE_AUTH_SALT', 'U$sF}lj$w%Ue^J+V}z!E}fq$sn+>Y(&aC0(N>+#M?Cr,O$I9qW+@z5<<*p^,GjNf' );
define( 'LOGGED_IN_SALT',   'Zfzyr7<}Qe-D3p{}TkzLuheSIx]hSNkhQ<%m1QX|Z{NT#b6dx)Fc-/s3sd7ajl^h' );
define( 'NONCE_SALT',       '|7H62ZoS%-2y6mHUc$pN3O4_Z<I$ZT}?@E#Z6H!7TcP5i$6$_pBe)(M3_%FIQX*@' );

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
