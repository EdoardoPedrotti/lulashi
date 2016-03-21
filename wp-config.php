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
define('DB_NAME', 'BSWP');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%Kgul+me>?M2Y9|X|82VO6bS*r|;U.3?+_hq0%b+j6Xvs:{]T4iqD5V$59KYooD[');
define('SECURE_AUTH_KEY',  'z0j/>*O^nP^uTN|-O}&ov(rf^fXqk8-%BI?l,M8mlTMbo+CvIrY;t9|R?]->q4!1');
define('LOGGED_IN_KEY',    'Cn>-[s)REL?n)%w&0?*J6|PdFZN,?OZ6dYnCNC9sY-|f]e?z9)-ZRIWU!1-]m|=d');
define('NONCE_KEY',        '*+P4bTeSSEl^q5=|SbWAqq!e$r5;m`E4&6cdNw+<:GfFS(%8h*#ljsN#tK]heYOA');
define('AUTH_SALT',        'k#z,{%?pz%C>LZK8i;+aqW1wxzF6`$]]-#y|_ vutxSX*ZA<o1hj}DZ+QtA:/Q|C');
define('SECURE_AUTH_SALT', 'z9?c#ca4e#0ySP7Cf{|-lUhl2~,T9m9Ur=ZEv! [_,#&:4atWpn$j!NfL8p)#Z27');
define('LOGGED_IN_SALT',   'Ckl46HM{{jlv,]U0uGv: hxNp3WVNQNu/Tlfceh(-oB>3>X11 7lwyYB6|&e1ql9');
define('NONCE_SALT',       'dq--Z@(k`(IH!)Yn|nOU#2p?_LYzdz!P[JZ@,Z_aEHU3-Tx.|V3QHO|JS_]cpqDW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lulashi';

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
