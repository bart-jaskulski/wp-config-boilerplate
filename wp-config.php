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
define( 'DB_NAME', 'dbname' );

/** MySQL database username */
define( 'DB_USER', 'dbuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dbpass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * Harden it a little bit. Do not use default wp_ prefix.
 */
$table_prefix = 'Lfu4d3d3_';

/**
 * Disallow frontend editing of theme and plugins source code.
 * Changes should be made only in code editor, not on the website.
 */
define( 'DISALLOW_FILE_EDIT', true );

/**
 * Who needs so much posts history?
 */
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 30 );

/**
 * Add siteurl and home url for slight optimization.
 * The value is not get from database then.
 * @link https://wordpress.org/support/article/editing-wp-config-php/#wp_siteurl
 *
 * And also disallows others to change this url in settings tab.
 */
define( 'WP_SITEURL', 'https://example.com' );
define( 'WP_HOME', 'https://example.com' );

define( 'FORCE_SSL_ADMIN', true );

/**
 * Remove edited images to leave only original set and one edit set.
 * Do not let wp-content/upload to grow infinitely.
 */
 define( 'IMAGE_EDIT_OVERWRITE', true );

/**
 * Uncomment if your site exceeds memory limits.
 * Default values are: 64M for frontend and 256M for admin.
 */
// define( 'WP_MEMORY_LIMIT', '64M' );
// define( 'WP_MAX_MEMORY_LIMIT', '256M' );

 /**
  * Define environment for best practices.
  * You can target it then for better development-based
  * @param string ENV [local, development, staging, production]
  */
 define( 'WP_ENVIRONMENT_TYPE', 'local' );

/**
 * Environment-based debugging.
 * Turn on debugging to all wordpress env and set logger.
 *
 * If in developement additionally show all errors on frontend
 * and save queries to analyse. Also turn off recovery-mode when debugging.
 *
 * When in production mode, hide all warnings, only log them.
 *
 * Remember to change log file permission on server to restrict access.
 *
 * In addition it is advised to install plugin like Query Monitor
 * for developement purposes.
 * @link https://wordpress.org/plugins/query-monitor/
 */

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

switch ( WP_ENVIRONMENT_TYPE ) {
	case 'local':
	case 'development':
		define( 'WP_DEBUG_DISPLAY', true );
		define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );
		define( 'SAVEQUERIES', true );
		break;
	default:
		define( 'WP_DEBUG_DISPLAY', false );
		@ini_set( 'display_errors', 0 );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
