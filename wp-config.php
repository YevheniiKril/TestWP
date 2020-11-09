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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'sg<n?*e4D{o7p$7t&%KRc?O&UcZ:P%ymk}[ay:2wQt:Y?&eYdODUEu/0>>LAZ/zf' );
define( 'SECURE_AUTH_KEY',  '{fU)2]B!Q$jE7u@wqi;dSq@f7`j~]J=,nPy#b7<X@-G_*K6Tp<TCBr:ZnOrh+<GT' );
define( 'LOGGED_IN_KEY',    '@ 4K3hf M2F$B#.6<AQ5RL<~TXDP7PBnAf~R|*.#Iw+,$f]Ou#)*MV`GbbtJu(sg' );
define( 'NONCE_KEY',        'hh)Y@VL:a6O^Uk|h-`N;qSQWb%oCT0!PgAPf2O=pRsjb.I]@VNB.QzH@l&cu1:u.' );
define( 'AUTH_SALT',        'TtPrj=>AD$Oa8Ix(.dPsF_V;(q@H*xuB!^8.`G6jk{(V3Ps!B[)BU{@VZ8K$i1|$' );
define( 'SECURE_AUTH_SALT', '}:9U3L5JbFEU^]7K}TC@kD6=*0#8},B{/4]Pkexg3}<lRM@Z=!3@;wEO}EKtM Q{' );
define( 'LOGGED_IN_SALT',   'LM;]S17:nV!a,|&$&%^9@pUvkA=PM<OFFh=iqhe_Z_/N26bw{_ i98,!do3~HM5`' );
define( 'NONCE_SALT',       '3W?_v}l;+ubSu&T$x![z1B2gYISGM.TMMen Y!aF7U!09o9^S}2Jzi4tyaB|vhv6' );

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
