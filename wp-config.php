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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'TuC>%>%*AmA?r.?vba/soArdKs*f?Zf!WSp1i/Ny Za?z7Lf[O&]p><rC6nv0|%-' );
define( 'SECURE_AUTH_KEY',  ']8Zd~{U[Z6WwIfEJ0XM-Q]Y#qex<xtL![7u<O2=2z=exnW1y_cn_y1/xiZ>%yrB1' );
define( 'LOGGED_IN_KEY',    'Z;9^.IUnah$d(hSluX8e=oB%%n@H@=g]ZmmxMoEY8J&xakeQm0+85J-T&SMmxV#[' );
define( 'NONCE_KEY',        '4g q=tDp]P).>:x8H} 17|tjwHoZtp?tbkJSLul%-0Tl3pCXh<Gw?Khsn#g7gb?M' );
define( 'AUTH_SALT',        'MTPEg~bg=ocy.;Er8Ih$#IKc|#8K@6!j2MM]{;c5yzw#!$22@3XjN7[SRbuOPa`=' );
define( 'SECURE_AUTH_SALT', 'm@YxfXubyC1Aj~`(>p-j.cR#mMIB>ds2%L?3XZoRIbBAs@N@R&z{&s`GgOL-eb#V' );
define( 'LOGGED_IN_SALT',   'pvIYS}1cGX<toUU!0Dy#!E`<P)%GJv/6JkkW|mNzrSiZ9 U#~(RJm[EYs -?R]iJ' );
define( 'NONCE_SALT',       'c@-l<WMtZ:mtvbG8kQ}msm :X/Gvpl!qnR1%-UA:t-<,ACF@I5d0vEuSu<#tBwOX' );

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
