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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('WP_HOME','http://localhost/IVERIA');
define('WP_SITEURL','http://localhost/IVERIA');


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iveria_base' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'IJCdftkwJCG&LKf mXN}5$cm/dT)1[DKMIk_v;(v$znHwpVcpr2MhQ9aLHCXQ<s3' );
define( 'SECURE_AUTH_KEY',  'B5^]T5Wx|S?y0(.NzYdiGIq>Fl}3pfzHJthU2b:+00(XK ~HOmpKBoo>g2A(QQv=' );
define( 'LOGGED_IN_KEY',    'zyE5_Yy0-ccVmZ(XQ&M~|t?`Xd^de(>.?;ufEP2k)e@-.;v_p!x>3xGeMD=|2f$Z' );
define( 'NONCE_KEY',        'b&_vwTSn@`mUZt+DkPvN8IV+up7dW%gY=ni-UJu$@56>X|ozs684:+68(QKcjTll' );
define( 'AUTH_SALT',        '53P%%m5fbfD;ih5R:@i}-3Ey#bWg9-_wUHgM@YRkgeUL<yhIFa6jLmW;{{@SMpq?' );
define( 'SECURE_AUTH_SALT', '&G{c9/pOjgS_yttUa !Q8[T/K7j_nJ/~^@3!A`3wuB`&qFucOP(V81r:-VJmptXX' );
define( 'LOGGED_IN_SALT',   'k7`sq2kzOZC3<rVw0-Vs:2+M>Q4FuuuZtaH$% ]C_k=mZS((AVg{_vW6ZL-3C-$t' );
define( 'NONCE_SALT',       '}i>-Kk?[bp<k|jfsMDoz=(C5AEb 3zsfi;A``jg@gZhP U5(8hCV7Cprvm*9owz=' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
