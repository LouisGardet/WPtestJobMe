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
define( 'DB_NAME', 'TestWP' );

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
define( 'AUTH_KEY',         'HBqFfSj92QSPSXsfvIVM43yIG1eW3KI9CHsYPDAMj0PlutC8IXE3gjrofHXL6icL' );
define( 'SECURE_AUTH_KEY',  'nMfoqZVeGDXFizJc5l5Izc7ETIwK7rvnmzknoEwDKO7JVUdNqH32iW5wFY7Mk09t' );
define( 'LOGGED_IN_KEY',    'u1URpslwoCZMRfNUwEfYrD4b6YM81uiAGHxvQLYk041QQz2kf0KsU3jhFr6AdZ8T' );
define( 'NONCE_KEY',        'cs0pewO7p5U9o6Qv8EerpHlA8rRY1TpmCv7UaFWrwE9xlisjTy2IGqBqui18br69' );
define( 'AUTH_SALT',        'UUnX3zhFqwPvWUS7HFeUoMEY0VXP1jw8zkEktzTyTfheR2ShxXiYrPTziaWD0S3n' );
define( 'SECURE_AUTH_SALT', 'G2hEEVqEyhw52bnWcvk7EB86wGCQU8Ylk8CLzleUgyr4ch4v45Sb2WyrBS7KuMMS' );
define( 'LOGGED_IN_SALT',   'FWAP3Nt73DYNvYwaQaiTXxIb4oJUZm7EZj1PrHU7EmgTsTny99ZI1A4LCDCoCJdL' );
define( 'NONCE_SALT',       'Magi3gUpLC1U4EASittaPXFIfDZhTpSQjrdWTOnN4Ba1nyb6YAH0CHiwC8Bcwzcb' );

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
