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
define('DB_NAME', 'sandor_design');

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
define('AUTH_KEY',         'UWm5tZw-9cHj<cRkmgUiCb,]]w>-4J6B-Lq,<G?hlJO0_#L:2}.2)YE|h T:HA$Y');
define('SECURE_AUTH_KEY',  'd2ZMxud:%sXAqp;01*09a6j=@E2#P@=S!wt~{aATo.5?^5WBzV*fH7R4%m0OuP98');
define('LOGGED_IN_KEY',    'H-=Y-!?g.>3)/bnDKc9:.ITg^Yt6Hp$;jfubJu6w/q7Nu vE(T.)>O`vC f`_T|:');
define('NONCE_KEY',        'Vp|]*@y!&DFw|x!W+M%[#2;Y> IJ[-&G9V$Owx#ilWv5Td< zC-S 4E9MkL|Nz_/');
define('AUTH_SALT',        'k#83fY%|Va8tRdr;s(Qdr#bS$ZRz>/n~l4r?[B9U=)oH-qcSm6@IWDS1{GJj)[T,');
define('SECURE_AUTH_SALT', '0O!F+?eG>[EEw0@sSik`v~&ivg~$3GsQdx~@k>0V>g1mFOdfXZ{ 5~dtd5H+2,:i');
define('LOGGED_IN_SALT',   'p7zDvkLot}.bPN5w1q`TH=Y(9#f2shK1N/rVqf(YL6pfi,k:ma)AHy=W%^/:+}u1');
define('NONCE_SALT',       'II:DmP12ROz%?Q,x,%}&Pw>QuI~g=7JX,V%;D*.Ffiuyq7Tc[<qzJqKUg![8%TJc');

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
