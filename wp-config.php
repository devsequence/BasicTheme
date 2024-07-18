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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'basictheme' );

/** MySQL database username */
define( 'DB_USER', 'basictheme' );

/** MySQL database password */
define( 'DB_PASSWORD', 'basictheme' );

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
define( 'AUTH_KEY',         'H{,ww#_kUwoIa[i:w+J[GiZZ|8?J9h8G$dQ@pKI.mRG}L4MntGx$H?PCsjgI4,lk' );
define( 'SECURE_AUTH_KEY',  'LHjya#.He4=[L7Ftfu)_mJ^JA@-:8{MKK[7Ql_gRSy,]O@ua4wsx}0rp2Th^}w{s' );
define( 'LOGGED_IN_KEY',    '>/;D!l6&8XD.o*xi1E*G+2OZ^`8z[`ixM?Q.,UwKu|*md8&J[#kFEmed-B60sOez' );
define( 'NONCE_KEY',        '+$2XS1N5dhZjz9z2$BX^=,ceMo2cmeoa0i)y/S=`e@=~!bL04O/Qq^d1S *{(1n*' );
define( 'AUTH_SALT',        '4 i18zl-W2=-%LY.9Tsx#~&fX_*e(&B5k6l+9esZEQ:Z8I2)30DkT!F-i|P%=]oX' );
define( 'SECURE_AUTH_SALT', 'c-P7$`!,4yTG1yZ@b5[C@]0D2pw^wf-|P]!,cj>Q&R@U^yMEZ9JXx!kU1N&(HK>Q' );
define( 'LOGGED_IN_SALT',   'qu<Wd>LRV(/ +uk@n{8]B5UrVKO6wt-&VS?@H@Tan@b,IR@R&=J64Pq`+E!NGEkF' );
define( 'NONCE_SALT',       'DPV29IbaM9fR]`r`dVVa6)-(J#RRo{ty-^wPxpj.4H,$m*})Py9X`7#@`zBb-v7~' );

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
define('ALLOW_UNFILTERED_UPLOADS', true);
