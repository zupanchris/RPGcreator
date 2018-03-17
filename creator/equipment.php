<?php
include_once "../config.php";
validation();
	
	$race = $connection->prepare("select equipment,feature from background where id=:characterBackground;");
	$race->execute($_POST);
	$results = $race->fetchAll(PDO::FETCH_OBJ);
	
	echo json_encode($results);
