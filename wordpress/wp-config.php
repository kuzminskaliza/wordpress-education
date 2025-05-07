<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-education' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'b=U9sq7rw+FN1pLm1R0RB]U6-TegT0c=0,LvO>+D>~61jU@)6M!_<g]+xtM5II r' );
define( 'SECURE_AUTH_KEY',  '?_dUjQ@}0kzgQbWMCTPuze,9y##h7oc8Vr*)PE3J:;9EC>77ysw@wWb}^xoJVSQ.' );
define( 'LOGGED_IN_KEY',    'Bt_ABCiDLNL Cd;nd7?ce5{[!zXB_,qQ~Gu`jp(^))!Bt.;R]c;Pnow-pN-2B6]c' );
define( 'NONCE_KEY',        'E2t1]v_CU?QdD&r#KYdHj0x24{4kaUE/zYPqDnum~7;Q^ /VGTMO$D6PH@HZr8,z' );
define( 'AUTH_SALT',        '~sNV8w)~&RftV0Pq ez J:{!MUk&<!(au WF6h7W`z!fX)Lx_7BbL4|3i+s#|U0n' );
define( 'SECURE_AUTH_SALT', 'UeO]wwz %hC4 C-cM~C/q*~M0q6jwkC3kmaO&$V3HbwuCqZZ9*IY$t=p:.@3L,H:' );
define( 'LOGGED_IN_SALT',   '+[G&ekMQkdY!7F2THp*Nu0n)*sGWntWlD&k/XT#{@l:W,>Y)zA?^h2;Q|5#?}~Ob' );
define( 'NONCE_SALT',       '|kt1smIPvpc*u,%A76(!~|)6o-+GJT+yxu//)R)WHm9j;`>{=I%CiJ1Lr==4G6]]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
