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
define('DB_NAME', 'aqua_jigar');

/** MySQL database username */
define('DB_USER', 'aqua_jigar');

/** MySQL database password */
define('DB_PASSWORD', 'aqua_jigar');

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
define('AUTH_KEY',         '_X>dCEG^5dV5$f,VAIp`XQ$[F@<K]-#7IELl.Qg:Iu{4U3]uFCS4DQ0$Y*cDuPJ~');
define('SECURE_AUTH_KEY',  'Cw?j<5 Le1;Q*jrsPB.5!MHKT61,xcEI*J{V!|@>Q swdR s,4(1Alwk!XWZKPg|');
define('LOGGED_IN_KEY',    'ka9;<L/-36jT)Jwc}J$BYK-IxT(tY+O j#<MK7m7xu:+[V&S!Ko/VA^D9SR3qp!#');
define('NONCE_KEY',        '$[WXK@}sY4N1<xhaZ@wJ7b)!tqWLBV[G+P3t^FXQR#W&Vi54e6fc5bNE&~&M2TFb');
define('AUTH_SALT',        '#Ds=(G^-}lfh9E4{]c+7E^tu_?L{v,V;|{K|BAboYv{LJv!Z+=wXFy&I+WBBc8PO');
define('SECURE_AUTH_SALT', 'RL$lZV<5`mdPj6ShVI2KkD~$`%)QU2Uj`I}7`?ThX~fhGu##C zJtIEw|@{M{.r2');
define('LOGGED_IN_SALT',   '4l6hT9-^QE2s3m%`+?P:lru%x|s[Y(M}z*AYfyR3,k_c|=*I.kW vYdn,bS+fs6E');
define('NONCE_SALT',       'jj~D>)j^EWeframx75P?GDERM+ ;ev(8zyo~Oiq,8H@{;-6//Hvw~[[^Nv}xfxz]');

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
