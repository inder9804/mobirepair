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
define( 'DB_NAME', 'mobirepair' );

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
define( 'AUTH_KEY',         '3qnh+# grQ*2Vln;*yr^f6pyKRss^kFh.@Bp{y}j.xGEklYO5^&OEJ#LXA.PgS[o' );
define( 'SECURE_AUTH_KEY',  ':9-,p=IdU/H`31M~eCK*m[E55a7s2_Ekf:utgrEn0!z6omkE1);K#mvW~Q,J?wg@' );
define( 'LOGGED_IN_KEY',    'L3zi|zTu/ ~*`v%DS{+|nG=qkz}?{4W).yfERwEg!j,Hv3PvMup>HF$,RCm(xp#&' );
define( 'NONCE_KEY',        '#&.ZW$]_gHf/<Y$zc@1P#G!?e;b{;h4`IZ+xF0HG6j~Y55ZUHSIi,,,`?EOo[+z7' );
define( 'AUTH_SALT',        'j]NJ&i-R/^D_Kx5rXNksaY]c}n{u|d7DD|:4~kCL>[0#wOo|,;7Un|cH[7A?^EzN' );
define( 'SECURE_AUTH_SALT', ')n6&ZG6p7l@R~Xeo>FvP9}>H|uKRKE%wGITEXd[JAbzD&,EzzlDOS%;L!^sR4l(;' );
define( 'LOGGED_IN_SALT',   '4mV@9m#TTO>$q#ZW9qM_ 7vGET`EXE~s!}b%fpfPK4 IqSr +?|1c=K@}JwtXxfi' );
define( 'NONCE_SALT',       'h6BHhXFoV)VbMW[<nEU1Y0I593CKGSSk wWZU2+I,N~,2!C]oLcsil@;V.4 ~1 ?' );

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
