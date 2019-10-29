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
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL database password 
define( 'DB_PASSWORD', '03a4765c6ac29b7520cb491b6f7461aac054d4fb5012d3b5' ); */

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
define( 'AUTH_KEY',         'rD=/+F4fmL4rf[&COA%I=Z$|;|y^:mf-`4:PC[I766+75$+9HHFv,B9*|f!Tw+&I' );
define( 'SECURE_AUTH_KEY',  'L(`|5:1Lmo|m?#|1U)Y:o9+LnqXY^+vI#j&vZ1zi=;3`Mh6C3Ic?$lwH1uOrQ[`U' );
define( 'LOGGED_IN_KEY',    '&|qu4vh0$~L?)f;!jK()#?iIH]I2$OU|RDy5*rnM|re#}0yFr#F8KKiQGE@pz78_' );
define( 'NONCE_KEY',        'l}pz!@?rKy3)p2Xpy@,h#TqRW%N2:-S`l*tByPaVyp|1g$Tv~iUO@_5VVzcSAFuk' );
define( 'AUTH_SALT',        'hvG]LnwzpXg1h]087axrc<rWdW._HKZIL<aqp%DP9@:W@EkBG!0;&~=OxUXSCaD&' );
define( 'SECURE_AUTH_SALT', '*!B4)yq+VYDBu}jup@n eb30&CHsx6VRg?NHz3oZ y|v)n4k=#Nq$.34n|fN&b~*' );
define( 'LOGGED_IN_SALT',   'U?}aY(.^yqm#2cRfuPl[ZqnzWSbA]ICo=YTnMDM$grFnvup&t`^U^~CP8v&,8eRU' );
define( 'NONCE_SALT',       'Uu-IM}^.p/c%.i5wA1b@OjI2Q`/NZ*YNmS K-^p+j454KXu!viMEov2&z8}Y=jIG' );

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
