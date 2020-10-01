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
define( 'DB_NAME', 'wp_theme_test' );

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
define( 'AUTH_KEY',         '` SN7D#Zb0.+PhMs3TLd9V:)H0LGt-IcJkH)iH[~PRgTO&lnT6J;<x?r7TaJDVO1' );
define( 'SECURE_AUTH_KEY',  'M6g~7L  RNrVVrMqw~r.oXal&RO4#I!dQ}f6uei1[q]i/muwj_srQ_;;6z`c,7FY' );
define( 'LOGGED_IN_KEY',    '4[A7;w=cKX~GBoAnww1{OjZN_iLEnc4`mfeK_LnU0uqT]ng {)QX.JA5U6UFYg<O' );
define( 'NONCE_KEY',        'E).4K C<N&sKLaS26^0Q9K$B14+<89a&>EC?:2$39v/7ERSwi3,{E+b_K+g~k!%3' );
define( 'AUTH_SALT',        'Vi&K]xrs0?^LTlc8WkbSPqD$0)}E;KL&<yRzsBLb=5G!Grn0Vh`i5#Zr>wV}D3Nf' );
define( 'SECURE_AUTH_SALT', 'fH6$wmf3&k}u6XQg]l>73D/0(0x$td6+v`fSg93 ia=7SeLG6ZQ2G?PkQB.hg+~:' );
define( 'LOGGED_IN_SALT',   '3FfN.Qe)mxa0T*xc0,B0Om)BmY`edT|*Mpn!5?.e^q)*7PaT+y#tyu<^aQTh=I]h' );
define( 'NONCE_SALT',       'fY?zd0stPb@Rayk_.ge]P|}!H*}y4N06SS!]U(!};aJt7y^#]-s?=&885ZTG,5#I' );

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
