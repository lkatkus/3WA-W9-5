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
define('DB_NAME', 'wpDatabase');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'ALu;bwE<J#&UbFiI-pSI&EoTVMe8I<W47ltz$#~/lkfoZ#.M)m<,2WN0kZN<c!N)');
define('SECURE_AUTH_KEY',  'qH0axKFDV1*4j(6ac4J:aZ$WICjq4>+><JGR(MBenylY(sH9HUQL/F8.}h!p!hPs');
define('LOGGED_IN_KEY',    'CulAgw;Jd@`G3jXqjvM7}{m|hTM4nbq2G)uSl*?LaDjK!H@A8]seM)lJ0%-@Jy9s');
define('NONCE_KEY',        'X3M{sN9pDWudWzX^+9ob@)zAf69v@8+tH.yDaV>dU78S|>n>=rSJd k[$ev*iN*~');
define('AUTH_SALT',        'OX.>@zi!;Zv*{SwD=FBk-FO9G@M/?730io/q%/MV{%V=<(M^s*H%tA`IRCgd?f#V');
define('SECURE_AUTH_SALT', '7m./i^[_|0Ll5K0<t6_I8C./iW!OQP^3bm{[c;pUI/pCy2Cl!};R{n L_Yo+?F~>');
define('LOGGED_IN_SALT',   'G6f7!O6E|o[ni5r!ai}V}E@L !VVGe]&EfKo,~0L%GSMk|rWNZN%_W>Io24E-7{q');
define('NONCE_SALT',       'JqH5LU }mLHocz7t]#vvc((e-b5ud]%e+|@X|a&.-Wv(6chJ}^tSi=53tx/*v>&2');

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
