<?php
/**
 * Install deals manager 2
 * 
 * @author:   AnkkSoft.com
 * @Copyright: AnkkSoft 2019
 * @Website:   https://www.ankksoft.com
 * @CodeCanyon User:  https://codecanyon.net/user/codeloop 
 */
$DBconfigFile = "../app/Config/database.php";


switch ($_GET['step']) {
    default:
        include_once ('steps/step1.php');
        break;
    case "2":
        include_once ('steps/step2.php');
        break;
    case "3":
        include_once ('steps/step3.php');
        break;
    case "4":
        include_once ('steps/step4.php');
        break;
    case "5":
        include_once ('steps/step5.php');
        break;
}
?>