<form method="get" enctype="multipart/form-data" action="saved.php">
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
					<label for="characterRace"><strong>Race</strong></label>
					<br />					
					<select class="form-control" name="characterRace" id="characterRace"></select>
				</div>
				<div class="form-group">				
					<select class="form-control" name="characterSubrace" id="characterSubrace"></select>
				</div>

				<div class="form-group">
					<label for="characterClass"><strong>Class</strong></label>
					<br />
					<select class="form-control" name="characterClass" id="characterClass"></select>
				</div>

				<div class="form-group">
					<label for="background"><strong>Background</strong></label>
					<br />					
					<select id="characterBackground" class="form-control" name="characterBackground"></select>
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
				<div class="form-group" id="racialStats"></div>
				<label><strong>Saving Throws</strong></label>
				<div class="form-group skills" id="savingThrows">
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
				<div class="form-group" id="scoreBonus">
					
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
				<div class="form-group skills" id="skills">
					<br />
					
				</div>
			</div>
			<div class="2u 12u(narrower)">
				<strong>Features & Equipment</strong>
				<div class="form-group features" id="features">					
				</div>
				<div class="form-group equipment" id="equipment">					
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