<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'nazaphgx_wp384' );

/** Database username */
define( 'DB_USER', 'nazaphgx_wp384' );

/** Database password */
define( 'DB_PASSWORD', 'X4z1M!.)!Sc3p.cU' );

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
define( 'AUTH_KEY',         'uvgdzdkewye94opyviwl36jza4uwb4z0xpjpnjdze9hijmwrdgl4ohzfwmbdisao' );
define( 'SECURE_AUTH_KEY',  'jnnirjoxjhfda1ym01n5xxavuqv2y1q1cphthzsndxmnolzisxpq6kskkajejc6f' );
define( 'LOGGED_IN_KEY',    'ykbaxnhdhleq8movsj5jeox0cftl58cvcqiup2sdksek1uso3vb25bqnrnq1zpfk' );
define( 'NONCE_KEY',        'dbk5h8re3ordmlufsysaym4xwyv0xmxja3nrwwro4ltcrysufijxjekligonatwk' );
define( 'AUTH_SALT',        'iupzrdldzxrp88wih1m1g7ozctwooi0swwsbmlmtaklofa9o86rnwssi1zwie4cp' );
define( 'SECURE_AUTH_SALT', 'rynfrcpdswzt0gfnog2ppstjxddqt9zusi3yjiokt07msnygcaop5frgxonbpgc9' );
define( 'LOGGED_IN_SALT',   'tk8yxopybnhrow6xpuuypdo5l5rsya0czrtwrqi4khocavordey04wdv0u8mjr0p' );
define( 'NONCE_SALT',       'o1zh2meuxyx4n8mftprxmuqzvuoa2wptde88nr4lvq0gm0tcvq7z3iodkrl2rvut' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpij_';

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
