<?php
/*
Define variables for local setup
*/

/*
Dev environment variable
 */
define('WP_LOCAL_DEV', true);

/*
MySQL configuration
 */
define('DB_NAME', 'database_name_here');
define('DB_USER', 'username_here');
define('DB_PASSWORD', 'password_here');
define('DB_HOST', 'localhost');

/*
Content directories
 */
define('WP_CONTENT_DIR', dirname( __FILE__ ) . '/content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/starter/content');

/**
 * Database table prefix
 */
$table_prefix  = 'wp_'; 

/*
Debugging stuff
 */
// define('WP_DEBUG', true);
// define('WP_DEBUG_DISPLAY', true);
// define('SAVEQUERIES', true);
// ini_set('display_errors', 1);
