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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'vKacs=#_[L$DZWbX18ylCi>?LMUt|/(5V?D&sVcGBwtzMvCc}y7OrA(-lHoC8m9_' );
define( 'SECURE_AUTH_KEY',  'gt:f@SNvL;p]}0@~s`>V)YSdz3)Ru=B@R1riJ T+UbfYS;a(!/dde8pR}~EdBz{X' );
define( 'LOGGED_IN_KEY',    'sD|RQt]^.#g(lo4YqI#2iLD 67r*,7l7Xv+:}!rlE9)Pm~+yF1v6jyQ2h,0)rvaZ' );
define( 'NONCE_KEY',        'c)1k:FvmtbG}b+7?r7b%/c?~pktAa(6ODlr8pfo)io^DM&qe4.jK~xW:x-73B mt' );
define( 'AUTH_SALT',        '5a03RI?@Rvok:=$2[ UzcNJcvqu`AHw9_Lchrg`FZm),+rxC6kbfTToz6so(N7?S' );
define( 'SECURE_AUTH_SALT', 'y84 qin>]5?AF{k+[#{qXV#0@IaAx>?%*4Bl5u%M0yF(swWIhkh@I8? @zod@hh+' );
define( 'LOGGED_IN_SALT',   'HOr5x|T${iWyNhm&XPvR}gL+6,Ko6#?[y#=Hr5GEgnBO2p.>H/WyTok/s>..wjEx' );
define( 'NONCE_SALT',       'XL0F/_:?([Y3 ^Cj?h;d9>,){KCMY[Mq](|RoOH(Xx]9V9`GONufw?[4z$*Y/).T' );

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

