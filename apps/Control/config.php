<?php

// Start new or resume existing session
session_start();


/**  DATABASE CONFIGURATION * */

define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_NAME', 'db_itms');
define('DB_USER', 'root');
define('DB_PASS', '');

/**  DATABASE CONNECTION-STRING * */
// creating a new object called conn to connect to DB
    $conn = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME,DB_USER,DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	  //to display error messge while connected DB
		
/** SITE CONFIGURATION  * */

define('BASE_URL', 'http://localhost/ITMS/');
define('LOCAL_PATH', 'C:/\xampp/\htdocs/\ITMS/\/');
define('SITE_TITLE', 'ITMS Management System');

// call template file 
require_once 'template.php';

?>