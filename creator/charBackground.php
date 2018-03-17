<?php
include_once "../config.php";
validation();
	
	$race = $connection->prepare("select * from background;");
	$race->execute($_POST);
	$results = $race->fetchAll(PDO::FETCH_OBJ);
	
	echo json_encode($results);
