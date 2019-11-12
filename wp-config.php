<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'bhubon' );

/** MySQL database username */
define( 'DB_USER', 'bhubon' );

/** MySQL database password */
define( 'DB_PASSWORD', '4GIdtz3xBAilKean' );

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
define( 'AUTH_KEY',         '!Ty>5E)}?Sl%5{r8Cd]622p#LAv<-|6mQ@{Nqii`AR6e3~CcH,;T^rW,)90![GbK' );
define( 'SECURE_AUTH_KEY',  'C+r^$vR]vBkiD$!1[;|=I!ep9]s3hp/+IH8&/OvE!$hs@b;?n{YEjx+MA!A]r8HE' );
define( 'LOGGED_IN_KEY',    '/5h Txi&)qxBMXMQ)g%Yc<T$6}A&uF7*{K;:47ljfviC`jX+|KKVZLbuS=?Mik[d' );
define( 'NONCE_KEY',        '4qP>S#u(o=arVeBt*h;-!1`F3rIktOoy WW)y6KBp<)eKk_5#fc^JucRc/#h= @ ' );
define( 'AUTH_SALT',        'Ks=g*_T`jgZb&w_H^!;aka%}*ZlY%XS<51EF6~PvJ6]R2tUdRP9H`<na+Eor/}iC' );
define( 'SECURE_AUTH_SALT', '[^tx||-{Ep1&I:{{YHBy=IA8ct_a]wDBt(je]!<wSM1n/Cit&[3Y`JG)W}#CpFN5' );
define( 'LOGGED_IN_SALT',   'H?Lpb1W2jUf.[7UG>@@fL}sbbqMD)>wQObdEqvVeMv%Z!,HNf~$&j{D</qkNmUNz' );
define( 'NONCE_SALT',       'tqT1*]v [lKGR{b1z>:C5f)0~S5!1[IqQ2VnPDAHu$yq+K!ntn%56w2!+Hkr1[Sv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bs_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
