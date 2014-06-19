<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'quill');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!)+SYz]x33u#2=w BCug.A](2Ngoq<}M`Yb)2@E&T,+Z|FTA]!yu6ilQ.GF}+8C8');
define('SECURE_AUTH_KEY',  '?R?QGmEIe3qNK?!>n8/b=7@(uDviLFUt+`(Uws[WS-|O{M6~] 4D(PO;eX{B<Cac');
define('LOGGED_IN_KEY',    'h<;-]eT>f@_Qt8+xt@wAfhFmMz[-+XFQ})Y#ep_%==/-g=v(x^i.[rTg*D_N?v &');
define('NONCE_KEY',        '~8|6Cm$s36e>oAeb2Tf+n+%CEPiu1X~ nDzAJx-Ic}S-J%_Gd#rt&0n1wdso~}9m');
define('AUTH_SALT',        '1;zT]xEn=`TweZaNpF{MPZ NK__kbelz&!/Ssm<|jb=oC%v}jcB[)e)u(Z$FrK7-');
define('SECURE_AUTH_SALT', 'YB;DnN80-g $n~pXv9ls[xEqvUUqjM|L5=&<>QUx~z5h>h_}3y;^!3jr7bAabT}|');
define('LOGGED_IN_SALT',   'BCg:#k-C;GYb(|q$?!+k-BZ ;OtD/rRUUf .cG*4Lk[AAlWze-RLL~G?!(j*J7F7');
define('NONCE_SALT',       '2k+q% Rz}~8R:YJG06Z($s0y8}:f7WBUzx=3H|[$azi[L.L7KRc0G/RuK84]!)Y%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
