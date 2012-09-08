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
define('DB_NAME', 'wordoflife_wp');

/** MySQL database username */
define('DB_USER', 'wp_wordoflife');

/** MySQL database password */
define('DB_PASSWORD', '1V,LTemFuh[Q');

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
define('AUTH_KEY',         '3yWVH4#3{0cs3R7([=SV#J1;v-.(ht^!]%]`m#I2,s- -wUa=_{*[r?O:8x]DX0h');
define('SECURE_AUTH_KEY',  '!z]B*L5QRT_r6(b#uM;+{TIkfiP~;l(-%JxsV-*dDycRoDI6e|Sd4UdYlS=dtcJO');
define('LOGGED_IN_KEY',    '9_B>r+7o/7.~(n~0QPn@w-j5+w+(w7-FT$Nya7|.OEsK_ZZoNR)f-E]E3n{UclD>');
define('NONCE_KEY',        'drqWxQM}2)9H;P:`*iX+2gtnD.+H5#qeU.P.gG4|y]dE?M+oqjoL N6Y-LyGJ G!');
define('AUTH_SALT',        'k~L(c(GMzr#d}^bZQg4de%VQM_]ieS8cW}C4Z5#Qtp$m/!9T^GAjT:Xl,/ez$?}x');
define('SECURE_AUTH_SALT', ')/,c7[Gz(lXj?L~m8x?hvKXQhN?ADh5Hn`J{?,y7`%&A4Yi5Mi6u&t)/CLH-S<J}');
define('LOGGED_IN_SALT',   '1NuoH@ZK^jH,yMf6|*ElXidR<8|{T{R|tV>WJ|::C;jfpS~ft6h`.!<EX-0%P&?v');
define('NONCE_SALT',       'p+?GJjv{,:~Dp)qUV+Qu[R=C{NY9C+s_hZJ{>9hZ_O3TZEgHpfqhGdD6[|.bo]b5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wolc_wp_';

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
