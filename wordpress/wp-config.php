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
define('DB_NAME', 'fran_the_sugarist');

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
define('AUTH_KEY',         'X50E(3UB%%j-8!ADd[jtV%0|?Q}^k9[ (S;*H,gEtfTMTVh3/+AlJs78O&0j$hU,');
define('SECURE_AUTH_KEY',  'E7k8Y@fq+>)>kC!>X%)k^*9lQpWT-+s.e>|5o/y-hGh4Eql@IE_+dxf,:{b*I!FC');
define('LOGGED_IN_KEY',    '=-Y)9H9,g;puxk~3B?V}yIy%l_FPbNGPQ=l{WL6 FWsS>EW UgNh/yMyQRhc5$tA');
define('NONCE_KEY',        'QRX.jp9/}9!?L@xrua{MUz$aUlv9YnHefy9`y8k7<YyuxnNq#Rg$3VvkZcRlqYw#');
define('AUTH_SALT',        'mXNwK>e&8%[-GE]Q5G>DmO>zzACA(HFE3j7oC;r9{.iOPv@vKpW]x<PCz<0Xj@fK');
define('SECURE_AUTH_SALT', '^Y7AVkQQ[s>DEEb5{)pq2~Mn+z1j+OYA851`)+EKQ3]Bn;j1TZO/Ui+Z%~RR,D:m');
define('LOGGED_IN_SALT',   'Ad0e)Go6Mrx)amo`t6CSHPs9WtW0p[ms}NDXcE,lXg$XUI^Y.[>V;X|fKy[&u(D?');
define('NONCE_SALT',       '^TAC,D)$^hc)a}~<UqG| eW|]W+.U(nU<d.QCt#b^0kvG/yo1Go+0$wn_DJHp* _');

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
