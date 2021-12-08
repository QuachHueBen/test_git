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
define( 'DB_NAME', 'damsenpark' );

/** MySQL database username */
define( 'DB_USER', 'damsenpark' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'gzx`le9G*: |Bhdj/}.u?0{Kg]e.LGyCgxl$xf;JCB$#CD5pC%=s7ENx/WPaT6O/' );
define( 'SECURE_AUTH_KEY',  '.z>dfPzt7hg9lFsK&1=my/Q?u%g~jWjMIw=4pizEvGk}2a*o6q^I:Xg~Sz ;RO&5' );
define( 'LOGGED_IN_KEY',    't8/m|?r}r2LLwA#dnk,%d{}P1t`%F(M!!@u(,.HQSRw/v~kE0>[UU<1Yh2E06*:_' );
define( 'NONCE_KEY',        'hU<=6~ xk76vTy>owE}>xz|4<dquJOB@PjJ}~Bhpfy$7TGI.bs/o~fYg|h#n[slv' );
define( 'AUTH_SALT',        'FvG$o~|>c<jH1K!*b~}WfN|_gu{h4GertP[t!XT6!7+~9<I+n@j(t[G65cA@p.eJ' );
define( 'SECURE_AUTH_SALT', '))ai-Tl{1i`!1(-II?>-<@L{<ZBi&D6Ht&y`_ow]&:Y@<jm=<mkA8]8QSt.*nw6@' );
define( 'LOGGED_IN_SALT',   'gl5QxDEp/$[OFmz)F%}uUxg:7-Wk*aaN<h?+PdzX3$F7VVWxZi*BymwI|n3n)]S1' );
define( 'NONCE_SALT',       ';kEAajOcKBw*0{/O~Q%qEj.lm=k:FO$&fEAt)far;e!=)8n~g]h0?OyY3/jNl~yQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
