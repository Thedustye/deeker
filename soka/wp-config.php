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
define( 'DB_NAME', 'bofjqjv2o' );

/** Database username */
define( 'DB_USER', 'bofjqjv2o' );

/** Database password */
define( 'DB_PASSWORD', '0od559g7' );

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
define( 'AUTH_KEY',         'm*Rg6eDz,26/%7Q3o{[Wh*C$gwAycI`]aQK3-laAONZ[Z9&yBBpQ-3evfT#:1[v[' );
define( 'SECURE_AUTH_KEY',  'm:z?!.hvL|fYN;[dByA2Z Bplfkk_4tUrb$j.^mIjaLF;ly}^=^?.RsMo0>IXZ}U' );
define( 'LOGGED_IN_KEY',    'Z0KT,DvCCV2Xl5]H}%xB_U1PxWd|-K-lumuNfJo4Uv%[I0Gd,92K7_#u87,nLy/1' );
define( 'NONCE_KEY',        'XYVc3g1cD/D!_aIsSR< 4xfW9$H>Fp6X.~GH.*`?d,/mR^wA)E3Sx/8&_SXUbb=:' );
define( 'AUTH_SALT',        'nD*?JBu!Y#5Up7q`ssh&urN5nH&5hV{6A$AA;ws&6Bo5B-hKBo m<1|@^Oe{&t{A' );
define( 'SECURE_AUTH_SALT', 'H>@wJ^i@J>:v(RmY.]Hnpow5YVZp*1c%x6J$VRk$gb@]NS1xi]dTvBDYW+x0cS<7' );
define( 'LOGGED_IN_SALT',   'unt*3v}usD~i@%,rXhPUv]{Z4cu`3%XX&KrW@Pi6&a3A!1V/@ynC*IlbVw> LwV?' );
define( 'NONCE_SALT',       'V S=<SuX%7jD?^WABH>~e~%dbu7iHvm;4}h7-&lRKHh[9yKqv:Ic)DRJ[b#Vk<)s' );

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
