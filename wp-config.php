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
define( 'DB_NAME', 'testwordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'C_0H[lmO| XcBt1u)@G{iIrJd-2D]TU+azyQL.GLI%_G@|g3>v383~i[L; [t/n%' );
define( 'SECURE_AUTH_KEY',  'hsP&%i?x%|WgTW4d=gGa,/m&zW#.|Ao9E&BLeA$:GnGuT94z>Dy(b1N${WyJ*eS3' );
define( 'LOGGED_IN_KEY',    'C?AAO2B|V= .2%O0;St,D>VN06|Uk4HBWfMi`29yo[(rZ|3[M;o >1]{>#:T/ v&' );
define( 'NONCE_KEY',        '+v;{1qIb7|dnd)OWxp}B;`JaMt)aR1!(h&9T~ R@[|K4y(Mu/(jtY)NiQthYnL0!' );
define( 'AUTH_SALT',        'j8GZ>iXN2FtCnaAu)sp d^8P%LZ}Z(&tTq`?e%)RyO3t1>%<nnW.(PRaR2Q%x+yI' );
define( 'SECURE_AUTH_SALT', 'r*[n)$4I(gGbZ2}`yAVp3vbog6xUc;4z|Lh1jtF&b`~=}ka6)];4R#1l%c0WyvxH' );
define( 'LOGGED_IN_SALT',   '4P=[/}{?*ZxZ%=Z[w>},`3b)e%mi[(6d*MXZLDBS~=,C7TxLKX Z`;T{&dGQ|^17' );
define( 'NONCE_SALT',       '*o%^A41{bojIiZenHvv`nk,v6-x7~3ldj+CXP@7r38v{qwX`i]t3`vl9lBt3>!uO' );

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
