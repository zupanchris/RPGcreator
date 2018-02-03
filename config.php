<?php

include_once "functions.php";

session_start();

$sourceAPP = "/RPGcreator/";
$nameAPP = "RPG Character Creator";
$appID="RPGcharacterAPP";
$dev=true;

$host="sql204.byethost3.com";
$dbname="b3_21045350_dndchar";
$dbuser="b3_21045350";
$dbpass="cird.46P";

try{
	$connection = new PDO("mysql:host=" . $host . ";dbname=" . $dbname,$dbuser,$dbpass);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$connection->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8';");
	$connection->exec("SET NAMES 'utf8';");
}catch(PDOException $e){
	switch($e->getCode()){
		case 1049:
			header("location: " . $sourceAPP . "fault/invalidbasename.html");
			exit;
			break;
		default:
			header("location: " . $sourceAPP . "fault/fault.php?code=" . $e->getCode());
			exit;
			break;
	}
}
