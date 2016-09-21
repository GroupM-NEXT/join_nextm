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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'join_nextm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'D?w-~C7oDOOa[5@:J_;:.IUEotIdU<B|Fp:s0_.frzc/5Z4-Jn69zhNk/E++h f8');
define('SECURE_AUTH_KEY',  '-)gXNw%myN^G!3;o5bM.t(7k=U4xs8lvBh)[UUx{fk&I~fITR@]fg.+Ms)Go925b');
define('LOGGED_IN_KEY',    '*YH7I|O%3cGazmC~4kU@aL11:97#r706nlEW~+: MvNTGmY>_+e0N,CqK@H:1hv@');
define('NONCE_KEY',        ']Qy-;uHx6IDp*2@IiWup4Q<TnerloZ/n6D{g$h5~:g.4H>J-6bxV[e:6e@v#o:_u');
define('AUTH_SALT',        '3#W+%Dm.dtCq|v3,LY?>;$32:Ts1N4+@[oVEe:<~7A`#_[6$>hB;E[R4d{xMKA(@');
define('SECURE_AUTH_SALT', 'pIZYC8D9+S<^SI4znR-rosn]wS6_`oS_t#Ma#OP#j<+]?2qZyrs7@i}rvY3@llY8');
define('LOGGED_IN_SALT',   'uO{4w`b`w_VZ<1C:~8-_jO+{)=rJJn%7.8_DU(mP{V|0tS?`B(f/te.w^yG2^T^o');
define('NONCE_SALT',       'Lf>x<rB#j5sC304pK_TY(p0p$UAA@[(J6/<QbgtU|Um]K*,4c(]kHb?aR;tUfpnH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
