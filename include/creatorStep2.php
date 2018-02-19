<form method="get" enctype="multipart/form-data"  action="step3.php">>	
	<?php
	$name = $_GET["characterName"];
	$player = $_GET["playerName"];
	$race = $_GET["characterRace"];
	$subrace = $_GET["characterSubrace"];
	$background = $_GET["characterBackground"];
	$alingment = $_GET["characterAlingment"];
	$height = $_GET["characterHeight"];
	$weight = $_GET["characterWeight"];
	$age = $_GET["characterAge"];
 ?>
	<section class="wrapper style1 container special">
		<div class="row">
			<div class="3u 12u(narrower)">
				<strong>Abilities</strong>
				<div class="form-group">
					<?php
$abilityscore = $connection->prepare("select * from abilityscore");
$abilityscore->execute();
$results = $abilityscore->fetchAll(PDO::FETCH_OBJ);
foreach ($results as $option):
					?>
					<?php echo $option -> name . "<br />"; ?>
					<input  style="width: 80%" name="<?php echo $option->name ?>Ability" value="<?php echo getValue("$option->name"); ?>" class="score" type="number"></>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="3u 12u(narrower)">
				<strong>Bonus</strong>
				<br />
				<div class="form-group">
					<?php
$racebonus = $connection->prepare("select
a.strenght as 'RaceStr', a.dexterity as 'RaceDex', a.constitution as 'RaceCon', a.intelligence as 'RaceInt', a.wisdom as 'RaceWis', a.charisma as 'RaceCha',
b.strenght as 'SubraceStr', b.dexterity as 'SubraceDex', b.constitution as 'SubraceCon', b.intelligence as 'SubraceInt', b.wisdom as 'SubraceWis', b.charisma as 'SubraceCha'
from race a inner join subrace b on a.id=b.race where b.id='$subrace' and a.id='$race'");
$racebonus->execute();
$results = $racebonus->fetchAll(PDO::FETCH_OBJ);
foreach ($results as $option):
					?>
					<br />
					<input name="strenghtBonus" value="<?php echo ($option->RaceStr)+($option->SubraceStr); ?>" class="score" type="number" readonly></>
					<br /><br />
					<input name="dexterityBonus" value="<?php echo ($option->RaceDex)+($option->SubraceDex); ?>" class="score" type="number" readonly></>
					<br /><br />
					<input name="constitutionBonus" value="<?php echo ($option->RaceCon)+($option->SubraceCon); ?>" class="score" type="number" readonly></>
					<br /><br />
					<input name="intelligenceBonus" value="<?php echo ($option->RaceInt)+($option->SubraceInt); ?>" class="score" type="number" readonly></>
					<br /><br />
					<input name="wisdomBonus" value="<?php echo ($option->RaceWis)+($option->SubraceWis); ?>" class="score" type="number" readonly></>
					<br /><br />
					<input name="charismaBonus" value="<?php echo ($option->RaceCha)+($option->SubraceCha); ?>" class="score" type="number" readonly></>
					<br />
					<?php endforeach; ?>
				</div>
			</div>
			<?php
			$strArray = array(getValue("StrenghtAbility"), getValue("strenghtBonus"));
			$dexArray = array(getValue("DexterityAbility"), getValue("dexterityBonus"));
			$conArray = array(getValue("ConstitutionAbility"), getValue("constitutionBonus"));
			$intArray = array(getValue("IntelligenceAbility"), getValue("intelligenceBonus"));
			$wisArray = array(getValue("WisdomAbility"), getValue("wisdomBonus"));
			$chaArray = array(getValue("CharismaAbility"), getValue("charismaBonus"));
			?>
			<div class="3u 12u(narrower)">
				<strong>Scores</strong>
				<br />
				<div class="form-group">
					<br />
					<input class="score" type="number" name="strenghtScore"
					value="<?php echo array_sum($strArray) ? array_sum($strArray) : ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" type="number" name="dexterityScore"
					value="<?php echo array_sum($dexArray) ? array_sum($dexArray) : ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" type="number" name="constitutionScore"
					value="<?php echo array_sum($conArray) ? array_sum($conArray) : ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" type="number" name="intelligenceScore"
					value="<?php echo array_sum($intArray) ? array_sum($intArray) : ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" type="number" name="wisdomScore"
					value="<?php echo array_sum($wisArray) ? array_sum($wisArray) : ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" type="number" name="charismaScore"
					value="<?php echo array_sum($chaArray) ? array_sum($chaArray) : ""; ?>" readonly/>
				</div>
			</div>
			<div class="3u 12u(narrower)">
				<strong>Modifiers</strong>
				<br />
				<div class="form-group">
					<br />
					<input class="score" name="strenghtMod" type="number"
					value="<?php echo strMod("strenghtScore") ? strMod("strenghtScore") : ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" name="dexterityMod" type="number"
					value="<?php echo dexMod("dexterityScore") ? dexMod("dexterityScore") : ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" name="constitutionMod" type="number"
					value="<?php echo conMod("constitutionScore") ? conMod("constitutionScore") : ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" name="intelligenceMod" type="number"
					value="<?php echo intMod("intelligenceScore") ? intMod("intelligenceScore") : ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" name="wisdomMod" type="number"
					value="<?php echo wisMod("wisdomScore") ? wisMod("wisdomScore") : ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" name="charismaMod" type="number"
					value="<?php echo chaMod("charismaScore") ? chaMod("charismaScore") : ""; ?>" readonly/>
				</div>
			</div>
			<div class="6u 12u(narrower)">
				<div class="form-group">
					<input href="javascript:history.go(-1)" type="button" value="Previous">
				</div>
			</div>
			<div class="6u 12u(narrower)">
				<div class="form-group">
					<input href="step3.php" type="submit" value="Next">
				</div>
			</div>
		</div>
	</section>
</form>