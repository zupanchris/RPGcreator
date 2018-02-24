<form method="get" enctype="multipart/form-data" action="">
	<section class="wrapper style1 container special">
		<div class="row">
		<div class="form-group">
		<h2>You have created the following character</h2>
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
		</div>
		</div>
	</section>
	
	<?php
	$insert = $connection->prepare("insert into characterdnd (name,subrace,class,background,alingment,user)
	values ('" . ucfirst($_GET["characterName"]) . "'," . $_GET["characterSubrace"] . "," . $_GET["characterClass"] . ",
	" . $_GET["characterBackground"] . "," . $_GET["characterAlingment"] . "," . rand(1,20000) . ")");
	$insert->execute($_POST); ?>
</form>
<div class="12u -12u 12u(narrower)">
<div class="form-group">
<button class="button special small" href="#">Download</button></td>
</div>
</div>
