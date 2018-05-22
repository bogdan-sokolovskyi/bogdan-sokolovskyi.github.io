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
define('DB_NAME', 'trisha-db');

/** MySQL database username */
define('DB_USER', 'sbv');

/** MySQL database password */
define('DB_PASSWORD', 'sbv69172410iq');

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
define('AUTH_KEY',         'ePmU`#w_*(9]&7K|qKSFytQkO.j.CI3{K}a0BEfPS8iWjQV@kK9}j=Ut9>a:kLO4');
define('SECURE_AUTH_KEY',  't_/W)NtXx+nowrX@UKCnDIx@_xhW{h%>K^Dy^,;?XE-zYk/</GNs0P_)1RNx)a,1');
define('LOGGED_IN_KEY',    'UT@-Q%AD>2k:,$j!*-LcP|>zj#mz2+Ik`O(0al ~7%U>:)0&c]Z@fRy(}o-PO>i$');
define('NONCE_KEY',        '$c69()zD|ndUd6<+b`W%6L3C6Z<du=9v^4@mP|Hn6;2.DD<|6yd,|hq|6(nYj%?S');
define('AUTH_SALT',        'AFB}d=BMBhzx<TNX`E~N(NvG`SceReLt=TtI^:VC/sn/#%01.vCllgPE&5VqBj=P');
define('SECURE_AUTH_SALT', 'B/`:Y~>idxoHgR=b@#a8 C@msuaB5;RqFunS{SRB9%,v?c?+XnaJp0q37+kYu9O,');
define('LOGGED_IN_SALT',   'I<<Q[*_u%Ua{~S7mt9;:@T1mW`-dv[Ya.n9dgR+rPMQ+/_lrx3TP`5 Wn#e#2Fik');
define('NONCE_SALT',       '6^+Kq+<16YwA^BA,zO6:R@q_eOz@*0oMLN>I^+uT}<9nUj-O}fmTv-s!!koaV&!g');

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
