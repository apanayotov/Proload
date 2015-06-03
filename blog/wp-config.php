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
define('DB_NAME', 'apanayot_blog518');

/** MySQL database username */
define('DB_USER', 'apanayot_blog518');

/** MySQL database password */
define('DB_PASSWORD', '(lP(5L9S0W');

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
define('AUTH_KEY',         'hexii8w2lahvgthvyuafluj721dx4aqg8tmosaut7rqlfwctr97g1ugsvupcisiq');
define('SECURE_AUTH_KEY',  'co3tx3iaoimywkubvgqn01rumhcxm7fuuezvvymew1dpgkwxvmp5he4enh3lctkd');
define('LOGGED_IN_KEY',    '1udkfwt8fbasu04hv4jfbkcsgxcakbmkhbmxuns4wfe9ypzjt8o1f9a7mku7ty5g');
define('NONCE_KEY',        'iqcatmzkcaicgmexyudyg6belqlrru8kgxv1kfgvrfefa4r2od5movcvqnl6v2nc');
define('AUTH_SALT',        'cl2buirctlh8jxykncr3oa0sbxdezbhiqbdianlocrko4r91nqupaygehe7je0vi');
define('SECURE_AUTH_SALT', '9zira183wmoxlvefl5x1k8lsg9rsvt4qzwcpu9q0bauqqok9cg3ebmtxo99dnvbh');
define('LOGGED_IN_SALT',   'u9y6w36nbx9zcc2sfeddv9jetbbhqvacv9iqvzbdl8xmdkxxubjbitol6uchlh0i');
define('NONCE_SALT',       'fozkfqlhn275vs9ing4gumzhdjv4kiyocwfpfclkomjb7iwegzjx8imcc9hswhjj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blog_';

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
