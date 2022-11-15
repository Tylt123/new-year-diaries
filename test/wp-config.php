<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u355376137_F6iu7' );

/** Database username */
define( 'DB_USER', 'u355376137_dsRHz' );

/** Database password */
define( 'DB_PASSWORD', '8BHPfJXuan' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'NXmC*0mMC]m_1Ig7S]o%pM-FYw00tpk_|9&}ppwe|+R/1na_m*@rM&),n6;a q4a' );
define( 'SECURE_AUTH_KEY',   ':7hKi|gEH$]zEsoaX:vcjE~-%O(h/<mVk*cts9c.Z<V##*BzAa-NzRKYRI[&t<j0' );
define( 'LOGGED_IN_KEY',     'FQ$`KA=zDhYS`c;p4Al-%<dj>]FZc.b!dS&l0YWSU@SmWF@4V`un1nQifIEs<ZB>' );
define( 'NONCE_KEY',         'y)_9qfUR;Ous0O}_F$yLHi|]Cr8AfABD{dV:]{)1j%tx}3$wrCT DN$-NP!> _!Z' );
define( 'AUTH_SALT',         '7?pUYB1)qbyqsB)&gX_LtBwbT]- Q ~Y u2(yMg/}$(s``+K*!%_k;`XUvTC]OqE' );
define( 'SECURE_AUTH_SALT',  'S5ycc2/_d~)b9$]Ypfsr%[1,`9-U+N^mBj0XzQ4`Y4-15@e[SI#>G|+bOu3N-FYr' );
define( 'LOGGED_IN_SALT',    ',IDR!58?<CdUr=FMXX,q* srS_-wWKH_iBj`hC=1jYP(3i?Q`_!{coVs3c^VR#e9' );
define( 'NONCE_SALT',        'E@nX/72%1y4m,B1Q,|Bjk(-qx<R)yp3+ZkR|eQtzCS[Z.8*{UGKa5u.`,/@&-|+t' );
define( 'WP_CACHE_KEY_SALT', '#(um$TA6]L*0opl~7iE3@ 9o)1W9S}{+<~Aij+nh;$g-:^gceQYxfV[SK4j=wd`N' );


/**#@-*/

/**
 * WordPress database table prefix.
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


/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
