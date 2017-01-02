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
define('DB_NAME', 'letowing2');

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
define('AUTH_KEY',         'E[(o(31Nc+X/=U$bH!9/`>Vaq.P9v)EV(zk0/ qi9hMw NPu-Fl!cjbseAuplyWI');
define('SECURE_AUTH_KEY',  'EGY/5)v_NC.H^7>*gAS>z?*}]xK*-RN-YeV:CWg}%8G.#su<+<R!3=gJD/aRSzX{');
define('LOGGED_IN_KEY',    ' 4Ygl8m)qB<zrbcSdMG,gpv..5(m00e]XOIn5H&y%hX^a)R&P~uwZ*@Bk*&#xY1q');
define('NONCE_KEY',        'LL>>Z*!]S*AiY_erqR8&7?>FqHo^G0)*X(?[ckU.XIH$wQrQm6k)2?r>@vK%+DL5');
define('AUTH_SALT',        '@6FH!Vy?1hUq~uj[#XY@k8)e!;K+W#T69Ik8;=yiw!I?&;p]0/90?0*;V{Eo$~(}');
define('SECURE_AUTH_SALT', 'wu2P*mk3Bc[67_Q!4sY6E0f-qX!-2mdy*@qhz,Y(r;D$,O&1> VdrOrx9Xg0pTZc');
define('LOGGED_IN_SALT',   'rA=gP]*I~@_6_h2Ku~d[SbZhMT/a6#P{S5c}jsRsx,tV(*5$S[,V=l{F,P}>IVJ`');
define('NONCE_SALT',       'I7Gk$VYP>]iZw5nt 1t|RxGGmyOJv<B]wvBAW}G _.xvSs98F!dUoV_$-k]$~~`i');

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
