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
define( 'DB_NAME', 'u2526134_wp500' );

/** Database username */
define( 'DB_USER', 'u2526134_wp500' );

/** Database password */
define( 'DB_PASSWORD', 'd40c4MX84o0yIC16' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'qngv7zkmaqcpaiinnnhxsrbkrtuckgigrhuhn1glhrwmef5yyb0wntz8ojz7rx70' );
define( 'SECURE_AUTH_KEY',  '005vcwkh7fytffe92nnmcmfu1noukatpsipctgqqyq48mufhjqzrhcqx4hwfvbzz' );
define( 'LOGGED_IN_KEY',    'wefh3jbghvjl6qneqb62fzmdb102fjqgf0k8hjg9nxr5nzzh6vk5egi5rpsd6hfg' );
define( 'NONCE_KEY',        'i5nkxr1duuqqgxro19xxgzgxe4pvqvuv1ho1mesmperuchn1jffzajapioqhare3' );
define( 'AUTH_SALT',        'b2kbpeqivtc08wltpxabqeuhtj8yui5c966mdjkfa0321zl5it7jprmsxt6vyteb' );
define( 'SECURE_AUTH_SALT', '3mmpmeuju7s1st3en0wwes7ph9a25ywy9go68spgeaucm3oyrypezaq80wucofk4' );
define( 'LOGGED_IN_SALT',   '7cxomqfd9npimpsurpn6ogcpskhxhavomwahtbemczuddb5vzzzzubkf0t8cdeda' );
define( 'NONCE_SALT',       'lpreelqskjrk0t8ipurcqw8ub21vmzf3d7ucymaimabrpxd5opheervlbwqkgdpq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptb_';

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
