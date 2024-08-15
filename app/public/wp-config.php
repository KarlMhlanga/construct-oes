<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '>oE`  eJQHtZ}WP$CN*N:ImX}LVL?)8R_:}4ShGvV{!;3Xp8}V#eIne4G_D-QI,_' );
define( 'SECURE_AUTH_KEY',   'F@T,Qf6CWl[^c;qh[SZ(*_=wk{i><a~Ou=#=Af,yDFNL>b3S}H8c Oi$wwWBg2pi' );
define( 'LOGGED_IN_KEY',     's]gi!qzZTHqr}2dY!?,=f*SwG@zPLGcbVQ?diTNb.q+nCxQP1I4N@$exU>G<H)*,' );
define( 'NONCE_KEY',         'ka3UAXj- 4rL&X[giqW7XR*P^S%dB7p`L+Id{GUWlT{es,OpE)%jiEwxC@P:NBK4' );
define( 'AUTH_SALT',         '|B_I)MMG2kGz_,y9u?f~|Fs{}T}GZ(0=I^65:v.@m+0fqN#+j2}u&(=0+.l,dy9x' );
define( 'SECURE_AUTH_SALT',  'I0E32}|Xj=an!,81b]JYP.R@gp`?%Hd6C0*3T:mn(aVZaNA~,u/PT%}YV^HXN`gA' );
define( 'LOGGED_IN_SALT',    'c9B{sftk}TgiOM;!F[y~,b-A_lvP#dHWeo[_C9*2Sv*P-6jCgVe)WJ0{wO#*w)oc' );
define( 'NONCE_SALT',        'v#[GXeEeMwY%r9E<Y&Du#T9&C{q6Q$ k4G#F[x|*|xM5tk+!MXVOp]a/j?fhMJ0P' );
define( 'WP_CACHE_KEY_SALT', '{g^4B!bUUB6M6NgNCc/S8pvS`-%UXS|bi6&<Q* 31d[P~RCPnS$>Nx~I~n-.{Rh,' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
