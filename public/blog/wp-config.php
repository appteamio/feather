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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'iwantobelive');

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
define('AUTH_KEY',         '8Kpa+2sUQ.]K:Z!qH0|y8_WGnWd`!1WO`uQuq/IGBTblH3Tj.|[y, Tjys>{ql0m');
define('SECURE_AUTH_KEY',  'x+?T?w=@q:*1X$b]SB)K_s|@/>$>bbL~$ _eUp ?~w4#6?jHz^q(JhJsuk6q?fb{');
define('LOGGED_IN_KEY',    '${-LrS5S0l3 #gJldNphXdyQGNcu-~}4i$8MtEN|kg+IfL?%;^~cQ->%&QVuhZrZ');
define('NONCE_KEY',        'ZeOfyJM?ICp:IqPy+q>2z>(jb<-3aBR !7`]th26>JAT,&mS ufVu_Kww!*.1p;|');
define('AUTH_SALT',        '%&|R!B<>aeK;;=&[:Fr2heg/+=u_?jZU@a.nFGo,Jn+u-5e2A]{y5/~|M[1tNDxK');
define('SECURE_AUTH_SALT', '3hZp3|%t+T7tdC9TFw7`]Ptq+:yM|{^-x2Av[o84rnInfY+~TZ>rZ?62d9[lV*9l');
define('LOGGED_IN_SALT',   '7|TCB=Z+;e(l upi:+TD?yx`;P#GOs5wsR,hga2[M=aY_()q!Rm>|2.H8^sm5GI-');
define('NONCE_SALT',       'R=HHl3o5wF*=/yCRErIDu9xMuw(4886_0fE!DZKN_(|}2;GG}v+XncS6_3zn=:$s');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
