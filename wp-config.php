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
define( 'DB_NAME', 'tugas_insanul_akbar' );

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
define( 'AUTH_KEY',         'Eqj(gK~&v6`$^.)Y}sV-OSS0Hu4+A>M?T~(~?KQ&W12XjwuAWM0{ciifR8/3 `}o' );
define( 'SECURE_AUTH_KEY',  '^1q8r-)c|dNQ]g%HLBMHfhKsv6d2+1}HTJ=l3%M~7$C~JzEZ3`[p&i;BxDW&Gg~-' );
define( 'LOGGED_IN_KEY',    '?Xps N%9Y,d.zgcz g~@i,THYlDZNf`n2`V/;=+$O_)E|1{Ut_g?Rs3%JkFD|V7Z' );
define( 'NONCE_KEY',        '@$~24Pm:jNnv^ ?>_=ZHlF+=x+h^ip_WOyk?g?Fg|&7*=ov{OQ7^JcM:B]RO3`IU' );
define( 'AUTH_SALT',        '{+#9.X-cFy?+bD~eU 7wM3n^[Hh=3Dx__Ep9l^@!a0;kVzf{T$$nL:o)s!?%!Ui]' );
define( 'SECURE_AUTH_SALT', '`d-E-xRyk#b<Cio*y49s!^`ef!.[0VTCvgw?5uo[nXs9eHj7A=Wt-p}my<KX]~5d' );
define( 'LOGGED_IN_SALT',   '&CRyQ$M-NVPNNoB6DsB(C=uia^7UDy~Lw`Pg`X@~t1&Rbw:uli5N1~8g^=A?602t' );
define( 'NONCE_SALT',       'I%d)B|i,fjdU`ygKJWx_}ZqJPk(D{:n`Nnw!2.OFNy,(epx 2uyrR/nPh7eC;h$e' );

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
