<form method="get" enctype="multipart/form-data" action="<?php action(); ?>">
	<section class="wrapper style1 container special">
		<div class="row">
			<div class="2u 12u(narrower)">
				<div class="form-group">
					<strong>Basic Info</strong>
					<br />
					<label>Character Name</label>
					<br />
					<input type="text" name="characterName"
					value="<?php echo getValue("characterName") ? getValue("characterName") : "Grayhawk"; ?>" required />
					<label>Player Name</label>
					<br />
					<input type="text" name="playerName"
					value="<?php echo getValue("playerName") ? getValue("playerName") : $_SESSION[$appID."authorized"]->username; ?>" required />			
				</div>
				<div class="form-group">
					<label for="race"><strong>Race</strong></label>
					<br />					
					<select class="form-control" name="characterRace" id="characterRace">
					<?php 
					$race = $connection->prepare("select * from race;");
					$race->execute();
					$results = $race->fetchAll(PDO::FETCH_OBJ);
					foreach ($results as $option):
					?>
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="$option->id" ? " selected=\"selected\" " : "" ?> value="<?php echo $option->id; ?>"><?php echo $option->name; ?></option>							
					<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="subrace"><strong>Subrace</strong></label>
					<br />					
					<select class="form-control" name="characterSubrace" id="characterSubrace">
					<?php 
					$subrace = $connection->prepare("select * from subrace;");
					$subrace->execute();
					$results = $subrace->fetchAll(PDO::FETCH_OBJ);
					foreach ($results as $option):
					?>
							<option <?php echo isset($_GET["characterSubrace"]) && $_GET["characterSubrace"]==="$option->id" ? " selected=\"selected\" " : "" ?> value="<?php echo $option->id; ?>"><?php echo $option -> name; ?></option>							
					<?php endforeach; ?>
					</select>
				</div>

				<div class="form-group">
					<label for="race"><strong>Class</strong></label>
					<br />					
					<select id="characterClass" class="form-control" name="characterClass">
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
					<select id="characterBackground" class="form-control" name="characterBackground">
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
					<select id="characterAlingment" class="form-control" name="characterAlingment">
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
				<strong>Racial & Class Stats</strong>	
				<br />
				<div class="form-group">
					<?php
					$racialStats = $connection->prepare("select age, height, weight from race where id='" . $_GET['characterRace'] . "'");
					$racialStats->execute();
					$results = $racialStats->fetchAll(PDO::FETCH_OBJ);
					foreach ($results as $option):
					?>			
					<label>Height</label>
					<br />
					<input class="score" type="number" name="characterHeight" placeholder="<?php echo $option->height; ?>"
					value="<?php echo getValue("characterHeight"); ?>"/>
					<label>Weight</label>
					<br />
					<input class="score" type="number" name="characterWeight" placeholder="<?php echo $option->weight; ?>"
					value="<?php echo getValue("characterWeight"); ?>"/>
					<label>Age</label>
					<br />
					<input class="score" type="number" name="characterAge" placeholder="<?php echo $option->age; ?>"
					value="<?php echo getValue("characterAge"); ?>"/>
					<?php endforeach; ?>
				</div>
				<label><strong>Saving Throws</strong></label>
				<div class="form-group skills">
					<?php 
					$savingthrow = $connection->prepare("select * from savingthrow;");
					$savingthrow->execute();
					$results = $savingthrow->fetchAll(PDO::FETCH_OBJ);
					foreach ($results as $option):
					?>
					<input id="<?php echo $option->name ?>" value="<?php echo $option->id ?>"
					name="savingThrow[]" <?php echo checkboxMark("savingThrow","$option->id") ?> type="checkbox"></>
					<label for="<?php echo $option->name ?>"><?php echo $option->name . "<br />"; ?></label>
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
					<input id="<?php echo $option->name . "Ability"; ?>" name="<?php echo $option->name . "Ability"; ?>" value="<?php echo isset($_GET[$option->name . "Ability"]) ? $_GET[$option->name . "Ability"] : ""; ?>" class="score" type="number" required ></>							
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
					<input id="strenghtBonus" name="strenghtBonus" value="<?php echo ($option->RaceStr)+($option->SubraceStr); ?>" class="score" type="number" readonly></>
					<br /><br />
					<input id="dexterityBonus" name="dexterityBonus" value="<?php echo ($option->RaceDex)+($option->SubraceDex); ?>" class="score" type="number" readonly></>
					<br /><br />
					<input id="constitutionBonus" name="constitutionBonus" value="<?php echo ($option->RaceCon)+($option->SubraceCon); ?>" class="score" type="number" readonly></>
					<br /><br />
					<input id="intelligenceBonus" name="intelligenceBonus" value="<?php echo ($option->RaceInt)+($option->SubraceInt); ?>" class="score" type="number" readonly></>
					<br /><br />
					<input id="wisdomBonus" name="wisdomBonus" value="<?php echo ($option->RaceWis)+($option->SubraceWis); ?>" class="score" type="number" readonly></>
					<br /><br />
					<input id="charismaBonus" name="charismaBonus" value="<?php echo ($option->RaceCha)+($option->SubraceCha); ?>" class="score" type="number" readonly></>
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
					<?php score("strenghtScore",$strArray); ?>
					<?php score("dexterityScore",$dexArray); ?>
					<?php score("constitutionScore",$conArray); ?>	
					<?php score("intelligenceScore",$intArray); ?>	
					<?php score("wisdomScore",$wisArray); ?>	
					<?php score("charismaScore",$chaArray); ?>	
				</div>
			</div>
			<div class="1u 12u(narrower)">
				<div class="form-group">
					<strong>Modifiers</strong>
					<?php scoreMod("strenghtMod","strenghtScore"); ?>
					<?php scoreMod("dexterityMod","dexterityScore"); ?>
					<?php scoreMod("constitutionMod","constitutionScore"); ?>
					<?php scoreMod("intelligenceMod","intelligenceScore"); ?>
					<?php scoreMod("wisdomMod","wisdomScore"); ?>
					<?php scoreMod("charismaMod","charismaScore"); ?>
				</div>
			</div>
			<div class="2u 12u(narrower)">
				<strong>Skills</strong>
				<div class="form-group skills">
					<br />
					<?php 
					$skill = $connection->prepare("select * from skill limit 9;");
					$skill->execute();
					$results = $skill->fetchAll(PDO::FETCH_OBJ);
					foreach ($results as $option):
					?>
					<input id="<?php echo $option->name ?>" value="<?php echo $option->id ?>"
					name="skills[]" <?php echo checkboxMark("skills","$option->id") ?> type="checkbox"></>
					<label for="<?php echo $option->name ?>"><?php echo $option->name . "<br />"; ?></label>					
					<?php endforeach; ?>
				</div>
			</div>
			<div class="2u 12u(narrower)">
					<div class="form-group skills">
					<br /><br />
					<?php 
					$skill = $connection->prepare("select * from skill limit 9,10;");
					$skill->execute();
					$results = $skill->fetchAll(PDO::FETCH_OBJ);
					foreach ($results as $option):
					?>
					<input id="<?php echo $option->name ?>" value="<?php echo $option->id ?>"
					name="skills[]" <?php echo checkboxMark("skills","$option->id") ?> type="checkbox"></>
					<label for="<?php echo $option->name ?>"><?php echo $option->name . "<br />"; ?></label>					
					<?php endforeach; ?>
				</div>
			</div>
			<div class="12u -12u 12u(narrower)">
				<div class="form-group">
					<input type="submit" value="Preview Character" id="previewCharacter" name="preview">
				</div>
			</div>
			<div class="12u -12u 12u(narrower)">
				<div class="form-group">
					<input type="submit" value="Save Character" name="submit">
				</div>
			</div>
		</div>
	</section>
</form>


<script src="<?php echo $sourceAPP; ?>assets/js/creator.js"></script>