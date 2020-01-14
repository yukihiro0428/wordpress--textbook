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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GKOHpvnhQpqBdYNpKiKmhnVlvcGuCKuiRM7xQ55Hbhz0MWzJ5wi1PAlo2yiFMCRUOGuFXnTq1ffLRnDfNOQe+g==');
define('SECURE_AUTH_KEY',  'cEgA4mkC8VjKrriVLs9/8IXZiV8ryPtzGXEwreKhJ426K9yayaK8dH6NECkjP7RzqPq4ynsRguTwcK9d80nXcg==');
define('LOGGED_IN_KEY',    'VvwOtix9FmFxQ8UScT8KDQzNsih60afP/zNKJ+x9HwuTudKhCa0pU3bOHPCC4uogXV8bc//WKRQBsYUvrqygsQ==');
define('NONCE_KEY',        'LwraCg49PYzc7hqTQskOGK0/KqFTRwStuXjlWVI+8PNCry6yaJE1Q+DwgDWfitTw/Zi2Qlpgx0kalxhRp+4uZw==');
define('AUTH_SALT',        'g2IOt6PFPBPpM9erzH2FUwxzyX1q/BDQn87I7wnKD/4F08Q+HNW8JEetza9hLg+ENjZRKOzcpX8ZcJxVFZ6uew==');
define('SECURE_AUTH_SALT', 'A6W6JqnpKU22KtIoo75tkRA5OSLkFytLXcVg2lZmVc77nOFTlF0kQd6g9BLFTad4/IGs6wmJqsLrqxhbRkCuvQ==');
define('LOGGED_IN_SALT',   'Rxry0CiECSS8SMEhMEqo8bEd6O/HnNSKwnCi3/gUi9WhgPQiBcZ/IMQNkglUViiD+/FGKTz/zrW7sKxiDTbwGw==');
define('NONCE_SALT',       'sbWyGHmLx08C0ehIlIIPmcyoFDmFyXMBa/8jl5tszHTCs93pwxKsCxf0Jbxe1bFlVZFyQ2FvXbo1Q8ZmbWDyoQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
