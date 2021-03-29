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
define( 'AUTH_KEY',         'Z9mc4^`WMo$FpGq2JTr$b]9-ZA!l.s3~aDPE;e*Q:G7p{vT++yhdwdMr&ws6j0g:' );
define( 'SECURE_AUTH_KEY',  'hePy:uO%c_idpX@i-%xTb>(j4Lg0J4mf}op[AC96@s@>DI,7t{a.D|ybH!429;`)' );
define( 'LOGGED_IN_KEY',    '#{pWo?oSxMIZ)oW.uT7k/Pc&cGBgQm7Is#(!i`I%7XdwSOe4zJs<F]nH!n;rIg~*' );
define( 'NONCE_KEY',        'vGsy7vy%/tujN}>9V3h%@sCzIeZ[LQ!JK%bRa.*C+msVAJ9o;g^3jJc$,;`!,{*<' );
define( 'AUTH_SALT',        'PkkbaIoUf+JGw ?t75iO[LY_]}C0PqtR+QsT+H-ZZnHJ:[`RZDI+8qPbRFW6(uOP' );
define( 'SECURE_AUTH_SALT', 'z,gATC5Mu$m1libU7kV?- ?DwC-$3H=h1!tBcF`l?0tq@AuPV<:KrZ;0?(5 z-^A' );
define( 'LOGGED_IN_SALT',   'u/H=LJQzI9uOHi|qFrX[!eH~Sol$dA=vB:T=VQ%Csf-): h9d{:|O/V?)J=RFX=G' );
define( 'NONCE_SALT',       '@UZN#wTMFg/o<Jj&&^Y)+ppsqc^DW?)Uq.aB0(d1hmlc: 461P|>no&E~5-^^M&V' );

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
