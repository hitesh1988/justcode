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
define('DB_NAME', 'justcode');

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
define('AUTH_KEY',         'l@<_$wdKwUIgrh q^sU1#0qt/HgmiD!N1=j|5`-zbFWnDOSz>e}pQU3NE&DyPad8');
define('SECURE_AUTH_KEY',  'q(l)&vWNNgQ2O)^`+c^3c8aFERe~sBIbhAY$N4us&m_?pZ5D1z+6N7mg$ZnTao_B');
define('LOGGED_IN_KEY',    'S5OON&$kw|4NmN(/MZke5a5Z5Y46NQTELf5xj)F42c>/[:d@Ncofkf;Gfq{boO&h');
define('NONCE_KEY',        'O1gO)GVYBd$JOt=>7#,M[{xCQ4%=PR73jwKaFc9o<VtnRe=r5FSJ7Qu9D<aWp!(S');
define('AUTH_SALT',        'zYMD4ulnh?i8/+8=.-N(oWAH<jtfzMu8D&D{B%H8$IQO{7^:9/*&xyn<Ii{6i.+c');
define('SECURE_AUTH_SALT', 'a&jBX-otmRKFy`,GFnIF1myoaew(v&Nw*&JM~<VCy=:*aQAF}?T$Nxts1<Fd&&lG');
define('LOGGED_IN_SALT',   '}hDJ)6pI<1EM )0LNq%PRAu6m}}5CU=kXEPO=l!s`LjL%:[iApk8Z8a9?R/=m77o');
define('NONCE_SALT',       ';Hc[9PN.O%oGt{13kb~aVcoa~g/VH.sh)l%AC/0a?$~jf5kd%&.U.0a/=q&-QW{t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jc_';

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
