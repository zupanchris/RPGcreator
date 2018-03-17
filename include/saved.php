<form method="get" enctype="multipart/form-data" action="">
	<section class="wrapper style1 container special">
		<div class="row">
		<div class="form-group">
		<h2>You've just created new Character.</h2>		
		<br />
		Character Name: <?php echo ucfirst($_GET["characterName"]); ?>
		<br />
		Player Name: <?php echo ucfirst($_GET["playerName"]); ?>
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
		<h2>Your new Character will be avalible in just a moment.</h2>		
		</div>
		</div>
	</section>
	
	<?php
	$insert = $connection->prepare("insert into characterdnd (name,subrace,class,background,alingment,user,
									strenghtScore,strenghtMod,dexterityScore,dexterityMod,constitutionScore,constitutionMod,
									intelligenceScore,intelligenceMod,wisdomScore,wisdomMod,charismaScore,charismaMod)
	values (:characterName,:characterSubrace,:characterClass,
	:characterBackground,:characterAlingment,:user,
	:strenghtScore,:strenghtMod,:dexterityScore,:dexterityMod,:constitutionScore,:constitutionMod,
	:intelligenceScore,:intelligenceMod,:wisdomScore,:wisdomMod,:charismaScore,:charismaMod)");
	
	
	//	values ('" . ucfirst($_GET["characterName"]) . "'," . $_GET["characterSubrace"] . "," . $_GET["characterClass"] . ",
	//" . $_GET["characterBackground"] . "," . $_GET["characterAlingment"] . "," . rand(1,20000) . ")");
	
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
	"charismaMod" => $_GET["charismaMod"]
	)); ?>

</form>
