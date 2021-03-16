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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Fabrication' );

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
define( 'AUTH_KEY',         'i$`oK9W9%Jt]-67I6p:W`l#Tz:p/js^jHk60db3A|po`_^#7Dc>GOJ/CscM?S..>' );
define( 'SECURE_AUTH_KEY',  '_/7xkV`/,::_Ew(`FQ5X0,{=GuU/!cjS?{_%!c>v-sryP/6u5U_>|#Zln4<+Tq]N' );
define( 'LOGGED_IN_KEY',    'aU%(;da^j^D)QFl%CD-o1nCoR]JK9?=l#//J4QPgsplY$`&.x8 p|oUB|?{vODLL' );
define( 'NONCE_KEY',        's>L%Q@(+yNYG#!9dTM[!Vns:jigP-tvek~M%d<)v!_A@RY2F7w<Dv,1Bo#It{ 18' );
define( 'AUTH_SALT',        '(*))E/_}Y.J;ViU1oZJ`y@S[Cucoh)#0(H(cqYmq`zcP_{C^cq0Y;gL~+|cmqSPW' );
define( 'SECURE_AUTH_SALT', '0Asvy<ERk^0Bl(8D5x9;8J$w4*T~Tp6t/QE>O/e;@ctq2A()=]9j^RL024B0PJZE' );
define( 'LOGGED_IN_SALT',   'nO ^}rv765ffPmjaF}[8Qso~jzpW)WB5hT%~ToVR0I:C/wkS8;pW4UK`z~ewyvhF' );
define( 'NONCE_SALT',       '{o8vVmueW0wR[/W{o$0L<5%/I9+|A>;b`3Fl`69houQq2P_xo}u}XaX/^5:`Snu(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
