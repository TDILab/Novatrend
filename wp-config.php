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
define( 'DB_NAME', 'novatrend_db' );

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
define( 'AUTH_KEY',         '~Q#j:)*je[7T #~!f 8BNj_ 8<WeZ3$&m/ZLjUu=@5Zg<#;,q:XR903VGWI~tlhw' );
define( 'SECURE_AUTH_KEY',  'n2g9h|=:8o[gD{08pi(bQo`K1k}5n_;h4DRx9h[c%)rEj20 0F>Yb1={_GxfGT2~' );
define( 'LOGGED_IN_KEY',    'P__rer*.JjZDy=15J}i/lsi-DNiHfS)&NC~%K4u9?sF`%cYZ03em@e5#S`7kXq-?' );
define( 'NONCE_KEY',        'y34D{r^ QJE_9k2SS)ipEQmmPD}|:$8S9VmA8iy/wPf+a)W} THrMc{<F(uTZc-E' );
define( 'AUTH_SALT',        '1h]c29|e1b+gR^4A[h^;,Cf!AvGTN]c2h2?@/${1l)AQ/XV]V7!Hfh2YDhNV71+C' );
define( 'SECURE_AUTH_SALT', 'A`lWS&Xg68[oo{P70>L8Td{I&XYY*yr7,<VwoF;ueTeae323dZ25Pkab6~@6dos&' );
define( 'LOGGED_IN_SALT',   '$8F(1K ^uZTqMIC>L|X/[Vt3:J1_m1ymrrIUX=`ZP kF6.`7%7+)Ds~5?3>mMTgQ' );
define( 'NONCE_SALT',       'nOw#b183j~5CE55t|Cl,E[km$wjin,Ys(;+d2jY`@X2i<qWbu>6)c18(L&Em57,o' );

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
