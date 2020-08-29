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
define( 'DB_NAME', 'fashion-brand' );

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
define( 'AUTH_KEY',         '9:R7{a#?:wLJf^ig>4<~@gk5g=Fkq;|jFQr#~K-^x;^5nmzQy026@XdkJkFp7&kr' );
define( 'SECURE_AUTH_KEY',  'a8alM@BS^ZBNboiDWQsMf=pLGfhA;KLcP]aD].,RwBd#jt!>)2k (rE$sh~0>$Pi' );
define( 'LOGGED_IN_KEY',    ';/mYowEsx5k=Z2h7cdF-pdO}fg|3,2cX7:O/O*_QNa@M{=DPD1%E ~K*4YUk^x0*' );
define( 'NONCE_KEY',        'GUuQV(0%_aOf|h40zkx2@ a%nZr{7oHMhKKzJ5@W9#|50-{2EZL1uLiE7JV7GP)t' );
define( 'AUTH_SALT',        '/iiC7~?$4O6-a]o`;R{S].*kn+P&N{+Kn>S&gFcJhhxx`VPINN:v2kI6:>6GLS B' );
define( 'SECURE_AUTH_SALT', ',y63f]B_)ofSVjskgWz =J5:X)Lc`1 23ifZGBgrg]QjFfM m,?ZdR#2YQQX-#O#' );
define( 'LOGGED_IN_SALT',   ' Z>#@~?~EgEEyZ0M!8%XGEpIAAe$FE*a4sV5c<znD+Gu#CEQ~7P0Wmjf<Kk^zBZ0' );
define( 'NONCE_SALT',       'cbYe7]stk`%]&AAr^=<Q@ D{X@fQPT{4_{^VwOk.@iUseCH9N;4Qs>VUYngvOrJ>' );

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
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);