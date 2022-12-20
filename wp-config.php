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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_example' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'iPN?m/rUp,fgjbbBJrl!J@;hJ%S#_Gz}%BdB/aWyD+W_b<WL,<5cV8`WA$oTsjMj' );
define( 'SECURE_AUTH_KEY',  '9M_O?xvlyuz~eOd_1%R;MA[eoNuu5i>qmU,=>57zn<r,p$CJuRiDfjQe!y;j%*cN' );
define( 'LOGGED_IN_KEY',    'fF!c] 3WXMI%0;A*hyP0L?p!T!i#|`d-d}jUtn:lDg:ZBlL>i)5DzqN90]qX2y5i' );
define( 'NONCE_KEY',        'm8Zf*se&(0`$6^2xzVr+BD=T)H:hirwO*,1}S?rB=2X+z:5K@V$#e5]XpJ3rQTF|' );
define( 'AUTH_SALT',        'xmxE^)}?ZHeZ3-x$el%WtJ/y%&_LQbDb18HWK{GlGB_@.`W:b<rU]!TB=|w4r*5g' );
define( 'SECURE_AUTH_SALT', 'J(2%<d2L`W^YD7=FtJ>y2M[mK!o[+)$7,UCdG_Nd:z_uPBL%VYq-UJ]iAL&:~[c[' );
define( 'LOGGED_IN_SALT',   'PYyyeE*pP7%@QHOY#47?;rFL,Jj.(``,lRkKu<=pbZL,uUsC).6&VNR3FQ%Ns g5' );
define( 'NONCE_SALT',       'p:7bvZDlNaKF)AZ~_f^!<J>;+|s*S_C*F%yWelIX1eT,zH]>(zp[`#m?(envxTSY' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
