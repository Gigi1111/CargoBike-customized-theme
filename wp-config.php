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
define( 'DB_NAME', 'b2w' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vfRGGN4tLSmho4Aq' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'PN>lyq/L{+t&qnJ^ E}$as(R^+WvMuKO-B]1?EIQ%ZE<~-IYr+=QO$||k {k|9p7');
	define('SECURE_AUTH_KEY',  '#xN>ET|t,ZUa4Pl==JFXqp`{j@l>/75D/{za89zsA@D-l:7O/f9(WjK}&6WB]1Ox');
	define('LOGGED_IN_KEY',    'w$SwH+2( ``3!zV;htT$*Z1}TS3kS-Up{@Ui8Q/mT#LpACA*[,p@H:&H;MfPl+Tu');
	define('NONCE_KEY',        'fF$I!K%Ad*EbNTD.}517<F!`+..&Y:IY)?3J}mM~=d+q?]V8@a`&-b=|%M&Q8iBZ');
	define('AUTH_SALT',        'X%^a+p;PtRG:4Xd]bD<Kf8)Acx q|`9`z~|kvar.L+LRW$MXN}f@j*@+|xk*6oB>');
	define('SECURE_AUTH_SALT', ')u8*|uiebm 926;e_1XN5OvdBFX88VoL=`h+Abo-q?.q?6WY/8:4BN7NgM2jy&R<');
	define('LOGGED_IN_SALT',   'vubk[XE*+2mZY^yrPt-n7#_1$qP/|8)_EWo1/-2iKQ-Q$>X~SJn;xOv,4cp.$sjp');
	define('NONCE_SALT',       'la/sKOw-D]DQ<_bcjt5(@?k}ZgT6.N1I>uab+1Xe&o:P.j2xF?y6FGAv0dy^n+56');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbbs_';

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
