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
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '03a4765c6ac29b7520cb491b6f7461aac054d4fb5012d3b5' );

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
define( 'AUTH_KEY',         '!*tWY,n{yaJ{$C>swguCZVk/]xNhCNEKoX[)&r|%6,M=<oyl%%fUJ6~VHkc|>CQ!' );
define( 'SECURE_AUTH_KEY',  'W_cjyBaGsB[On<U$L{V/u^9o!Z-T|ei1VH[N ,E;JMH@:WD#q.2q/+dRcZtcUM2X' );
define( 'LOGGED_IN_KEY',    'ceLF={G#,k`2b]=S}ZS}tG-9A}Qm*5*vf16c;%Y`)L0+L]=@%anx 9^p>/r=zp%t' );
define( 'NONCE_KEY',        '}Lqz0,HR8v)|& d{7Zgfy<< T-2v[rgBoUk<K@i/fGdHR%G.o0W8%&#smZOnzG[5' );
define( 'AUTH_SALT',        '?:5MPE1agIER`%pNX4-s17W?gI_sH;rm@ZuJLb_iE9j KuJP>QIzxYX[k]A3VoS-' );
define( 'SECURE_AUTH_SALT', 'pD`:gVTtPUKQ7Wur%rzE>Vq{$A(~ir]Fe&}FOMgL/gEPCQ6#V`tZQ4}EOR:=d@w.' );
define( 'LOGGED_IN_SALT',   '(iO:7C|4juB=0#Bqun*mgK*254m:oXgg^F2&B&+tu-Ofi*</m%i#-0bzGcO|DpV`' );
define( 'NONCE_SALT',       'M;;WB[El;0(FS.4>i<?b!QVf7=llV7=wZqTIblIDNR=FdUL<luivT^kU*<g2%=+>' );

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
