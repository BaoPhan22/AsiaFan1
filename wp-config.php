<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'asiafan');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y7z$tGR-%;xlftROuD:WJZFwApmUU` =NbAXTZ^%clVhtEt<xCG3 b4M&dwm1+99');
define('SECURE_AUTH_KEY',  'gmB!O/T:^h#wDa#.W|zd(0oIRxn^j&S1iN-y#XvKeu:,:2owC3(*CfC<gOPF&yEG');
define('LOGGED_IN_KEY',    'oq(IS3sTqM+Who.vncB`PQdr  &_nXxEH}M3C/{>1xnqLF3[fjTqgnYZmJB`gMg6');
define('NONCE_KEY',        'nh}YKQ$p2f$^ow?-/>1`BAD67;<!(HT-Zr`nOe>_?I=Ego$7S_,daE^#Y+Vg%w_;');
define('AUTH_SALT',        'Aze_]/xq%a-f^Kb1,4KzI2:R_{*aGT1wD PJtW0eBr?|PWpp35$ HeJh4V4VD{T$');
define('SECURE_AUTH_SALT', '>xBUih&-{gCltfbvMp^}-fl/CW71+oin|U^VNRd!YPC5d6mDcMJ]l7x`Cw4v~Y/D');
define('LOGGED_IN_SALT',   'MjL0jsd_%M2vvGaY~)=)fK-EEVuxh>72-P3ZN`%TzZG+eLI(_]=bCidE)`>wM()f');
define('NONCE_SALT',       'js5N()[H=|bzhr&~ONd0Ven&o#fi}|,|YSK+T%#NO@J>_Kqv2`{&fSb=;w})B:sj');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
