<?php
/**
 * The base configuration for WordPress
 *eeeeees
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copsssy this file to "wp-config.php"
 * and fill in 111the values.1
 *
 * This file contaisns tss1sssssdddhe follwwwwwwowing configurations:e
 *dddd
 * * Secret keysww
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */111

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u791300719_migration1' );

/** Database username */
define( 'DB_USER', 'u791300719_migration1' );

/** Database password */
define( 'DB_PASSWORD', '3&UKu~6Uh' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'gc|[nu7azfd3x8ZlHt0aKc%Ml(^H`tr9+;qUA]#mWu=mkt-TBce2BNuA+)8eAC!I' );
define( 'SECURE_AUTH_KEY',   '4>VJj`XJNpB|*q:K#g1K4c`_:]Lr@wauM-&^0s9T%{2h#+4bIdo){b%I_|~vi$nR' );
define( 'LOGGED_IN_KEY',     'C:D_sFf-!F<WPU)T6-;$`l$-,^p~z p@yS3_i]rk&Vv-dd48yBH%{|@;m[fNDu<P' );
define( 'NONCE_KEY',         'Ac~nn3_f{<4sZ&qJDsRl9; &ki~7KK{(WxLtNEMdZm<)lWc` 0>qx`mY9Jg@,M?U' );
define( 'AUTH_SALT',         'W)2XhFijnZ#~r<jOY/@6O?;}(Bl6#42MNBY]LBIcfFEsa O1>gPi+}I&Y29t4(2k' );
define( 'SECURE_AUTH_SALT',  'ezW4BQ@N[V`4/B)0je[TdwEPTk0Z;Q8;D,B|W`VX:_$ln?Za=p}??NzfpN2b=q|U' );
define( 'LOGGED_IN_SALT',    '|Lu{-SQh62K;qkR=R@@D aof<#*!B3^sJm_?v5QN{rX!Oz*L;ttkpL`KpTOkbv$x' );
define( 'NONCE_SALT',        '+kE$<t*ToVyl9F}_s (oO&NrrI6IO;TnW& r0%.rL1v:Im%?FMARl2DK*5MBUqv:' );
define( 'WP_CACHE_KEY_SALT', 'ybkhGcENvQZ7D*N R))y%9L6wT#4m=Jp[xn2nZ6X zM@%W%UBz:Hp[N3FLAs5O97' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
