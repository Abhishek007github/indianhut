<?php


// ** Database settings ** //
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 */
define( 'AUTH_KEY',         '2@Q!~b2 -br?3 |a6N64tR&soc?:>aw&m:xQ?|?*b }w7Gj~NBDc@_^ofuhi,$DQ' );
define( 'SECURE_AUTH_KEY',  '@Dt-R*_L;C0sZ1xU1lzvvHAVZF2U3s`}JhAFkhV2(w~rr5w[M(k {{zw~)oY1,Xc' );
define( 'LOGGED_IN_KEY',    'pU6X[Q8u .,Lm41yXgjYLj2t)N_e9kg[!AGCLB*OOsMmv@j0P[]ZA#;l1@Yg{5|e' );
define( 'NONCE_KEY',        '%(kcGRcRpUU,}.lo#0J]rxDe#j^`G`aPR.Y^~GOMsvJ:}pJ)>XHz7*1w,ViViB3f' );
define( 'AUTH_SALT',        'O?Ey:$>e3CC2vuLQxhCQ{o:Um7mTS?h-|0(1a_Z}4FWs%;B&~dkr7+E&ER:Q=w+J' );
define( 'SECURE_AUTH_SALT', '6RbjSxr]nmL+Q.kmmSg5v0wKa4Msu>~RAc0V1J>H-c-/(<Q?/lPJb.%bt0r@+pJ>' );
define( 'LOGGED_IN_SALT',   'Cz$K#x*I)@1ru1qT]NXh,)4EX x3n6ISa,dI#n/O~OoYLj[vL{`ipVSm,Z+]joxg' );
define( 'NONCE_SALT',       'Vw`%^g<?j{#2,HDgl[+qE&z9CdQBYj1mW|W=J*veP]vE,pYn1=EtY#(D&HQlWsc^' );
/**#@-*/

// Table prefix
$table_prefix = 'wp_';

/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_MEMORY_LIMIT', '4096M'); // Memory limit
set_time_limit(300);                  // Execution time limit

define('FORCE_SSL_ADMIN', false);     // Localhost SSL fix
// Debug mode ON for development
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
