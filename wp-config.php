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
define( 'DB_NAME', 'lmsystem' );

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
define( 'AUTH_KEY',         '$!ouC32H1o<^Kvh#}7!2%_hO7mJoTj_+XnkeP_/0nej#iNz<+ZF}B;eJqOl<:sEi' );
define( 'SECURE_AUTH_KEY',  '4M#xT5S^?PCl&Ah]K6>CjteaCP?|Q!-pY`GO,+)?XCKoCHk6S<dmcsI`r_Lru/Fc' );
define( 'LOGGED_IN_KEY',    'V@uBc/Rdv)O5E1P./Hf4<8^T{X  %})9to~/SD7=e>tI{3uJ?C/9}m%$K.7e$!)B' );
define( 'NONCE_KEY',        'j]A1(+LjUbOW*u ZDyatnz49Y#ewae%TAq=cz!p[U@e#^qekr]}7:(95Z/7svjX&' );
define( 'AUTH_SALT',        ')n0iDyue&rVJW$Kug`27tFAA_0v?q%qi4*LtII2/1h1ek9@uOsA*l|;RuwQ@X}F`' );
define( 'SECURE_AUTH_SALT', 'nCl5cN0P3;_[(+{<*hi0^sQP_ukL18DI/]U3,a (&9iFOzN2>YSDeN8ow)hou>n8' );
define( 'LOGGED_IN_SALT',   'uBM[J0;m|*V7bj2HHJ(X6SeS*GY-[7yFfRE|eqG!BYgQpvUj?,?:m[_.mE`J(pNZ' );
define( 'NONCE_SALT',       ')1|P}qmuVDEI@|t0>F#yW-!GL=%D.*Mn5r=#2]t0|~2:#c|4OJt%9La*}AsL|;59' );

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
