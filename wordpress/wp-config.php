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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'test');

/** MySQL database password */
define('DB_PASSWORD', 'pass');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '<*|zbX};cHpR)_T-b)J+~y*4f/K,&?-q1t3syQ=&BSm+Tki+c)5I?Wu{NwI*g1$N');
define('SECURE_AUTH_KEY',  'e?&Ik&~wO}+YB { {z+BJCDRN7[})y7uvY 6+G>BLjekz=gT3rmp:-f/R}WT9NG ');
define('LOGGED_IN_KEY',    '/ou*ZPP5V:OHm|t|1-+lPOw[U-/U=&F[+<^-;4{G:h$2T},A MTl<@^!Qsgg69bz');
define('NONCE_KEY',        'ghaa4|-OgqvA|*3X4,;+c7<oj/1@N$$Bn0Ym0TYUm}uCzMy(JZU [x9A9?3K9woY');
define('AUTH_SALT',        '1^&z%(JK:<D-A8M}clqN+MZ(OhBynI0Y2Q5o!p5~2Zvz$yu3~8,]NiY;h<yDP@D1');
define('SECURE_AUTH_SALT', 'jjb-<l8Qnijz=x&9~r)C#No[>sYK-ryPHa>S9=bkVeiM&9bz3mKyGcYh|_LRR(9I');
define('LOGGED_IN_SALT',   'zIqp^q%EPFvkxXlqk3B|-7+r<}x0:CGX]h2w )0Ev;3=_12PSF,h%+c sYfQAg^{');
define('NONCE_SALT',       '?pKLHz^&Z_BzS:ah#$X)u)F@q,-7_u{W+SU6jc/L}-Fm+25-u|Wm@a.ud1R6lY`|');


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
