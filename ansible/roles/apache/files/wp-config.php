<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9NMyip1Lcw!0tG~YdhA61D|*}bSe4eeak`ho-UT>h;Jc}5*C5Q:G:<2N%#b17 >M');
define('SECURE_AUTH_KEY',  'tzfCSP5GN(W|>WYly_P>vOFG|PQ/>DaU{(88v/ZxLY.,1N|/sk%eTI&yI@q8G6b/');
define('LOGGED_IN_KEY',    'd]Q.U!DeUk#N%Xg zrj`5+.KhJk+|M+qo#gLW|;QRI3_Q,aU*#hbM:/lI`@2IWMf');
define('NONCE_KEY',        'D=@HVCU4Ffn7b?T2nw*kh8{si-sEz&8m|M?m[wL6yg}S:9glX!u(2zrpBxYo=&&n');
define('AUTH_SALT',        'fERl}pmFq!>e3$UXOnR51J,+M$4|$bOh }HQzy0+|?Vf7o#yQ)yw,-Ax*c 5qN_a');
define('SECURE_AUTH_SALT', '+P?DE6oe|!*SJU-wU:@N#~c>BVbA^@9NfI|4m%?H60|F&;0z@4w,&pjPebGS_n, ');
define('LOGGED_IN_SALT',   'X!;pZI2+fCN-(pqwt49,$&=HpkcT}tRwg?R.j-[p#i-}CEW -+X+7T0rPLFv6b]$');
define('NONCE_SALT',       ',4}QU@UWh#Uk:^<|6]8@.B2Y<uLCyRhfx$bB+yf%4Cj~-|<f7Hy9lK3W(^(A:?**');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
