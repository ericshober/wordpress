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
 * adding text to see how to add  this via git
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '5Hp?(q_g.Sd.%S2G*fV0wHH[nAln|[ST[!<TR!AdQ+~l7rT]?Q<]o]P<sg#H!BGL');
define('SECURE_AUTH_KEY',  '|$&@NjS7`f3*]fUQh)($59^n{MR!@dkNWde;{=mulTz/hU2J}Os% :7IST5d><gh');
define('LOGGED_IN_KEY',    'j*DVL@.3w#hPx*#b4UU6u`jm;,+rxh;16tT*QTa#!jx|35 RH$h&4!zdqVRMdv}u');
define('NONCE_KEY',        '@mhj;8E/KN]oZJ,)@OVz+k6^Pn+#I_Ez#^tSLLyV{ 609F{s^<^*h9/Vro0g|Z1r');
define('AUTH_SALT',        'P{`Y=gshmLi;9%QV*nCyOHjY99(-]8C{o)9opCaf.G%U;aR*vd.|{Mu-tDZgnQt8');
define('SECURE_AUTH_SALT', 'y[4E3p3RvaGxLYSRCrivH(}Vl[@0~Q~bVE+;E{-Lzy$ys5l_&QVk7EyHu]#0u6HR');
define('LOGGED_IN_SALT',   'q[qY=kO `n,%^d44geZT=l>^a+)0jcm@^8bn2R0 0KH:isv1I4`s@0{hUC$/,_Po');
define('NONCE_SALT',       '`jWzvq1=krz/r+P!IF&s*+Wx54!~p6V0~,T0xK<:O0t^&_S`G7Y4@k:xlms|VQX(');

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
