<?php
include_once "../config.php";
validation();
?>
<!DOCTYPE HTML>
<!--
Twenty by HTML5 UP
html5up.net | @ajlkn
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<?php
		include_once "../include/head.php";
 ?>
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<?php
				include_once "../include/menu.php";
 ?>
			</header>

			<!-- Main -->
			<article id="main">

				

				<!-- Creator Form -->
				<?php include_once "../include/creator.php" ?>

			</article>
			<!-- Footer -->
			<footer id="footer">
				<?php
	include_once "../include/footer.php";
 ?>
			</footer>

		</div>
		<?php
			include_once "../include/scripts.php";
 ?>
 <script>

 
    	
    	$("#characterSubrace").hide();
		$.ajax({
			  type: "POST",
			  url: "charRace.php",
			  data: $(this).attr("id"),
			  success: function(vratioServer){
			  	$("#characterRace").html("");
			  	$("#characterRace").append("<option value=\"0\">Select Race</option>");
			  	var niz = jQuery.parseJSON(vratioServer);
			  	$( niz ).each(function(index,objekt) {
				 $("#characterRace").append("<option value=\""  + objekt.id  + "\">"  + objekt.name  + " </option>");
				});
				
			  }
			});
		
			
		$.ajax({
			  type: "POST",
			  url: "charClass.php",
			  data: $(this).attr("id"),
			  success: function(vratioServer){
			  	$("#characterClass").html("");
			  	$("#characterClass").append("<option value=\"0\">Select Class</option>");
			  	var niz = jQuery.parseJSON(vratioServer);
			  	$( niz ).each(function(index,objekt) {
				 $("#characterClass").append("<option value=\""  + objekt.id  + "\">"  + objekt.name  + " </option>");
				});
				
			  }
			});
			
		$.ajax({
			  type: "POST",
			  url: "charBackground.php",
			  data: $(this).attr("id"),
			  success: function(vratioServer){
			  	$("#characterBackground").html("");
			  	$("#characterBackground").append("<option value=\"0\">Select Background</option>");
			  	var niz = jQuery.parseJSON(vratioServer);
			  	$( niz ).each(function(index,objekt) {
				 $("#characterBackground").append("<option value=\""  + objekt.id  + "\">"  + objekt.name  + " </option>");
				});
				
			  }
			});
			
	
		$( "#characterRace" ).change(function() {						
    	$("#scoreBonus").hide(); 
		  $.ajax({
			  type: "POST",
			  url: "charSubrace.php",
			  data: "race=" + $( "#characterRace" ).val(),
			  success: function(vratioServer){
			  	$("#characterSubrace").html("");
			  	$("#characterSubrace").append("<option value=\"0\">Select Subrace</option>");
			  	var niz = jQuery.parseJSON(vratioServer);
			  	$( niz ).each(function(index,objekt) {
				 $("#characterSubrace").append("<option value=\""  + objekt.id  + "\">"  + objekt.name  + " </option>");
				});
				
			  }
			});			
    	$("#characterSubrace").show(); 
		});
		
		$( "#characterSubrace" ).change(function() {
		  $.ajax({
			  type: "POST",
			  url: "raceBonus.php",
			  data: "subraceID=" + $( "#characterSubrace" ).val(),
			  success: function(vratioServer){
			  	var niz = jQuery.parseJSON(vratioServer);
			  	$( niz ).each(function(index,objekt) {	
			  	$("#scoreBonus").html("");			  		
				$("#scoreBonus").append("<br /><input id=\"strenghtBonus\" name=\"strenghtBonus\" value=\""+ objekt.strenght +"\" class=\"score\" type=\"number\" readonly></><br />");
				$("#scoreBonus").append("<br /><input id=\"dexterityBonus\" name=\"dexterityBonus\" value=\""+ objekt.dexterity +"\" class=\"score\" type=\"number\" readonly></><br />");
				$("#scoreBonus").append("<br /><input id=\"constitutionBonus\" name=\"constitutionBonus\" value=\""+ objekt.constitution +"\" class=\"score\" type=\"number\" readonly></><br />");
				$("#scoreBonus").append("<br /><input id=\"intelligenceBonus\" name=\"intelligenceBonus\" value=\""+ objekt.intelligence +"\" class=\"score\" type=\"number\" readonly></><br />");
				$("#scoreBonus").append("<br /><input id=\"wisdomBonus\" name=\"wisdomBonus\" value=\""+ objekt.wisdom +"\" class=\"score\" type=\"number\" readonly></><br />");
				$("#scoreBonus").append("<br /><input id=\"charismaBonus\" name=\"charismaBonus\" value=\""+ objekt.charisma +"\" class=\"score\" type=\"number\" readonly></><br />");
				});
				
			  }
			});			
    	$("#scoreBonus").show(); 
		});
		
		
		$( "#characterRace" ).change(function() {
		  $.ajax({
			  type: "POST",
			  url: "racialStats.php",
			  data: "racialStats=" + $( "#characterRace" ).val(),
			  success: function(vratioServer){
			  	var niz = jQuery.parseJSON(vratioServer);
			  	$( niz ).each(function(index,objekt) {			  		
			  	$("#racialStats").html("");
				$("#racialStats").append("<label for =\"characterHeight\">Height</label><br /><input class=\"score\" type=\"number\" name=\"characterHeight\" placeholder=\"" + objekt.height + "\"/>");
				$("#racialStats").append("<label for =\"characterWeight\">Weight</label><br /><input class=\"score\" type=\"number\" name=\"characterWeight\" placeholder=\"" + objekt.weight + "\"/>");
				$("#racialStats").append("<label for =\"characterAge\">Age</label><br /><input class=\"score\" type=\"number\" name=\"characterAge\" placeholder=\"" + objekt.weight + "\"/>");
				});
				
			  }
			});			
    	$("#characterHeight").show();
    	$("#characterWeight").show(); 
    	$("#characterAge").show(); 
		});
			
			
		$( "#characterClass" ).change(function() {
		  $.ajax({
			  type: "POST",
			  url: "savingthrows.php",
			  data: "characterClass=" + $( "#characterClass" ).val(),
			  success: function(vratioServer){			  		
			  	$("#savingThrows").html("");
			  	var niz = jQuery.parseJSON(vratioServer);
			  	$( niz ).each(function(index,objekt) {			  	
			  	if(objekt.Strenght==true){
					$("#savingThrows").append("<input checked=\"checked\" id=\"StrenghtST\" value=\"" + objekt.id + "\" name=\"StrenghtST\" type=\"checkbox\"></><label for=\"StrenghtST\">Strenght</label><br />");
				}else{
					$("#savingThrows").append("<input id=\"StrenghtST\" value=\"" + objekt.id + "\" name=\"StrenghtST\" type=\"checkbox\"></><label for=\"StrenghtST\">Strenght</label><br />");
				}			  	
			  	if(objekt.Dexterity==true){
					$("#savingThrows").append("<input checked=\"checked\" id=\"DexterityST\" value=\"" + objekt.id + "\" name=\"DexterityST\" type=\"checkbox\"></><label for=\"DexterityST\">Dexterity</label><br />");
				}else{
					$("#savingThrows").append("<input id=\"DexterityST\" value=\"" + objekt.id + "\" name=\"DexterityST\" type=\"checkbox\"></><label for=\"DexterityST\">Dexterity</label><br />");
				}			  	
			  	if(objekt.Constitution==true){
					$("#savingThrows").append("<input checked=\"checked\" id=\"ConstitutionST\" value=\"" + objekt.id + "\" name=\"ConstitutionST\" type=\"checkbox\"></><label for=\"ConstitutionST\">Constitution</label><br />");
				}else{
					$("#savingThrows").append("<input id=\"ConstitutionST\" value=\"" + objekt.id + "\" name=\"ConstitutionST\" type=\"checkbox\"></><label for=\"ConstitutionST\">Constitution</label><br />");
				}			  	
			  	if(objekt.Intelligence==true){
					$("#savingThrows").append("<input checked=\"checked\" id=\"IntelligenceST\" value=\"" + objekt.id + "\" name=\"IntelligenceST\" type=\"checkbox\"></><label for=\"IntelligenceST\">Intelligence</label><br />");
				}else{
					$("#savingThrows").append("<input id=\"IntelligenceST\" value=\"" + objekt.id + "\" name=\"IntelligenceST\" type=\"checkbox\"></><label for=\"IntelligenceST\">Intelligence</label><br />");
				}			  	
			  	if(objekt.Wisdom==true){
					$("#savingThrows").append("<input checked=\"checked\" id=\"WisdomST\" value=\"" + objekt.id + "\" name=\"WisdomST\" type=\"checkbox\"></><label for=\"WisdomST\">Wisdom</label><br />");
				}else{
					$("#savingThrows").append("<input id=\"WisdomST\" value=\"" + objekt.id + "\" name=\"WisdomST\" type=\"checkbox\"></><label for=\"WisdomST\">Wisdom</label><br />");
				}			  	
			  	if(objekt.Charisma==true){
					$("#savingThrows").append("<input checked=\"checked\" id=\"CharismaST\" value=\"" + objekt.id + "\" name=\"CharismaST\" type=\"checkbox\"></><label for=\"CharismaST\">Charisma</label><br />");
				}else{
					$("#savingThrows").append("<input id=\"CharismaST\" value=\"" + objekt.id + "\" name=\"CharismaST\" type=\"checkbox\"></><label for=\"CharismaST\">Charisma</label><br />");
				}
				});
				
			  }
			}); 
		});
		
		$( "#characterBackground" ).change(function() {
		  $.ajax({
			  type: "POST",
			  url: "skills.php",
			  data: "characterBackground=" + $( "#characterBackground" ).val(),
			  success: function(vratioServer){			  		
			  	$("#skills").html("");
			  	var niz = jQuery.parseJSON(vratioServer);
			  	$( niz ).each(function(index,objekt) {
			  	var ime = objekt.name.replace(/ /g,''); 	
			  	if(objekt.checkbox==true){
					$("#skills").append("<input checked=\"checked\" id=\"" + objekt.name + "Skill" + "\" name=\"" + ime + "Skill" + "\" type=\"checkbox\"></><label for=\"" + objekt.name + "Skill" + "\">" + objekt.name + "</label><br />");
				}else{
					$("#skills").append("<input id=\"" + objekt.name + "Skill" + "\" name=\"" + ime + "Skill" + "\" type=\"checkbox\"></><label for=\"" + objekt.name + "Skill" + "\">" + objekt.name + "</label><br />");
					console.log(ime + "Skill");
				}
				});
				
			  }
			}); 
		});
		
		$( "#characterBackground" ).change(function() {
		  $.ajax({
			  type: "POST",
			  url: "equipment.php",
			  data: "characterBackground=" + $( "#characterBackground" ).val(),
			  success: function(vratioServer){			  		
			  	$("#equipment").html("");			  		
			  	$("#features").html("");
			  	var niz = jQuery.parseJSON(vratioServer);
			  	$( niz ).each(function(index,objekt) {
			  	$("#equipment").append("<textarea class=\"equipment\" id=\"equipmentBG\" name=\"equipmentBG\" type=\"text\" readonly>" + objekt.equipment + "</textarea>");
			  	$("#features").append("<textarea class=\"features\" id=\"featuresBG\" name=\"featuresBG\" type=\"text\" readonly>" + objekt.feature + "</textarea>");
				});
				
			  }
			}); 
		});
		
</script>
	</body>
</html>