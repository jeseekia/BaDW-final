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
define('DB_NAME', 'jeseekia_com_1');

/** MySQL database username */
define('DB_USER', 'jeseekiacom1');

/** MySQL database password */
define('DB_PASSWORD', 'tnV-MdtZ');

/** MySQL hostname */
define('DB_HOST', 'mysql.jeseekia.com');

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
define('AUTH_KEY',         'rL6(YraXUNaaU`UZRr44h7A08;!@mGEYc)9c`ae_T"IMnnl_$n`z|q3qtEnddc+o');
define('SECURE_AUTH_KEY',  'h3rwPy|@FMH1WL$c0QA6i0b1z1u$QAr8I|j`5pISJ$$0p&i:Hkb5/DuXoQWb)z?X');
define('LOGGED_IN_KEY',    'Nn5&zmIF55Ej:3hXGvL7!8d8AO"mq)q+XuyN_5:W_jWt(rdQhGjo*CmP82zZ7eh^');
define('NONCE_KEY',        'H&3HE/Ng7B*J!v#(FNVQG^Z0**RWRI^ky*8MhN~Hx01A681oXhwWZ+9~Nd:?gpcX');
define('AUTH_SALT',        'L37k6hCn2wKbhsvbDY@xyciHT|rFB~cC"yWLez3%*s"*fZ~~4F17kNXocm:Zs+(T');
define('SECURE_AUTH_SALT', '^USzPCg@wJ6^XH%LX$_lu;FjFkoT%&2%wSV*uxE5D%_UE^r8KrR@hEGx#Ovm`8tN');
define('LOGGED_IN_SALT',   '#A4sl1r3;Hx`;+KM/g02hXDtYd3!E/;/4"c&89$frHITH&hk~|+n_B1UXrqL;8~0');
define('NONCE_SALT',       'QO%X3b!tKWA$Dp2X%F)t?vi`dBk?E(9Pu&@bP:jp813k:$vTX;m$DK_G0E!#Fz6X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_3bzhz2_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

