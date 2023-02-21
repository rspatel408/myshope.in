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
define( 'AUTH_KEY',         'W|dD#{<^_tU Jf<s0ML*T*pnDGq`vOkwP>Jj|{h(ZLy~;bD-g-a_MaXlt+3,L^F^' );
define( 'SECURE_AUTH_KEY',  '!?XXHiv+![?FHkM{M{L8Z#QUH}|O_^T}Y7N#.aY! P!P>dh@v*8(WihQehoC,XWy' );
define( 'LOGGED_IN_KEY',    '&*2?.{RfzFZA{jbvl:Jrq)`4$rcb77&6^v-:RX_l9j29Jvs;y-)-P5U3(>jhDZ,}' );
define( 'NONCE_KEY',        'Co_.)8H}6/i7wv=6riQq!s8d1WF#W~Xw^ge:(8up!@rq=IgJ-t1Oe95vVt=h} #x' );
define( 'AUTH_SALT',        'B3rjkJ&zPXh6W,~h &tOL5~/hNAry_b~ :y}7zJ WX!FL.?KimqkB}XJ*+V9+{)u' );
define( 'SECURE_AUTH_SALT', 'bS[J@=Z-b/_%Hn%)efa-MPELGf(0%i%!B{l:2)1^[mTAP8`h;Im:MYMh`R3iS>ni' );
define( 'LOGGED_IN_SALT',   '7Qt{qFn>Awltc8$8MWK}H%pUb/O!7r=`6i8tiz4(!nztCodc#~Z&|1$8Y5%%V@H(' );
define( 'NONCE_SALT',       'l?lYJ!6l.WDhBG~EH,4Ge((-C>!6OY5[-MNebDYosqT+B4RU&L$[muj#8kJ*`M(J' );

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
