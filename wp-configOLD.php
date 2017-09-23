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
define('AUTH_KEY',         'c.&M<sF`qbi0GuKiz?o:n;|mt/D*Dg93[?m.Sgw<wQ:W$Qy!gawdE$!vi>RMhv8k');
define('SECURE_AUTH_KEY',  'ljl2*aLNt+2%U4v^RT.{H|&R((=,zV2P~WK9`j*K)0dOQ`S>Q<Jx{X:cVyM`/%)c');
define('LOGGED_IN_KEY',    's,b;x-a>{!_{ ,pOJjlEb <UZU+c@/&rVy6Su(&lwo2Ku{4.teo9&):966fqtkQe');
define('NONCE_KEY',        'XwoCI=kJ1.h#A ?{5V=L$Q<k~X9~W`%wf1VimVwJB0m4eZ>aLfp-4kb; V4= ]kF');
define('AUTH_SALT',        '?)Hu o&V?(V.pnT>/QZ qkemEA(Z~Ks::$dkuo:`OFdBOFX!XJj+H@# r51},?v-');
define('SECURE_AUTH_SALT', '4a@-v[X=dp?Q2t3aJu)&0p3S,>V8@yOZ:Pk(h1pRq =)(RA68I,$ml5:,n#b8|@l');
define('LOGGED_IN_SALT',   '/Z,8FM|`+(oR;d`F}&Eg<isFHY#m3actNA}LbBn0_CWQ-*/v^.[IgL*DDs:EMIO3');
define('NONCE_SALT',       '9!MyaB^|wtG;sWgC-;R rQ86nJ,/fS8qB% s/q:5a4l^O EV&faXM<r`h}p>8jDy');

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
