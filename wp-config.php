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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'new' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         ',_gE_->2F$kY/ykiP>)Z:IWZ1,MkMt8<6o-S[+]4HU1uguqV?S0]4d.=i=zXc,nv' );
define( 'SECURE_AUTH_KEY',  'k6u/!0c+pY2,3~yK%AC~[U&eAGKRg(~QJD[HEV#Yj,Ozvhq?cAdN]6Y:hn675d)w' );
define( 'LOGGED_IN_KEY',    'N%w|R2BzbOW$|%Acy-mZ{J%^RgI$8gbY9)b1?LiAwsTjF&WOl7!{W^Yg:P$~H!U(' );
define( 'NONCE_KEY',        '%bkHD}CMo%ofwU&5CY XMWHB-DNM79^Bnq(;<dH@!`s%utKHRU{n#@Z!G.~Q!szf' );
define( 'AUTH_SALT',        'MN_Oxt[zchFaNx,zmjR$}o<[oFca5m(&KF#N]HQFU6}}`f+T{[AmP67>jU(tGIei' );
define( 'SECURE_AUTH_SALT', '``R9^#l x}t{a|y7gtsI).50gG-UYN?<pDf}6WAxI#lu^0ekQg+TUGC]kSgU`9.3' );
define( 'LOGGED_IN_SALT',   '#g,P9mQxZl*~{.DyW]6|x%75.Jz4.9vU+~-A/89%AY ~&}+Y(vn-1!ofH!!VTs$M' );
define( 'NONCE_SALT',       '~a4vEjuy7=CEleGH:2%9_`O(hBy-n=s+)jYjM+fJ7Q#ci0RWw_D**-bU3X,)5:=8' );

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
