<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'codegurudb');

/** MySQL database username */
define('DB_USER', 'spyshiv');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

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
define('AUTH_KEY',         ' .Ko#REy8Tk?lg(:?fs]cT&Bqh /vt>OWNdP6CtW{|=#RU=]2mJ`!`{;mwH~WZsb');
define('SECURE_AUTH_KEY',  'Smq]I3U~#<BG}oJ%`(jQ60uT8mnb][]SvLg,*)d,],:Q+{Cw?Wbz/FvW.r&8r6uf');
define('LOGGED_IN_KEY',    'Rbr;my%]#$^o/Q Y`wF~+da!`10zV{|<OWMpe ~*LEVC1!P2(2pSP8TKhj!1{k>`');
define('NONCE_KEY',        'rf72s,+*qc%Htbacj~1|nHW`5,m04lJ52 &#k?5,ACF3#,t{<f71 }1[F3iXbB-8');
define('AUTH_SALT',        'k6moSWuy6j](OKN<D{O?4ClJ+pPf` YKq&{|C8l5cU7WW1A{#_y`uk0pbqvW{)38');
define('SECURE_AUTH_SALT', '$]ugu@fDv*BXieSl[}* iR]d6oK:F#RlrF0CGYZ/|/>oz@WMb)#Is,sV(;$V6IQA');
define('LOGGED_IN_SALT',   'pZpY8Mmmfy|`dyv?9#&.TR@`bh_&lsm(EnogRuj}cTjsi(3C%hh4:K-tMnUpv e!');
define('NONCE_SALT',       '/h~< k|W3M,+>[`GD|$HTK:fF-8M545<C0[Q!s,C(hr{?VAcRS6)X6HbMGZ7NI~2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cg_';

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
