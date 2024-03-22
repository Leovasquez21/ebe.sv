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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ebe.sv' );

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
define( 'AUTH_KEY',         '5,myyfzrDyLu#+&OXMIoD+( k4<k]^1PV[!Em+o?uAuaXr Twjgi >!F](Wf@BP/' );
define( 'SECURE_AUTH_KEY',  'mU_4LQw} zbuc,/:,`vT:(3_&tNW!QaQ~Iy>;-{-7EKulR`1UP&bGe9zHD~G6qtU' );
define( 'LOGGED_IN_KEY',    'ka*l,8h#`^7?B_eka1/(T1%Y}h%f=.:Y`Vt0|GOB>3>(&/z6A9W)!;q J2[8mBRv' );
define( 'NONCE_KEY',        'J~0dxJMEQPF#*qHEV+f}(yG,vXQLZa2<nJJzo%@r*Ea)(y?CT`0Kb9{m6j:|c-2J' );
define( 'AUTH_SALT',        'O&9%4[md%t%7Qv/6&3r;o%7y~!jNn/-RJU_!(@`Kpf[im`5 wybOC(UGPc9;A2Dw' );
define( 'SECURE_AUTH_SALT', '`9+dE~uUP~v6HDgh[6N)<&| %lT1Z28 k L ]Z~5H1zsjckg,o7}tN}#B_]3^,*H' );
define( 'LOGGED_IN_SALT',   '@B~-t_/Z9R7C%J4 z4>9W]*c_lmPqf|Tb|DaT[_dM0{o1VjWPJXlN(ox$Iq`pyQJ' );
define( 'NONCE_SALT',       'gw<vC$v:CVl^](OK0TCP$`m;%EE&IIb4l]==)JH$(KZA?f&;18<hT;_fGgV<E41t' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
