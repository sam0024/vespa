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
define( 'DB_NAME', 'wpdev' );

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
define( 'AUTH_KEY',         '}dpopO-eo*4leN!qg@G3JBm#J]fx1}F_4941Vj?BJhIzTTMm;DM+5O?;Wr&?5gVR' );
define( 'SECURE_AUTH_KEY',  '#hB8<t&/|*x#I=s -3*^|=d7KuQc3=JQ9Q$Nfx;w!A(wuF,1?x*qoJ(Pw#.jzPdZ' );
define( 'LOGGED_IN_KEY',    '?EtG.u3/pbBw;s4KxVq|mW2hq$I5?#5)4EOyFYpSHJy7@lD)>C=7HjV8&v9!0aE.' );
define( 'NONCE_KEY',        '_iTN}P}VnVei{~,:<pIZnejMhC*TZG`;=F--Xt~$FS[zvI7nPp/5_HYz,*]WXBo:' );
define( 'AUTH_SALT',        'iZKO+LhC@:-&Qa=`rD=W<7Z`W<0^<q1Q_)V1=dmdpB#3(<MkcQePggJm2U6f&^(4' );
define( 'SECURE_AUTH_SALT', 'c-xyL@Xhc<IEso/sdrzgk1%Clb^kP.XTgI2}%ifYT7&qNnC5oSkuNV_{|JP6w{:Y' );
define( 'LOGGED_IN_SALT',   '@?{|f9qZkWN|9_!vOx{b(UGq.is}id|dB3nRY-^@I<T-/hxUPSi9:S$.0*CIahJv' );
define( 'NONCE_SALT',       't[XSXe_`X:eR:GY@/0<=d2jTAXXM8E7aQGTe$/tB-=kzx/cD9nrG},mF0m^$]_Pu' );

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
$table_prefix = 'ss_';

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
