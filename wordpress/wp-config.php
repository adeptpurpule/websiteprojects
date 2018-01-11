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
define('AUTH_KEY',         'PE]wcVRAQmll^k~se`E~DVe}wkK@E[>I!9*k[evG~aThAe+7B} SWK5@s/NDb|g?');
define('SECURE_AUTH_KEY',  'eH2[LyaB{|jDa_NUc+=AEy~:7Yf`DN5R:Ge-Nhx,WZN4)a:7(JUMpFhkO`TXpeAW');
define('LOGGED_IN_KEY',    'locshyW,-<T0th?]A4KXQF%DTxuKD))Nu6Z}q{N:Aa1Np&*/X!n!y~5*-8Xe!J>]');
define('NONCE_KEY',        '>-k4rd.Phv=0:GyK5MQACB@7lok@T1E q<t^R>wu6n}1||9W;4XTvQn,ZR+:~EC|');
define('AUTH_SALT',        '^udq[I@ZBZK,bR5^8<E+;Z1ZWc+B&~klzh)?lMZSZ`OptE-L=d5oh/^:~J4<POTh');
define('SECURE_AUTH_SALT', 'h%8st*`R`G6l(kgT`9$pP<b/HgS<l!GJ*~|FwG|M|~v7}yy*t#@|`;gmQyLJgA/n');
define('LOGGED_IN_SALT',   'co&tLFZxjbAZ(Om5i4iP8vm|}m<,lnN/knJLB=>D#9{i^0!a-7Xdwq)@n|9Z+Obr');
define('NONCE_SALT',       'v>p1X#b|@1LiS22Na!k!{5kGZ~fS.L5k@[[Gtkm.s:cYeAzC]|1l3)>nU]obd<=g');

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
