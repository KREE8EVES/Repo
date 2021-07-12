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
define( 'DB_NAME', 'sql11423939' );

/** MySQL database username */
define( 'DB_USER', 'sql11423939' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SMtTzFY6Qr' );

/** MySQL hostname */
define( 'DB_HOST', 'sql11.freesqldatabase.com' );

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
define( 'AUTH_KEY',         ')A#:,> ;fgB@nP1g|A >zpw]KJ)FMPb-HJKN5!k3Z3;~H2pf9xdf=)nh4iZ`QfZ;' );
define( 'SECURE_AUTH_KEY',  ']gFQOT3n120~79o:s|*A^N1YGI] 34`}=i,T&5L7kM-r}<4s]a;Z.P@aAwOH/w,8' );
define( 'LOGGED_IN_KEY',    'TW?~X:mALZ.j1UZ84`HxpD7nO}2<@Jve8:0-4L7/z*qvnGDQB`##06WujNih6c$~' );
define( 'NONCE_KEY',        'y:=]hOsX_N5v{v`/Rb)5OF/9An]`3Kroqw,R?g9WBKJ<XbL(lz@Q&-/VIp bz~<`' );
define( 'AUTH_SALT',        '`2;[60Po}(LnP8H~`y5MCM$PK0/&7l?2d,{/gi4]g8(.UJ6g|HP/9p97D`At{*.n' );
define( 'SECURE_AUTH_SALT', ' ss9[!hU*d)O7@#rs9V9uDl2si^zkHuA_L/lS%w,$h+;R7j5PK}Xf&{wNzP$m%Aw' );
define( 'LOGGED_IN_SALT',   ']]2}<A{b;p.BH#sqKhY8> 47]M0hW);UlbO)2(EK<V{`*~H <H_&@x}Xkq#/GK/7' );
define( 'NONCE_SALT',       'd.Lsap_B45t{!MhGP]2a1>X7L$nq*;eMBr1l|pPq@bKsHRlIVRXt]C_L|DFWEto!' );

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
