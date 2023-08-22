<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OVG}r:ILdH=>`7>@srN1/RX]4cq/f&U7-nigya]i-i[;#j>i::2QGcW@Luw<I`Vj' );
define( 'SECURE_AUTH_KEY',  '(snG9_>}nksOBaV|${WCYCcZj2=+]NQsMyiI;]h 6IuJnov4h+A{B;Ar>@5v<`%|' );
define( 'LOGGED_IN_KEY',    'qmle1VWx~kiaFDzss*Id@fR Wh0|9gzR.F_WSy>6MGbVsWI<[vz6>e*Y]>OV.(^f' );
define( 'NONCE_KEY',        'C1f0b]^8l&1#795 YR/bv4!`Z#(y!u*jDN9uOU.EQH!OV|3a8bHEQ$X;jvA%F{[S' );
define( 'AUTH_SALT',        '!fYgdJ>{n)-TS6bjBqPL9i6n<<_al@^?RSRF+v,Nf//!xD}HlSyoJ,hswKo5AhM(' );
define( 'SECURE_AUTH_SALT', 'GIOCH]Xx}p=CRf]61}FhY^vA<HI=a#Z|yhfh0gPwv3@<P8/qhSJ_S4$2bXvkx:|&' );
define( 'LOGGED_IN_SALT',   '- D3h@w>jmwzp1,L$fHqIS6RXEg-v1!Ya-&%0C8I MwH,9o?ZV0Y(!G_-KMyOIk:' );
define( 'NONCE_SALT',       'Y<79 C,1rLxK+@AL2$c}%J%y`W`{b<G&=k.53]&;w6N(K|T^*%e]L>S9]CU(m!)M' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
