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
define('DB_NAME', 'CustomWordpressTheme');

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
define('AUTH_KEY',         'OF+[Di;,}=^R-J}|2F |v0I)HU2<ka6%G1IlZCfXW&@D$eNijqJ^Q&RL?qD$v*zg');
define('SECURE_AUTH_KEY',  'EZw+1K[E)2Z*+q4JY4L]u*R>iV(1R1B6PB`y,a-r7&+LcfPHw<+G2eAl>%87Y|)G');
define('LOGGED_IN_KEY',    'p`f6Ipqa/+j`jr]2TBpFKlT[X.n>w28@:I1aUph|r,I$Eq#R.5&BxtswFy+McUa)');
define('NONCE_KEY',        'R@/0Z;}jQ3|LZ/{t#a}XZqYKeP_rXgj<:PNe98 raLWS<NEj@fV6i~[^DXqD48X.');
define('AUTH_SALT',        '(,M_.WTu$D_xa|Tj39}<.vLqF1@.%TpA-|tM,sO4I2H~3`MgB`Kp0Pu`abB[dEla');
define('SECURE_AUTH_SALT', '0B0O F:@hkD7@1PH~<eu|]W,P6b6D-]a]#|:!n_G7:28cd3YH~MA8)g1ax]$i/at');
define('LOGGED_IN_SALT',   '^a]:jn|jc0wd+B}C,h^k.anJ?P,+w%BFENt;8EZH|ja!AP;AJhP;D3r-;t-$?hmi');
define('NONCE_SALT',       'RGgPBS9{c_C+,~N7~/w|GszLF-e$Fu_S7Fk,X,w&QUChS.PW.E-|e7t8</.>Yj)]');

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
