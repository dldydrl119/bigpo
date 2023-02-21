<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'gugusubs_com_w8gyaW3J' );

/** Database username */
define( 'DB_USER', 'gugusubscomvz6a' );

/** Database password */
define( 'DB_PASSWORD', 'n8AMJdFzBPuK45DYTOg3QxVi' );

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
define( 'AUTH_KEY',          'KAGe(0EY_Zp#XO:(YT{ciqeSVFBd9xTTVHREB=[d?SA/js[]*}s:e33^hyxU=Iu%' );
define( 'SECURE_AUTH_KEY',   '{ =;TrQ^$OTh(>}Yt/B5FV=KqCLlI:r?p.}X{jt-UFpt+LJX o%|fD=r@TCKg|?7' );
define( 'LOGGED_IN_KEY',     'T[wJ,-4%qd^(2YDUIRl$:7;[ N1GY ppHN*-PjV!9Xy#u9Da2GMwd[ %j:o-PsYk' );
define( 'NONCE_KEY',         '(TaV{kZ$vY8xRz>Xmc=elEQSW#7)m0|Gl33Ty(jU, QvZjq~uyaEh>&wYq)9{?kd' );
define( 'AUTH_SALT',         '2}%!_,4w=8xW~2Hx|8!:R)x#VeS~/dXk<qzzhT[sg)e2k^/{N!F?G1SBzs#N`*],' );
define( 'SECURE_AUTH_SALT',  ',1$Z}DS6AIpXypB+fi,=YXk{;xi(KyUICbk`:=&e(GCz`2^L!cdIubBnu*Tbd?)*' );
define( 'LOGGED_IN_SALT',    'TD:GX!h7SS@2lyc:]X%#~L*rD@>c_u!Wn;n#g~!JJsfI9<6O>y/Ik,T$Y*JM+1MF' );
define( 'NONCE_SALT',        'b|Dv/ae@MwC(ecw,UMu)SG9cjk4 ^6N:9y(}A<t0`)I2hi&RHlvdVsLuDQ(,?RQq' );
define( 'WP_CACHE_KEY_SALT', '0s*[x4hhz6Q%FTN=T/{hA<;Oqz`(?#frua)H~3F*w=rJ].}@-/x*ZG`8N pA4Hau' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '91OUPt8_';

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


/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_REDIS_PREFIX', 'gugusubs.com:' );
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
define( 'CONCATENATE_SCRIPTS', false );
define( 'WP_POST_REVISIONS', '10' );
define( 'MEDIA_TRASH', true );
define( 'EMPTY_TRASH_DAYS', '15' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'WP_REDIS_DISABLE_BANNERS', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
