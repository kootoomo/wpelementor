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
define( 'DB_NAME', 'wpelementor' );

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
define( 'AUTH_KEY',         'UZ!F*=RYB>MF=$)4t0-GU,l4tcO$,.[|,V<;q&2/zdmc&rw9;fCE<X?r0?${h$GB' );
define( 'SECURE_AUTH_KEY',  'Uu%[9`g5**;n<ukn-Z zd4:[itcM1W|XXSTvfGH5=Y,7$mqKqWb/Q,iP5=x,VH:2' );
define( 'LOGGED_IN_KEY',    'wp;bVw?H]qkS]kbZA4nr1,6(v_n7Nw<a5%EyhUT};a<xP7x10|Os?#jNNW.dINE6' );
define( 'NONCE_KEY',        '~k~qzW+`!WDDol@;sdHzYNy]n>No~M7agnMptC }r~jh`l7L{s;j%~!4r|e@l3/x' );
define( 'AUTH_SALT',        '6B(|z9Oeb)fXcaxO,=pQ9!:;7qnvLlIdlz)c_4lLPAA;FTmN3jGk_04eAC0KE:6T' );
define( 'SECURE_AUTH_SALT', 'BEPiTOuL0T1s>SQut`-- `r<SOLRt;]Mi5%/}R&erI>R]l@pxZ|+1&of#cn:gI9,' );
define( 'LOGGED_IN_SALT',   'D{Z=cmpZf5m5[CBp,/@N(4cx^yT+B`k RQ/K2_}w7-`Z Phg<y7O%TkJ+1^JBB[l' );
define( 'NONCE_SALT',       'tg>H/#>d9,EcCM6sD^:2q:msIMV?A$Bj#7WbUD6mW[|u,;c}tb3p^a`M:i|qg{3z' );

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
