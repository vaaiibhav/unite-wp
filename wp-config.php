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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '$JWaG_MSXgc~:b?CDb45?xc@b ^>v&5N]/KT:m-~c}01Hx0TT1P/XTM_mjG+%l(J');
define('SECURE_AUTH_KEY',  'o1m0tzFo#e7?IyuyluIr7}&e7e=ps9Y~-V+J>wT(bm7[ymt9tmc@2m3P/5PmC-Nh');
define('LOGGED_IN_KEY',    'Q-#4~.Z:Z@$c/o@:+W=gsy[in?=vO/NY!lD(jFp%$4a<T#1;n#OXD;wo_|SIz>yD');
define('NONCE_KEY',        'Z8|<Jtb`s 4MyVDW$n;Y~q<2#887mcwJl?G),.GH|zPz^nJ`cC:@-Ix(0$1*3(hZ');
define('AUTH_SALT',        'lN@uyuCz{EK]o8p?XGJ,G=*zd2#H/~d0hT%{PpU[67x;:svn*}mE4s{u6TTuwsEw');
define('SECURE_AUTH_SALT', 'I<iMe!`|P#v3Z@lG %h_p.6/(kda+.UaGy;`mBYpl8)%Jdf#2>m(kC,KHKjka+x2');
define('LOGGED_IN_SALT',   'J/M[`;W:NXmgA}%JO+:4BjB0_{In]d?|TU6eCBdXf9G`Q2_5d]X>lbb5J&VR1{J9');
define('NONCE_SALT',       'fjV7`+J(n|~|^lWW$^iLN4AaaWQP)<P[@ 9=hf3&ihCWC+a*M+LVtE1>K4H2F#Z ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
