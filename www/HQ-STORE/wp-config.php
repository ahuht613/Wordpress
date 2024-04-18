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
define( 'DB_NAME', 'HQ-STORE' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'rccGQ9ApmiR0ci7IzRQZIsEVv7C9BVQwrubhgPR7YyIwQN6E4EIHxq6h2Qh8H2SG' );
define( 'SECURE_AUTH_KEY',  'Q2YYR8z1Ty0CLKj8pzMHXxQO6LVUGYbmZkG0LZsx7zNJ8RfEpxnK3RaVEjDPMRe4' );
define( 'LOGGED_IN_KEY',    '4RGPuevl7S6vHT8MxPpcknvzGCyc4OwR5eXVSwTedqKwTkaW0jaX587qPbhMJmhF' );
define( 'NONCE_KEY',        'MCEALORehH18Uy6l0E17767dYKClcmCzow4vhfWsAi3hlscDUdzmdZ0CuujfzPBE' );
define( 'AUTH_SALT',        'Xxkyo0ZOWJZ9yiNBta42BZLdVaA9cepDH9wPSbSf6ChjXLyRNcPCjyT7qFQ4YyGx' );
define( 'SECURE_AUTH_SALT', '92VMMc79iKydQ2ZOeINLNQhCeXwrIByUehvE8bZTFmcDTxWUGnP6zHEVeHd0lp0w' );
define( 'LOGGED_IN_SALT',   'OM19xAIOvhoPtgU2bMorlGcHcVX2tcoMncKKHccthPs7vzlSz8c9qFrpXDtTIQNy' );
define( 'NONCE_SALT',       'bkviQVQRBfsCGjsVtNR5NIU2agyRIKgOOkZHCXOz2APpDT4j7KBRwcp3VVci9jiw' );

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
