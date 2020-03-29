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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'su!b]|dfPvLy4PzB%MR7W#@@d*`|ek-qtKpO$-;O!rEq^59t<+U:2?A^Q`pqzOa`' );
define( 'SECURE_AUTH_KEY',  'Fl3C~BXZBe=y~e~B<)6H>r9FGJ{eIs7gI}^#rJBs&4|h!S1nyBBmwNv;*%U*#yn1' );
define( 'LOGGED_IN_KEY',    '0PQORs0&T??+*+}f!Jc3=09FcrwIbTC6H[IB+sAU%*ttJ)sPxZ(|O-s%.h2SwA,#' );
define( 'NONCE_KEY',        '2y$@RsrAT.KnBq(/^pw3tO<!6ZZp?%+(Q|h{KMj3xb<VTDh+kDInY<[]WhU*Oue<' );
define( 'AUTH_SALT',        '8hh]muFz6f;eTCo bO0E;iMLS9]zw`pUl[*W%gOoMSHM7W*zGq?eu`w290~_L;(.' );
define( 'SECURE_AUTH_SALT', 'E{-Q/o>v.V(z3tPQG#u7viQ~Hpzo[t?wfUR#BI{E2y=1xdM$^,0^<}:h}9)~dOXr' );
define( 'LOGGED_IN_SALT',   '+=YlAW7vTuN3rFi0$?{27hr?BDNmTG3%tW%1]8/_gSYm4{/7{Tg1Fwx;,w!$pp,P' );
define( 'NONCE_SALT',       'm=2>Bz,GRZ3`cS{Uh~!QN#Ol3ut<iJz(Ula(i^*[denAp:E9Gsf:$,1|vg@FL(ae' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blog_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
