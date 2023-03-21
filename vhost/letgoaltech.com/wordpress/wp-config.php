<?php

//define('FORCE_SSL_LOGIN', false);
//define('FORCE_SSL_ADMIN', false);
define( 'CONCATENATE_SCRIPTS', false );
// define( 'SCRIPT_DEBUG', true );

//install plugin no need provide ftp info
define('FS_METHOD', 'direct');

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-craft' );

/** MySQL database username */
define( 'DB_USER', 'wordpress-craft' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ddeemmoo1234!' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GmhsmoX2|Bx|E#e@SgsZwe+=%p/&:T|dCG9+Wyw{C@y_^M;E_on=a<N<1gABQ:Ax');
define('SECURE_AUTH_KEY',  'LR$gw{M3dgnB8a XlW6=4w8F>+Ct:(p|* Km9,(ayZw&C>.+^fiqB~m97?x88Q{l');
define('LOGGED_IN_KEY',    '(.U-OQSht1aGh--|;Wr_nEHx>Sc]DgN9& [uhOeDc]5ky@vUdC>.d+SV7K5bn.NE');
define('NONCE_KEY',        'I%-=Z4a&2,0*hXv4+klh|mrrIWsE|6zVufRRj|8GJ7U3a-7[6|RS@>=KE?xB+T4|');
define('AUTH_SALT',        'n.Z`+&)[}g7aB._BN%|h^rH2;YBDM$7{8BL]FL&q!K{xD*,Vvn%bu*Km@^q3q1_[');
define('SECURE_AUTH_SALT', '4!*@+@nbI>DvPM 2+z#n;-(3Nc-<K|z#w>Jo4+$/$XYc#8eZC]M/=j=!MO9:X:DD');
define('LOGGED_IN_SALT',   'ZKI|tf$.gdb+ghnF5qA#y|/I8!-|X.8v{Yb`/f9{mL`zpc_&J+0=qbUy%y%kR:-l');
define('NONCE_SALT',       'm.S|+Z=vBfl0=t}[gbl3C5@/_uk,Mwb|v2Z`d$r}kNfXo9):]yLO[lia,8f~n<@8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

