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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '9IG6BWzYM504BYHI');

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
define('AUTH_KEY',         'Qu<D2 GVZg1/x5.9OQr3]J>>loml#e@O.|w/3X?&nI5/d6c8AHT4O&Ul-*1wlPM^');
define('SECURE_AUTH_KEY',  'KNa8?c_0PDpx#~5 )B4pq&<1QUFn&4Q;eJRo+][D#+ruSDG#<jA;efdPVEG Cikv');
define('LOGGED_IN_KEY',    'cA6Y_}*l8jy8v@af]P,m]hXB?b/*z{rP#Xyk`<PQ1yXh#JTrQ%k9-iZ;rY0? fJi');
define('NONCE_KEY',        'AS~g}`zeC6$VW(A o#$-q_J(k&K+LE4: &pilFnB75}XiA@&v2U_kh2u>n7w3{eY');
define('AUTH_SALT',        'j#V{rjaEAv}p<2!~XF=;Sc-}~`)HSM19_<~d>?}ZDkHf2q3T#L2uHeMNE[J*NI*c');
define('SECURE_AUTH_SALT', '8~1hPpcp$,&j0$)j/t^<;UJ}n.ADYjlC>J345?ZM~Lg0Z`@vqV<0[Sz99[P_%uc<');
define('LOGGED_IN_SALT',   '1p}t(f<FaSI3dO6!t#gF*On(`)+xK0x4*(Jmq~q[b3Ap{$; Was>Hi1h1!1T1Xvi');
define('NONCE_SALT',       '>R_HYYM9#BNU`B=c_/$4=Y?#D[n{%cx;5)!dYjw^}s[gt#GxQA(n{i}.0Z>D8Nv`');

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


