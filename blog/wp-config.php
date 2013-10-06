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
define('DB_NAME', 'permianr_blogdb');

/** MySQL database username */
define('DB_USER', 'permianr_blogu');

/** MySQL database password */
define('DB_PASSWORD', 'xEJA$hk4nn%h');

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
define('AUTH_KEY',         '|Lcs$&8,BOQDQ5{Y{Os #i*sgQ8C$Z46J|,H|B-C8.a<``|qKUJ<QPF8z-yv.Ou.');
define('SECURE_AUTH_KEY',  'g;< 6IHCdCrGiu-SY+,/@D)R`gWwN57G7!#|9OhJ[qh.|!~VpvxYcvv|X)@+z%G5');
define('LOGGED_IN_KEY',    ' TEmLG/@*e&Lr5z}?DG+l&P6LA@:-KkK+7Hy]sEh|R]J2IWcj-Lg~[}6ZvL^$]|L');
define('NONCE_KEY',        'v6_}+/{W5$}.t~;%eHW2e |/9&M 8J>rASwi[S_f>$+gRv/6[uxt@X=.{C0Jxd[G');
define('AUTH_SALT',        ':!a)i](~,de#09K|>Y:RDqU(e]H2JbV y:QWjkI6anL|CS;SfOXS{n}X,.>G42^m');
define('SECURE_AUTH_SALT', 'm5%<IzECO|rd4i,N{cg09% _r{nC/JN+y7q~v|k;8I6_Ug1rTuswNrI<p[P.Q88V');
define('LOGGED_IN_SALT',   '`4{Ci,0c+SzCs^vp)nbK|N{BZ-7~V9wh Lcri|^5=-giW;D4yUp{G9=S#f>N|q>K');
define('NONCE_SALT',       'lZs2L>qYWgy-CQXt=+yOXU+>:-n}QGAzQ<aPqIf@fc&%1;VrCBHI9yO1VR%l4ei)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
