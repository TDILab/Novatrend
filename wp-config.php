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
define( 'AUTH_KEY',         'L(&BuXm ip}JR5W>fQgNZ,_2U*xOBKb<dR6!)NrtM.`bXyKW9af+Fw(*]C8PxQZ[' );
define( 'SECURE_AUTH_KEY',  'nn[Huz?Mi^>ZX]g![PGca;;g[H5.fR`VY(.R3^o_=Wr#>OSDp35:r)r!5<bw>g$4' );
define( 'LOGGED_IN_KEY',    'it=)T1U[]4z9U-sB!=~Bh|]UI)v$:!`IIoCXYyd#7|QN6ixK}v<>{e(t[,K5ebo*' );
define( 'NONCE_KEY',        'uguC8P.=R%:f3S!V{jW1Aw81IR_`5WO)Q}V`$c^av(H]T LcC1;[fIjm4th<C/E.' );
define( 'AUTH_SALT',        ';m#d!:y0l}[,.G(/cr1&[e_Wl?w_Y*2EU`#ambHBiNUu?bZxtg=4{_UmD7Z2akP-' );
define( 'SECURE_AUTH_SALT', '`@6[}zZ:(O]d`6L/cIOk,,9yGeu1u`=&<7 Z},W[oA1&!;[Xca-p6(n!Y9ZWLa|&' );
define( 'LOGGED_IN_SALT',   '+*VcyO_>:t..ak-U4g,(BU[u#<H_jg%<?p*7x}0)Z*pb?@cgK_e}{ eqw%<+vU~5' );
define( 'NONCE_SALT',       'r,_[$nn4$Kit_c_(SQ8~8_[:s@yL1kEQ~yXQL`/&X5w6|k:#h/%Fk&_SI1gEoBN$' );

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
