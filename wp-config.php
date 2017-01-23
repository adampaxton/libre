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
define('DB_NAME', 'libredb');

/** MySQL database username */
define('DB_USER', 'adam_paxton');

/** MySQL database password */
define('DB_PASSWORD', 'AXeKujpfqGm=uu8');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'xYYTl%-_,{b*H%kx$36e9kF0/0s|=hE<t?A8-P.i8u5^oGh)ed_9PYhg(QGXvYv_');
define('SECURE_AUTH_KEY',  'WwV 1D_o%vp =TwmH[*#`|*c0`nHyg}yID%odtmd*6A<eUMAwXh`H[PAu*ah{boW');
define('LOGGED_IN_KEY',    '1K)t.c&_QEKh&h6?l )fPH@Y=u=md=luLHL>NH{>TgF?TkzQ#HH&XB/k;h;!eSZY');
define('NONCE_KEY',        'dE|{Jt0mS9ZRc47]sdaI]MiLqo(jb^x?N:/i|-;OH6Hxv,SZ{S-}GjiwtJ9]Do@j');
define('AUTH_SALT',        'jg?3BVA7j*<VKtwo.1|L~c)ur3FotD8VTExzc1UH.CHUWqXrMK!oFkd*4.]9NpOY');
define('SECURE_AUTH_SALT', 'it}g&_Fi$w3! Y^ *%,{@df^ZeYy2.xVzcHv:yoKP]tICU<6^H:58!5wM;Gw>p{0');
define('LOGGED_IN_SALT',   'gLATK/x789/EZwo>T%*1IF#aV**a,hAUV|y<]N/+YH&s{v{|])cbh|*;+K;q0Kb(');
define('NONCE_SALT',       'wD|CAj67m7E`Kik6F_5yW;e~dWPH#]QrllR9.%_dwz(/(mK<{,dvatBru74ff(+.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ldb_';

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
