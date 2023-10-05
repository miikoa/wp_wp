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
define( 'DB_NAME', 'wp_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '(;Tz_zBD Jk0xO|;B=`*0k6_g<_[1l>e7t,Kp+:8MJXf1z 2N^C1z?IlrX!}FYb(' );
define( 'SECURE_AUTH_KEY',  'x<N|3l3FF(gTn$}|}2>P#FtFk5{Q<[x%X{/(4PM]led}8l_&M3czl>cU~7Q@HAc]' );
define( 'LOGGED_IN_KEY',    'X.&aTzx}C vql;?7u!&eFf33NcLKICYl@Z.HlogBV&?a2RK$lhJc/m+~7h;#u{hg' );
define( 'NONCE_KEY',        '(BW>;`#e8V4mPtb$m-*wq^]gK+c}2XUDXspTu#NVZNqNl$r6R(:i[WyDWS;;Ttfj' );
define( 'AUTH_SALT',        'Vi#[.~=Zz4YNA1]Y|Q]msupPAIp)NT,KH$LAkJ:qJS$_^OaTk}_6;3*FnT,s(!c1' );
define( 'SECURE_AUTH_SALT', 'q(SIv,!A{Gy o~!c(+<%olwM~*LI=r&1^+AGlUt!5lrFlCUK)B5+]k!hP!c_R/1I' );
define( 'LOGGED_IN_SALT',   'VJ1S117,nK.Rz7<4`-2jY}5MVniNFL{QUPqla1GX;XFw2S5%*Yvh1&;4fB=KI^ b' );
define( 'NONCE_SALT',       'b-OWgKC+0.9;2Joqyc8z 0Y0EaHZpt%Iz(1E,6,=mMi=_O*:D-g9gBi9.Pn]69V*' );

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
