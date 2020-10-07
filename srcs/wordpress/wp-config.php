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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-service' );

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
define( 'AUTH_KEY',         '-g;_PH-;({:`ndGnCOnULZwJ !7nbE%DGyA>[VWs&bkK^C~b5/KSLTz3G=j.7A*Z' );
define( 'SECURE_AUTH_KEY',  '2M<7f H3u%&^sx?Ue2bW:xnCObk-Ox<Za<)8bvlEqP+4^vlF8CUmlOr=Wo[W#}4%' );
define( 'LOGGED_IN_KEY',    'SXty1mj7N[D_Zp,_|}q(RzjP:9K2{?gjb,jHDY.LzeV#]w>~<*_.bpYN=1l}]6#}' );
define( 'NONCE_KEY',        'kCl]*Tu~sJh>5;KH2AA99|;otRlJ)0{pOSzX*4O_.%yh?2J|z25oTDtQ/5+1W4Fk' );
define( 'AUTH_SALT',        '~Md$)p~DET$vQg=02+usS%):2R$3ta<k8xCN]%F*,n5BqS]6d3`.88yECF(pGy-{' );
define( 'SECURE_AUTH_SALT', 'UNQHC(=91|t9Wl^ZIa#o6kh+OQCseJS53j>@#z-1vuP@w)^|wS 9@(7pfZ%Q8 qm' );
define( 'LOGGED_IN_SALT',   '1UWeciY*pQ<$Fv99>Xehji >/&%$p7el$Mlr@(Kz{u{!Hn[H*$Kk(b9L4^1vDfe&' );
define( 'NONCE_SALT',       ',4f--j<|DtN%`nOahP{~GPNQ^0WE+=opQydi+BLY6o4Qdtt.By77<~JB,.;t$$Mh' );

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
