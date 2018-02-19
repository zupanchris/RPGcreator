<form method="get" enctype="multipart/form-data">	
	<section class="wrapper style1 container special">
		<div class="row">
			<div class="2u 12u(narrower)">
				<div class="form-group">
					<strong>Basic Info</strong>
					<br />
					<label>Character Name</label>
					<br />
					<input type="text" name="characterName"
					value="<?php echo getValue("characterName") ? getValue("characterName") : "Osnovni"; ?>" required />
					<label>Height</label>
					<br />
					<input type="number" name="characterHeight"
					value="<?php echo getValue("characterHeight"); ?>"/>
				</div>
				<div class="form-group">
					<label for="race"><strong>Race</strong></label>
					<br />					
					<select class="form-control" name="characterRace">
					<?php 
					$race = $connection->prepare("select * from race;");
					$race->execute();
					$results = $race->fetchAll(PDO::FETCH_OBJ);
					foreach ($results as $option):
					?>
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="$option->id" ? " selected=\"selected\" " : "" ?> value="<?php echo $option->id ?>"><?php echo $option->name; ?></option>							
					<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="subrace"><strong>Subrace</strong></label>
					<br />					
					<select class="form-control" name="characterSubrace">
					<?php 
					$subrace = $connection->prepare("select * from subrace;");
					$subrace->execute();
					$results = $subrace->fetchAll(PDO::FETCH_OBJ);
					foreach ($results as $option):
					?>
							<option title="<?php echo "Strenght : " . $option -> strenght . "\n" . "Dexterity : " . $option -> dexterity . "\n" . "Constitution : " . $option -> constitution . "\n" . "Intelligence : " . $option -> intelligence . "\n" . "Wisdom : " . $option -> wisdom . "\n" . "Charisma : " . $option -> charisma . "\n" . "Traits : " . $option -> trait; ?>"<?php echo isset($_GET["characterSubrace"]) && $_GET["characterSubrace"]==="$option->id" ? " selected=\"selected\" " : "" ?> value="<?php echo $option->id ?>"><?php echo $option -> name; ?></option>							
					<?php endforeach; ?>
					</select>
				</div>

				<div class="form-group">
					<label for="race"><strong>Class</strong></label>
					<br />					
					<select class="form-control" name="characterClass">
					<?php 
					$class = $connection->prepare("select * from class;");
					$class->execute();
					$results = $class->fetchAll(PDO::FETCH_OBJ);
					foreach ($results as $option):
					?>
							<option <?php echo isset($_GET["characterClass"]) && $_GET["characterClass"]==="$option->id" ? " selected=\"selected\" " : "" ?> value="<?php echo $option->id ?>" title="<?php echo $option->feature; ?>"><?php echo $option->name; ?></option>							
					<?php endforeach; ?>
					</select>
				</div>

				<div class="form-group">
					<label for="background"><strong>Background</strong></label>
					<br />					
					<select class="form-control" name="characterBackground">
					<?php 
					$background = $connection->prepare("select * from background;");
					$background->execute();
					$results = $background->fetchAll(PDO::FETCH_OBJ);
					foreach ($results as $option):
					?>
							<option <?php echo isset($_GET["characterBackground"]) && $_GET["characterBackground"]==="$option->id" ? " selected=\"selected\" " : "" ?> value="<?php echo $option->id ?>"><?php echo $option->name; ?></option>							
					<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="alingment"><strong>Alingment</strong></label>
					<br />
					<select class="form-control" name="characterAlingment">
					<?php 
					$alingment = $connection->prepare("select * from alingment;");
					$alingment->execute();
					$results = $alingment->fetchAll(PDO::FETCH_OBJ);
					foreach ($results as $option):
					?>
							<option <?php echo isset($_GET["characterAlingment"]) && $_GET["characterAlingment"]==="$option->id" ? " selected=\"selected\" " : "" ?> value="<?php echo $option->id ?>"><?php echo $option->name; ?></option>							
					<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="2u 12u(narrower)">
				<br />
				<div class="form-group">
					<label>Player Name</label>
					<br />
					<input type="text" name="playerName"
					value="<?php echo getValue("playerName"); ?>"/>
					<label>Weight</label>
					<br />
					<input type="number" name="characterWeight"
					value="<?php echo getValue("characterWeight"); ?>"/>
					<label>Age</label>
					<br />
					<input type="number" name="characterAge"
					value="<?php echo getValue("characterAge"); ?>"/>
				</div>
				<label><strong>Saving Throws</strong></label>
				<div class="form-group skills">
					<?php 
					$savingthrow = $connection->prepare("select * from savingthrow;");
					$savingthrow->execute();
					$results = $savingthrow->fetchAll(PDO::FETCH_OBJ);
					foreach ($results as $option):
					?>
					<input id="savingThrow" value="<?php echo $option->id ?>"
					name="savingThrow[]" <?php echo checkboxMark("savingThrow","$option->id") ?> type="checkbox" /><?php echo $option->name . "<br />"; ?></>							
					<?php endforeach; ?>
				</div>

			</div>			
			<div class="1u 12u(narrower)">
				<div class="form-group">
					<strong>Abilities</strong>
					<br />
					<?php 
					$abilityscore = $connection->prepare("select * from abilityscore;");
					$abilityscore->execute();
					$results = $abilityscore->fetchAll(PDO::FETCH_OBJ);
					foreach ($results as $option):
					?>
					<?php echo $option->name . "<br />"; ?>
					<input name="<?php echo $option->name?>" value="<?php echo isset($_GET['$option->name . "Ability"']) ? $_GET['$option->name . "Ability"'] : ""; ?>" class="score" type="number"></>							
					<?php endforeach; ?>
				</div>
			</div>
			<div class="1u 12u(narrower)">
				<strong>Bonus</strong>
				<br />
				<div class="form-group">
					<?php
