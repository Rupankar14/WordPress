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
define( 'AUTH_KEY',          ')wt>/pHo ,;Z6OXHFV{Aqt_4k 3[] z(~u:B8jB*){hLu;53HfEBJSUS;N--:SCQ' );
define( 'SECURE_AUTH_KEY',   'F&S sco)kTTrC.lq~.#xEWZp3_EJPgM+T)lu=t,1ST`[ {9O@_wZJ|/LLJPhd6=L' );
define( 'LOGGED_IN_KEY',     'MvFta050}s}^r&DfH@v$+FeyY^Wz?F;#^T~W_s=rnk4}.yvd>PR=;^kLFEG+{j?I' );
define( 'NONCE_KEY',         'F$UnvOQ Rs,5Z1{8M^(mbi-8sAM{CD}}v!T#9w+,rTNf&j]|S6d{|@3XV=u d>5#' );
define( 'AUTH_SALT',         ']us/ u81-*!kG@/S_A4BKd@X= YXROcO.Jm.rRY7:UIq$TJ8PR`EgKK~#0`e@E[!' );
define( 'SECURE_AUTH_SALT',  ':0d d$F9HN*07,_.|B8Gqup.=s#8amxlws8b95~iX]4S<5]Ubnwj&yg /A#_f9_@' );
define( 'LOGGED_IN_SALT',    'ubEz01LUuPqsq)i)r@x1^!]ra0%ar#B_0,P!&<T!933CRVsnT,>kC6AFeiu1|-u0' );
define( 'NONCE_SALT',        'w1]ct7g%@{4TWjh3zi>L2$T&+5.z;/sXRde$]Z@&|*yy=X%9q2fDQ*E`T.HulPt%' );
define( 'WP_CACHE_KEY_SALT', '9G:jVg[=,~s4_hA04o!zT+QfpIA{Ny&+DyQGy`* X1_r].?e3^?nLS9DEG<=9=Zb' );


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
