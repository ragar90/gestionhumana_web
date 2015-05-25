<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'gestionhumana');

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
define('AUTH_KEY',         '[Lu/OT[-de.J;#&TPWmq/X5p8})$/Z7j9}*WS7sGM_IWK> rRl>yF-R;0~BK-,(g');
define('SECURE_AUTH_KEY',  '4&oqGR-1ey4<!XN%,]t)]_~.TRIR{x=c!qX_oh-[#QW5EbTVoN5$B[e?iA7fsctt');
define('LOGGED_IN_KEY',    'nu s#M )eR)%}Azmzz2<<Q=7&RSeCc/XcuB^0||1cNVXZ+(]cvr8Dp7):b K9%Th');
define('NONCE_KEY',        'vM08->(-A~7w:p|8N;)W~{- 6tXqFLDH(MxT5n@@A9Rpu0EqM[MA&y3400haX.rI');
define('AUTH_SALT',        'Ah#ZkN*18f6Ys5h/ToB5ijKR^-Cm<KtpFw2!M*|Q8^&_8jl2RP/E!/G!(kL=9_]G');
define('SECURE_AUTH_SALT', '2.x[hA9ft_)Q;Te.2v1EW,4c<$ZZ9-W_-%J^ga|069*,T|wilBpnq+tHWfC$0|8y');
define('LOGGED_IN_SALT',   '>M/i(.w>f0>^xA(IOf5:7<X:5Ujx+)1+k7:.1C:YX2KBo?Q=~v.qvp qcuZ;sw!A');
define('NONCE_SALT',       'B_tZ0XukmQP|9QkQs7y!Ka@?07^-z{xI0+2W}H2otr8gB.q)V%/lNXiFw)*2a8SY');

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
