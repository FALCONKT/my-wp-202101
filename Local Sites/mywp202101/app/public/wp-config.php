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
define('AUTH_KEY',         'TT17yefqaf2p7F1eSxHLsmhoBfbAnjcG83E1GxL1GN+kLoRVP8t1AU1skcfY5nc1avDilNndN4UtMvQRQc5HsA==');
define('SECURE_AUTH_KEY',  'FOUVNOPVDCvY9f8GJ3bBIJkV2wbVrGoFy2x/nCnxuP89qXlCS26BdLpY3Wf2+O0y+fgR3ChMy1eUri4B32p+Ow==');
define('LOGGED_IN_KEY',    't/h91GjWIVQ9h9t4vSQUf0n08EKWGOk+7rOExc2ugJi0qI84rV55GKBoN6YjFRZrr5Zi0RJXn1MS+AEJzkRGJQ==');
define('NONCE_KEY',        'HOzKK0CjxkNt0LALqvAb37xnVYFr8cmW7CeieiMwA3MYD86s6LdFRBDqcNniWIHd+DyUkslOWW/wo8J3HUVSwQ==');
define('AUTH_SALT',        'xIU05QUFIX107xnKPNGOwDS4V0onIZa+IbRSYRN8KtWFib5T9zzcPy6vhuZyYDDu5F2VYyTHOLyipwcw1bkt1w==');
define('SECURE_AUTH_SALT', '0swi5NrvP3Vm5RJFs+E62We+1PzeOzDKkqQSx7WbLsD935YBn3o+9Pb6a9Ng9ycgRwF6PKK/jUGQd1uXrFvcNw==');
define('LOGGED_IN_SALT',   'aM8FHyfFQ3PO20ue+Hkj3EzAEZlzI0RPbHJEa5oc/CUT1Eb+JSHhB60ishnQ7mgZplHudzw/g0QCCAw88imfbQ==');
define('NONCE_SALT',       'FN3w0dJavkpDuMWur5qIIqthMY/ZG/g0Nwue++8i+vL22aHFERq25XJpVEu2XLI42+JYjEdkZh0cwDGzpKCnwQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';






define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'mywp202101.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
