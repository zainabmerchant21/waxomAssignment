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
define( 'DB_NAME', 'LKic8Hrjx5' );

/** MySQL database username */
define( 'DB_USER', 'LKic8Hrjx5' );

/** MySQL database password */
define( 'DB_PASSWORD', 'CEXqI3yBIu' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         '9vma:Zf`JJvo7.6;QMQF~F@d4cLgV{s;{z1lqL&)E.J{szpDfdpcE-^I3<8bsUUo' );
define( 'SECURE_AUTH_KEY',  '7GfL[:J#D&Q}&~ 6W6e^=|[!;1@uSfmvQJM3i} I^+oM=)g0V|J8#5VKS4&45$jd' );
define( 'LOGGED_IN_KEY',    '.W( (~  B1[bF{auE8C+sU1kM57xDXc{FXA:SvHCgoB2|.E9W+[]UdEQQuD*+>Xg' );
define( 'NONCE_KEY',        '~Y{t]]@ ,N--w7CV>.z nI$t 0(W7&XvEL8_?=thMIa<0(*P9Pm%(ze8,s3vK@w]' );
define( 'AUTH_SALT',        '-/W4J_.8P9#xk|.Qy{#S*:c2W*uPJbaonzlIb.~?qoE5|Mt <&k,M#Dn}y(h Tr,' );
define( 'SECURE_AUTH_SALT', '<gbbJ(ptQ l*sNL+Oh;UCU-Db2>T+Vmt.q+Sny6zRgV0j;RUX-^F!W)SHdbt$+ad' );
define( 'LOGGED_IN_SALT',   'e[U+&?jNUOj~I=n%-w<7Gc UBYUQh`ce,_lSalN6(bJiQF|[afBoJo<Z3coA2{e|' );
define( 'NONCE_SALT',       '^i%K`1Q&(+J~n-1}a[sAE^gK!VpS<QEs!v+?TPxNjNzqgHvgj?#ND9fP;Q}~%T%!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dv_';

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
