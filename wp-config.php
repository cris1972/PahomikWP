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
define( 'DB_NAME', 'mybd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'nYF31553)fi?}YLv!q!E`BU7]2pVchUZ i2LKsPIC&?G4XlhbEMC:ArenGn{tYA}' );
define( 'SECURE_AUTH_KEY',  '=;wuZiJ;[dD}>4T,}w2Hv_^+:&(#lX>5$ItDbL.,$b!*SIxB@%%|LCF*0ysTdY}m' );
define( 'LOGGED_IN_KEY',    'eH!2[7YX?]v(r0P5rrzV.=3/^g(OZ=yA}Bgj1|IRn-rl7&{m:T8Y&d~>l97e-f*+' );
define( 'NONCE_KEY',        'Y#)^4AT;V}y1VETLNbA9DlQPpQf{dq|oDLP&Pg#PB>yV$:@p!]}]nNJS_qg+]Ns[' );
define( 'AUTH_SALT',        'sGCZt~AxMHhNxDy@w6U^=yS30Zif-5cgYQ-ESuH|cxil$7P3hjOnCZvQ(RDykA|R' );
define( 'SECURE_AUTH_SALT', '.oW=@hS8u2rtg&>zPviu-h/*]*{RYz,qU)Nc3ZTO[+<}qP$>_A0]-ARFX.hbl4=f' );
define( 'LOGGED_IN_SALT',   'R:a6N}A0K&=QCsp>S9A4v3&^dAyrpFq(Yh^WUsikv2PBm:K KZgM5Diqi,34pHc$' );
define( 'NONCE_SALT',       'z<%wl>(Csc&`R*,[,&?8:ht2HB*I<+[b:p>bQG.(pj$/B]t]o<U68G-~}7r-?-.=' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
