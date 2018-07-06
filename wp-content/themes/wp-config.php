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
define('DB_NAME', 'agrowth_se');

/** MySQL database username */
define('DB_USER', 'agrowth_se');


/** MySQL database password */
define('DB_PASSWORD', 'CD6N2uvf');

/** MySQL hostname */
define('DB_HOST', 'agrowth.se.mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('WP_HOME','https://dev.agrowth.se/');
define('WP_SITEURL','https://dev.agrowth.se/');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iZwL@a a5fis+I!0E5J _7,9 UBZiQ/BDlatk%@XPo&9z8Y8<Hi.seDk:GxKt,+d');
define('SECURE_AUTH_KEY',  ':s{g zz.KYWtBhx~z;Jr ]r`,`AwVtX>fn*r}T*&U6N,I[[GuFrr5g1G32?I4}-T');
define('LOGGED_IN_KEY',    'u6Hq$_@Boa]Zyed;fs|t2iot=dgv7,burYo2vf+q1N0,.(M`0zd:-!NtelV2y )M');
define('NONCE_KEY',        'Ne*f:zz_5dt`hAVOm+Y~1$/Mh>iM>:^+}}6rO}Ubn^K/4GB)qCHnb-La7i:Dm#Ha');
define('AUTH_SALT',        'reCp}-LX2W*Ly#:Y2FTf)X=E5<f,N2?]5nonl#25`io9$ J|Vw4i>5i8fYP33,I6');
define('SECURE_AUTH_SALT', '+^cK)LSvm.Rg:DLm<,Sn; y&t7P)2+iwhzj;=t5@JEN[-3iZ4e]77-kd+^hkZbCu');
define('LOGGED_IN_SALT',   '6OUB}QHz2rt3*=FN{9[:H6Mt60RkDf&!WfS<j:!YHu+N8}[~AU$.lwKm*C?ysAa9');
define('NONCE_SALT',       'Rg;Uo e0~p+Mkx_-Sa(U{RB_ZjW/Sr5VLOXrS?F~qLAEBsslH8pZU3fl5LEEF#:O');

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
