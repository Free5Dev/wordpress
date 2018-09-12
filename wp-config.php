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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '^eOU]<CR)b$wqqgH|}J)8jO<jIdSGEcCkg.Xhf`[I{eK1%c =|ud<!=VG/%4CvD^');
define('SECURE_AUTH_KEY',  'b@e/GyuJda3pb&?y<z]Iy_t 4bhPCAi!/!l@d3Fi{#U?LZ2BiTOJJ%L<K+:CQch1');
define('LOGGED_IN_KEY',    '3rb.!E%U}sEKkxLLh]YF$kL_HB7)[0jk=]CK/|KkblHilSPh(^|TcCJ nmw`i.y:');
define('NONCE_KEY',        'O!oS5im7&q$.lb 2,=w(K9!Oi9)AD.d) M9Bn@jCRLziosgZsBSG%F9PN9#FBKJN');
define('AUTH_SALT',        'j*PMc@`WT@f|Gu vsIl)zPt^SOY:#Ia0XdG0xcvWVU14ArU_y$D>ixl:>9h<hvg7');
define('SECURE_AUTH_SALT', '$M]DUfi6f*I-]leSgTf-2c0M<pM7xo4f,fkp6^07U1,p>/ei%;~z0zB(CpoYyT(|');
define('LOGGED_IN_SALT',   '!*,a#kDmQBrWohJox4p2wooO|VHWYieCC$2rRoY.D]to@TT#B nskXC%^j^DY&4]');
define('NONCE_SALT',       'a#>{0d(TL7c}e.]h@,n)C4{pPKkgP!|ibU+_u:X&1fETu;q5/([kf*>?PC:vF/#H');

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
