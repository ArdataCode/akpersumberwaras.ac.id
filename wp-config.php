<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'websit19_akbp' );

/** Database username */
define( 'DB_USER', 'websit19_AKBP' );

/** Database password */
define( 'DB_PASSWORD', 'Ardata2023' );

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
define( 'AUTH_KEY',         'tuylfjlrrbdar9xp1e1etsbemnthvng8s15m3fdqsjl4qpcrkrrkwpag0pl62mhl' );
define( 'SECURE_AUTH_KEY',  'a2m66qd48g0l8tacsba3nawrpwuyvxcydr9xpktizn3s64lgdenlv51ys1t4fagm' );
define( 'LOGGED_IN_KEY',    'mjvnjlvqu9ksmeos7wrbxqjqob9nhtucx7tojoquy72jxmnbiiam6y2gfnaseopd' );
define( 'NONCE_KEY',        'cqelsrsxm0wue7eskv2teij2el98srjeh7zmmtrgxavxlafdjg9mbxzcp7i1ovoz' );
define( 'AUTH_SALT',        'xf7eqbpq7dtiuqqwq7an3ujdrlvpobbqygw3z822lozya7b0j8dobdjfve8jk99r' );
define( 'SECURE_AUTH_SALT', 'bv1lfenfcav8icdoflv9jtmsmjfapfdnfavjduoghl49qlfy4ukv1sgafhsgpoj4' );
define( 'LOGGED_IN_SALT',   'hq3teowqufslzhs8pxoqnbxbzhghoytn5h2heleq1tjp1gb49eaimnrzlqzfxcor' );
define( 'NONCE_SALT',       'r3yawxgvfepi3n60ds4rxa9u1q13kymejpipbzasjpy6sccbatrxfxiqeqfesj4q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp5b_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
