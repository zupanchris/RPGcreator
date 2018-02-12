<?php

include_once '../config.php';

$importFile = file_get_contents("names.json");
//print_r($importFile);
$firstName = explode('
', $importFile);
//$firstName = json_decode($importFile);
shuffle($firstName);
//print_r($firstName);
//$lastName = json_decode(file_get_contents("prezimena.json"));
//shuffle($lastName);
//$importFile = file_get_contents("prezimena.json");
//print_r($importFile);
//$lastName = explode('
//', $importFile);
//$firstName = json_decode($importFile);
//shuffle($lastName);
//print_r($lastName);


$classList = array("1","2","3","4","5","6","7","8","9","10","11","12");
$raceList = array("1","2","3","4","5","6","7");
$backgroundList = array("1","2","3","4","5","6","7","8","9","10","11","12","13");
$userList = array ("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20");
$alingmentList = array("1","2","3","4","5","6","7","8","9");


echo "insert into characterdnd (name,subrace,class,background,user,alingment) values ";
$all="";
for($i=0;$i<200;$i++){
	$name = $firstName[rand(1,count($firstName)-1)];
	$class = $classList[rand(1,count($classList)-1)];
	$race = $raceList[rand(0,count($raceList)-1)];
	$background = $backgroundList[rand(0,count($backgroundList)-1)];
	$user = $userList[rand(0,count($userList)-1)];
	$alingment = $alingmentList[rand(0,count($alingmentList)-1)];
	//$diacritic = ["č","ć","đ","š","ž","Č","Ć","Đ","Š","Ž"," "];
	//$nonDiacritic = ["c","c","dj","s","z","c","c","dj","s","z","."];
	//$userFirstName = str_replace($diacritic, $nonDiacritic, $name);
	//$userLastName = str_replace($diacritic, $nonDiacritic, $surname);
	$all .= " 
('$name','$race','$class','$background','$user','$alingment'),";
}
$all=substr($all, 0,strlen($all)-1) . ";";
echo $all;
?>