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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'QC:!MlU,J:4y05{-^b#d{i#=X4!riS;rZkO3<uE 1Sz[4>)dKs!x~bQhUS!Ahyj!' );
define( 'SECURE_AUTH_KEY',  '= slRW1R:!B;]?x9Jh9J&7Nm<M#O|HDFc[)%R<Yd!xSOiX(VZ=uC8-Gj)&i!$gCL' );
define( 'LOGGED_IN_KEY',    'tNa:#l4GW/G8`E _sn3-sw|7w2w>[XNCPL3/0nr,FgGt`@g&A F&j7w=OL;~]Zc|' );
define( 'NONCE_KEY',        'n&8>5z/9um^v)O~^@l<:Ht2e-~jj72328hHiJOlR&1}mr,X$|#&r(oXWqE=f{3ea' );
define( 'AUTH_SALT',        '6cdV}6gc1*bR8d;k~=F[N:Zk;Ky!sVw9&cXzr+z|q7<u@*Ff+vhZtn?(]Xx3Jo7w' );
define( 'SECURE_AUTH_SALT', '(5fzO3/56t{Ip=H17BI@Ei0FN6yDgSb+1?;h]fL04.J|FX1 l< w2e5=+=+PG!8,' );
define( 'LOGGED_IN_SALT',   'L9_6.vK)=C20DACm-h1(r`&l+fO8_]3%}hS^jCUEDos,~b14csr}(|xCW>4J8]wu' );
define( 'NONCE_SALT',       'g3R{%~xF7]=jXo%?XsFI-P5=la*qWBi.nV[yBwQ[W7t|>9ELr1]EX7MUTVeZf<a6' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
