<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'timecybermedia' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'RmDQx,gfPf5V+-h>A/))x.e!Pv}`EsW#e:1`rAvmQ|Y.(LObLj@U^a/NXy]MMR@j' );
define( 'SECURE_AUTH_KEY',  'Ky{.Th[E~grUM^Vu_^az|;|NG!FZ^bX{yt,^/0%^#7q]|ikz1BmYuCw*d<M:`aw(' );
define( 'LOGGED_IN_KEY',    '#^GqAW%rmzQzqXbycM`Tqmg>cpYY0!8;?Zd2:Qy%zk;U)]|-w98J80uC.aLsZ[bL' );
define( 'NONCE_KEY',        '!=} A%{d%eV1fURc6DwQ6t)#eRq<~S0EO{FzErjDtim 0wsPDG~0h*bT668m/5qh' );
define( 'AUTH_SALT',        'Mz:/Gy;B/M1 zhGIJn[W-(I&>%tPyLPG<EmQ5i*9[1+MK3]@#D[^MN:iPVdsu1er' );
define( 'SECURE_AUTH_SALT', 'D8bKz8#svPikha_@>ekQHy,^6K_l)s0;k[]O]DW!K/Bxe7N!prP=;>LqabQ6ai:7' );
define( 'LOGGED_IN_SALT',   'aV(0jhVGU1VmPF]G.{58q-zZvU {a+) G`m-3{:xLW#,d-J>__?,vZECNN{$3A{q' );
define( 'NONCE_SALT',       'SRLgeoFLQ{lWl^]q}NP`<x/=jI?5TGEii>3t-ORqg=tVt d%5181O@^a_@:H/j)L' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
