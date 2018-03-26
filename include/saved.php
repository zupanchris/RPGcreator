<form method="get" enctype="multipart/form-data" action="">
	<section class="wrapper style1 container special">
		<div class="row">
		<div class="form-group">
		<h2>You've just created new Character.</h2>		
		<br />
		Character Name: <?php echo ucfirst($_GET["characterName"]); ?>
		<br />
		Race/Subrace: <?php echo $_GET['characterRace'] . " / " . $_GET['characterSubrace']; ?>
		<br />
		Class: <?php echo $_GET['characterClass']; ?>
		<br />
		Alingment: <?php echo $_GET['characterAlingment']; ?>
		<br />
		Background: <?php echo $_GET['characterBackground']; ?>
		<br />
		Strenght Score/Modifier: <?php echo $_GET['strenghtScore'] . " / " . $_GET['strenghtMod']; ?>
		<br />
		Dexterity Score/Modifier: <?php echo $_GET['dexterityScore'] . " / " . $_GET['dexterityMod']; ?>
		<br />
		Constitution Score/Modifier: <?php echo $_GET['constitutionScore'] . " / " . $_GET['constitutionMod']; ?>
		<br />
		Intelligence Score/Modifier: <?php echo $_GET['intelligenceScore'] . " / " . $_GET['intelligenceMod']; ?>
		<br />
		Wisdom Score/Modifier: <?php echo $_GET['wisdomScore'] . " / " . $_GET['wisdomMod']; ?>
		<br />
		Charisma Score/Modifier: <?php echo $_GET['charismaScore'] . " / " . $_GET['charismaMod']; ?>		
		<br />
		Acrobatics: <?php echo isset($_GET['AcrobaticsSkill']) ? 1 : 0; ?>
		<br />
		Animal Handling: <?php echo isset($_GET['AnimalHandlingSkill']) ? 1 : 0; ?>
		<br />
		Arcana: <?php echo isset($_GET['ArcanaSkill']) ? 1 : 0; ?>
		<br />
		Athletics: <?php echo isset($_GET['AthleticsSkill']) ? 1 : 0; ?>		
		<br />
		Deception: <?php echo isset($_GET['DeceptionSkill']) ? 1 : 0; ?>
		<br />
		History: <?php echo isset($_GET['HistorySkill']) ? 1 : 0; ?>
		<br />
		Insight: <?php echo isset($_GET['InsightSkill']) ? 1 : 0; ?>
		<br />
		Intimidation: <?php echo isset($_GET['IntimidationSkill']) ? 1 : 0; ?>
		<br />
		Investigation: <?php echo isset($_GET['InvestigationSkill']) ? 1 : 0; ?>
		<br />
		Medicine: <?php echo isset($_GET['MedicineSkill']) ? 1 : 0; ?>
		<br />
		Nature: <?php echo isset($_GET['NatureSkill']) ? 1 : 0; ?>
		<br />
		Perception: <?php echo isset($_GET['PerceptionSkill']) ? 1 : 0; ?>
		<br />
		Performance: <?php echo isset($_GET['PerformanceSkill']) ? 1 : 0; ?>
		<br />
		Persuasion: <?php echo isset($_GET['PersuasionSkill']) ? 1 : 0; ?>
		<br />
		Religion: <?php echo isset($_GET['ReligionSkill']) ? 1 : 0; ?>
		<br />
		Sleight Of Hand: <?php echo isset($_GET['SleightOfHandSkill']) ? 1 : 0; ?>
		<br />
		Stealth: <?php echo isset($_GET['StealthSkill']) ? 1 : 0; ?>
		<br />
		Survival: <?php echo isset($_GET['SurvivalSkill']) ? 1 : 0; ?>
		<br />
		<h2>Your new Character will be avalible in just a moment.</h2>		
		</div>
		</div>
	</section>
	
	<?php
	$insert = $connection->prepare("
		
	insert into characterdnd
	(id,name,subrace,class,background,alingment,user,
	strenghtScore,strenghtMod,dexterityScore,dexterityMod,constitutionScore,constitutionMod,
	intelligenceScore,intelligenceMod,wisdomScore,wisdomMod,charismaScore,charismaMod)
	values (null,:characterName,:characterSubrace,:characterClass,
	:characterBackground,:characterAlingment,:user,
	:strenghtScore,:strenghtMod,:dexterityScore,:dexterityMod,:constitutionScore,:constitutionMod,
	:intelligenceScore,:intelligenceMod,:wisdomScore,:wisdomMod,:charismaScore,:charismaMod);
	
	insert into characterskills
	(id,characterdnd, Acrobatics, AnimalHandling, Arcana, Athletics, Deception, History, Insight, Intimidation, Investigation,
	Medicine, Nature, Perception, Performance, Persuasion, Religion, SleightOfHand, Stealth, Survival) values
	(null,LAST_INSERT_ID(),:AcrobaticsSkill,:AnimalHandlingSkill,:ArcanaSkill,:AthleticsSkill,:DeceptionSkill,:HistorySkill,:InsightSkill,
	:IntimidationSkill,:InvestigationSkill,:MedicineSkill,:NatureSkill,:PerceptionSkill,:PerformanceSkill,
	:PersuasionSkill,:ReligionSkill,:SleightOfHandSkill,:StealthSkill,:SurvivalSkill);
	
	");
	
	$insert->execute(array(
	"characterName" => $_GET["characterName"],
	"characterSubrace" => $_GET["characterSubrace"],
	"characterClass" => $_GET["characterClass"],
	"characterBackground" => $_GET["characterBackground"],
	"characterAlingment" => $_GET["characterAlingment"],
	"user" => $_SESSION[$appID."authorized"]->id,
	"strenghtScore" => $_GET["strenghtScore"],
	"strenghtMod" => $_GET["strenghtMod"],
	"dexterityScore" => $_GET["dexterityScore"],
	"dexterityMod" => $_GET["dexterityMod"],
	"constitutionScore" => $_GET["constitutionScore"],
	"constitutionMod" => $_GET["constitutionMod"],
	"intelligenceScore" => $_GET["intelligenceScore"],
	"intelligenceMod" => $_GET["intelligenceMod"],
	"wisdomScore" => $_GET["wisdomScore"],
	"wisdomMod" => $_GET["wisdomMod"],
	"charismaScore" => $_GET["charismaScore"],
	"charismaMod" => $_GET["charismaMod"],
	"AcrobaticsSkill" => isset($_GET["AcrobaticsSkill"]) ? 1 : 0,
	"AnimalHandlingSkill" => isset($_GET["AnimalHandlingSkill"]) ? 1 : 0,	
	"ArcanaSkill" => isset($_GET["ArcanaSkill"]) ? 1 : 0,
	"AthleticsSkill" => isset($_GET["AthleticsSkill"]) ? 1 : 0,
	"DeceptionSkill" => isset($_GET["DeceptionSkill"]) ? 1 : 0,
	"HistorySkill" => isset($_GET["HistorySkill"]) ? 1 : 0,
	"InsightSkill" => isset($_GET["InsightSkill"]) ? 1 : 0,
	"IntimidationSkill" => isset($_GET["IntimidationSkill"]) ? 1 : 0,
	"InvestigationSkill" => isset($_GET["InvestigationSkill"]) ? 1 : 0,
	"MedicineSkill" => isset($_GET["MedicineSkill"]) ? 1 : 0,
	"NatureSkill" => isset($_GET["NatureSkill"]) ? 1 : 0,
	"PerceptionSkill" => isset($_GET["PerceptionSkill"]) ? 1 : 0,
	"PerformanceSkill" => isset($_GET["PerformanceSkill"]) ? 1 : 0,
	"PersuasionSkill" => isset($_GET["PersuasionSkill"]) ? 1 : 0,
	"ReligionSkill" => isset($_GET["ReligionSkill"]) ? 1 : 0,
	"SleightOfHandSkill" => isset($_GET["SleightOfHandSkill"]) ? 1 : 0,
	"StealthSkill" => isset($_GET["StealthSkill"]) ? 1 : 0,
	"SurvivalSkill" => isset($_GET["SurvivalSkill"]) ? 1 : 0
	)); ?>

</form>
