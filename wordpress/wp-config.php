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
define( 'DB_NAME', 'apeSreda' );

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
define( 'AUTH_KEY',         '^|PKGz;-]G*uK!gCH+1dVLQr|fVS#J*tk;h_M=dfm5lSWi?c= *VwI>d#}Cp(C=n' );
define( 'SECURE_AUTH_KEY',  'Z~<~rgZG|ck1k=6BBVl|P/M@#>f5UQ:a,)L#5DXexE a,jK4vXvRk4h9%GBho ~h' );
define( 'LOGGED_IN_KEY',    'eYdZY0Y.wK8r4yyW]=K D.,Gr-sKEc+B%O<6RYn@kWO?M(*[pS]^uLeu*B%teY9|' );
define( 'NONCE_KEY',        '],z4Si(C7wx9k/f{FRW!_ZAJKDZ-!c679}@vX&hlAzX:ZlG*fB1[C0g{s-;= }W7' );
define( 'AUTH_SALT',        ':KO_q{4hUM*&YY67]d(ive^ qju_Y6W[:f7LoVUNofU%9 V[Ejr4*m0A9mADU++R' );
define( 'SECURE_AUTH_SALT', 'w6/b<xc@D>,Yi<Z<xGC%3 ~`s0}iYm*~;b4=d6Pe0o2$ByVn,/l{M{+~WT)?E?)f' );
define( 'LOGGED_IN_SALT',   '-V,E7Jh-ZPyp$dBNumy$Ljrm57+)E,@7*n*1,COV ThR>!-$+&fg<N1~,o1A8^QB' );
define( 'NONCE_SALT',       '= 3ZB^o%;ZmGv%eFs=iE61UJRubSc:xU47VJr!]iEZH)@$~W;UsX.vf^J.Mbv@5*' );

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
