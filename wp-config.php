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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'marketeye' );

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
define( 'AUTH_KEY',         'L{vFyiQr+7v%XHG/RP^FSpeM3^7!J>y3G<w[opeDS$= 0a@pU7i9aghAhf7]Vp7N' );
define( 'SECURE_AUTH_KEY',  'R#8TH,/93nn[sMqq)T#<KooFE$.r1kmef81xGPXs)WkUbF58tNhk>BW-u=?77!Xp' );
define( 'LOGGED_IN_KEY',    '_>b>V 5.h;6v_h3~c%W|1jXR/d5d;u@SDbamz9&1!S !_mAEBi*=_N-}G;9i+rIN' );
define( 'NONCE_KEY',        '%%l4b|A^Hi[V4s_h~A6]+5]fj0l):LrL1zPmHpmcrD CF~g~]Wj|nj)YhpqPmiy&' );
define( 'AUTH_SALT',        'JXx<aZK#~K`3;z)gCI{= ;kljO}&g9Z<XH&=5 ZqxdMAf*^SOSsjU8;CBDE9B39h' );
define( 'SECURE_AUTH_SALT', '@qUMG[7ccsR>aYP#1(rei+=2Iv|28)<^,9b{8/^>m}NgD!.%Q:;@hIxQ`u21&VN9' );
define( 'LOGGED_IN_SALT',   '&P,3`E|#yy?g)NtXyIb$De?3HaN)Fs)DMLEz/<_r*#q-oqU5EL``q%Cm{ _kUOWe' );
define( 'NONCE_SALT',       '!qCGHM0jX$- X9L0vOSn8x.W0PsV2(.*$!vmiMmF|cwA#+=pY;uAD|A6T|JjXK=c' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
