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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'softwordpress' );

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
define( 'AUTH_KEY',         'GQ^2s&4Ee}/Td>:=I.P~ni0?F:bQYa*9HLw:N[?_>F)o$t6kbgWy^a6O:h(X8bbV' );
define( 'SECURE_AUTH_KEY',  '*NmA(27jO>t!CT:>xU}[x a<r&uDE?qr-NFb0ghRx6cL(-oHRZNvFk6=}k_/EO!c' );
define( 'LOGGED_IN_KEY',    '^iaB^i$`Pmzh/}8>5R9]Zosf3p{qnF9vpewjhIM@:hRQ^.f?j>w=vqEG6(U?BEcJ' );
define( 'NONCE_KEY',        '0A6<P9RR#no=wU+2PHq^YC~Q9d1.UY3GW.fJQl[&Ng?1Tg.Q#0Np=l4.cdkqLj/O' );
define( 'AUTH_SALT',        'st%;NnD.Y$=$e_k3E<&*@,m!.4B9WLzE(?Gl&{0*CRxRp1Vsk9!2qoI~*nf|H}rG' );
define( 'SECURE_AUTH_SALT', 'D;qt_Yj+/Jn-s.aOE|k:dv:kf`{9w>7[~l+X<a8.M14d/8y}n3{Ig)O$:)o@86-P' );
define( 'LOGGED_IN_SALT',   '3MnA/K=Dsg%&9^5^R9fDyD[.yvA=lD$EwkTM6aKr$i8tSLtk!Ycg^N/B9vtsc+:&' );
define( 'NONCE_SALT',       '(JpiI^c.SU2/|xW9yk-tEXAB s]n$RTl,=p%]g8po75rELqgR$/[oC$PvS0py_*t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
