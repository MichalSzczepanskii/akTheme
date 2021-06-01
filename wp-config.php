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
define( 'AUTH_KEY',         'h3I)tC1b]:&aw^A/RFFPR7rC3h2Pjtc{SgU|.<hYggz:@&OQ]jHPB~Kh+IvpLWIs' );
define( 'SECURE_AUTH_KEY',  'y<9fMHM]aoNo>y?Sn3%h`!acjRQP(p_N9s}}k#-wQMbH.%Tbu2Dk?Vg2hZH&]X@g' );
define( 'LOGGED_IN_KEY',    '{fuSG9wpF!B[&ni*rd!8aRX_;K@wG,U^ 4]Ms{,BWw6 N_Z,<GQ2JvWlGeiIIQi)' );
define( 'NONCE_KEY',        '![jW}<yj_9WA~GPV2Y)IunRq6@.V[nnzCH*d-Cza(o&zs:O4;Fl_Fmo[)7,`]W.x' );
define( 'AUTH_SALT',        '<Y,3Z<B5^W28:<C|k5 `b3+k=ixpCNG*@A4Uo^v }`u$20IMW[7kp*r;SOWnU)`{' );
define( 'SECURE_AUTH_SALT', 'mOt:.{t^@N{jCo)*bHY@T=z.+-}53IuIAZu5Cyy,/${Ns5hKV&BL0zYF1WI(Z ,!' );
define( 'LOGGED_IN_SALT',   '!@q2 qy<I7tS9+`CzF/EA?[0U#x^A^j>kgk+kLkex,ov!v^lUaEc`_O4,U^/33vg' );
define( 'NONCE_SALT',       'E9#K,{UIC(ZtA(D),A=#2!|$1ZI,-f3O+E,4b3AgS*ZTjR*:]McE U)&1Ql9o7W{' );

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
