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
define('DB_NAME', 'mysql');

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
define('AUTH_KEY',         '%S&8epT2Y}Nxz9)[=UWTBKq$QQX~_*P}|UAeWCw~Wh)JM&XjsvaE?X0=?}Sab4A}');
define('SECURE_AUTH_KEY',  'O jPY/o ,!P|z[@B:15<$re+p/NKO8YI%]$&/}}}[: ;C*Ws?!&oxX7X53F0pp2J');
define('LOGGED_IN_KEY',    'Z&KV;{ABzV!*VyZiP-&_@08jN[Fkh^r5rq5O7uSv)GawbZ:c}=}TuW/W~Bg>b/(~');
define('NONCE_KEY',        'Lb(Yg>sB<Ri)DaSS@czRS8S$lL9YEW{9}ekXT6CwQtb?ya*.>~@6.tH))*~%Fv]K');
define('AUTH_SALT',        '2t%Be5z/_{QMsGr$U7YL8=l}c!cH1_9M?_3zVHzIcV$U]{mda#_zCJAfZ8vA6~tE');
define('SECURE_AUTH_SALT', 'P|4!]:YIK)giU|/n>{9:cSeaIdTjI)R6}fkhh7*}bsPBm(b+`Puh48h?S9q#nnNU');
define('LOGGED_IN_SALT',   'MN>Fxp0N,7WQh~e2nKQ]e|Eq:RMpA}L1<Rb7652B><||7Fy T{z5.6A:<7@DRxrZ');
define('NONCE_SALT',       '?gdj4+#L0SP:lb.DtV3A$&Gf-J9Y249mLR@ Foe8>{R[5v1to^<S;CSj(6,I~q5t');

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
