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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'wug');

/** MySQL database password */
define('DB_PASSWORD', 'MariaKagaz123');

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
define('AUTH_KEY',         'Q#Fe0}sV4~D=azNZoI;;#u^*.s6&X<VC@FFCCG5cx066p ?6SXaUng(RLI@H>bjC');
define('SECURE_AUTH_KEY',  ';t2B[ddCp`Fp7L,S-cv8@|(4wvDroqgl)n628XL]fvn<hmsHF-v@sj6-Eo^auM@`');
define('LOGGED_IN_KEY',    ',OHNR<L$/B)pP|m~H0am-jZ;lr-`@,8n}y28gHeh[`.A5QFu!=;Tcq<J/V,AzX1@');
define('NONCE_KEY',        'pZ44_wP=]^Xz+1eoLe<d-I`tXnHrVy#o]tFH}qIX8~`.3pgiGB$110:^X}| =B X');
define('AUTH_SALT',        '6`xgVX%dEKto3$;F>N{uFDcIVlF0e7Y6!Z6xb*7H4sIacBg3Q,cjrN#Gu_i)EM+J');
define('SECURE_AUTH_SALT', '_v _cae!IKB:0Cd}.D`xxojeqm!c2XPD$knLYh9up~^]&w~2Wd%8X:BV@3o5jyh/');
define('LOGGED_IN_SALT',   'PGwQ9c}Soi];WPcmQ8S=@]Ce|y;TcJ2MSwA&f[^F9b$HF9&^UvVBE&c=?sk7Xo<1');
define('NONCE_SALT',       '7aSX/Uy/A`Sy<^[dhQ5K[}eaGOG(DSFx6H.a&kEN6yb$}A]K+9=0AH7U.g/|`VWT');

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
