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
define('DB_NAME', 'gamemaxbr');

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
define('AUTH_KEY',         'F0yX,{aV,Y:JFLJTpn0.P:^uUV1g-N~LQ>HPM5L+;0TQ+F|PT}QSAV(v_laT*]q`');
define('SECURE_AUTH_KEY',  '++ac)SW.BIZ&~t,+cb^A;s,}%o$g,(6UH)mZPw+n_}:~u$#lD=Z9P9)f|-j|4)9r');
define('LOGGED_IN_KEY',    'J0WD=l`+&/z~@$D@xL !m4dEH3VDnyw?Och4C)ep.;y)SLo|z*G`t]fvgkV*;3Al');
define('NONCE_KEY',        'P.6!V-=(tZ_Ky5j?qzU#$5y&^RZbRZ7HRFgSdZt5%`:iv-.]zEb]yegcV8ZB_0 R');
define('AUTH_SALT',        '2zT-4e2#ZAXh}?K;g8P#dFv^>F5k)NdCD$]hRbU1]|}`?b.$/!nk(CF)0R~h!K5D');
define('SECURE_AUTH_SALT', 'x.^>)8j4sjzPW~Cjfz#gNRqZ(tmI0_3WA|ZW)%MF5R%S!sw2;>/D`O<2p&[B~.~[');
define('LOGGED_IN_SALT',   'pSeMlgvv|_pd=0uE`HL>:DY4QvU9jhk<SymnD;xvAcne{1L9}uhx,L eC.vLH1Gg');
define('NONCE_SALT',       '^|XdF{ 3{( |~ceK-D-[nqL|YqshkoR|t~h>.xW-V+$#UA5]{?|x:P^i*_4_4PIX');

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
