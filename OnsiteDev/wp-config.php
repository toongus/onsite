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
define('DB_NAME', 'onsite');

/** MySQL database username */
define('DB_USER', '');

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
define('AUTH_KEY',         'nFpHRy?|hRC]]j!P)+<kP<H*cF|0wyp#i6*ME?Jlv3#BQ7V!e.d]e:,U9#hO |g|');
define('SECURE_AUTH_KEY',  ']f8Bbkcqi@2!w~,~=T&y+54DL)j#G.G#}&&+xMVZr~`EaA!,[mw8vQx(.h.]D#NV');
define('LOGGED_IN_KEY',    'y*1l.x9w&XW@CZU :M?GEQzh#2t1bpeQ?o-5ly43mo:p!Us_MPp:l?Q>ZM3CMnP%');
define('NONCE_KEY',        'sv[kQEBxXWX]Q:TaS[;p5$BnE]reUFMwEvE]bz;{SeaS}pJ?$TAUc87=;l@S?a/x');
define('AUTH_SALT',        'h%i~(9oIF8Ak07HrB?pVrnyy4qg_ c-^fLhJb|eaPVh& Bil*xrK48[YJ&d1aV%.');
define('SECURE_AUTH_SALT', 'C0vO-<):XgJA2W=?ukm,QB7Xl/]pgruh}3?v.x@2OZE#sh>P>*F5kV,~i#^D~j3w');
define('LOGGED_IN_SALT',   's7x~s$~P_55C$Okvz06(Rj6:rRjml]F).6O9kWt8Xo#5fiF| ?o- 6Y6Aj]`lWs/');
define('NONCE_SALT',       '&<d&/l,AR6YFU]:al%z[v*b#D/YH43)<rBl{.JO%P8fvWNIoTI<:yM/M Yl@wo[<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'os_';

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
