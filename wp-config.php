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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ')}H$Mxf~ANZvK%N)&ii7fBr}&=CD)38 $e,Z^33Z^!w]E 66a}~!d`4N-c;$FgK7' );
define( 'SECURE_AUTH_KEY',   '!r9nK0BY~V/Y5,GJL?reD2U?Og<YEN3S.=Xc|Y0u:>q.UqDsWL`epA4+s?#66e~4' );
define( 'LOGGED_IN_KEY',     '1/R!)eFC x[8c^CbR5SGhFB`f7kmC++ UJvJM)hMHS!Zii(Q#?P~&4Sr7iKEf3>(' );
define( 'NONCE_KEY',         'X_|FOK.?EXA6[}+<3o/Z*H#P:qLl~$DNKR:ELw_=l#:g?7SsRA~>qqR=@_>CrU;>' );
define( 'AUTH_SALT',         '}uh`5avkg()l,8t/0t;N3P=zPSBE1]%:K#hI+Cb)k@&f844<QYPCdhu*88f9pdEd' );
define( 'SECURE_AUTH_SALT',  '%F7C:Ix:D{qD[;:t!gE|*!8TN_U#4^o^o3o1~gk(My#8l/A%<PN7XVi&$@z|Z5_t' );
define( 'LOGGED_IN_SALT',    'e2XG(dpp2R|CA=-NU>14?flpy-WQ!6;Rw9TU FX)OXWlEzJX.Y+bWCeoF6bPAE< ' );
define( 'NONCE_SALT',        'K{4 hOX:|._3hb//{66T#$3F61g[WuAjEM0$07%ME|&Xa-jIKsREY@VUDk; >P)c' );
define( 'WP_CACHE_KEY_SALT', '~&w<S,iAQdcru(SF6hk)GE7$C-&8Bou>qmE`P0}(Vv3;I#4qO$W9^Z|cYGTE0GJ,' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
