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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'EZ5+ptsqEshEM9OB6CI/el/y1rx6r0vKYXON5ZSMTNidg/fNoBfuPw8siNOcf8kfRWkWQwFwyt/5WyRdP9q7LQ==');
define('SECURE_AUTH_KEY',  '6KFTZwTMbNuOlYsNQE2qGJHPDhrgaPDWTD895VAGn4lI9X3S9x1kwemCGTnJ9h23s3N2LnvYdvy7VIINeRoYdw==');
define('LOGGED_IN_KEY',    'hK69k0nUwC8d5eBLM1901KlEb+BeVv/5BjIZnVm6dnGB3RMltjopwdZnKP9/aqNuTaleo83BhHW4Bt4BJWuGtg==');
define('NONCE_KEY',        'T/YJn82S66/eQP20QU/WKYiZjefM7JG2Ew4X+IJAWEabeULcOC9S1kOMfR58XJTg/4hf5/zVwrclk7Fv4+RcUg==');
define('AUTH_SALT',        'HJNyo+4u8j75F92WgeiJlPYn9S7bkWmGbmUaa2Dy/RiFOasnaJQIzRT5/Rfe7+16EZ1kEGkHUOKT72j0A/gNgA==');
define('SECURE_AUTH_SALT', '9g0gxiqclD5mH09g9UQg68OgWVB1MjBnk61ApObaUs6EhpLgfBJ/ZqVK4G35nKogNEhOD3DWNQ0GVVeEzWPJDA==');
define('LOGGED_IN_SALT',   '09irg6IM/BGzQZI532rtu7Ld568Du017Tj6St+Fbbdcuy0MgFmoccxECa2juQPOZaXMxwiBD0RpTpwMNnxQBIw==');
define('NONCE_SALT',       'HCOeBJhcIFsuPWSjf1AmgVZUTEh6o3A4cirEUyj14a7WHRMTyrm2zBIIr3foWFsj6aOLmADRkJMt4WTxE1+5Kw==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
