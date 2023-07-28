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
define( 'AUTH_KEY',         '{GQ!reaq(Cw6WMlM$sTWroOP9wuI/y^JF~o$89UFbe9h,c:ZuSEp;K)Fh{(lnwR*' );
define( 'SECURE_AUTH_KEY',  '=p*[j(x*GJ_i)QveN{_Uic)*lDP6L0Th;W6=)1j9+7*:xrA_.6KPqrDf2jCN.zH5' );
define( 'LOGGED_IN_KEY',    '~SY433J#^-HI|E.JM3-wO/HVAl$Pp;u/X~PgW5Dc)4t.;5cr/JK`>W9,eU>hZAjt' );
define( 'NONCE_KEY',        '$GxGJb$a6&|3JMrg2_-daE)%kgZRpUJlc9zuw>e`np_wTt0<tufrrPPIt!pNH%hV' );
define( 'AUTH_SALT',        '4Kr5y}INSQc`}9sobA0s]{M*_./rw2t}t.<KhcZkBVXM3Gf-W;JW^TR$|+|0bjjF' );
define( 'SECURE_AUTH_SALT', 'CcgW;[i:6w<w.:o3@qu#2GL6SCgq).j#i~?|~lVB5NXvJ,)k_ANmo){ <nV`ARa&' );
define( 'LOGGED_IN_SALT',   '82^S-W4{On!bdJQ>fC7{%wF}xaqA>k$-4D_UxB.I.#j#IZ$gxBy51eAMuK_*)9!?' );
define( 'NONCE_SALT',       '7HIeU2qha?^P8VR/ge+UoD6C<pm^e$&8?:3iHa}hE;*)r; ]uwYEX){Ou.{+qWZ;' );

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
