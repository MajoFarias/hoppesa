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
define('DB_NAME', 'Hoppesa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'v*$rXFu,`P4`rC8YRg-0_P&}H7r}VA8^X8v4_0DL(i~IR^6.)-t+C*}AO;&d-]`(');
define('SECURE_AUTH_KEY',  '+4g;?ua=3KHQGSgfz5MN&9Pn><fY%9VTkfpXq7p0laEx_C[~ria+ |VR`(~{}9-i');
define('LOGGED_IN_KEY',    'F+{?_~J^Db-+e9`@)9<2G(Gp&:)J3c]I fTqEb7X;`SXj|5h|uk<C32Xa_,`5*TL');
define('NONCE_KEY',        'w}1JMUze?|f,qTfR-/d1Yj7^%xXiSV]p,3D3A1#*FQ7o_:9 Or]X{:`klhI3@8O,');
define('AUTH_SALT',        'ty|fqp(~lw<[Y:8.1Th7LzW<M6Ws|pLIw}-RDt|+r+UxT#fzmxust^Q:g<>Z^Fe)');
define('SECURE_AUTH_SALT', '>e&|M{6Ob-u)[&OIDs+0f||uKBoKV|P|a?+_Y0rJw1n-X:H6~xpyQtH8&f]}19H/');
define('LOGGED_IN_SALT',   '-|a`TQjWy)E1M`Fl-g|-y-)+/[g&lj#-J1lUDflhMCc)a~hz)Q6R:0r;QbI11%:%');
define('NONCE_SALT',       '0|O9~N)bojg7qc>Z#dgDAZT*l}y=Q~[/|7zGI``dW!PNMXwv~R_[;5V6(-wC:Emx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
