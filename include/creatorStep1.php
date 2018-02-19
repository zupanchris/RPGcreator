<form method="get" enctype="multipart/form-data" action="step2.php">
	<section class="wrapper style1 container special">
		<div class="row">
			<div class="12u 12u(narrower)">
			<strong>Basic Info</strong>
			</div>
			<div class="4u -2u 12u(narrower)">
				<div class="form-group">					
					<br />
					<label>Character Name</label>
					<br />
					<input type="text" name="characterName"
					value="<?php echo getValue("characterName") ? getValue("characterName") : "Osnovni"; ?>" required />
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
							<option title="<?php echo "Strenght : " . $option -> strenght . "\n" . "Dexterity : " . $option -> dexterity . "\n" . "Constitution : " . $option -> constitution . "\n" . "Intelligence : " . $option -> intelligence . "\n" . "Wisdom : " . $option -> wisdom . "\n" . "Charisma : " . $option -> charisma . "\n" . "Traits : " . $option -> trait; ?>"<?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="$option->id" ? " selected=\"selected\" " : "" ?> value="<?php echo $option->id ?>"><?php echo $option -> name; ?></option>							
					<?php endforeach; ?>
					</select>
				</div>
				<strong>Bonus</strong>
				<br />
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
							<option <?php echo isset($_GET["characterClass"]) && $_GET["characterClass"]==="$option->id" ? " selected=\"selected\" " : "" ?> value="<?php echo $option->id ?>" title="<?php echo $option -> feature; ?>"><?php echo $option -> name; ?></option>							
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
							<option title="<?php echo "Skills : " . $option -> skill . "\n" . "Tools : " . $option -> tool . "\n" . "Languages : " . $option -> language . "\n" . "Equipment : " . $option -> equipment . "\n" . "Features : " . $option -> feature; ?>"<?php echo isset($_GET["characterBackground"]) && $_GET["characterBackground"]==="$option->id" ? " selected=\"selected\" " : "" ?> value="<?php echo $option->id ?>"><?php echo $option -> name; ?></option>							
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
							<option <?php echo isset($_GET["characterAlingment"]) && $_GET["characterAlingment"]==="$option->id" ? " selected=\"selected\" " : "" ?> value="<?php echo $option->id ?>"><?php echo $option -> name; ?></option>							
					<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="4u 12u(narrower)">
				<br />
				<div class="form-group">
					<label>Player Name</label>
					<br />
					<input type="text" name="playerName"
					value="<?php echo getValue("playerName"); ?>"/>
					<label>Height</label>
					<br />
					<input type="number" name="characterHeight" style="width: 100%"
					value="<?php echo getValue("characterHeight"); ?>"/>
					<label>Weight</label>
					<br />
					<input type="number" name="characterWeight" style="width: 100%"
					value="<?php echo getValue("characterWeight"); ?>"/>
					<label>Age</label>
					<br />
					<input type="number" name="characterAge" style="width: 100%"
					value="<?php echo getValue("characterAge"); ?>"/>
				</div>
			</div>
				
			<div class="12u -12u 12u(narrower)">
				<div class="form-group">
					<input href="step2.php" type="submit" value="Next">
				</div>
			</div>			
		</div>
	</section>
</form>