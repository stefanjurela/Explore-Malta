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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ccU?V8l?|u[0^bA=.2b9*p+qG<!iO zj&s]^:3es3{Y_vqpI9P!{<;ckYx6.E:,b' );
define( 'SECURE_AUTH_KEY',  '(n0y]tYK9k+S5k)y}@oE_jW7XQdAG-1NCe!06(1+d3Z563)sB2@}zMV>5pH<#MWN' );
define( 'LOGGED_IN_KEY',    '>Yh$@?fo?%a $_YT;k;YNT]:H8&kV7R*JK,bo`U/ {vVAYL?j])sw|!7zYhUI3i?' );
define( 'NONCE_KEY',        '-n(n%?i2i)!>}X@Yj;oJvv 5%zmSw}EM+=Zl@8MU0qpy|^8`n]V;n:bJaRr!!{rh' );
define( 'AUTH_SALT',        '4|OzL+GvaGA>Tvb[O$A)}y5{Li<aQsjFhBw+ysRO`?zdC<u3mLI)~t.,A13Ymcf=' );
define( 'SECURE_AUTH_SALT', 'Cm(i*rB=IhKF[~SPUVLG*(rGSJ:;A>(?8:HMwm]X2qa%pK]~GpcA[4Ln/p76_n4T' );
define( 'LOGGED_IN_SALT',   '-soJYW*ki|UMJ~VMtD6pgHbv*Jn)5 nS,>KPEz5m 9nrZ522,u1dTQzsgINGwn=l' );
define( 'NONCE_SALT',       'VG2xopqaX&*AOQoOKN#bIZi<uayaT+b&]CE5fS7O#HHE&T]N*%h)OPx_g8X(rBiq' );

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
