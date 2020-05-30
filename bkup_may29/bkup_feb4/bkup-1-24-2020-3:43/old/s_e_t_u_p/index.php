<?php
  if (!file_exists("../lib/config.ini.php")) {
      if (file_exists("install.php")) {
          header("Location: install.php");
      } else {
          die("<div style='text-align:center'>" 
			  . "<span style='padding: 5px; border: 1px solid #999; background-color:#EFEFEF;" 
			  . "font-family: Verdana; font-size: 11px; margin-left:auto; margin-right:auto; display:inline-block'>" 
			  . "<b>Attention:</b>The configuration file is missing and a new installation cannot be started because the install file cannot be located</span></div>");
      }
  } else {
      die("<div style='text-align:center'>" 
		  . "<span style='padding: 5px; border: 1px solid #999; background-color:#EFEFEF;" 
		  . "font-family: Verdana; font-size: 11px; margin-left:auto; margin-right:auto; display:inline-block'>" 
		  . "<b>Attention:</b> The file config.ini.php already exists!<br>If you want to reinstall Job Board you must first delete the config.ini.php</span></div>");
  }
?>