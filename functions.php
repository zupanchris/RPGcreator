<?php


//prima dva parametra
function menu($source,$description){

?>
<li<?php echo $_SERVER["PHP_SELF"] === $source/*prvi parametar*/ ? " class=\"active\"" : ""; ?>>
<a href="<?php echo $source;
	/*prvi parametar*/
?>"><?php echo $description;
	/*drugi parametar*/
?></a>
</li>
<?php
}

function action(){	
    if (isset($_GET['submit'])) {
        echo "saved.php";
    }
    else{
        echo "";
    }
	return;
}


function score($scoreType,$scoreArray){
	?>
	<br />
	<br />
	<input id="<?php echo $scoreType; ?>" class="score" type="number" name="<?php echo $scoreType; ?>"
	value="<?php echo array_sum($scoreArray) ? array_sum($scoreArray): ""; ?>" readonly/>
	<?php
}

function scoreCalc($scoreValue){
if($_GET[$scoreValue]==="1"){
echo -5;
}else if($_GET[$scoreValue]==="2" | $_GET[$scoreValue]==="3"){
echo -4;
}else if($_GET[$scoreValue]==="4" | $_GET[$scoreValue]==="5"){
echo -3;
}else if($_GET[$scoreValue]==="6" | $_GET[$scoreValue]==="7"){
echo -2;
}else if($_GET[$scoreValue]==="8" | $_GET[$scoreValue]==="9"){
echo -1;
}else if($_GET[$scoreValue]==="10" | $_GET[$scoreValue]==="11"){
echo 0;
}else if($_GET[$scoreValue]==="12" | $_GET[$scoreValue]==="13"){
echo 1;
}else if($_GET[$scoreValue]==="14" | $_GET[$scoreValue]==="15"){
echo 2;
}else if($_GET[$scoreValue]==="16" | $_GET[$scoreValue]==="17"){
echo 3;
}else if($_GET[$scoreValue]==="18" | $_GET[$scoreValue]==="19"){
echo 4;
}else if($_GET[$scoreValue]==="20" | $_GET[$scoreValue]==="21"){
echo 5;
}else if($_GET[$scoreValue]==="22" | $_GET[$scoreValue]==="23"){
echo 6;
}else if($_GET[$scoreValue]==="24" | $_GET[$scoreValue]==="25"){
echo 7;
}else if($_GET[$scoreValue]==="26" | $_GET[$scoreValue]==="27"){
echo 8;
}else if($_GET[$scoreValue]==="28" | $_GET[$scoreValue]==="29"){
echo 9;
}else if($_GET[$scoreValue]==="30"){
echo 10;
}else{
echo "";
}
}


function scoreMod($modName,$scoreValue){
	?>
	<br />
	<br />
	<input id="<?php echo $modName; ?>" class="score" name="<?php echo $modName; ?>" type="number"
	value="<?php echo scoreCalc("$scoreValue") ? scoreCalc("$scoreValue"): ""; ?>" readonly/>
	<?php
}

function validation(){
if(!isset($_SESSION[$GLOBALS["appID"]."authorized"])){
header("location:  ../login.php");
}
}

function getValue($key){
return isset($_GET[$key]) ? $_GET[$key] : "";
}

function radioMark($key,$value){
if(!isset($_GET[$key])){
return "";
}
if($_GET[$key]===$value){
return " checked=\"checked\" ";
}
return "";
}

function checkboxMark($mark,$checked){
if(!isset($_GET[$mark])){
return "";
}
foreach ($_GET[$mark] as $key => $value) {
if ($checked===$value){
return " checked=\"checked\" ";
}
}
return "";
}


