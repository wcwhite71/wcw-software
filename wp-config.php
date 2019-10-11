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
define( 'DB_NAME', 'wcw-software' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '!Crombie5231' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'fS+nOifSrj=OKAaoN6yXidNgA75rJgLnayG!EL1R#Tt~,|$.]F#*-|<D+P  =>A-' );
define( 'SECURE_AUTH_KEY',  'C@?iDWskt&E@~>.4k^pqOcpOvy*<f[zc^Ozv}BQ%Z,OdzE7Ku/5-bhfSZ$qBNLQG' );
define( 'LOGGED_IN_KEY',    'jc[}$aWmmjnvnrq,?SgHynMt,|qB2vNm;`-oV{QgWx!tR{!jhT^Vxq3YM$J2V!*<' );
define( 'NONCE_KEY',        'c=*#8F4K$|t$|//TF]E1pogg^K5-8nP[XoE},6aT9j}sJ-U1#TXlyNTH^`Ik9EK#' );
define( 'AUTH_SALT',        '2fOGjN@VdG,b@aBaJsM}zy3ZuYy_Q~/Fa6$de*xqK0R<dn7XiZ~fBwA8@T$;aciw' );
define( 'SECURE_AUTH_SALT', 'el2nLPrb8,#86>9bT/r9aq@vglOK%`BsIO:;|sel:,}32u!mZW]c+/f5S[%(tW_~' );
define( 'LOGGED_IN_SALT',   '`VmRphB!Xt7JI#b9Yl18.D)}$Gn)8FSjtu.T-FCaWm{qh~z&XvX=-p]tCI7GC4+e' );
define( 'NONCE_SALT',       '3=#%Pc{KZ}$7wSX)a7>]?rEq[[<-|_7I`A+-0?!G:;&i61dtJTl8RYT7WSRH{#zP' );

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
