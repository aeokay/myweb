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
define('DB_NAME', 'db1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

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
define('AUTH_KEY',         'orPQL?9d=<}rZ%@RI[d#%0?3h{b;o=U,14UntljwWN~0u&2!70ZYo.eZhz,=sj_C');
define('SECURE_AUTH_KEY',  'S[<W+BOU3`H0{);A?DI|;i%{AnUF~r4s}oro|GVYO<Lbo95Ny.(^OcIbZ=9j|uqG');
define('LOGGED_IN_KEY',    'ENg:4,PlQmVoKCb:szGsjcE*H[Rm`943WEy;TWd,90~~lvn5a?(.{/m8+9o,,d~4');
define('NONCE_KEY',        'jG5?q30nhek6I$KLD{DlUtU):`EdR1=UP&QOu7_:lRQ~wMiBdH}*<}Jvh}W=nnqz');
define('AUTH_SALT',        'W<JQ#iXFIusLwD bV3] n1H]P53|praI};Q{8+yeHeT..|y<@Xo5Z!D`QXe>UZ=j');
define('SECURE_AUTH_SALT', '.R#gRD%kb%>dAn/LF4q/KnvLw!0</m[RVdF483vhR%N2IF1EkXWb]o~k<_h+;Y?r');
define('LOGGED_IN_SALT',   'i.1D%,l/eMKb345/VO/o<4F,=i)[vC`!yhNFD}R^5nhnk0v!ml0xM907ad=ydQz$');
define('NONCE_SALT',       'ub^[@=X?}d.~QwrYn-IVkg*==Qh%}8KEI3Vunh3lv)?eTRKe#$8f.}8U4dlV)=~)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tb_';

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
