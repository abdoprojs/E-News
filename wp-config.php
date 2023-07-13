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
define( 'DB_NAME', 'enews' );

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
define( 'AUTH_KEY',         'MP6A};&|wM4yQ0uc{U];b6/D&a[Hi$=:j2:0~T)>0s;-lw+PqHPYZ=%:/nJ-XA-@' );
define( 'SECURE_AUTH_KEY',  '7tN$wb 0g!Gt$(^dL]%(CtsdZk/BRYBy98+3`NMjErze63-eV/%U|crF(9;w.?TB' );
define( 'LOGGED_IN_KEY',    'Dz|{BHFTc9XxM 4 7*Q5SgK(Uu%cHDyDJjgY 9gwvffZ<B9A@=eH}@oewdbRrb| ' );
define( 'NONCE_KEY',        ']yQ}uM/=^8)CO^+sQ/5R,Jb+/O8IXd4IQ-7&7yo#B1/Vh;^dkv?>+^Cxzc*%%X1/' );
define( 'AUTH_SALT',        'W;62^Am9}I~|w+L[cg:Mk+c<-{?d@%r%6Ki?TA3G8Gm 28$#C_RJ!5{1B?;[,,T_' );
define( 'SECURE_AUTH_SALT', '7r9UW,P^kNl_4`AIiOjLx!MmJw&xS G8FW298s)A#VMn KleCX[iM$qmW}FgU7CO' );
define( 'LOGGED_IN_SALT',   'tTRJ6@0U -o<SNM+z*#ScVY^-eW-haCheq.bV?WL9cz6-E[q% ka2_qD@c090xI3' );
define( 'NONCE_SALT',       '$nF8B{U:FlY<d(8>>Lp}RX($1j).4(2^JR:A+MfIwI;~8Va~^`RAM4@=R<.t?[;y' );

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
