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
define( 'DB_NAME', 'webmedia_sparkdigital' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '-4=(;m4_gBx2XaeO%hXwP0E-hilCc6ZlYv+_kD)DgE<`(hz7leCOTGOvF*[dR[99' );
define( 'SECURE_AUTH_KEY',  'iKLp<</C3|8b/%B/)HNiCviyI.0FNtp4K(c[D&vhHI2>Na`GY=d@}|N*9GvV#M)q' );
define( 'LOGGED_IN_KEY',    '-_PhE_xqe>&.V!9:>X=o+O63NWq;=OGI3ZIRS0)10fsS?ym$;@su>gQt@HNG6BQE' );
define( 'NONCE_KEY',        'EJ@fgLpf/22(!q<fU%V,imbMcdJS~J:|OT6XLz?I/2qkyjCyhLQ[fNnOV4@a!VRa' );
define( 'AUTH_SALT',        'l)I@YYe^^MKbZSFJ.,8eqe/:,.pS$8Gxjq0K.~FPVqOqr`U7T#N&Sz33:GaUjwUq' );
define( 'SECURE_AUTH_SALT', 'Jfkq*^H9hvx2mC!GG>eHZ6$WGY;gAVo+J+()fFuHWde/iOlCv7m{gzA@|Cf,8t:N' );
define( 'LOGGED_IN_SALT',   '&UkT@d2LbXYYYrciD^`Kt6$cGA&|kKY9n L&xEqs2HMxZ)td~BF~s5)O6,u@ws: ' );
define( 'NONCE_SALT',       'R<GRcgI)4t;31*cXPK_^yH8z*7M]uw2$Tkgn#%VG/!uY|~9KC[crE@Q,e?!-j6$q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'webmedia_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
