<?php
  $host = $_GET['h'];
  $username = $_GET['u'];
  $password = $_GET['p'];
  $name = $_GET['n'];
  
  header("Content-Type: application/octet-stream");
  header("Content-Disposition: attachment; filename=config.ini.php");

          $content = "<?php \n" 
		  . "\t/** \n" 
		  . "\t* Configuration\n"
		  . "\n"
		  . "\t* @package Job Board\n"
		  . "\t*/\n"

		  . " \n" 
		  . "\t if (!defined(\"_VALID_PHP\")) \n"
		  . "     die('Direct access to this location is not allowed.');\n"
		  
		  . " \n" 
		  . "\t/** \n" 
		  . "\t* Database Constants - these constants refer to \n"
		  . "\t* the database configuration settings. \n"
		  . "\t*/\n"
		  . "\t define('DB_SERVER', '".$host."'); \n" 
		  . "\t define('DB_USER', '".$username."'); \n"  
		  . "\t define('DB_PASS', '".$password."'); \n"  
		  . "\t define('DB_DATABASE', '" . $name . "');\n" 

		  . " \n" 
		  . "\t/** \n" 
		  . "\t* Show MySql Errors. \n"
		  . "\t* Not recomended for live site. true/false \n"
		  . "\t*/\n"
		  . "\t define('DEBUG', false);\n"

		  . " \n" 
		  . "\t/** \n" 
		  . "\t* Cookie Constants - these are the parameters \n"
		  . "\t* to the setcookie function call, change them \n"
		  . "\t* if necessary to fit your website \n"
		  . "\t*/\n"
		  . "\t define('COOKIE_EXPIRE', 60 * 60 * 24 * 60); \n"  
		  . "\t define('COOKIE_PATH', '/');\n" 
		  . "?>";

echo $content;

?>