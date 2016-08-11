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
define('DB_NAME', 'bwr');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123@cms');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}4|Apy<vxqp04U1KgW51+hqw@<%[bAW$?->vXZ,),7-<LRc_`b%Osog9Z,c@0F+4');
define('SECURE_AUTH_KEY',  '61+p$d=}vFr-jEP<t[~:ON^vKIg>~1LX)G.Mvu4/ZB@0|*38fhA+a>]0h&8DWvL6');
define('LOGGED_IN_KEY',    '=,3S21g?%8y|}16wh~:::9cf^AI }r4dues9{gP|HiB<Da6I;;~}3$co(<o9-`b8');
define('NONCE_KEY',        'Sz%PS}{b[xh.a]^le 8Y8=1zn/?+nwX[Zl|1ob^0RRkL(-9{2`_v*Q~z!YoY8q/F');
define('AUTH_SALT',        '&=F7mYu$Ug{=d=kYJc#`J+UtD/;qoF@&*ve@?t<Jd(L5#CaZtEN/zadyAs?hy5O;');
define('SECURE_AUTH_SALT', 'qoZ@:@!zkg}@PHFH|i1c9v6Q.c.CZEgz5Ua_`H%!$O;&Zs=bqr[8&`vD*1z#NdOx');
define('LOGGED_IN_SALT',   '7SR.U6l_E.0>,2Bc ,-.Bf?J$-o#)lUt^p>O(o66(X-</k )[WBJ[bbs_K[r_NU<');
define('NONCE_SALT',       ' #S/F`@F : Z_OPPFOj@cxg&u-X60,h`89C*tm3ivxe$H8/y=[c?J6x nq]>uz[3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bwr_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
