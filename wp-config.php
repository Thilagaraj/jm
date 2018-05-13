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
define('DB_NAME', 'jmania');

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
define('AUTH_KEY',         'A5li?^?1jCozEL2lph^Bt&)p^C;l6KkeRUNujf)gFG<FldnrVH6zI?l11qLjR+4`');
define('SECURE_AUTH_KEY',  ':^l)DDc&ZmN[$WiF|2?^lRO3Nt+4)2] MgC!vG4rhBIUi`9g|gA+-%NS~1bDw9gn');
define('LOGGED_IN_KEY',    'TZ#+Bp9d6+/~PXCBVSx4}:O6%GBzr4Vl^uMnPp%6P@o@H*RQ+IQ=#nR?;}12Tu(D');
define('NONCE_KEY',        '19Gux=1i!tLJj rM=@,jRKmZDCF!!Jh&V4;e{GarFX|)J<x0ceGu=+E^ /!m Lu9');
define('AUTH_SALT',        'cRy^tUA63W;@e3.PAmMkexb#.I_2+6(),H:6>OJ>ZCg7s&0gB9rwCKz&vS~!Beny');
define('SECURE_AUTH_SALT', '5~}:aK:FY[g)*x+oIMe>Ytw}y}j[Ez>E2vrKPj-5Mgd)>R.yPl$Gd##(cIi3bIn)');
define('LOGGED_IN_SALT',   'Z0i[&smjQ*fBh %L6[ophiK}SIMrc0FhU}o+IZ`{wxJfB@bCSOo1Eqc!, (}1J-p');
define('NONCE_SALT',       '^v[U5QF>pD5-C~hVSd5KUAS`PniK<1F^kJIBqu<sRf&mpXS)]mj9:RXKHlbP`DqV');

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
