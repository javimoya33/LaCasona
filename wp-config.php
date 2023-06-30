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
define( 'DB_NAME', 'lacasoicomu2022' );

/** Database username */
define( 'DB_USER', 'lacasoicomu2022' );

/** Database password */
define( 'DB_PASSWORD', 'LaCasona9298' );

/** Database hostname */
define( 'DB_HOST', 'lacasoicomu2022.mysql.db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME','https://www.lacasona.info');
define('WP_SITEURL','https://www.lacasona.info');

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
define( 'AUTH_KEY',         'ENdY-1VA;(&U?/qF-itiW7D)PK@-twexXV$diePI:LxU:;dFE!VSq/p{[,ipG*A(' );
define( 'SECURE_AUTH_KEY',  'derrkWt|P!rOwBG5bA=pU(}]]pz@@(>l`9^^&Bgr/g:UGs{>$? {h]s!#J)Ht:UH' );
define( 'LOGGED_IN_KEY',    'iQ:i>HoF0H|XiG36?ob51~-3Qdnwe_T~hZ5&?i!DQ?k1Mw6CoehP>1v8.B26w{`8' );
define( 'NONCE_KEY',        '@:1P#h1V8]GatZN!5@RMS[;@cT<KSwwe_Twg>7i^,uWq4+SS1` y]LJzKtXumllD' );
define( 'AUTH_SALT',        'ULi1? ,{>;dJ~6%>!:Aa_ycBPXfotKB}Q]iucm[{)KO|%QK.KJCq2o8g+lff vzG' );
define( 'SECURE_AUTH_SALT', 'gp`Jfbn?)JMo?Wldg1wW9ekac%x5N+6`S+UTx@~6;DQi>oHFW5m K,6KSM1#fmW;' );
define( 'LOGGED_IN_SALT',   'wh7f{%Ok^4ks^CbfG<7N+{#Zk0&_)$|,di`z=dZNK(%r9BKYU$8KTb -w/.C2/WM' );
define( 'NONCE_SALT',       '6I#XPGIB4zZ!z6SMS&b!*}==npo6[J_9g?-8#[,lZFr1#kZ.C9~7XP4kVU]e}d3 ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lacasona_';

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
