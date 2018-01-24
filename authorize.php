<?php

if(!isset($_POST["username"]) || !isset($_POST["password"])){
	exit;
}
//ovdje će doći spajanje na bazu
if($_POST["username"]==="admin" && $_POST["password"]==="admin"){
	include_once "config.php";
	$_SESSION[$appID."authorized"]=$_POST["username"];
	header("location: private/dashboard.php");
}if($_POST["username"]==="edunova" && $_POST["password"]==="edunova"){
	include_once "config.php";
	$_SESSION[$appID."authorized"]=$_POST["username"];
	header("location: profile/index.php");
	}else{
	header("location: login.php?failure&username=" . $_POST["username"]);
}
