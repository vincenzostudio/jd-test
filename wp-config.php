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
define('DB_NAME', 'juniordevtest');

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
define('AUTH_KEY',         'y+pC2ay#YV4D_N;.YOX#@KH.X>4(ZZqm9r6hFn$.z5xl&Kr)?}VO :rR@XtdZoWW');
define('SECURE_AUTH_KEY',  'a*O|&k@{m~+(qG{F%tWk$E1WD?Ak^Mi:l<Gg!<o$}:v|>Y*x]@?Hd5BUY8(%!`sQ');
define('LOGGED_IN_KEY',    ',-H0^u5Y;YJ./$LXt_LA1y|E%V;%b(j.cPz6`B!wdJC0[0V^v>1u6UOt2k{XOy  ');
define('NONCE_KEY',        'iAP<CMVMp `JDx:)E[Xv:S9t#X^C`2&uTxopJzgWa#9><8TLnP`>%|~3J[r4!LoM');
define('AUTH_SALT',        'VW#Xv5FTVPWxNq7OH6?>)e(52>LoKW)`=E8~V(tXS~JJmfw<r[ALnfKb.$R*o**[');
define('SECURE_AUTH_SALT', '+r,to@gV-uA9[a/<8Fe7Dj}% VkSE6Jp+T#]+o7W3hHXPU{H6J}(W(!*L;WN@V,a');
define('LOGGED_IN_SALT',   '&F<JivN<G2bw-MNV]:GK2O-haLAF3heF~ K~#}1LC/=J~1(B:|u3nA]HCix.vC?9');
define('NONCE_SALT',       'X4mv3*dgcN;Z}{gA!>D^X7Z:YxbN%=}mqR#v.vuRd[9M4rM.Ml3Vrvp{e7bKK./P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jdtwp_';

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
