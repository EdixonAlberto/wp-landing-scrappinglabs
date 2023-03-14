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
define( 'DB_NAME', 'scrappinglabs_db' );

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
define( 'AUTH_KEY',         '$g+yj/|WB/uu0AYpd~zB$dZUx#^^bcZu@.*5rZb(;egvdYQ=}`_@%p IcWRQ6-;H' );
define( 'SECURE_AUTH_KEY',  'OHZcbqbqWnp1QJO@r@zCev:K(KR#@MJ(`>lB{6q{>~:67$yR0&2Lr7%^T8QEqm(3' );
define( 'LOGGED_IN_KEY',    'NNkcb#iW?6(-u*#Hi7RC7vy$d/kjT+vero.!&7|Qi#s@$5?p-nR~}+o$jhoAQ QJ' );
define( 'NONCE_KEY',        '3//q.$wTNA_RXVsi_;p_xhVdr~lQXvUKXfkiF{q!v_W3sw; Pi-+~df|^M[kn$W=' );
define( 'AUTH_SALT',        '?%KOY@Gd&S;6Mk}OXIm[]~@ODsC#*=r<]pFdRMBaz3bb^j6]}!tV6QRxm-IM{gk*' );
define( 'SECURE_AUTH_SALT', '#s7+J) ,aJ${Z7F-l3iRj3-YUuH+M7P?5,bNhp#5swNsI4{b^Y!j:-7!<ibLTFwX' );
define( 'LOGGED_IN_SALT',   '{c$T-NugcLTH.)jhM!1KGj+9}4w**;JX ]vGtZA_P]-]KDIBE}0)Y(My0 tYOb`r' );
define( 'NONCE_SALT',       'N+?vJV%Qt:GjrtF-cOFYAqu{(CjWPs=)J7 ? a g]2i,oIH9{G-mY^^`Q:t|W6~;' );

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
