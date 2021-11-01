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
define( 'DB_NAME', 'graefe' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'o4MdkZ$b/e96.4FIZ`1y|Muiq|e1:)`6U4-^.:X70nua}{_#bHb%f%FS5,c^)T?t' );
define( 'SECURE_AUTH_KEY',  'B3)-#m]#FiYvdGN@_kOd9sSD<G&;ps0]1X/aVwn$f/,Tudggk_LnVR]cLF{Um!3J' );
define( 'LOGGED_IN_KEY',    ')j47ydd1Silnp^DMN~!@^0<-)<:p~LVy8e^p,9y.DemB9|{ vk%;4Q>{e8rfk(:K' );
define( 'NONCE_KEY',        '{%m0T=bi$#|A42qk<&dy;if D+s?Ep1j8B|ZWY N:~0g-Eu(5<QW9|8r)-ZO2/YW' );
define( 'AUTH_SALT',        'ls6>:VLG,Wz^Ke4,~K|cbg9aTViQ&@HXJ7w|p[y_bekK@to0I}|LJpDJ4^`.f:DY' );
define( 'SECURE_AUTH_SALT', '7dgaxaf6$L;6gz::((:ouVNaVgOF[}_OmrK.C<11?tuK]qP]HU9c/kr}7k,~&#v]' );
define( 'LOGGED_IN_SALT',   'E<c`3wtpH<v G]GvH^k7|lf=E+N*Z^8?C@c&&p*c)#&iTK~mknLwbGIZ0(2GX(,Q' );
define( 'NONCE_SALT',       's+vKPYAza6Y`mu#oCe/6$dal% wDqeeVC=e4I_Q 0[06K;V0U9x}{fM%z1U:>{]7' );

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
