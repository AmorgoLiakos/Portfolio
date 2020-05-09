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
define( 'DB_NAME', 'portfolio_ilias_prekas' );

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
define( 'AUTH_KEY',         'KUt+70_UpK2*0@vdf(2*b]D4YaF{3 t|s5!1T+nvbvjZ/ P~~@b%cJqI^~F0c0}O' );
define( 'SECURE_AUTH_KEY',  'x(JegFaS-dU;fHTN,N86x9{l?2Fy_XfiN=WJZC7~(T7/E/GnRBBlcNg/2JaS:XA)' );
define( 'LOGGED_IN_KEY',    '%N~>uEyMALfB)1-qddq${)5<w6GLj`)T?Py=Cm4x+#o:~s=Q|#)7,J1d:i{oR6Yt' );
define( 'NONCE_KEY',        'mD?;jaQnCcohfF)7zfM>GM!}ZQwXvZS|G~ !={NfXuD=^LjD),.gT9G05`]`j~)/' );
define( 'AUTH_SALT',        '{D;J]f3,b!%~!/G0iYf%G,*eG&Y:[+g>J,Vo:%eJ,E%URD#OhA&U3/<W4T.uwi^p' );
define( 'SECURE_AUTH_SALT', 'G*hUD9X6I:i$Zk`yr@w,s2tM&RNEDvspk~V3$4vMdj|{`VHS%tl((Z:[llrjElf8' );
define( 'LOGGED_IN_SALT',   'v0IKJsfIV>d#pQ{IB<YGe_*m#axgO<hExV3mq5t;l3g5!Yb0<{(^?Ed7u-Bm4/Vy' );
define( 'NONCE_SALT',       '@2l[#g;3aQ5&GprI6<V5v=^y9VpYFsn8p_ewqi-[I?%U}AG7c,5}w+MS|&)B5|Hy' );

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
