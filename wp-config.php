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
define('DB_NAME', 'jessebiroscak_db');

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
define('AUTH_KEY',         'p:*z/C`V/Y4?.,`xn%T=}s),v7WbKy6s-$A5^  *@;.2;s}6QMZ;sN$&*8V3xr*n');
define('SECURE_AUTH_KEY',  '?FDiz5o^DAY-$eFV6Gd|S9t,[bGbWpS`um48n)HMMYh21#e_L>hH>CL{.PKI@gt|');
define('LOGGED_IN_KEY',    '.Xnv#{CoZ4@sb>bggOh.)6scfL0v!yiR-FU7|V&8~@c>}(;G)#k`gT*>^50U>J,%');
define('NONCE_KEY',        '/{Z:DZ-?}b?QJHWD]FMe7MisE@[!{Y(!^ }WQP5zNZU@9HX -[?] ]bVu(7&R0#i');
define('AUTH_SALT',        ',+?akSL0Ntl%y]eho::VnUrDh?=(TxxA#%Z(4x*!#Lh^2@rbl)F;),J6-4l%2jGi');
define('SECURE_AUTH_SALT', 'Ok8c )47xd05hHW`t$GIbTNdn,cKr@bj&Y#CaJtom80k| ,D!t};rqXf-K]5VY}X');
define('LOGGED_IN_SALT',   'g&{{6+`pPpI2qg-z2EU!HLuc^0Kq*vUgG;%<9h|+FX8RW1=DbM^du:Npp!_Nl@L~');
define('NONCE_SALT',       'p]T:>mXRyEnb{GOtgFuCXhirs8rSxHao2X&nQ;4Mi#y>W&R0vMiI5#`lzepYPas2');

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
