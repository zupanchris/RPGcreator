<?php

if(!isset($_POST["username"]) || !isset($_POST["password"])){
	exit;
}

include_once 'config.php';
$login=$connection->prepare("select * from user where 
						username=:username and password=md5(:password)");
$login->execute($_POST);
$o = $login->fetch(PDO::FETCH_OBJ);

if($o==null){
	header("location: login.php?&username=" . $_POST["username"]);
	exit;
}


$_SESSION[$appID."authorized"]=$o;
if($o->level==admin){
$_SESSION["admin"] = $o;
header("location: private/dashboard.php");
}else{
header("location: profile/index.php");
}
