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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'zC@Pc^uh:rn@E9e&~2V&LdY0x`onoh#rbHEOFq[rYh6,n<d$Z*PlYIl0<S!q:4?,' );
define( 'SECURE_AUTH_KEY',  '<QRZFulXrs ;7qN} QEfw^Ga7C;Mc*|fg.S1I,`;LnieQ5FT4Dm RAPaxRaPfXWT' );
define( 'LOGGED_IN_KEY',    '%=TpeSmkgjht [r[r~0$^-25! 90cOdu?p|-~OYR:eP]vtkBY/i~1/17u:<ypB,~' );
define( 'NONCE_KEY',        'L&U||l6jk=pT;CeG.^D~PTZQ>!yve<]! 5?eCnh;,Bi-8x$PQDAqsjV>//Brx4vX' );
define( 'AUTH_SALT',        'L;:.74V<+;/sF)#_Y-.#2~7*ULRH++wVLW^(5,eqJy3JxMB ;IL]<*N7Z0AoW&a5' );
define( 'SECURE_AUTH_SALT', '&.SaxXn aXNsL%?G64LhH0/z><T1gHy@=wSUE;J(K@zG$SlFDvx%T?yHoC>YT>i@' );
define( 'LOGGED_IN_SALT',   'Y*I1 eV51bouwT37@X!2*zB/aK`Z}[=[tdklSw?NgJ4}6jdD<5{<E8zOJ|v0$tNW' );
define( 'NONCE_SALT',       ')yO:5Sw)/n FROrROHLvR*8)ZqDTzsJ6>=Xh13nzfn15]t(7:,Y3[1VI1N;XM..{' );

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
