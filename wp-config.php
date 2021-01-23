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
define( 'DB_NAME', 'w2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'P:r6Mmk%eM[~nY#Xphq<7CKr{LkuUq-L7&C6=P?+RkRB0$XrcJ*Z q{9.Gp[xinr' );
define( 'SECURE_AUTH_KEY',  'dZ>bI%V9,N##1<!|sS%@y}1k9?;r#yh-=J`#uvL)bP ]QB`N*<,amESlyMzg=PAS' );
define( 'LOGGED_IN_KEY',    '5cX$K7bF?-zKi4q7%WaUM *p`QuWR^>P~o1+,zSr1j@>nUnm?Y3}Gh{=vpB~6=U3' );
define( 'NONCE_KEY',        'o$@SOx,2<&C@z5T~QoOE^d8w1c`#)=(cx&txWG$=^<M(n5${P*[wmOGAaer&_~nb' );
define( 'AUTH_SALT',        '(bWnreP#@imAy6pR9rG7^V@g-XQ9qW@9Bs3DU}!]WTXLFkZ;qzqo9;3$1_vwW;he' );
define( 'SECURE_AUTH_SALT', 'DK{8F7LRoIvAd*q MpY5&mS=Zl HzZr#&?C]w=Wl mC9@]x/.%1}w77FHG,LB: G' );
define( 'LOGGED_IN_SALT',   'E,!5kQ4)U/~@]Gu,$pDL<T9U S_yY1IMLVo6|#MFX5o|D1BIg@5`l@ae%2D]ckE}' );
define( 'NONCE_SALT',       'cfB8EeE|e1Y~ORnU618~,J8c#)f1l}I.|D{K@#C@[y)q_3YdsH=P%-Ex`_H9P8ll' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wo_';

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
