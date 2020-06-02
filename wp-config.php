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
define( 'DB_NAME', 'woocom_theme_dev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

define("FS_METHOD", "direct");

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
define( 'AUTH_KEY',         'L&I6gQ;WBn(n@xR<K2AAu,<x54!K,~1]z1$?`s?o(p.9r6}jMR7Opgt;!+4~rggL' );
define( 'SECURE_AUTH_KEY',  '`79rWmJd1bPA2252k(uuq;W{nRyp!SP&7O<4OC2Ws_`4-!R9%g6&5<N1=m|!HhO)' );
define( 'LOGGED_IN_KEY',    '1;hC!7I7kZ4Eb-9J[.F:OAEO;Y})i/HH*VVjnjgsY$#F-@dqQ<+TD`kgCTIk=A~2' );
define( 'NONCE_KEY',        '&<%@^-^^cV1~tm,c5f$6G@Wlw}Tcw!77$=&KYi=& F+ryJFQn,wuK@vkf#|VN}fM' );
define( 'AUTH_SALT',        'w3&0/|o>RMbBw6HE,86)p*Oy|Mbz$spGyh3+Gj!(}n.r69(2~FSjxp@yh$SuLyu,' );
define( 'SECURE_AUTH_SALT', '-IOJBTP75B$0J<a}0|Na}RrOPKNgXy=%.X`4@R;g^_Yg#Wel[=! `Nuv<+GO,8Xr' );
define( 'LOGGED_IN_SALT',   'Uywto?gC:rA V~QJZ]%)V^-Ujou3tgb7IG8qEN3UCMvCz#3%-6doW>9}1@|fJ>-L' );
define( 'NONCE_SALT',       'wzNjz.vl0{6:Vm`~UN4GlL&p2z)8=<aa[aB1w=p74V_Ox$pF-<NZV)pH1qmG`*?q' );

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

