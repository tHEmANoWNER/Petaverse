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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'petaverse_db' );

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
define( 'AUTH_KEY',         'v+s+-hjcil=(]@xup*Q;dL<qT1lgzqzI5*V,}x=ce6kr>f+E`(CCi.sqT~*=Ieb=' );
define( 'SECURE_AUTH_KEY',  'Br|<r]EPkW={lHa%s(jX}{i73{IK8^m@QM3qI$^T^s.-~}!SxmUrrU?+i$%Nnn.(' );
define( 'LOGGED_IN_KEY',    'uwzdx}Umod/tYA{xIK2L7{}M$4Xd?Np?XA&}i_uh#|K=p;KaFf=`d)R1OGMzyYaf' );
define( 'NONCE_KEY',        '>=E)]i<`/e]6(x=kBd:$aG3Jf2QWfk;.pz<ehRwgEcy%5q|J,Xr{*Q>a@sjS=Dqj' );
define( 'AUTH_SALT',        'T$0+A=ek=Mh%M,ef2Dx;m@7G&_*S)>#)DI.!3WbD$<)?&d2Hr_a,rG;uGStLy*#g' );
define( 'SECURE_AUTH_SALT', 'heDL?vqJ[#CIU&~Gt<c1;Bsil}v0,Zc)TH$8nI,xSU5YYwALuqxubs071kzApAA!' );
define( 'LOGGED_IN_SALT',   '{qYU2sQ!)@?sP k[7&TcDD9,v-L>oCD`@Ne6m#1e6Q:&#aHZ0`H9UEUgoN4/p_!k' );
define( 'NONCE_SALT',       'pxK[|q54M{Crkxf3i;SR6^|K_zugnw:v3YPbkHGMMf:jes0Umv#a+S<B@<DJvfDw' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
