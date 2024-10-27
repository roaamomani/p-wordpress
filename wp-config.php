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
define( 'DB_NAME', 'project WordPress' );

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
define( 'AUTH_KEY',         ':c}4qFT*<P]MFq`1i[^ HG[8=N3*X)pWTskPAe~z(+&3tJKHJ O7zueo,tGLXZQ~' );
define( 'SECURE_AUTH_KEY',  '7Z:`%qcl,n_DY21VX_e!d6}v#kk#{Iwz{$1!N]JKCg3znCmLR(xz?5-(u^yaS3BJ' );
define( 'LOGGED_IN_KEY',    '[Rf~LWTR9$RoK6R]K$ :tY{O}Qc(Zqa?@d/JG`xb$6Bv|68Epjfg{6<)aNbA,_Q8' );
define( 'NONCE_KEY',        'jlYX-ry>HK]xyS7]0y|!WSt.#?UAJ)AnrQ-k>=n2mA[[sQ[bq#2.b6J*(0YTSd3o' );
define( 'AUTH_SALT',        'i9mOwauLCP+tc_WX3cKTIh^Be37PvSlIel`s6 j]/[SNHyh~#Qi,y.}xMSv8*$)K' );
define( 'SECURE_AUTH_SALT', '(8VxqM1{_^pV~E?NPYZ;0yjX.Fzs3dKC30;q}|>j8~yR>Wi]tAO2IWdxRW0D10=*' );
define( 'LOGGED_IN_SALT',   '$M{k@?w-DzeLwiyY=/ja*szh,2Y$|`:2@ZX5BfP~bmUP35EJH9c~pOL]7rlyQ8rd' );
define( 'NONCE_SALT',       'JY+o`G*p-X2Ihk=N[(|<98>%*@b/xp1qtUz.DtpX7lRT4W+hp&08g8$)x6BzoTGT' );

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
