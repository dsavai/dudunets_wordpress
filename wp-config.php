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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dudunets' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );
<<<<<<< HEAD
define( 'WP_AUTO_UPDATE_CORE', false );
=======
>>>>>>> 29db5d720c20595e07a6e5de2f4f673bed4747a4

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

<<<<<<< HEAD
define( 'WP_HOME', 'http://localhost/dudunets/' );
define( 'WP_SITEURL', 'http://localhost/dudunets/' );

=======
>>>>>>> 29db5d720c20595e07a6e5de2f4f673bed4747a4
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
define( 'AUTH_KEY',         'j,2kGZxa7!$}Vm-j!RB3Gr&6?G(SKF!Wz$R//tf]* (A2b+VM<H$3#PL:wk>g5B|' );
define( 'SECURE_AUTH_KEY',  '=Ym!UdhU4CgAXtl.>VrRd#ZXdLcI=(@ER;A<_&-!}j{|pK%2,9Ps%X%lm/}Wy,S0' );
define( 'LOGGED_IN_KEY',    '#h$<n^jniPs7ccj*c+tpR`%Gy2o/{q{c80z&k~C`).z%MP?n7r|/03p-IWS##*km' );
define( 'NONCE_KEY',        'PJEwskJ>]@8,fRe4Mn_Ce7Jgn9~a}Y+@{pA0`4YvA&-]+r#C>Q90WIGC[`1UZK|!' );
define( 'AUTH_SALT',        'bG/D5bXJW/}ZyA@zVfKX9)%(2B>fe}i1p{ZmxOD<gtm&~5LdAn)wqf]{o=d5I]Ec' );
define( 'SECURE_AUTH_SALT', '`=cO6J2RmWg_Q19Ul!Ms4>8]a,:$d,p||ETfomn:R]3Y44OWqbV-7OR69@JDb?-&' );
define( 'LOGGED_IN_SALT',   '~D=qTxoIWbN:5i|Kt>4s^7|T;Gr+dsV)j7`]n;UFj,DQI-dNd-HioTk d#h10BE3' );
define( 'NONCE_SALT',       'G93c+szpUkUax8l2Qvoph[rJM%B]RHR5aBzRV&Q0b$lL^agjm[cO9E`082k/M%Wr' );

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
