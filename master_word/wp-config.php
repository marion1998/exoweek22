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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_shema' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Axelamour1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ')*f:wgR|rp0{ nj47,Vs-*ysMND,2jL4V/2wU`bDv[U}I(vW^+~J:n}7-8U^];sB' );
define( 'SECURE_AUTH_KEY',   '$c3)<<)Rosu{.IAx!n!R%!x#B~BHj!7Q1TDR6koZDk ^mOwVo=fuBt028zrs-=S?' );
define( 'LOGGED_IN_KEY',     '.6_9bR7$<_ {HZ6*JqAKBY@x@2[A/=tJDH%wA+;UOl.bN&=9-0{!y7b5~Vg-aI:1' );
define( 'NONCE_KEY',         'Vqalj{t^ya7@#i=5V!``N`q;41z4#:F/(,YY##BJ&k<QL<z#rmQ7ms?p$5+Yn{vo' );
define( 'AUTH_SALT',         'vZk9*Wr{ ?HjvQ}^Qb819mzfy{.XRpmz)a-+S<bG03n-M6&^;/GF#TLl52i^^h@n' );
define( 'SECURE_AUTH_SALT',  '@URMr)JJ(c^YGnCL0q9P;G%/eZ&,#Ssw>zghYm`6QZR,GYW]zH^31XTaj;_YqeEn' );
define( 'LOGGED_IN_SALT',    's)$g_:I/|A3X_]e)0OS.NLI*[kQAdovt)b*}K!L:=F=8=c(W4v(Xvr_;EDP55#fH' );
define( 'NONCE_SALT',        ')w&41$9dQ4G]h ?<HaRpsHqtS+: z.~a[p#:%co4mKNf%*cV Tod%NyMdNv|OJ.!' );
define( 'WP_CACHE_KEY_SALT', '8]8@RNo>CX%<7tj|e05Qn{8uU@P*c{g@6Ekzr1FEwdoBR0xn|%Puk!kN+fp53bY7' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
