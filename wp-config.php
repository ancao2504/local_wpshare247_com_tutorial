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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local_wpshare247_com_tutorial' );

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
define( 'AUTH_KEY',         '09+M8wS,&i/TPI&Olwmt7ZeDdN/*juad/Hp7oQ6>fpKo]6t.Q80|rnT(^Ft_bnz|' );
define( 'SECURE_AUTH_KEY',  '.4g.}ay]zH/E)7dyOPh/z(ie^U,m|0ZeGt XY%c[IWCWoW:m}iFn+)+{*(M`la77' );
define( 'LOGGED_IN_KEY',    '}Z)Op}x!`T<{Q&V{-58Ck(M`!uk*VcciQ9-EI_2BR~HcQwfudpR>E)q,UJL[BXp(' );
define( 'NONCE_KEY',        'JubM9l#jO +M:2](_*X$o/It6A/b|8Xgm#oCDw@Q6Y6/*g~SZ<<q~?H}rGilOhqp' );
define( 'AUTH_SALT',        '5TDH0xp0OjFu*7pr9xKxz+O@CVwhJ0T}nGJ8.b^THANQMm>b@C[rrabP3lsb^(pu' );
define( 'SECURE_AUTH_SALT', 'n>|8k-hN0HwZz~ePFIg.1LfuI6rY)%._ha<`xChyv,m#L??C-tb~ 3*iqq6obvp>' );
define( 'LOGGED_IN_SALT',   'LRNaZ6Ta7sx*HYOchSbxCda%uG[cX!t#pU|?]!>I78vHbV&=l!$08[-@F<bqszwL' );
define( 'NONCE_SALT',       'GKZ &})Pv3.n>6xOMvrx6L{I{VIz~1[i2Bog9aVB}w]p)PItUf!e *rfPr`M<7^[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpshare247_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
