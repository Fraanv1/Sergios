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
define( 'DB_NAME', 'sergiosbd' );

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
define( 'AUTH_KEY',         '/:#W*lKix@?:[_<w7PTRvzn@RR7sf8 bs8C,EG@G1u,CVlp_JZuEQC~(}VKQ:6`&' );
define( 'SECURE_AUTH_KEY',  'nYm4B ZF-vab4,jKo$9<ZVTr]2 [nv$tJstml3w1ocsZfuqsw-C1pkS7Y2%}*|i2' );
define( 'LOGGED_IN_KEY',    'Ov)m0Et/>?(kH}cM-Rud}[w(51umA1#4p,9uV+_bh3nk=rH/1^}@{G)B<:2+aOZ-' );
define( 'NONCE_KEY',        'x-752AL+mY+]y:$@5ej;US(xxqlxt@VpD.N[&y]PA{mV/_3P;@dAlUXwFT^bcAH5' );
define( 'AUTH_SALT',        'z%q[%>y)c*)ED!.yp7w/+7KT%ubvr$M7j3X;]WB]8DvWu=^FN2V9x-6h~ijso=F9' );
define( 'SECURE_AUTH_SALT', '|aY~e37>+sc<6QZayBQ7EYmJ{m2=+6/)jCnDc$NK[p,P5iwhXqGwqK&3#%Maqe{d' );
define( 'LOGGED_IN_SALT',   '&{V,d5POS.Q*^Qf? []Ge93$aRiiJO<5)2-?-yYi827n.wt=NXX-O0QuY(.c%{aw' );
define( 'NONCE_SALT',       '3%.a]=rA{1IHm7]eK:L)S4#:fn,[Ssh7^^=&uZKEkKh*<S!qHgs,SADDiKdg(rp)' );

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
