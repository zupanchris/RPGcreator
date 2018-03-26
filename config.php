<?php

include_once "functions.php";

session_start();

$sourceAPP = "/RPGcreator/";
$nameAPP = "RPG Character Creator";
$appID = "RPGcharacterAPP";
$pageResults = 8;

if($_SERVER["HTTP_HOST"]==="zupanc.byethost3.com"){
	$host="sv80.ifastnet.com";
	$dbname="zupancby_dndchar";
	$dbuser="zupancby_zupanc";
	$dbpass="cird.46P";
	$dev=false;
}else{
	$host="localhost";
	$dbname="dndchar";
	$dbuser="edunova";
	$dbpass="edunova";
	$dev=true;
}

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

