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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'openflow_wp' );

/** Database username */
define( 'DB_USER', 'user_openflow_wp' );

/** Database password */
define( 'DB_PASSWORD', 'j_nZtVa-Hhu_vSKw' );

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
define( 'AUTH_KEY',         'jN_IlYbKhC1Fyz;_sj>doYl?u7py#&e(.lVDsEFeyt*o+}}gAdNZo^N*([*EcY`+' );
define( 'SECURE_AUTH_KEY',  'Md~h,X ELG}T2fh>[3u?#kfoRbfE  Q3 .<a)oH{+eFhwkIY,Lp;?) Ji._o+pE7' );
define( 'LOGGED_IN_KEY',    '@x%wFuvbzRF`v&]!my5p/vi)1dLW)<![jkFg_>t5`OY<K1Pore?=TPyV*.^s8Dv?' );
define( 'NONCE_KEY',        'W8#9Ke~p-KW|X3!&++T$SOgjNlYQ044;Y5?fz<e<|j[!:kr^)v]@r59z#8||1gwd' );
define( 'AUTH_SALT',        'Q)v*E1Y3]06Rlw3TI[sOZ=a-%4Zz9h*)q+d6r%RUh,IB{?fZTD(s9m`dquTm~z1~' );
define( 'SECURE_AUTH_SALT', '878AQ@,k=.9bIc%3:S`)l`UwlU*4l~9C*youja|/%D)tgr@wS<|X}IG+cDZF[=Jw' );
define( 'LOGGED_IN_SALT',   'm$@qDK)B|Y9A0I[)g^H:E&^+ |cobuB-tvIpwM oj`WSj1])n80Jx+zWyl<C_ImC' );
define( 'NONCE_SALT',       '9WI)Fvt&0WM|Zv>KPBxep<zX-qAiJS@6LD[&ec+D0S@H4)dWTi>hU$N{B^{x}{Rn' );

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
