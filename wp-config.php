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
define( 'DB_NAME', 'fitasme' );

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
define( 'AUTH_KEY',         't0J0.sJ%+CNTdWVVW0$|*CFLq=sF%vTv20R{f8`<zcAq!UIy`wx{PFI@=_IOa9at' );
define( 'SECURE_AUTH_KEY',  'G5(?)w4HK35bUcl,qFmSEN*YLFnzwP~%OFuVY+&Pl?x`V}^M-AK0A6U_XuRKNYKE' );
define( 'LOGGED_IN_KEY',    'hKyWqJ(sAoH}TQ<_q9nSwD#G/h<gXd_!AL0F&1XCNq259a$Tb,RbS]FqsW/N I%+' );
define( 'NONCE_KEY',        '#BpO*`C+A+(C[qpyWVBVb(gJ u|S`aeg>,R#mKN e=N]Am#W<?xzsB<Fc+VZ^br;' );
define( 'AUTH_SALT',        'X )$o;4T]Ce).ZW,9`ovg*w?{${rxaYw/hOoigDfiuX+GPs5h(yk%8?`OzH@H^zg' );
define( 'SECURE_AUTH_SALT', '6_dIa)1/EfF,BNoaORrqDhWVYP}KBR2CHXNQw}tj?v_J] k2un*fHu|:A<APYtzR' );
define( 'LOGGED_IN_SALT',   'pHAfb Lj8Bsc2{6MRB@N9_^%%{pG_jEz7S5+N ?1L`{s3t%ZY(#3Hqkt/;TDl_n&' );
define( 'NONCE_SALT',       '[H7|H0JZ=/GQY>S#py3eTh-l>oa])[73Ors:Cas?U|kidcSPf.+,uba/5%*IXn^,' );

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
