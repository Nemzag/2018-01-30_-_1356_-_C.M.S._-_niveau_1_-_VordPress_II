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
define('DB_NAME', 'wordpress2');

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
define('AUTH_KEY',         'k>`:,Rmj,k8gLdA(U>T4%B_.ir6?_ApMZF//<(E}jeX3n~FdE. YRsWP=8M]A}#K');
define('SECURE_AUTH_KEY',  '^6p4H4[}fsl{>9fzM__/lKYa5)7xe CHl#7pu./{iu&8kQYVGL/uk*WoR1{7Yr)d');
define('LOGGED_IN_KEY',    '/`!g3e-+2ug;-,}:iYi:>6-6|/tCCj*UnGNC]ls]ORk}x,U,l&Chr]RH.-?Gtr`z');
define('NONCE_KEY',        ']&h&B(wv.=+62EU_X2q=HE#E}vSNzo5~LUzYwSVz-EP:T9poxLx.YRGJ!3h97C!4');
define('AUTH_SALT',        'Aby.~!s4|<A^8ndz}rW|=x~:);8)o%1mg>6zM:r?QLD?t[r}-,Q$Er,!Et/?:iZ ');
define('SECURE_AUTH_SALT', '(tTcYI!pP;e?EXo{Nk-|N-Eq@up~n[YrY CZLPOg;Xj+:xAm[C,l 8{G:9E#2i;/');
define('LOGGED_IN_SALT',   '<jOZ}{nWdJUaD)VydMqiw([BY;j>Y:Wgd6UNcs/CQN/!<Gub{kT:}+65i=>V&kWJ');
define('NONCE_SALT',       '1c0i5y)wv1mn(/8ghK6e*TMA^(K9`|i!bx329=_y77gIcA3_:Jv<.`_Z5|KU:#u}');

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
