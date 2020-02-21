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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '$tTne+y18p;K3zB@tt3_DvV)bF%V[y2o%G**<f9* d>kXuodk`WJPl@36L?;rhWh' );
define( 'SECURE_AUTH_KEY',  '~FQ5(2JDs%AO2PWZ+,StiT3tQeNIi;eeg*sCnDEE1?FU-];-ggq,e/4r6p,%/d!Y' );
define( 'LOGGED_IN_KEY',    'yS$0kr^8@m(qEeL/f0nae^~q$EMBy~YPn>L`>j/{l1TInR^ExuQr*AW]fXT)kYnk' );
define( 'NONCE_KEY',        'BA^7=KV&W63}cx`yUk(}.y+;yA`/=sqlOVa?_,,8J;)94ZG,Y;!0yPY#tGewkQZ)' );
define( 'AUTH_SALT',        '-H79rI$ Wrh^mcWz,^zOifo}cgxP Rd_04&%Iy{5 uBT;!#C7ntXKBs-TWq?D%v^' );
define( 'SECURE_AUTH_SALT', 'CF]R.6Jl#mz4a/wL>#n`M!0@:wuk:a~o1F(bcnDSdF&_i[ZH+7b|MB$jfY6Ynv._' );
define( 'LOGGED_IN_SALT',   '~w,v=uUrM~bu#MY0*nf7u2vZ,/;@uG-.#73r4HXNLPqo2:)~t[%)@sM5nt{/ha6,' );
define( 'NONCE_SALT',       'gxd6Ba)wb%,A1;lf{X|^oKw?j~Q+nZ@7SFqp{k(:#w(CwIkLTc<w0SxjDigPy,5r' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
