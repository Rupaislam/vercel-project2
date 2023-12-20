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
define( 'DB_NAME', 'vercel-project2' );

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
define( 'AUTH_KEY',         'CJh9-zh03_=H.b[@@J#wb+M0Re*ufjD+^~MQ]s]bX(HLHw,nf/S8^/:aZ$K`Y7E{' );
define( 'SECURE_AUTH_KEY',  'Fibe8@{Wwst$9APu{T-]>)#HF7v9Gt b)lQ&w1Y!,F~d*t~;(O =?X[P2*`;x1,P' );
define( 'LOGGED_IN_KEY',    '&yg,]Zq1V#u#i ^D AXlwJ@e5$)d&@air*8h)#;Yo=6Y(KmQjJPXB4CeX!#(xe`a' );
define( 'NONCE_KEY',        'ts*APOla 3Y/MjOw(&=aU2!a&KXEo6A+-5ay`gRwF>nZ(VOo,Mju;/`*MPnHw8$g' );
define( 'AUTH_SALT',        'KSw2#XBynyj)U3;5io!M{yK`*-zR3Ex1$w)H>64q|aZsJ)0Jhxb^s$cMpV+q%*Un' );
define( 'SECURE_AUTH_SALT', '~@$O=sFh)[}ksp&1P}7JyEijNHwAOV?|*P80$|mRsk+/fSnn,:!s$E7~s)52=?I)' );
define( 'LOGGED_IN_SALT',   '=P}D..Y6$xg1| 4!ZY/J,JOemxq6l;@J0s9[l:qb&=X-w/v/hDwm#C`UE)s:.O(=' );
define( 'NONCE_SALT',       '!RkO9QrWShLeo%F+5;)iexv7cFZ.Ay4X[WqJ=3i3YQcryQ22f^I<Z5t@5pm|y$GI' );

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
