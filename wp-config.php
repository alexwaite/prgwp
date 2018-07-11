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
define('AUTH_KEY',         '@l6koodYPGZ]QJ,eMHgQ^KhenZ%^_z2@JL<2xYK?N{rihR!K:(h:HfqiPpdJVO:T');
define('SECURE_AUTH_KEY',  'AyA3w9Z#mCX -JEWqQ5ltHa0@cDGB*?3CWg.&JmnJ/m{xRZ{)eg}<X.7P<8bH@?b');
define('LOGGED_IN_KEY',    'GpGJuvSN%Rc3:8;l;y,np1Nm1E;F*#fNGshd,8pW28z8>eLC^iO$R`l-z|)hy0VE');
define('NONCE_KEY',        '1PYjT$16xA{lnVq+jei?WG)oRsd+~aJPZBm>vc4KxwO-4itpSUUasHn02yx[<qg+');
define('AUTH_SALT',        'JI%CX%,VVqTa_%kF+#60o:8t@=_x&doc*W:}U.)f!^eOt131d0d93:XJsFQ*xhI^');
define('SECURE_AUTH_SALT', 'VoPJqTjBy<T{d`^5:s*Z?wm Yi$C+`!m==C[+5GrYQ*97d13I&wdT>y;{tB{!B> ');
define('LOGGED_IN_SALT',   '4q`~N{FbFW.H+FTqV[^wj&~xJq(YiU38Lo[ RuogCGohmVcf$O|O1x@)-^%FVuHG');
define('NONCE_SALT',       '7AT%PJ]2SpNa6C-K/L1`|K)-Zovy%K[Kk$2l Y2~1y5dLz]k(*g<l2)Nl.Ek}y(-');

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
