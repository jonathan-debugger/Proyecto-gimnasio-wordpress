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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yoiQI3O26t1MYm35TrIrNoagGG3neybVswCEawpRpgnee39onGrUUHotZ4lLFavyqLGKasvm9+aV0UGkJEvo8Q==');
define('SECURE_AUTH_KEY',  'xi0vSp/bF9eDN8v3cRxrje1X29b9rYjtLpKcsICRdeHazA5TxLD5RgTzE9pJH0+U9FhA2kVKHYNIDvW9fwp2rQ==');
define('LOGGED_IN_KEY',    'mFDeLmnDSCWK3aKSnGWfHkYWek2aZ+TonuO5p+iZP9PZpSKxbfGaXS+pNstTIweecknvZhAqUE+ynTugb1Rb/w==');
define('NONCE_KEY',        'yZUyQyOblhF7qLvcxNEl5/u28E80WnSd2mTpRrtElGNso7QYIlF8EbqJO+LSNyDMKSPwTTpVSQyUTniBRcwEDA==');
define('AUTH_SALT',        'S97jnWa4R4UGYHDzL7YZ1y7aUu9NPEIC0VU/V5phWOtMgWPTl/MRYa4XH0E5k2UOQELaZsaa6wzuoqzj13CP4w==');
define('SECURE_AUTH_SALT', 'kPbCs3R9W83RhNYxFWLAxnEB66tMUuTebfkFhpA8cdVm8GMPZk7JiTGlh8V8hawFczFJHNaLZb1y9oRMYAVDBA==');
define('LOGGED_IN_SALT',   'CAJVkYGza5snSqS0tWmrHeGxPqJD5fg2Wxa8641T774mNhnCLkfeJmmr5NCfOaKzG7pzLOTU4QJeggSk7OCnNw==');
define('NONCE_SALT',       '255dfkcOM8nVmoUjpljnd9e6CKc2/8Vmak8fhlMy98UvcfbTWkUxrXRDBaDykhZP9Hmj2oIVeGG5nkmZVfhLFg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
