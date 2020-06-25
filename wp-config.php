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
define('DB_NAME', 'espirabogota');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */

define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'cvtvmxym88huhpkrbhhqrvjvtjv7e645sdql7phvlbo5shbmymepzb7oa3gbnb5p');
define('SECURE_AUTH_KEY',  '4ncuwwj4zfk9kpdqcyefqtlhi9qxjrjtqwe3izhvjhsemmsfbfwiqxsawkfpr8wg');
define('LOGGED_IN_KEY',    'iyugpw1yy4vrkkl6ffsio7cyhdjuhzwegvaljbtqyzq7grgmm8gar9mzjklrosah');
define('NONCE_KEY',        'jz0vcopy8xidptnpnmhaf32inakwaiukoo2vg5sxvzhfj6cpcdlqu66j5uxzx81s');
define('AUTH_SALT',        'e22nxijliycau6qkguermhwrckneq0aib6b9dyus0s4hk8l86vthbiohb6makt5u');
define('SECURE_AUTH_SALT', 'aermnapqgw09nxhasjyirdmams2sol1yj0cxriffqbhogr6yidvgemoeclydq3di');
define('LOGGED_IN_SALT',   'j5x0epvno2a88v701fgjjcotmu7bpjn4zbl1oiptepxgxxefwsyo5cu6286imhva');
define('NONCE_SALT',       'ua65vepcp0omhumjhsz5v8v9hh65nzrmtprjid2mj63i4kmfwzrp4zl2wvtxnrj5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wplb_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
