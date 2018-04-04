<?php
include_once "../../config.php";
validation();


if(!isset($_GET["id"])){
	
		header("location: free.php");
	
}else{
		
		$delete=$connection->prepare("delete from user where id=:id;");
		$delete->execute($_GET);
		
		
		header("location: free.php");
}