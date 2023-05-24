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
define('DB_NAME', 'wwoals18');

/** MySQL database username */
define('DB_USER', 'wwoals18');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         '3Ywe/Gb41e[spcwwgt!:i0A[6ON;~/DU6pl/w!>w%U;!,X>xM||0>#>j++~t|35;');
define('SECURE_AUTH_KEY',  '*-Ao2eJ8m~wR#2b-u,hs@dulO%9y33,)7C9bT<00Qd6w{/oybs5-jq[Q,sbaEgzd');
define('LOGGED_IN_KEY',    'V<(FV9+,R:dU{B.}t4RRn^dlc(xWOGXvm.(?;cvp4vx>Q[mj#Wh)ie-*^ u~BuVP');
define('NONCE_KEY',        'J2?tzo0Bu^+<Ph]#S ()m3sbdC<F3=M)5m+nMAO+uY]~P.+0YGZ,n3OQ}if%MqOO');
define('AUTH_SALT',        'c`4<F]&G%Omk|.D%QL-(N)?${fUpDz/m3n/s4x97*{~O`HS+#r,4ZGq+TzRULzGM');
define('SECURE_AUTH_SALT', 'VZ%C>ua*jJgGG<zKFb,@;cDyLIK,3(?5=WObX8Fzdu}v(VeIO!Z@MYTbn>~Ma-mE');
define('LOGGED_IN_SALT',   'KBx4`>h-*wWpt /h38)Ym;B_:l4b1E]O8m1j{_sp6JHmITRH,Qrur*0H%j2G*c>8');
define('NONCE_SALT',       'r]kG&6jpbGq%[D~dl%ji#%^wx.Xl~KV=cCHG0M0I>ZH{ldbqWbS5r1}~=wjltb:`');

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
