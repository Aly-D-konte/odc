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
define( 'DB_NAME', 'wordpresss' );

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
define( 'AUTH_KEY',         'BJ{md|^<nHHI>PqeXw<LWpy^-$&iFDvLR0`d#`rq:$xnGBllbHO[u3iG|=d*t5jp' );
define( 'SECURE_AUTH_KEY',  '+RY=i@QPKbgaYpv|f:Hje9J2Yy(V9BR}w{P]D5qL=5eBwhR4J}J1)<u2apKU-TZ6' );
define( 'LOGGED_IN_KEY',    'NTh&[D$RQvv:z_(ObRiG{D<i>bt5!NGPI+k$TDGM)1QA?dz6J!bFqxK_1$<V4ya[' );
define( 'NONCE_KEY',        '-b?6om/KNkGz<;X?,`Z-Cd!cSF)h9_a)RSoY-}|4=4t([YFLWzRNF^od#-pdfp4i' );
define( 'AUTH_SALT',        'V,Y+sR64q+z8WX^V@CWR%h~>*vP~2XrXXxx3zZ|*T<?a<gwUlh5U}>(%-Bnr#9=N' );
define( 'SECURE_AUTH_SALT', ')U[-Q>40?o_kmQvrN[>r(M6fCtk);$h_,AK/M_UM}b*`W|W]/aT1DmPZ}rU,K[T0' );
define( 'LOGGED_IN_SALT',   'UwC&E;0mYIB`0!<uKi<K5qT3`enGN]]fv8!6@W37#7cAVG{`oL:g:Jn-eEm@?!#k' );
define( 'NONCE_SALT',       'ZvB~X<i=5Z fbF9@~VXNMFt<}R0mEx(|^YveDJBZw<^-HPz9%Yta<)Ka,a=Dwe?z' );

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
