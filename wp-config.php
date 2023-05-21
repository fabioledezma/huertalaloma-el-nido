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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '0000' );

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
define( 'AUTH_KEY',         'p:AW8,UL8?s2^y{O(nofk~tmDhU8uZ+{X#C;T}?.b3`KRdf!~*k6ze$JHL}/is^U' );
define( 'SECURE_AUTH_KEY',  '2keV9rQNN!fp=c6jV}YqL /S/.|qOB17xX<Y_)vRy}{Q`Oux= pH.7gc,3wr7 gj' );
define( 'LOGGED_IN_KEY',    'B/=I)`yOW`!JY5WF8T6t}yRAZo!piFO@;f0.H;!~8{{I=Qi?Qy`T`A#]mO)c)w7p' );
define( 'NONCE_KEY',        'ff:h!kY2 QiZI2_v<oB:Oevi8<Y0Ny6U$4v<pG EU_$DkqOff8wG[km>GZcJ,l1s' );
define( 'AUTH_SALT',        'Sq8yr^-IW:t`!1 0J.2J;,]<!^ZvcF^N~M-`{sZc5f:P7g}8Y`F!NPHW?]Gk ![9' );
define( 'SECURE_AUTH_SALT', 'E9#eq5S>b-O2PIE .%aVK.ZC3#qJJ~[KLugr tnwpLH5H`3}?e;D8b&ki;3c*N&0' );
define( 'LOGGED_IN_SALT',   'bWr$`jRZYVd/F$kRpZjS[N8(eKo]nRHUZ+:>^ er!;~070Z0z2Lg}iQTNt3@/&Fo' );
define( 'NONCE_SALT',       '}Ik$A(C49(nq t^OuB^V${=2M%[8QLeJkhNucp .2k8g@g$<!V!}QQoae#P[Z]j|' );

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
