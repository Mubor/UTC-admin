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
define( 'DB_NAME', 'UTC_DB' );

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
define( 'AUTH_KEY',         'O7[nxI/OI%Pu%=#j|<x-%wiR5$+R<Yo/$W_G-HBAnR!*E1]v<kmr8Xqs8p.].xR_' );
define( 'SECURE_AUTH_KEY',  'DKDxds1`:U3VxO{mD0P!AMsfY0XSuET,K(V8zD0b0}(3QHUd./Gb!%8 [1:)x2l$' );
define( 'LOGGED_IN_KEY',    '!bM:k>1%;SBc.qz-ik?8pCZM3][EhGXgzj3R6rZ+!Fl-vN^5Mb87bBUMd;ruhU(W' );
define( 'NONCE_KEY',        'z>(NP>p>be7_.^Q/rHU/]+w<r%er^{vCU1V5Uee&^V:A#uAaT]NzLv0v6s}%ADJ,' );
define( 'AUTH_SALT',        '1pgH&9T@3btXHv&JT2#TMvaje}yf0_do9B$~v qoA%^n%-YTnWh7d~, k*j22+A#' );
define( 'SECURE_AUTH_SALT', 'VPY i7k>@PE@~&Xg-Dj0r2[Ha*F]qs^J+M`l;Lnq?aM+7u|P-vIX#|HnL>_G,,oM' );
define( 'LOGGED_IN_SALT',   ']JIgjH?a,+7=@=?>hND=sPLuJ&/~} jRxu)<2:C3v~[<9bz=As<Iq`<UVG7ck7Hq' );
define( 'NONCE_SALT',       'Q#$v,>DklC~C@m8i=E- RE p+Ob<{stwxu }aNM8YTQd4m~-|VM7 $*S^*rs?;2y' );

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
