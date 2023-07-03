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
define( 'DB_NAME', 'kurabun' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '/7B~plQ6YFo#+LQx0@S{GftZv`Jsu+&W4x+<+./&5Q+4!UEr)jq)[oTkZ l;q9:J' );
define( 'SECURE_AUTH_KEY',  'mA$Y1yH&U}5Ib*BL_~/wtzQBVeMofwv$7Lww|,X4e!LO0HD^4}vnA|t^^x8p)Q4T' );
define( 'LOGGED_IN_KEY',    'v_E@s#8fmJC.>4XKR8BD9 H?DLvXnxL$`uvc;[I~1ab|l)d#Ho>CayV#H0nATbOz' );
define( 'NONCE_KEY',        ']C2S6D_))s&6AH8iGIHNzJcDC4E%mfOxfH2?;03}tYxQlJDv_l@Ts8MSTcEYYI0H' );
define( 'AUTH_SALT',        '|9SCZMmPM-*Ep9,y0.j9h`]x VLh2}&vt-4_)BkObM)Dg<*E:o]DMJ&G`kx2u~hq' );
define( 'SECURE_AUTH_SALT', '4G/lGiIQr9rz0hp&@p=7sxn:#v}C,8bLNE_}rJN%VRzktr_72Dr%G@nduqFW@2-P' );
define( 'LOGGED_IN_SALT',   'b!Mk=2ZVj,Mw2#hIR{bC[+ERS?R@O)a@;}|BiB(aF@{`#|)k; WXqV2+T]Br^X|A' );
define( 'NONCE_SALT',       '%I^,PD$>-GHLf.XT}8AoZE;s3nK(1u}y2qG,MG*8Gkf`%so<.Mp?-l}S_eJi[no{' );

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
