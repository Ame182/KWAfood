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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'KWAfood' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'rmJUd(K]63i0cpou=b~6Ixexj5:5QEnTe:|B&FjlU;R5;pVpTh77:#W 31^!BB5p' );
define( 'SECURE_AUTH_KEY',  'G(LRc45IK|i|Cda{*Q:kW12Qs]=8Crwqub8@T4}>ZI)6%cszq4xkG%%:13C]YH5-' );
define( 'LOGGED_IN_KEY',    'j3qa&Y|hVciXoPdlAP#|iW;X+e66Kl(;rI4XwGeZPEg`lL:Y[CpN8|=|J&T[8m84' );
define( 'NONCE_KEY',        'A~Jrd3BBW8CmXr<fTZgXc2}0xKCc{RcbW<=!iBg1O89>m_Zc~1SNkJv67w=gXPvH' );
define( 'AUTH_SALT',        'Fw,O.1pmj3[R-6$s;ki{FA8M2XYRd1X7D00@jl5GUYf_]BLMJ.eG!DXwLF#9pq$T' );
define( 'SECURE_AUTH_SALT', 'l[kIA3%e{4T3J0#`]5q4@sP2g8tNQKO=I5~ka^m-fw wjbQ>X6E{+Y1fYb9xFo-q' );
define( 'LOGGED_IN_SALT',   'n}*VTQ_j|[YbWP/bF8USr;l@&VN1PgC$<Yt;b<=Zhedeg$G8MmRo!sRxz_#Es-S:' );
define( 'NONCE_SALT',       '#~|~aWIru<bWByHEu~B-;YTIum]5oo7FNiJmYY~9dY1Pl_v9y~5hAYKB7h3`ga}V' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kwa_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
