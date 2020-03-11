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
define( 'DB_NAME', 'wp-training' );

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
define( 'AUTH_KEY',         '<aQc(vT.+;16]lu`J,lr%4m|?R}lV!x,/#SRM)vxi,ecDza0&0Xct`$#TUA4I$aj' );
define( 'SECURE_AUTH_KEY',  'XIICXnJgw#3u(!7?yj19q!>1> tV9a#A.wAe6:rLaO3]+3i_Jlo/~74+IrcU.y@+' );
define( 'LOGGED_IN_KEY',    'Iy$! =$_TiIws@Pt8.jpRQPJ:Mt2)0CB._#@v+S[th(4knKh#3{Q3?Yu =2p}bT)' );
define( 'NONCE_KEY',        '5lR>x-J9FQ3z$tBKNIUYBlC7pK8N^|,o9(j~,2vf$Zw(**7/5&#^j;fM7Ecp2WN(' );
define( 'AUTH_SALT',        'p2zz5,(bbS8P-6Wqh4:KVaMC2cny0+RFHV5(EIH^4BG6g<bpW4JUT}N:.#75MHFm' );
define( 'SECURE_AUTH_SALT', 'Ssb1G8=lJV]*{>wG#icP+uyK9K1|_)}?<KN}SBNk1|<HKR:_Z<?sIm&nLk*g;`4z' );
define( 'LOGGED_IN_SALT',   'g{n?3l8{u<xsatTyfU(sr#;dMFv[^SYqK<Rt.2K@{ouT#.r~_B0r/aeLa{]<HO,Z' );
define( 'NONCE_SALT',       'X3RKDWJ9}u+Un9;3B%]bQWv^Z^1:ds,l=Xg6GXBKX9GCw)SNDzS/&sJ<LhB@zH11' );

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
