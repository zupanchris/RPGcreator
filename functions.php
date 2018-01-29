<?php

//funkcija se zove stavkaIzbornika i prima dva parametra
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

function strMod($strenghtScore){
if($_GET[$strenghtScore]==="1"){
echo -5;
}else if($_GET[$strenghtScore]==="2" | $_GET[$strenghtScore]==="3"){
echo -4;
}else if($_GET[$strenghtScore]==="4" | $_GET[$strenghtScore]==="5"){
echo -3;
}else if($_GET[$strenghtScore]==="6" | $_GET[$strenghtScore]==="7"){
echo -2;
}else if($_GET[$strenghtScore]==="8" | $_GET[$strenghtScore]==="9"){
echo -1;
}else if($_GET[$strenghtScore]==="10" | $_GET[$strenghtScore]==="11"){
echo 0;
}else if($_GET[$strenghtScore]==="12" | $_GET[$strenghtScore]==="13"){
echo 1;
}else if($_GET[$strenghtScore]==="14" | $_GET[$strenghtScore]==="15"){
echo 2;
}else if($_GET[$strenghtScore]==="16" | $_GET[$strenghtScore]==="17"){
echo 3;
}else if($_GET[$strenghtScore]==="18" | $_GET[$strenghtScore]==="19"){
echo 4;
}else if($_GET[$strenghtScore]==="20" | $_GET[$strenghtScore]==="21"){
echo 5;
}else if($_GET[$strenghtScore]==="22" | $_GET[$strenghtScore]==="23"){
echo 6;
}else if($_GET[$strenghtScore]==="24" | $_GET[$strenghtScore]==="25"){
echo 7;
}else if($_GET[$strenghtScore]==="26" | $_GET[$strenghtScore]==="27"){
echo 8;
}else if($_GET[$strenghtScore]==="28" | $_GET[$strenghtScore]==="29"){
echo 9;
}else if($_GET[$strenghtScore]==="30"){
echo 10;
}else{
echo "";
}
}
function dexMod($dexterityScore){
if($_GET[$dexterityScore]==="1"){
echo -5;
}else if($_GET[$dexterityScore]==="2" | $_GET[$dexterityScore]==="3"){
echo -4;
}else if($_GET[$dexterityScore]==="4" | $_GET[$dexterityScore]==="5"){
echo -3;
}else if($_GET[$dexterityScore]==="6" | $_GET[$dexterityScore]==="7"){
echo -2;
}else if($_GET[$dexterityScore]==="8" | $_GET[$dexterityScore]==="9"){
echo -1;
}else if($_GET[$dexterityScore]==="10" | $_GET[$dexterityScore]==="11"){
echo 0;
}else if($_GET[$dexterityScore]==="12" | $_GET[$dexterityScore]==="13"){
echo 1;
}else if($_GET[$dexterityScore]==="14" | $_GET[$dexterityScore]==="15"){
echo 2;
}else if($_GET[$dexterityScore]==="16" | $_GET[$dexterityScore]==="17"){
echo 3;
}else if($_GET[$dexterityScore]==="18" | $_GET[$dexterityScore]==="19"){
echo 4;
}else if($_GET[$dexterityScore]==="20" | $_GET[$dexterityScore]==="21"){
echo 5;
}else if($_GET[$dexterityScore]==="22" | $_GET[$dexterityScore]==="23"){
echo 6;
}else if($_GET[$dexterityScore]==="24" | $_GET[$dexterityScore]==="25"){
echo 7;
}else if($_GET[$dexterityScore]==="26" | $_GET[$dexterityScore]==="27"){
echo 8;
}else if($_GET[$dexterityScore]==="28" | $_GET[$dexterityScore]==="29"){
echo 9;
}else if($_GET[$dexterityScore]==="30"){
echo 10;
}else{
echo "";
}
}
function conMod($constitutionScore){
if($_GET[$constitutionScore]==="1"){
echo -5;
}else if($_GET[$constitutionScore]==="2" | $_GET[$constitutionScore]==="3"){
echo -4;
}else if($_GET[$constitutionScore]==="4" | $_GET[$constitutionScore]==="5"){
echo -3;
}else if($_GET[$constitutionScore]==="6" | $_GET[$constitutionScore]==="7"){
echo -2;
}else if($_GET[$constitutionScore]==="8" | $_GET[$constitutionScore]==="9"){
echo -1;
}else if($_GET[$constitutionScore]==="10" | $_GET[$constitutionScore]==="11"){
echo 0;
}else if($_GET[$constitutionScore]==="12" | $_GET[$constitutionScore]==="13"){
echo 1;
}else if($_GET[$constitutionScore]==="14" | $_GET[$constitutionScore]==="15"){
echo 2;
}else if($_GET[$constitutionScore]==="16" | $_GET[$constitutionScore]==="17"){
echo 3;
}else if($_GET[$constitutionScore]==="18" | $_GET[$constitutionScore]==="19"){
echo 4;
}else if($_GET[$constitutionScore]==="20" | $_GET[$constitutionScore]==="21"){
echo 5;
}else if($_GET[$constitutionScore]==="22" | $_GET[$constitutionScore]==="23"){
echo 6;
}else if($_GET[$constitutionScore]==="24" | $_GET[$constitutionScore]==="25"){
echo 7;
}else if($_GET[$constitutionScore]==="26" | $_GET[$constitutionScore]==="27"){
echo 8;
}else if($_GET[$constitutionScore]==="28" | $_GET[$constitutionScore]==="29"){
echo 9;
}else if($_GET[$constitutionScore]==="30"){
echo 10;
}else{
echo "";
}
}
function intMod($intelligenceScore){
if($_GET[$intelligenceScore]==="1"){
echo -5;
}else if($_GET[$intelligenceScore]==="2" | $_GET[$intelligenceScore]==="3"){
echo -4;
}else if($_GET[$intelligenceScore]==="4" | $_GET[$intelligenceScore]==="5"){
echo -3;
}else if($_GET[$intelligenceScore]==="6" | $_GET[$intelligenceScore]==="7"){
echo -2;
}else if($_GET[$intelligenceScore]==="8" | $_GET[$intelligenceScore]==="9"){
echo -1;
}else if($_GET[$intelligenceScore]==="10" | $_GET[$intelligenceScore]==="11"){
echo 0;
}else if($_GET[$intelligenceScore]==="12" | $_GET[$intelligenceScore]==="13"){
echo 1;
}else if($_GET[$intelligenceScore]==="14" | $_GET[$intelligenceScore]==="15"){
echo 2;
}else if($_GET[$intelligenceScore]==="16" | $_GET[$intelligenceScore]==="17"){
echo 3;
}else if($_GET[$intelligenceScore]==="18" | $_GET[$intelligenceScore]==="19"){
echo 4;
}else if($_GET[$intelligenceScore]==="20" | $_GET[$intelligenceScore]==="21"){
echo 5;
}else if($_GET[$intelligenceScore]==="22" | $_GET[$intelligenceScore]==="23"){
echo 6;
}else if($_GET[$intelligenceScore]==="24" | $_GET[$intelligenceScore]==="25"){
echo 7;
}else if($_GET[$intelligenceScore]==="26" | $_GET[$intelligenceScore]==="27"){
echo 8;
}else if($_GET[$intelligenceScore]==="28" | $_GET[$intelligenceScore]==="29"){
echo 9;
}else if($_GET[$intelligenceScore]==="30"){
echo 10;
}else{
echo "";
}
}function wisMod($wisdomScore){
if($_GET[$wisdomScore]==="1"){
echo -5;
}else if($_GET[$wisdomScore]==="2" | $_GET[$wisdomScore]==="3"){
echo -4;
}else if($_GET[$wisdomScore]==="4" | $_GET[$wisdomScore]==="5"){
echo -3;
}else if($_GET[$wisdomScore]==="6" | $_GET[$wisdomScore]==="7"){
echo -2;
}else if($_GET[$wisdomScore]==="8" | $_GET[$wisdomScore]==="9"){
echo -1;
}else if($_GET[$wisdomScore]==="10" | $_GET[$wisdomScore]==="11"){
echo 0;
}else if($_GET[$wisdomScore]==="12" | $_GET[$wisdomScore]==="13"){
echo 1;
}else if($_GET[$wisdomScore]==="14" | $_GET[$wisdomScore]==="15"){
echo 2;
}else if($_GET[$wisdomScore]==="16" | $_GET[$wisdomScore]==="17"){
echo 3;
}else if($_GET[$wisdomScore]==="18" | $_GET[$wisdomScore]==="19"){
echo 4;
}else if($_GET[$wisdomScore]==="20" | $_GET[$wisdomScore]==="21"){
echo 5;
}else if($_GET[$wisdomScore]==="22" | $_GET[$wisdomScore]==="23"){
echo 6;
}else if($_GET[$wisdomScore]==="24" | $_GET[$wisdomScore]==="25"){
echo 7;
}else if($_GET[$wisdomScore]==="26" | $_GET[$wisdomScore]==="27"){
echo 8;
}else if($_GET[$wisdomScore]==="28" | $_GET[$wisdomScore]==="29"){
echo 9;
}else if($_GET[$wisdomScore]==="30"){
echo 10;
}else{
echo "";
}
}
function chaMod($charismaScore){
if($_GET[$charismaScore]==="1"){
echo -5;
}else if($_GET[$charismaScore]==="2" | $_GET[$charismaScore]==="3"){
echo -4;
}else if($_GET[$charismaScore]==="4" | $_GET[$charismaScore]==="5"){
echo -3;
}else if($_GET[$charismaScore]==="6" | $_GET[$charismaScore]==="7"){
echo -2;
}else if($_GET[$charismaScore]==="8" | $_GET[$charismaScore]==="9"){
echo -1;
}else if($_GET[$charismaScore]==="10" | $_GET[$charismaScore]==="11"){
echo 0;
}else if($_GET[$charismaScore]==="12" | $_GET[$charismaScore]==="13"){
echo 1;
}else if($_GET[$charismaScore]==="14" | $_GET[$charismaScore]==="15"){
echo 2;
}else if($_GET[$charismaScore]==="16" | $_GET[$charismaScore]==="17"){
echo 3;
}else if($_GET[$charismaScore]==="18" | $_GET[$charismaScore]==="19"){
echo 4;
}else if($_GET[$charismaScore]==="20" | $_GET[$charismaScore]==="21"){
echo 5;
}else if($_GET[$charismaScore]==="22" | $_GET[$charismaScore]==="23"){
echo 6;
}else if($_GET[$charismaScore]==="24" | $_GET[$charismaScore]==="25"){
echo 7;
}else if($_GET[$charismaScore]==="26" | $_GET[$charismaScore]==="27"){
echo 8;
}else if($_GET[$charismaScore]==="28" | $_GET[$charismaScore]==="29"){
echo 9;
}else if($_GET[$charismaScore]==="30"){
echo 10;
}else{
echo "";
}
}

