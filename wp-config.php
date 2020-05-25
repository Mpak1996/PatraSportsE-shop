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
define( 'DB_NAME', 'eshop' );

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
define( 'AUTH_KEY',         '5ehxszWx258wDgICYQhN9/C..no8hirgo-jaZ,fF9n=@S:0(Pzr9H*-M&46?J8L0' );
define( 'SECURE_AUTH_KEY',  'ZE`8Prtn;/toNJNOe0iqR_X)%_cN*iAHI}CG5RElKE=U.&.(:i>vf8iKanR;QHTC' );
define( 'LOGGED_IN_KEY',    'z?&XT&p:nwD|lxOFF$%qh(J![k7IsLEEL(W|6#J+2yY%mKJITOu~6&Tj/be^~~z]' );
define( 'NONCE_KEY',        'KEK(%1G&sD JnU1eORdfoL?3u=@w=[4I&$G$ vTdigWQM|Mh.U G@[X?TU9OoiP}' );
define( 'AUTH_SALT',        'omtMAFac6Z}c0J,F6?#n1o|5|C%mLePQ61EbC&Vf*`@2uY*Q(33--aSH#=zBZRZ^' );
define( 'SECURE_AUTH_SALT', 'Ce]<Yp-}4VH+9YA#h=!&(on5>YS8}d^RpcE:j;GVfnL$HzV=66[-z}?J[R[Eo7[O' );
define( 'LOGGED_IN_SALT',   '#p) &w1<qMkAqnH:9!ze{IHnWq<IvS4/te~Q%AH[m_U=s3rN~^NA1]:-ok6J2>in' );
define( 'NONCE_SALT',       '6;ckIJ=0LMRjSSk6#pH~7(.@`#TnC<xDz49e$4qS.2%zKo&=Ol<uqYCj-B5zn+GQ' );

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
