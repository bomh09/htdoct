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
define( 'DB_NAME', 'wp_demo' );

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
define( 'AUTH_KEY',         'Dt@()y0|84I,o9T0QgF7:U&NWL]4P24rJCU$_ASp9iL{]}BTMkBQCalYG+CW.Cqo' );
define( 'SECURE_AUTH_KEY',  'Q-?Lg4m}1PF-Hsy3o 5|CdaCjFAPObp)n|z:WJ%tH|1KQz&1,6dO<_rY9*w]`Mkc' );
define( 'LOGGED_IN_KEY',    '9!#F`|6DNc1/uco{,(8tG5]p%cL_(lOg)wcJL%!Wc<-|]am0s9q.kekr7w@H5V[<' );
define( 'NONCE_KEY',        'Z@RLLn7zIISMN7c2thWNT&Evy0~A7`v?M!#1b(}W!)0)+>Bn7ofV+2YB1Gbnw4St' );
define( 'AUTH_SALT',        'X(G4[EgtJ4x >QsV_@VlSG&O#-Q@j s.:%EDx1AWn?d;,W~!gB`B`/UF~ e33pO9' );
define( 'SECURE_AUTH_SALT', 'TMfi6~L:VMX#.YrduX)7S?fydu;L#3>|#BZG}zA|=U])^~<b(UaYAP;QP`Ka.&u?' );
define( 'LOGGED_IN_SALT',   'hZ.f]aT3/?GaD#[xajif%5<Fzu?%*Tok.(Ptl2|1TyVX]$f,$!NzVwDhJGX{J}ZQ' );
define( 'NONCE_SALT',       'Gi@2KXihDSZp ;xdi1DrHyy`W:{nW`n6vSm(I7%VZRQA}$)x$5#{e_d-v)0k[vT;' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