$racebonus = $connection->prepare("select
a.strenght as 'RaceStr', a.dexterity as 'RaceDex', a.constitution as 'RaceCon', a.intelligence as 'RaceInt', a.wisdom as 'RaceWis', a.charisma as 'RaceCha',
b.strenght as 'SubraceStr', b.dexterity as 'SubraceDex', b.constitution as 'SubraceCon', b.intelligence as 'SubraceInt', b.wisdom as 'SubraceWis', b.charisma as 'SubraceCha'
from race a inner join subrace b on a.id=b.race where b.id='" . $_GET['characterSubrace'] . "' and a.id='" . $_GET['characterRace'] . "'");
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
			<div class="1u 12u(narrower)">
				<div class="form-group">
					<strong>Scores</strong>
					<br />
					<br />
					<input class="score" type="number" name="strenghtScore"
					value="<?php echo array_sum($strArray) ? array_sum($strArray): ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" type="number" name="dexterityScore"
					value="<?php echo array_sum($dexArray) ? array_sum($dexArray): ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" type="number" name="constitutionScore"
					value="<?php echo array_sum($conArray) ? array_sum($conArray): ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" type="number" name="intelligenceScore"
					value="<?php echo array_sum($intArray) ? array_sum($intArray): ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" type="number" name="wisdomScore"
					value="<?php echo array_sum($wisArray) ? array_sum($wisArray): ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" type="number" name="charismaScore"
					value="<?php echo array_sum($chaArray) ? array_sum($chaArray): ""; ?>" readonly/>
				</div>
			</div>
			<div class="1u 12u(narrower)">
				<div class="form-group">
					<strong>Modifiers</strong>
					<br />
					<br />
					<input class="score" name="strenghtMod" type="number"
					value="<?php echo strMod("strenghtScore") ? strMod("strenghtScore"): ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" name="dexterityMod" type="number"
					value="<?php echo dexMod("dexterityScore") ? dexMod("dexterityScore"): ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" name="constitutionMod" type="number"
					value="<?php echo conMod("constitutionScore") ? conMod("constitutionScore"): ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" name="intelligenceMod" type="number"
					value="<?php echo intMod("intelligenceScore") ? intMod("intelligenceScore"): ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" name="wisdomMod" type="number"
					value="<?php echo wisMod("wisdomScore") ? wisMod("wisdomScore"): ""; ?>" readonly/>
					<br />
					<br />
					<input class="score" name="charismaMod" type="number"
					value="<?php echo chaMod("charismaScore") ? chaMod("charismaScore"): ""; ?>" readonly/>
				</div>
			</div>
			<div class="2u 12u(narrower)">
				<strong>Skills</strong>
				<div class="form-group skills">
					<br />
					<?php 
					$skill = $connection->prepare("select * from skill;");
					$skill->execute();
					$results = $skill->fetchAll(PDO::FETCH_OBJ);
					foreach ($results as $option):
					?>
					<input id="skill" value="<?php echo $option->id ?>"
					name="skills[]" <?php echo checkboxMark("skills","$option->id") ?> type="checkbox"></>
					<label for="<?php echo $option->id ?>"><?php echo $option->name . "<br />"; ?></label>					
					<?php endforeach; ?>
				</div>
			</div>
			<div class="2u 12u(narrower)">
					
			</div>
			<div class="12u -12u 12u(narrower)">
				<div class="form-group">
					<input type="submit" value="Preview Character">
				</div>
			</div>
			<div class="12u -12u 12u(narrower)">
				<div class="form-group">
					<input type="submit" value="Save Character">
				</div>
			</div>
		</div>
	</section>
</form>