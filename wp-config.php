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
define('DB_NAME', 'wp-test');

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
define('AUTH_KEY',         'zh5_|(o3U0>B*wb6}0v A1obB~&1xv+8%%Jesy7~{bk~- TSki7Xjz-H8}/YFx8Z');
define('SECURE_AUTH_KEY',  'l@R-sDs@6t2i<U267}Ge&0@QHLS01Wf#-{MtpaK.Vjw$dY{q&KYn0K<(AF)1s1oy');
define('LOGGED_IN_KEY',    '| 6t-Lb.|%]Zs<V:$k7i_&<c|z;?rVT}Ou7-[&T}46OQ`nMk+A&yV}cGfL4p,a_N');
define('NONCE_KEY',        '|ST6sC.N,Hzc@iZTW[Oi^{3fs4tpMa@X[3wD`]HRP7eRn.2$Vj4lC,GNCC}U%*Jr');
define('AUTH_SALT',        'Zj$cq!40wX8r,>A:e!ULjXo`IDi{FA:|BniNojqie}Z1UVn?|yd+<JJ#!wM!dNvQ');
define('SECURE_AUTH_SALT', 'u}I_6Y*RBMzJrx&;y#{YjAB`^@P@zAN>cv.9KuXSlU,UTTPr*BvOTk~b6nE{{3jO');
define('LOGGED_IN_SALT',   'R1d VxRJbLWhEvB0r1tsaB/t,?,B?oFglC&e7}G}2;z2}[!s|BI/j){7=s),,NZN');
define('NONCE_SALT',       'ng~@ieo)xXMR|ILJ`:v?A~CQ#sIR-llHqkE%ro2n$D`,rtlsP&9kK}3yjq|TQd,u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptest13_';

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
