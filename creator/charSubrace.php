<?php
include_once "../config.php";
validation();
	
	$subrace = $connection->prepare("select id,name from subrace where race=:race;");
	$subrace->execute($_POST);
	$results = $subrace->fetchAll(PDO::FETCH_OBJ);
	
	echo json_encode($results);