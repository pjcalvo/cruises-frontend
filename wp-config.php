<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-cruises');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '7-TPrtVU-!Q=b4CZ,qi/<C(r6B S#FY]4+oH1 6@RJQ]bYOm!S%D<YIN#BFdjKSN');
define('SECURE_AUTH_KEY',  '6*Y5m>Dp<jaf*![9J7[^60:([2U@-,<6tRFWSX@v;*D z@OnXht<u^W.5=DBiy-6');
define('LOGGED_IN_KEY',    'EgbA;q`lW-Xeynw+&g^^xH2lk&io~J-SSR?my<#Ok7ll/5YJBrn*$RXltwV}onf@');
define('NONCE_KEY',        'q]m8:tsC/esoys4(VkL!J?_eG5{y w/s*:4,+sfSj*gDja9-> (o;16yBPozaQc3');
define('AUTH_SALT',        'o~^j$1^+rgX8hQG 8q&icC~A]Oa2gEWL}W-9<|;MP|@QAHl^hK^L?sw|9a&):07p');
define('SECURE_AUTH_SALT', ',#A?$NNR,=u.[8u@G81@R%qM>?dHKzQ+xD<h;J9!4_62rn434>40=CeD|A[imT2I');
define('LOGGED_IN_SALT',   '$5[LK>oG|P>CT8d=?5f!CL?~&2WPG|[@RJs558]}F^?~z]Sed2x2cjBfm*6~]ktI');
define('NONCE_SALT',       '+BsX?P7rU_!Xm.2hiLZ`pR|n))!~>X`&kYp6HLT7<ty>K*n:*]|-j5_FqF2{^#6!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
