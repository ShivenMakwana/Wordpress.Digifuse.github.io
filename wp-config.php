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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'abcd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'eJ<rekWu@BbaR2A~m#lf~0QNPI?drvO5z9+M$ej,X#wfa]8_0$EX|]?!//4=qwRC' );
define( 'SECURE_AUTH_KEY',  '873)U2$6Lc)rv-`TT:@#DiB/x*1EW[W*;9Ictr~Y[UL*1z#y7osi]=J5tw>vZA[p' );
define( 'LOGGED_IN_KEY',    'RS(J{5ELBqpYP#8C/*sYBk2]:``19?L@xT$feh+J)zX0&}9>styPx?b|z<>@D4|m' );
define( 'NONCE_KEY',        '4$XFDZ.<rrJ~GX>xyD9y[5sPU?pz=ZVAcR83IHYltYzt.:qk7fFWtsn+&C4A(J!w' );
define( 'AUTH_SALT',        '6e}0~B4AekB@J=Keyt@lZAI<W=MG-2-KN.JP@]w{zZw{?VFA@vAF}+A`MI|&<_dh' );
define( 'SECURE_AUTH_SALT', 'IywGzr}qwS{MF-S6i{uJ%x2eP%$7*NW)fW_-dcyou;lGQAYU4.8,]ePE+L/QXmH|' );
define( 'LOGGED_IN_SALT',   'Lhe;~[.Bw<`_Mct/Ql_+8K;8$J.^a&%rw3:mlTE<Q~,Kf/E[<01]O $,6oM>#C: ' );
define( 'NONCE_SALT',       '3&VfGzqI=ku:{5%Xr2_![]3Gmo%.1c=k[;Fqghx.Kzfc[UHvKeHWy}IG!ZX[>*+&' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
