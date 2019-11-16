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
define('DB_NAME', 'kishan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ca{P5f;ZAIP$RUDC%$jP -nX}*^oEr}s8d[Dqc38|qZh*RjJ}H@0C(RcfzFVD~%k');
define('SECURE_AUTH_KEY',  'Livkn69VLPXQ+cC]7+@KjlCQSu@!+JDi)WA&ju=l/LrAs5LNou+k13wdGf4e6Ml5');
define('LOGGED_IN_KEY',    '4fFT0ZN/&F4t1E9|!4_JYJ_~S]xK9J:g/nADP5G:h)b0>-CcD!{T[P]l$6K`QlU#');
define('NONCE_KEY',        '{8rFv4!*/|G ($LGT2?i6`8%7^-aSOYb3lD/}`1B-_zAa7OOL,hkuD2V5OsKY.U=');
define('AUTH_SALT',        'XA=VMkJF)7*BJP [9>T]VBn-cdv-Lky@E<R!5w]W/`rA;~ZQ=PnM?J~U58BHCB`r');
define('SECURE_AUTH_SALT', 'd?_tH]wBfoudCQnU^?,+1oO:U:Y-{4%c?0uc&S4G=Ffn_?g|qwbArJ{H,Ex~oQG%');
define('LOGGED_IN_SALT',   'k6Q<&dxtqa+f0Ts]LCD/(4mkwc;_#jAf`~kDh555*LIJ~ml)}uFUY^a?[g)@|8{y');
define('NONCE_SALT',       'LUhkuY<KI]q2.)Aq0uwtjaC+6Dr*.S(G7uHRC$Z8@Z^Sj?TvxEN?]Y,&P/|o#czk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kishan';

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
