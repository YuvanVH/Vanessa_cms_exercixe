<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'e8_theme');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'F10j@~W-a|Qt8]+L1;h++}CMHrF6/Q{MIRM/k,E$!>I0uFJ-jIVnKyO!(N#}=z$b');
define('SECURE_AUTH_KEY',  '!>Q~h[?nT~-X8as`kN-JBLvI1n<KP*|w`nxH!!n`Me!,cB6#>&x28>-OFf[,77g6');
define('LOGGED_IN_KEY',    ')r5R0}ZsO63M1#iHX5#XK2x0|2xjHKp91VnKm5&s$|D+Llprjh~eWzza-I1rB *t');
define('NONCE_KEY',        '2~+e2>C*=xqUVt.7nEa<x_,vVRsG%N1^0=)/P)<6_}3cQZzT *)  ct+--^Ej6zD');
define('AUTH_SALT',        '(?#@}<2VC]%+OCoHTISjR`?>GaJR=_C:&kmu`4#gna(Y4.gp7boUCQ-CG]F3$lX{');
define('SECURE_AUTH_SALT', 'TR3/YA#{WD?9sN4  2&ZC{f}bM6J}_@dD]_UCfR<bGx.Ns1^]n7Hbx8[Jnzv-PgJ');
define('LOGGED_IN_SALT',   '&qaJI;`fA*k]&/1;IfQso_5U$<P>4`TjL.q)WV7~<)$fd?{4J nt+y_y|3)~Kd6K');
define('NONCE_SALT',       'rADN;epTq6S(NHsA315+,Jf(3)V#^Np$b)6zFP_WHv1Le&b7kF6Z@7zX.mrQAr#:');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
