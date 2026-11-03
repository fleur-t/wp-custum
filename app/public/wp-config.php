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
define( 'AUTH_KEY',          '8<4rjg:B0CDViH4!-]0_,{3i~-V,~@mj[!b,L_g>{cRyd<b[MCiyO9o T(Oi?8Sa' );
define( 'SECURE_AUTH_KEY',   '.jZ1rq#I|}=0]Z BL%JBiL =Ei!0BOERA$l X@6Gt(q,2L3yUjIR#>Jz0#-W(/;k' );
define( 'LOGGED_IN_KEY',     '>En:.eq*Q2bi?>;%QS-zqM}[.6pe&dLfm-Wkp*KJ^R5IkAn_4MgA!&qiqR{7#UN ' );
define( 'NONCE_KEY',         'nMRa%z)ro&F!g<dr=XR1c6wdS/]_`jqFEg~hU0^y,:o3@SR~}GS>84Hbt#_CKsri' );
define( 'AUTH_SALT',         '*J[}*G=:~,`4E6uDm.vIo<_dZqs)#tgwa^SOlP$J#tcWU,nP!Mh pw5i2N3^,.63' );
define( 'SECURE_AUTH_SALT',  'zf$Z1OwovmM:^;RJ/NAI,DD)=AyDZ&D-l8`=Y?fG;;V5nj!~@_u/CR0wH6@4A4~i' );
define( 'LOGGED_IN_SALT',    ':byuT&h~`k0,GkfuhRO`30V1uyd$c0Y`^_OTAvCp+_eZ8]*{:C#>g1M~T{*Ffc>V' );
define( 'NONCE_SALT',        'huOPOkoKm02S;AON/&Gz=`Y8BitN:0?fgS]qXkzMJ,_hD:mJ:wj8c.+C$jA#~2Q/' );
define( 'WP_CACHE_KEY_SALT', 'Ni9jtw=5=w,ZE)VY%^`GmJeo.$K98&ir<7_R_p7Hp*iCKu2[6pK*2N|$75[5<avA' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_HOME', 'http://localhost:10004' );
define( 'WP_SITEURL', 'http://localhost:10004' );


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
