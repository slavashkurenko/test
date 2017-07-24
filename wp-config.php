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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'test');

/** MySQL database password */
define('DB_PASSWORD', 'test');

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
define('AUTH_KEY',         'O@GJ5G.Kut>UjHEzZQ<sy*}.M|?%5:c0:NMBAN/6@Vtl8ie<26DYi_b(jR|~MoS1');
define('SECURE_AUTH_KEY',  'y.W0^e ![<U-rI6$YQGMqKRA~jSHzaG9l~7hrbC_`w}.cnW]DokCUvl5rN3>oS>`');
define('LOGGED_IN_KEY',    ' INHBB:^50yEf(csk.t(68b3/ena_3va^%x5|G/nm&zm%6FM%[`spCF,wV%ezYM@');
define('NONCE_KEY',        'wvAKcM,Q>3[+TgN$Z[p84YcIOfC$X BDs?QOf=h[n!]G`az^fP}5~tyd`$sV(e/I');
define('AUTH_SALT',        'EN(--z6SrQT)0B$&I1;%tS`lwJC !n+&eA#H8o<7E5[Zh^Urs6Mu@9k5)tTYlT9$');
define('SECURE_AUTH_SALT', '-g(1j*~<-, N+;@Y8`SPow2Z,wM%MLP0I&C7fd)SIr}7-O:^+i2V$MD3WHO,1r*z');
define('LOGGED_IN_SALT',   '6w+U1+r]?b$wA@e*4,??%vh:uw=$8Pu`HxMJ*gG?y!-P2P#ZD$b;Z.Bb.0H!ky_Y');
define('NONCE_SALT',       'If/U2^*nIygwXPa/#f_4KWe8g %BsHwsWl(<+nETmX@VhrH56a9Xjh< }!sbpmz9');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
