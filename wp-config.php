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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pagolmon_db' );

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
define( 'AUTH_KEY',         'd-eWa&F|Z0HQ>c?+fDMGu7h_5~4lHxysN~+%1^%1`w?qJz>EwNq=N.d&kmwc/M$ ' );
define( 'SECURE_AUTH_KEY',  'v{/z*dTjdN``3{,GeIcF<mSLh}|^{a0~%O`XTe9QI)j5.ao@Y|)3 tcgHY8h:q)O' );
define( 'LOGGED_IN_KEY',    'obT0d~%(9;;]P,*xr;A()$G2,:xhElZ:CcI~ n06fav7J,#E:?k[KtW{0(=@nroF' );
define( 'NONCE_KEY',        '>p1q]}[k5B*-~a:@pUz:%/,s+|cR8|+,r@#nr)6(F`/Bpqv=ztdvRyE^:HOq<{tU' );
define( 'AUTH_SALT',        'Gi&G:f/mf#l&h5B6/]rmgjrZ: rY4OOc?LZn?iLqGmR[eG$jY:f}6,@0Z<9IBCrS' );
define( 'SECURE_AUTH_SALT', '^7nYCgaUp9r~>s1#nY!Yx+Z(P-52SHO*:5x.WykVGsoeL.7U]xmJy~y%2jHx4EdB' );
define( 'LOGGED_IN_SALT',   ':i`(gyk|Z/:Q:3V|qAr8Q_6L.syOr7$,k/@2.]cQz(a)=O:J2kI%_EA~*8mPGZn9' );
define( 'NONCE_SALT',       'LKGGI|_**KDDJu.Qc7[k645cUdF{ 1~b.8F5c2r_ry$cK>*V!_Ugc[a.z^0(3K?Z' );

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
