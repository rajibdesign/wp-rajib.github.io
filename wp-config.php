<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-graphic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sOhMb4mI{ @._Ke8`UQAMfFs2+1P4ghpO0aYx-*1M&>23sU_4FAeJjsHk%m,6(OG' );
define( 'SECURE_AUTH_KEY',  't>kCae^VO;8wh*K:CTw[6=c!2%t3MO#gb7.29o6SmLcV>A-wGu_r.&|=3LR>/;oV' );
define( 'LOGGED_IN_KEY',    '!+KynE8&H}Lg>kd)xs`%;Qx^-rLZWge,W5(XJ8dwUy=w4$)@3g8f?+ QC|W`g3Aw' );
define( 'NONCE_KEY',        '()`UTEn(hW:Sq*O[N4TeGqbZRKBE>x.6iD]%o}vF^cE*FR)]Qgh5pBT=!SG.hK`^' );
define( 'AUTH_SALT',        '=Kza@dM40b4BYLh#oCN}MP8+i76IAv$pkH2`)[ETsSlez^v1bvj(_4WK43d>14TZ' );
define( 'SECURE_AUTH_SALT', 'IT ?~{R00L]=7OfMKPetA|89[+kNv:vss-7#};C$eHK59!^S(9q&[@}cM9y|6E&O' );
define( 'LOGGED_IN_SALT',   ': U(;H1?=8P,)euTrJ# ZkwzBC$H1;xE({.j#Wb:I#6jua]k|H7+Lw6X$AEr&1G9' );
define( 'NONCE_SALT',       'd$Y<8Ll,r4|gl6i?yxN*ZMqrMm#{KEH|N|%zJr]K{07L7vIyD|/d+.$Zi|b~P)sx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
