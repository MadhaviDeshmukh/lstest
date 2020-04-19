<?php 
/** 
 * Configuration

 * @package Job Board
 */

if (!defined("_VALID_PHP")) 
	die('Direct access to this location is not allowed.');

/** 
 * Database Constants - these constants refer to 
 * the database configuration settings. 
 */
define('DB_SERVER', 'localhost'); 
define('DB_USER', 'laststep_db_user'); 
define('DB_PASS', 't8u9Oadr'); 
define('DB_DATABASE', 'laststep');

/** 
 * Show MySql Errors. 
 * Not recomended for live site. true/false 
 */
define('DEBUG', true);

/** 
 * Cookie Constants - these are the parameters 
 * to the setcookie function call, change them 
 * if necessary to fit your website 
 */
define('COOKIE_EXPIRE', 60 * 60 * 24 * 60); 
define('COOKIE_PATH', '/');
?>
