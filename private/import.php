<?php

include_once '../config.php';

$importFile = file_get_contents("imena.json");
//print_r($importFile);
$firstName = explode('
', $importFile);
//$firstName = json_decode($importFile);
shuffle($firstName);
//print_r($firstName);
//$lastName = json_decode(file_get_contents("prezimena.json"));
//shuffle($lastName);
$importFile = file_get_contents("prezimena.json");
//print_r($importFile);
$lastName = explode('
', $importFile);
//$firstName = json_decode($importFile);
shuffle($lastName);
//print_r($lastName);
$userLevel = array("free","gold","premium");
$userMail = array("@edunova.hr","@gmail.com","@net.hr","@yahoo.com","@outlook.com");

echo "insert into user (firstName,lastName,username,password,email,level) values ";
$all="";
for($i=0;$i<20000;$i++){
	$name = $firstName[rand(1,count($firstName)-1)];
	$surname = $lastName[rand(1,count($lastName)-1)];
	$randomLevel = $userLevel[rand(0,count($userLevel)-1)];
	$randomMail = $userMail[rand(0,count($userMail)-1)];
	$diacritic = ["č","ć","đ","š","ž","Č","Ć","Đ","Š","Ž"," "];
	$nonDiacritic = ["c","c","dj","s","z","c","c","dj","s","z","."];
	$userFirstName = str_replace($diacritic, $nonDiacritic, $name);
	$userLastName = str_replace($diacritic, $nonDiacritic, $surname);
	$all .= " 
('$name','$surname','" . strtolower($userLastName) . "_" . strtolower($userFirstName) . "','e',
'" . substr(strtolower($userFirstName), 0,1) . strtolower($userLastName) ."$randomMail','$randomLevel'),";
}
$all=substr($all, 0,strlen($all)-1) . ";";
echo $all;
?>