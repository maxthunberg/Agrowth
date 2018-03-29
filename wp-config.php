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
define('DB_NAME', 'agrowth-v2');

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
define('AUTH_KEY',         'E|_gb-I(`Dl)Sm18bJmzx$N^qsW?F^PM 3fFO9cEGQP)d<J-D,3/x_ErhtK~;H|X');
define('SECURE_AUTH_KEY',  'KlQ0xE2?:>32uDi|K^so`>bQPfJ@nvxtnj+l/Xx]kTzgMTu>=YCDWSuCk_P<*}1+');
define('LOGGED_IN_KEY',    'nq:.h4!jKR,{UWUbC`u:)uD]y|&a);R4je8;.XrUih)/^-t/QW<#,ax!{$~$ k.x');
define('NONCE_KEY',        '$=j(Qbo^JP^-g*?D]:X{8TplRKs+I8(je[]PaTYR0,5(q2&MY&A9yVM6CYIuR5AZ');
define('AUTH_SALT',        ' Om4Er)LU:bE0y;GfFuxEeP7>65R9{Empn/J[A-`_$(KplP@d}~4T_4+?Wo?2g*J');
define('SECURE_AUTH_SALT', ']TX8r6HR1/hKBCF}+ZHB79.JIhyPRZ9-9PLy a*^w4t R|+839fmpQ)IlHymfjt4');
define('LOGGED_IN_SALT',   '3X5[%P50iXPD>&EE168n@]iScy{&I|~!fMHLA2gFCA!HTG{@K:zq9nV]rE$dM_3D');
define('NONCE_SALT',       '8<MRwn~YE<*Va4<td /Sc_.OTU,%EKp(6``8v/MhGl#c(:c>9sjPl~8puD~5Rc(K');

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
