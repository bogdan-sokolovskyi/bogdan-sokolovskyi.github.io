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
define('DB_NAME', 'smaland');

/** MySQL database username */
/*define('DB_USER', 'smalandstrapp_se');*/
define('DB_USER', 'sbv');

/** MySQL database password */
/*define('DB_PASSWORD', 'notQypkJ');*/
define('DB_PASSWORD', 'sbv69172410iq');

/** MySQL hostname */
/*define('DB_HOST', 'smalandstrapp.se.mysql');*/
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
define('AUTH_KEY',         'r^E{AR!dr7qLBG%BK(OBd}|_6`qN}bWOjKHMBOT0LWR>Hem%`AS G5gLDpq,Lf<0');
define('SECURE_AUTH_KEY',  '~,]0Yg>p(=e(#}*fOQ]Ruw:S.8TyxGpT5a[)UlQ4?t|Ne#)48-9c2[?EVaW-ay2n');
define('LOGGED_IN_KEY',    'M7LWo4FTA#*a_)W]B]qZVdYr9SZ+$Ibk/=hz@2/I8d*U2</oTcbS8#4^XZNP@6.~');
define('NONCE_KEY',        'a9.GKGg#arAU]K6-ZtgUzc XCe%+DI9Laog5a_zgSbxj$O<2&?AcM:X)@=dc0~Y>');
define('AUTH_SALT',        '<ZP:_U#_D}:E-xLk!G~62:{G*_i_aM3pZhlCQ^h9M8W4IXk>2#2L. {K]EZ2p/+K');
define('SECURE_AUTH_SALT', 'W:,_>Y!Yuj6sW])9Cw=OBq6oj7o$::/W]&zM_kJYw%799H7%v^Qy!6]k9,^y)z]#');
define('LOGGED_IN_SALT',   'k]Fwdnu%{,k!UOkj!GPo``,yh_vFH{!}NO? zsq=(&HV7gyYo+5D01h?G$hz?&h>');
define('NONCE_SALT',       ';tku&-A2Od54$6#(b=B-1,zPo rOH[bN$tbLV@|H4i5g*fbnG1>2oz[b5`&4=6pE');

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
