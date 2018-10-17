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
define('DB_NAME', 'ndmson');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Qlmgroup8899');

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
define('AUTH_KEY',         'BPt_7cD`JT,5#B%6GuOl2hFron6&J_ OI&%[Q-mMeU/p)ET@!(a)h%j%29i-Fo<?');
define('SECURE_AUTH_KEY',  'CT+klOv[R>u:ARP> 9G_;id>=kHpen{=@P,qJBW.=$q7q&C6rZI+!f|Bbm#/~3uH');
define('LOGGED_IN_KEY',    '/CMs;E,`q*cf[R1os*}J$BJ3U/3Y6Jbm88bpHQ5j]D442Gh~iYZF*3tS{@dLZHuq');
define('NONCE_KEY',        ';{r+vDbM4d0)9RU!YUb%#!wOM W_y&]xR(^sK$]0Cy,Z2OSxmx`^tY^,-Vt<O.8[');
define('AUTH_SALT',        ' (#%$h0.gS>C !PW mdKZ_uIe`9O(dxGd)!K/ Jw:jG]eVq[qks9hc!=V?MU=b42');
define('SECURE_AUTH_SALT', ';EgjX=U#;d!+&U0H]$9v;!|9SbQfXs*f0M#Fb:*#Y>^;CeHH7Shv7gdZ#E{HEr^c');
define('LOGGED_IN_SALT',   'C[PzljEZ_!1K[B*~+S?qYhDJe6Tl+6Z&iH.ni!(,BX rLVL|H_hzfalHs.d/0|,Y');
define('NONCE_SALT',       'aK>a1cLNdVx/z_kO@X4w,]y$Dl<t6,,oTaE&E%7J5-dLJzK=>7hisEc]%#3M3:<~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ndms_';

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
