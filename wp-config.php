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
define('DB_NAME', 'slowdata_ied');

/** MySQL database username */
define('DB_USER', 'slowdata_ied');

/** MySQL database password */
define('DB_PASSWORD', 'gElato213');

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
define('AUTH_KEY',         'ij|^%#GVB.%PXLv}4tR}N?0aNtdNA@jqHY-eLYx(_@yoKJ^ekA}U<0V-I2<wN^Gs');
define('SECURE_AUTH_KEY',  '?Zw2G[f8/OL:2eE7N0*-9E{M0t 1/tsGNqgyR*SqT|hD1PF~KH+%5iir`ln!i)X2');
define('LOGGED_IN_KEY',    ';TY!Pad]stE3f^jwZgOFM|wz#q<hh}b9*z5`d<(9ksu<8b#3`J63I(+V?=+(7?<C');
define('NONCE_KEY',        'DScDJO5<)~cglI-wQmM=)^$y +xnGqXzw@ f=+7h+77dE8zeh{N2y&[DBQ8DgAzg');
define('AUTH_SALT',        'a(~v=Qyj<f%9S)ocP%1&2]tw:HGWzg?OlgKaLkvl~2YB.rk~>AcQ+]!}?0KLajxn');
define('SECURE_AUTH_SALT', 'Y N!K/kX%Vn:&rv14]863$.X_teBZH4&q8=z,VBG9U5@J CC%Ap2SQ@|v}RjiWq|');
define('LOGGED_IN_SALT',   'Keh$8GJTw<>mx5^YvC4Jpv4X79:}@ym[vLJui1=@@LDuT;p!O/;.^=Ho=m>4>,[v');
define('NONCE_SALT',       's]L~ i6:YXOtMxU)pPfqk>7nas!:t 4q@A`PNoC8#+&_kBfGxYE0M<d!o47@UFjG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vi_';

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
