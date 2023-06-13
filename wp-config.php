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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '?ryiN<#`c`G&Gh8bm=@<m{=:v)99%:q]Pz7%z-SRE)xQ=V>QmW5r*$Tg;GA(p0YD' );
define( 'SECURE_AUTH_KEY',  '1]p[HjPSbNB:Q&S<I3UVt=WEHVjo0C,/qfP0fnPm4Hw99jon;:Q0<}ifC(V5~ fy' );
define( 'LOGGED_IN_KEY',    '`Z,^>1<<c%mJ7rBBW|&/&)IuzF0.BuT+N_ug3/_-kev?|([]#uH{Us+jAul~U?g&' );
define( 'NONCE_KEY',        'nW<9RGw>UVMJ.fGQxHVYUY)K3V;4?PX6*faF<@O`W9S0n_0dsDW)ISy,eC8&BVlP' );
define( 'AUTH_SALT',        '$qhSc>:qqn0MJ<I%4PcbSo#u=nMu 9bWJ3LOZ?w/UhT2b_[2IgY^JZpCu{sxp=a.' );
define( 'SECURE_AUTH_SALT', ';!w zkPp?m}V}9](GMD[R;I1cb=!~?(SxkAEp5#N.Y2AM@#No:q8?>bL4~EumAg;' );
define( 'LOGGED_IN_SALT',   ';H=J1 jAv#{M17m3~q^qRV?<$x r[?h.<.Uu-=e@S~}`c2z|2 BKBj^N#7sa/>r]' );
define( 'NONCE_SALT',       'Nd ,xh%9-#8auvm:#Sutb!G-S|r#Pn8F7zXnyh4BJdsYEMf.oaQE43Xk6l?|Koq=' );

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
