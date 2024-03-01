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
define( 'DB_NAME', 'alfama_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '@>YKnY;U8lBJ#}l{hWkoatI2X%/=QyR.*=Lj:D{gM>[u`#=?.HGE{76lesAzkv4|' );
define( 'SECURE_AUTH_KEY',  ')|+D}s(YuEdZyMW@=;H,)1KngCF/1vV;>.]9eg*JBUpN^Ni-qk~ch7)W2WJ0Hoxv' );
define( 'LOGGED_IN_KEY',    'jG#5z4q7/vaonGRN@f <%M-0d+n0hYv|8`4pn<7mRu<u6V}EH]t<@z!-C`Y>{Ua|' );
define( 'NONCE_KEY',        '!uQt<? |~<4pMGp2dqmV}dEP*/H;|=;w9q4&]LWdY%/$3e&F5 4iZ69@~PmbmpG[' );
define( 'AUTH_SALT',        '$R} L9wcCy=%`JMc4am<y8OAQ`wTx!Wh~m}hR.@S;%68wY7_5BY?~}u1-i{/9(=$' );
define( 'SECURE_AUTH_SALT', 'arBY4MVt)1Wt><0U5V/~[g-M7^Ryr0B~F{#Bvrjhqw=rn!E[)U#X~ kMR,39dGGd' );
define( 'LOGGED_IN_SALT',   '9/c_#Gd{*&N)TiSuIVLS]?>A%,@6y`8|lcc7|;V_{CXKVDH>+lpnDi+QoAW]N:Kq' );
define( 'NONCE_SALT',       '}/tAABu*9Epj.lNvC/2^Dr+NE7.Rf@BMC#=o)mkc7~YfpwS@0Ll7 -Yt&;ZL),ad' );

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