function strBonus($characterRace){
if($_GET[$characterRace]==="01"){
echo 2;
}else if($_GET[$characterRace]==="02"){
echo 1;
}else if($_GET[$characterRace]==="03"){
echo 3;
}else if($_GET[$characterRace]==="04"){
echo 2;
}else if($_GET[$characterRace]==="05"){
echo 3;
}else if($_GET[$characterRace]==="06"){
echo 5;
}else if($_GET[$characterRace]==="07"){
echo 3;
}else if($_GET[$characterRace]==="08"){
echo 6;
}else if($_GET[$characterRace]==="09"){
echo 7;
}else if($_GET[$characterRace]==="10"){
echo 0;
}else if($_GET[$characterRace]==="11"){
echo 3;
}else if($_GET[$characterRace]==="12"){
echo 9;
}else if($_GET[$characterRace]==="13"){
echo 1;
}else if($_GET[$characterRace]==="14"){
echo 0;
}
}
function dexBonus($characterRace){
if($_GET[$characterRace]==="01"){
echo 2;
}else if($_GET[$characterRace]==="02"){
echo 1;
}else if($_GET[$characterRace]==="03"){
echo 3;
}else if($_GET[$characterRace]==="04"){
echo 2;
}else if($_GET[$characterRace]==="05"){
echo 3;
}else if($_GET[$characterRace]==="06"){
echo 5;
}else if($_GET[$characterRace]==="07"){
echo 3;
}else if($_GET[$characterRace]==="08"){
echo 6;
}else if($_GET[$characterRace]==="09"){
echo 7;
}else if($_GET[$characterRace]==="10"){
echo 0;
}else if($_GET[$characterRace]==="11"){
echo 3;
}else if($_GET[$characterRace]==="12"){
echo 9;
}else if($_GET[$characterRace]==="13"){
echo 1;
}else if($_GET[$characterRace]==="14"){
echo 0;
}
}
function conBonus($characterRace){
if($_GET[$characterRace]==="01"){
echo 2;
}else if($_GET[$characterRace]==="02"){
echo 1;
}else if($_GET[$characterRace]==="03"){
echo 3;
}else if($_GET[$characterRace]==="04"){
echo 2;
}else if($_GET[$characterRace]==="05"){
echo 3;
}else if($_GET[$characterRace]==="06"){
echo 5;
}else if($_GET[$characterRace]==="07"){
echo 3;
}else if($_GET[$characterRace]==="08"){
echo 6;
}else if($_GET[$characterRace]==="09"){
echo 7;
}else if($_GET[$characterRace]==="10"){
echo 0;
}else if($_GET[$characterRace]==="11"){
echo 3;
}else if($_GET[$characterRace]==="12"){
echo 9;
}else if($_GET[$characterRace]==="13"){
echo 1;
}else if($_GET[$characterRace]==="14"){
echo 0;
}
}
function intBonus($characterRace){
if($_GET[$characterRace]==="01"){
echo 2;
}else if($_GET[$characterRace]==="02"){
echo 1;
}else if($_GET[$characterRace]==="03"){
echo 3;
}else if($_GET[$characterRace]==="04"){
echo 2;
}else if($_GET[$characterRace]==="05"){
echo 3;
}else if($_GET[$characterRace]==="06"){
echo 5;
}else if($_GET[$characterRace]==="07"){
echo 3;
}else if($_GET[$characterRace]==="08"){
echo 6;
}else if($_GET[$characterRace]==="09"){
echo 7;
}else if($_GET[$characterRace]==="10"){
echo 0;
}else if($_GET[$characterRace]==="11"){
echo 3;
}else if($_GET[$characterRace]==="12"){
echo 9;
}else if($_GET[$characterRace]==="13"){
echo 1;
}else if($_GET[$characterRace]==="14"){
echo 0;
}
}
function wisBonus($characterRace){
if($_GET[$characterRace]==="01"){
echo 2;
}else if($_GET[$characterRace]==="02"){
echo 1;
}else if($_GET[$characterRace]==="03"){
echo 3;
}else if($_GET[$characterRace]==="04"){
echo 2;
}else if($_GET[$characterRace]==="05"){
echo 3;
}else if($_GET[$characterRace]==="06"){
echo 5;
}else if($_GET[$characterRace]==="07"){
echo 3;
}else if($_GET[$characterRace]==="08"){
echo 6;
}else if($_GET[$characterRace]==="09"){
echo 7;
}else if($_GET[$characterRace]==="10"){
echo 0;
}else if($_GET[$characterRace]==="11"){
echo 3;
}else if($_GET[$characterRace]==="12"){
echo 9;
}else if($_GET[$characterRace]==="13"){
echo 1;
}else if($_GET[$characterRace]==="14"){
echo 0;
}
}
function chaBonus($characterRace){
if($_GET[$characterRace]==="01"){
echo 2;
}else if($_GET[$characterRace]==="02"){
echo 1;
}else if($_GET[$characterRace]==="03"){
echo 3;
}else if($_GET[$characterRace]==="04"){
echo 2;
}else if($_GET[$characterRace]==="05"){
echo 3;
}else if($_GET[$characterRace]==="06"){
echo 5;
}else if($_GET[$characterRace]==="07"){
echo 3;
}else if($_GET[$characterRace]==="08"){
echo 6;
}else if($_GET[$characterRace]==="09"){
echo 7;
}else if($_GET[$characterRace]==="10"){
echo 0;
}else if($_GET[$characterRace]==="11"){
echo 3;
}else if($_GET[$characterRace]==="12"){
echo 9;
}else if($_GET[$characterRace]==="13"){
echo 1;
}else if($_GET[$characterRace]==="14"){
echo 0;
}
}

//funckija se zove provjeraOvlasti i ne prima parametra
function validation(){
if(!isset($_SESSION[$GLOBALS["appID"]."authorized"])){
header("location: " . $GLOBALS["sourceAPP"]);
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
