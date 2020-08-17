<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'simon_db');

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
define('AUTH_KEY',         'yA-Hx.f)4|@hPR-al qK-XmB)qltH~Y07@%i=XPS|k|sF,-t@nElR]n+vT}hU${~');
define('SECURE_AUTH_KEY',  'f|kTf0RL0.Nj|Uy@Q}D_)0w>3([dtMi})e6@J3-I|D|Kffi@1*lfP6a`z@8zxAk:');
define('LOGGED_IN_KEY',    'dWU#t+v`60h55UQawQ;WJ| |.C1-2Xv_zp5Rf,&yZ194u]>@`bmgf*%{TjT]zrHU');
define('NONCE_KEY',        'Hv6^auvQ&qnp_BxlvBxvKNbB?NK@Wj0@!T,fa|2;2-8v55[zN84M|F.jwe:D#8QJ');
define('AUTH_SALT',        'Ok[s/#`a2 p7< Z,9`0,*ZO|b3#a;9JVbYO90L[C7>1+Rge:^L5(4U&=4CA^-ASH');
define('SECURE_AUTH_SALT', '9$QD@:i;A4Tia}9/k,Cb,R/*luLOXU4,BU+-eM3=*Z!VLG[(;/:I`A%gdOw5|K8O');
define('LOGGED_IN_SALT',   '9mQWw?`~tVG_dA$D0s4=qZ]Hfp+koO-lwmvs2McR&4v1JHNZ;O:jlpT@*+X]Fm}j');
define('NONCE_SALT',       'ZHlYq$SqBeapX:*4ZDr_xu-wv[xul+fLn-3@Sc:11)D*YW|^~}~o_t~A]Te%2ZTI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
