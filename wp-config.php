<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// --------------------------------------
// DEFINE WORDPRESS ENVIRONMENTS
//
// Sets some global variables based on
// which environment we're in.
// --------------------------------------
if ($_SERVER['SERVER_NAME']=='localhost' || $_SERVER['REMOTE_ADDR']=='127.0.0.1' || strpos( $_SERVER['SERVER_NAME'], 'xip.io' ) !== false ) {
  define('WP_ENV', 'development');
  define( WP_DEBUG, true );
} else if ($_SERVER['SERVER_NAME']=='meribeta.johnenriquez.com') {
  define('WP_ENV', 'staging');
} else { // is production
  define('WP_ENV', 'production');
}

// ----------------------------------------
// SERVE WORDPRESS CONFIG FILES
//
// Load up the proper config file based on
// which environment we're in.
// ----------------------------------------
if ( WP_ENV == "development" ) {
  include dirname( __FILE__ ) . '/local-wp-config.php';
} else if ( WP_ENV == "staging" ) {
  include dirname( __FILE__ ) . '/staging-wp-config.php';
} else { // is production
  include dirname( __FILE__ ) . '/production-wp-config.php';
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
// define('AUTH_KEY',         '...');
// define('SECURE_AUTH_KEY',  '...');
// define('LOGGED_IN_KEY',    '...');
// define('NONCE_KEY',        '...');
// define('AUTH_SALT',        '...');
// define('SECURE_AUTH_SALT', '...');
// define('LOGGED_IN_SALT',   '...');
// define('NONCE_SALT',       '...');

/**#@-*/

/**
 * Default Theme
 *
 * Set to Genesis. Yee. Make sure this is updated!
 */
define('WP_DEFAULT_THEME', 'genesis');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
