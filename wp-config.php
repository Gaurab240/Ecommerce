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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'london' );

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
define( 'AUTH_KEY',         '-`6M/HviR#wE[Y69~8PW{g<X1/nEyHV5Gj3w{m.`aPe0E-%,oM@qGI^/snn6Tt0c' );
define( 'SECURE_AUTH_KEY',  '$PLOX~Lr*LT1Z6BK$k:*`^fhF/KN5gH/ZD*Saa9hh1ucv`3zLc,Wx,$.Bg:c//G=' );
define( 'LOGGED_IN_KEY',    '$o!Jd:ea9WZ;MQ!Ftd,SC@MNG*P)%nO)>zL+9<STNvPcf: i}R,|]a ]_z/HPdGV' );
define( 'NONCE_KEY',        'vWC1a:=hjUi-d}Mz[S8|$P1_*3;0M*,/SF*V8*(P5i=]G&M^=-e|LPO>RuIyuk=g' );
define( 'AUTH_SALT',        'T5)F>.^8%_>^JEsWszL?BLa8Q<;eEscJIly[44)aPl|Dg!4{KENH| E/pswFJ1J ' );
define( 'SECURE_AUTH_SALT', 'Z>>!_nZv:MmM`]wC*!8!IUigtJu@ t*_l#`-*%1-nB]4/>mP]70+G#SC+%W4mA  ' );
define( 'LOGGED_IN_SALT',   'hSiPPvRTD=7Jg|0(iSHJw9}I:+pi;}q1vT9CoJ~?lSw^n4E_W3v-:R0teMG#ar8!' );
define( 'NONCE_SALT',       'B5}N+BgJ>j^_9INVd51auRHDjr_9dB]~:1H_$h]7.$/3p6l}v6HMOZ>c:aovF^=i' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
