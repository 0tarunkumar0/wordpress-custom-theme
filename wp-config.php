<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress-custom-theme');

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
define('AUTH_KEY',         'qd6!)-Huz(N8nFz|mRr>>&|%6vG?+.&nLZ:RBq*sW_wnOPP$(R8d+0/q@[/Dw <D');
define('SECURE_AUTH_KEY',  '=*DQ7!/fq-uGXVb!y^P@IU4m[2v`Fm@];}+qx~X(OghhmWY?l&00_|cWj[:8P2?o');
define('LOGGED_IN_KEY',    'Cr|Chs&o,y@3lc41jDA^U-Wja%$W)u?4r@L2F7?2f.<j(c|x|=J^bY9U$*dCKrPt');
define('NONCE_KEY',        'B2SY[a{kVIP`@#>&Jc%x>-pA57s_Fi|t=7*;UpNc%&4rPzJLR+PX$T<1IISgn{-!');
define('AUTH_SALT',        'Gu]aLQS}wc_fKCb@&Z@~Mq<8 $&V_|vZ++$SuF4<-76Tg2t-!V2k>AfRi-u@9COG');
define('SECURE_AUTH_SALT', '|>EeqfG(=,%XMUdB7{fCn1Vd>|(9d=4Y-+CZ+<>L--/X Jx[;i/f`4*/U:L^!(3J');
define('LOGGED_IN_SALT',   'i.cS-`+VjBgIr+o@ZJ01{b~~xB]so+Vi;x&o4(r:Sla[5ada/ic0b.%:LlgkI(%I');
define('NONCE_SALT',       '`][eb}K}YBg*]S|[|e3v7Gn=a3+pvn2B5Q=4Hf}H|WoF1-(*63&fRYJjw{Pv0Wz5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
