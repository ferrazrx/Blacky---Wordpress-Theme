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
define('DB_NAME', 'wordpress_lab05');

/** MySQL database username */
define('DB_USER', 'wordpress_admin');

/** MySQL database password */
define('DB_PASSWORD', 'student');

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
define('AUTH_KEY',         'X${,VOrWv,^]bt)KjmhKnk2{n_jy[sUj6KZ}JC*^bK}+T2DHMD;oYE<w:N=Xu%5I');
define('SECURE_AUTH_KEY',  'uoZJ*8tt o437MVlh.&dNi6G*>$)jt:7+(F#M@n)R6Fi*$-h~j#.JtfM1|#S*Z-;');
define('LOGGED_IN_KEY',    'B_VLoxSBX:!?(h,|S!X[dtpm&h7B0_+sHB@lT|gg#<TBDgEN|Fo]d#UH>7<5hd-c');
define('NONCE_KEY',        '-Q2heSyk;Gnm%&Rv$&UvQpOq,?gU|t|{<c Pb?<TW#UhR0&R8z;D9nUp,tj.if!p');
define('AUTH_SALT',        '!qEF-W|iz%*Sf>~DI0CM$]YVD#hTcqP:MQhm;d7m#k5v=WD5zyk#}zkSSpq@OL-E');
define('SECURE_AUTH_SALT', '`A3E~NOOj1p$jTS!OWRs+cY3?H?<o9s!} CB6b_GmG#NWf^TI~RUg=h7vHGsx/EE');
define('LOGGED_IN_SALT',   't&:;i/6hKb^K:@GU@uXCMLn^cwpTx^tFh]%piO2)`>W`ms`nMJBmo5K$qJ#uT?aW');
define('NONCE_SALT',       '>5E>?p%sDU&(1wcDmu1%:M?2NBDc#>`kZyHkj~>)!bY+svz^PR9{#QV5$))/MfI&');

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
define('WP_DEBUG', true);
define('FS_METHOD','direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
