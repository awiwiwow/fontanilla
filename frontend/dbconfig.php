<?php
ob_start();
session_start();
/* DATABASE CONFIGURATION */
// define constant  variables
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'fontanil_itsp1');
define("BASE_URL", "http://localhost/Frontend/"); // Eg. http://yourwebsite.com



// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'fontanil_test1');
// define('DB_PASSWORD', 'fUe_L2oHeq!x');
// define('DB_DATABASE', 'fontanil_itsp1');
// define("BASE_URL", "http://fontanillahalilidental.com"); // Eg. http://yourwebsite.com


function getDB()
{
	$dbhost=DB_SERVER;
	$dbuser=DB_USERNAME;
	$dbpass=DB_PASSWORD;
	$dbname=DB_DATABASE;
	try {
	$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
	$dbConnection->exec("set names utf8");
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbConnection;
    }
    catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
	}

}
?>

