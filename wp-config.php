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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rathi-demo' );

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
define( 'AUTH_KEY',         '[yCOi%6R=j{iYY46XGygo/q~_kfld$@,g~O:Sqd6AZ@( M`K[mZ] ;3(1yDN/rN>' );
define( 'SECURE_AUTH_KEY',  '+Rwl)1!{v1;SL(C>k3 ~y,JMKROr3O1icrW_M]X5(C?qz]x3w9<9[[q%T;<%p{4x' );
define( 'LOGGED_IN_KEY',    'D6k7Hrp<]bCT}l;XUH52]-4|UQ6SIcT R7f.D($K@GgZM=Ih`9`6qwZ;^,zlN/>f' );
define( 'NONCE_KEY',        'O4yL=[qt6|RD<+0Zk5xB$! =L,h.n&K#TVxSusrr{t<?TBPM4l%%Fxj&`/o`~H?S' );
define( 'AUTH_SALT',        'k3DiVv&phru!-rwkDr}G/;g0gdTTgS8NoP[S{BxwzTkWhp:$/p`|P3AZ>L8`>([ ' );
define( 'SECURE_AUTH_SALT', '1w},q-U$U* 2H@X|DxN{XLkP;f5J<hg*<J|rLh_DD/F,{#]dJ!&w]Pl[@.Q!9@)Y' );
define( 'LOGGED_IN_SALT',   '%_li)]YhuVg:>|V$&^LRw>4ZQllod8Ri@i_!~jb6vvm$YDZ`:oz]?(0c*Hrw?qTI' );
define( 'NONCE_SALT',       '*>zo5%KmA1_%OV&R7%NW(,n<MWlCG;@nJeJlg+Ej2?}f66>i{ 0hXDNku{?#X{ F' );

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
