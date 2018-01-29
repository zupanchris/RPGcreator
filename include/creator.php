<form method="get" enctype="multipart/form-data">
	<section class="wrapper style1 container special">
		<div class="row">
			<div class="2u 12u(narrower)">
				<div class="form-group">
					<label><strong>Basic Info</strong></label>
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
						<optgroup label="Dwarfs">
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="01" ? " selected=\"selected\" " : "" ?>value="01">Hill Dwarf</option>
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="02" ? " selected=\"selected\" " : "" ?>value="02">Mountain Dwarf</option>
						</optgroup>
						<optgroup label="Elfs">
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="03" ? " selected=\"selected\" " : "" ?>value="03">High Elf</option>
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="04" ? " selected=\"selected\" " : "" ?>value="04">Wood Elf</option>
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="05" ? " selected=\"selected\" " : "" ?>value="05">Dark Elf (Drow)</option>
						</optgroup>
						<optgroup label="Halflings">
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="06" ? " selected=\"selected\" " : "" ?>value="06">Lightfoot Halfling</option>
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="07" ? " selected=\"selected\" " : "" ?>value="07">Stout Halfling</option>
						</optgroup>
						<optgroup label ="Gnomes">
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="08" ? " selected=\"selected\" " : "" ?>value="08">Forest Gnome</option>
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="09" ? " selected=\"selected\" " : "" ?>value="09">Rock Gnome</option>
						</optgroup>
						<optgroup label= "Other Races">
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="10" ? " selected=\"selected\" " : "" ?>value="10">Human</option>
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="11" ? " selected=\"selected\" " : "" ?>value="11">Dragonborn</option>
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="12" ? " selected=\"selected\" " : "" ?>value="12">Half-Elf</option>
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="13" ? " selected=\"selected\" " : "" ?>value="13">Half-Orc</option>
							<option <?php echo isset($_GET["characterRace"]) && $_GET["characterRace"]==="14" ? " selected=\"selected\" " : "" ?>value="14">Tiefling</option>
						</optgroup>
					</select>
				</div>

				<div class="form-group">
					<label for="class"><strong>Class</strong></label>
					<br />
					<select class="form-control" name="characterClass">
						<option <?php echo isset($_GET["characterClass"]) && $_GET["characterClass"]==="01" ? " selected=\"selected\" " : "" ?>value="01">Barbarian</option>
						<option <?php echo isset($_GET["characterClass"]) && $_GET["characterClass"]==="02" ? " selected=\"selected\" " : "" ?>value="02">Bard</option>
						<option <?php echo isset($_GET["characterClass"]) && $_GET["characterClass"]==="03" ? " selected=\"selected\" " : "" ?>value="03">Cleric</option>
						<option <?php echo isset($_GET["characterClass"]) && $_GET["characterClass"]==="04" ? " selected=\"selected\" " : "" ?>value="04">Druid</option>
						<option <?php echo isset($_GET["characterClass"]) && $_GET["characterClass"]==="05" ? " selected=\"selected\" " : "" ?>value="05">Fighter</option>
						<option <?php echo isset($_GET["characterClass"]) && $_GET["characterClass"]==="06" ? " selected=\"selected\" " : "" ?>value="06">Monk</option>
						<option <?php echo isset($_GET["characterClass"]) && $_GET["characterClass"]==="07" ? " selected=\"selected\" " : "" ?>value="07">Paladin</option>
						<option <?php echo isset($_GET["characterClass"]) && $_GET["characterClass"]==="08" ? " selected=\"selected\" " : "" ?>value="08">Ranger</option>
						<option <?php echo isset($_GET["characterClass"]) && $_GET["characterClass"]==="09" ? " selected=\"selected\" " : "" ?>value="09">Rogue</option>
						<option <?php echo isset($_GET["characterClass"]) && $_GET["characterClass"]==="10" ? " selected=\"selected\" " : "" ?>value="10">Sorcerer</option>
						<option <?php echo isset($_GET["characterClass"]) && $_GET["characterClass"]==="11" ? " selected=\"selected\" " : "" ?>value="11">Warlock</option>
						<option <?php echo isset($_GET["characterClass"]) && $_GET["characterClass"]==="12" ? " selected=\"selected\" " : "" ?>value="12">Wizard</option>
					</select>
				</div>

				<div class="form-group">
					<label for="background"><strong>Background</strong></label>
					<br />
					<select class="form-control" name="characterBackground">
						<option <?php echo isset($_GET["characterBackground"]) && $_GET["characterBackground"]==="01" ? " selected=\"selected\" " : "" ?>value="01">Acolyte</option>
						<option <?php echo isset($_GET["characterBackground"]) && $_GET["characterBackground"]==="02" ? " selected=\"selected\" " : "" ?>value="02">Charlatan</option>
						<option <?php echo isset($_GET["characterBackground"]) && $_GET["characterBackground"]==="03" ? " selected=\"selected\" " : "" ?>value="03">Criminal</option>
						<option <?php echo isset($_GET["characterBackground"]) && $_GET["characterBackground"]==="04" ? " selected=\"selected\" " : "" ?>value="04">Entertainer</option>
						<option <?php echo isset($_GET["characterBackground"]) && $_GET["characterBackground"]==="05" ? " selected=\"selected\" " : "" ?>value="05">Folk Hero</option>
						<option <?php echo isset($_GET["characterBackground"]) && $_GET["characterBackground"]==="06" ? " selected=\"selected\" " : "" ?>value="06">Guild Artisan</option>
						<option <?php echo isset($_GET["characterBackground"]) && $_GET["characterBackground"]==="07" ? " selected=\"selected\" " : "" ?>value="07">Hermit</option>
						<option <?php echo isset($_GET["characterBackground"]) && $_GET["characterBackground"]==="08" ? " selected=\"selected\" " : "" ?>value="08">Noble</option>
						<option <?php echo isset($_GET["characterBackground"]) && $_GET["characterBackground"]==="09" ? " selected=\"selected\" " : "" ?>value="09">Sage</option>
						<option <?php echo isset($_GET["characterBackground"]) && $_GET["characterBackground"]==="10" ? " selected=\"selected\" " : "" ?>value="10">Sailor</option>
						<option <?php echo isset($_GET["characterBackground"]) && $_GET["characterBackground"]==="11" ? " selected=\"selected\" " : "" ?>value="11">Soldier</option>
						<option <?php echo isset($_GET["characterBackground"]) && $_GET["characterBackground"]==="12" ? " selected=\"selected\" " : "" ?>value="12">Urchin</option>
					</select>
				</div>
				<div class="form-group">
					<label for="alingment"><strong>Alingment</strong></label>
					<br />
					<select class="form-control" name="characterAlingment">
						<option <?php echo isset($_GET["characterAlingment"]) && $_GET["characterAlingment"]==="01" ? " selected=\"selected\" " : "" ?>value="01">Lawful Good</option>
						<option <?php echo isset($_GET["characterAlingment"]) && $_GET["characterAlingment"]==="02" ? " selected=\"selected\" " : "" ?>value="02">Lawful Neutral</option>
						<option <?php echo isset($_GET["characterAlingment"]) && $_GET["characterAlingment"]==="03" ? " selected=\"selected\" " : "" ?>value="03">Lawful Evil</option>
						<option <?php echo isset($_GET["characterAlingment"]) && $_GET["characterAlingment"]==="04" ? " selected=\"selected\" " : "" ?>value="04">Neutral Good</option>
						<option <?php echo isset($_GET["characterAlingment"]) && $_GET["characterAlingment"]==="05" ? " selected=\"selected\" " : "" ?>value="05">True Neutral</option>
						<option <?php echo isset($_GET["characterAlingment"]) && $_GET["characterAlingment"]==="06" ? " selected=\"selected\" " : "" ?>value="06">Neutral Evil</option>
						<option <?php echo isset($_GET["characterAlingment"]) && $_GET["characterAlingment"]==="07" ? " selected=\"selected\" " : "" ?>value="07">Chaotic Good</option>
						<option <?php echo isset($_GET["characterAlingment"]) && $_GET["characterAlingment"]==="08" ? " selected=\"selected\" " : "" ?>value="08">Chaotic Neutral</option>
						<option <?php echo isset($_GET["characterAlingment"]) && $_GET["characterAlingment"]==="09" ? " selected=\"selected\" " : "" ?>value="09">Chaotic Evil</option>
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
				<div class="form-group" id="skills">
					<input type="checkbox" id="strenghtST" value="01"
					name="savingThrow[]" <?php echo checkboxMark("savingThrow","01") ?> />
					<label for="strenghtST">Strenght</label>
					<br />
					<input type="checkbox" id="dexterityST" value="02"
					name="savingThrow[]" <?php echo checkboxMark("savingThrow","02") ?> />
					<label for="dexterityST">Dexterity</label>
					<br />
					<input type="checkbox" id="constitutionST" value="03"
					name="savingThrow[]" <?php echo checkboxMark("savingThrow","03") ?> />
					<label for="constitutionST">Constitution</label>
					<br />
					<input type="checkbox" id="intelligenceST" value="04"
					name="savingThrow[]" <?php echo checkboxMark("savingThrow","04") ?> />
					<label for="intelligenceST">Intelligence</label>
					<br />
					<input type="checkbox" id="wisdomST" value="05"
					name="savingThrow[]" <?php echo checkboxMark("savingThrow","05") ?> />
					<label for="wisdomST">Wisdom</label>
					<br />
					<input type="checkbox" id="charismaST" value="06"
					name="savingThrow[]" <?php echo checkboxMark("savingThrow","06") ?> />
					<label for="charismaST">Charisma</label>
				</div>

			</div>			
			<div class="1u 12u(narrower)">
				<div class="form-group">
					<label><strong>Abilities</strong></label>
					<br />
					<label>Strenght</label>
					<br />
					<input id="score" type="number" name="strenghtAbility"
					value="<?php echo getValue("strenghtAbility") ? getValue("strenghtAbility") : 8; ?>" required />
					<br />
					<label>Dexterity</label>
					<br />
					<input id="score" type="number" name="dexterityAbility"
					value="<?php echo getValue("dexterityAbility") ? getValue("dexterityAbility") : 8; ?>" required />
					<br />
					<label>Constitution</label>
					<br />
					<input id="score" type="number" name="constitutionAbility"
					value="<?php echo getValue("constitutionAbility") ? getValue("constitutionAbility") : 8; ?>" required />
					<br />
					<label>Intelligence</label>
					<br />
					<input id="score" type="number" name="intelligenceAbility"
					value="<?php echo getValue("intelligenceAbility") ? getValue("intelligenceAbility") : 8; ?>" required />
					<br />
					<label>Wisdom</label>
					<br />
					<input id="score" type="number" name="wisdomAbility"
					value="<?php echo getValue("wisdomAbility") ? getValue("wisdomAbility") : 8; ?>" required />
					<br />
					<label>Charisma</label>
					<br />
					<input id="score" type="number" name="charismaAbility"
					value="<?php echo getValue("charismaAbility") ? getValue("charismaAbility") : 8; ?>" required />
				</div>
			</div>
			<div class="1u 12u(narrower)">
				<div class="form-group">
					<label><strong>Bonus</strong></label>
					<br />
					<br />
					<input id="score" type="number" name="strenghtBonus"
					value="<?php echo strBonus("characterRace") ? strBonus("characterRace") : ""; ?>" readonly/>
					<br />
					<br />
					<input id="score" type="number" name="dexterityBonus"
					value="<?php echo dexBonus("characterRace") ? dexBonus("characterRace") : ""; ?>" readonly/>
					<br />
					<br />
					<input id="score" type="number" name="constitutionBonus"
					value="<?php echo conBonus("characterRace") ? conBonus("characterRace") : ""; ?>" readonly/>
					<br />
					<br />
					<input id="score" type="number" name="intelligenceBonus"
					value="<?php echo intBonus("characterRace") ? intBonus("characterRace") : ""; ?>" readonly/>
					<br />
					<br />
					<input id="score" type="number" name="wisdomBonus"
					value="<?php echo wisBonus("characterRace") ? wisBonus("characterRace") : ""; ?>" readonly/>
					<br />
					<br />
					<input id="score" type="number" name="charismaBonus"
					value="<?php echo chaBonus("characterRace") ? chaBonus("characterRace") : ""; ?>" readonly/>
				</div>
			</div>
			<?php
			$strArray = array(getValue("strenghtAbility"), getValue("strenghtBonus"));
			$dexArray = array(getValue("dexterityAbility"), getValue("dexterityBonus"));
			$conArray = array(getValue("constitutionAbility"), getValue("constitutionBonus"));
			$intArray = array(getValue("intelligenceAbility"), getValue("intelligenceBonus"));
			$wisArray = array(getValue("wisdomAbility"), getValue("wisdomBonus"));
			$chaArray = array(getValue("charismaAbility"), getValue("charismaBonus"));
			?>
			<div class="1u 12u(narrower)">
				<div class="form-group">
					<label><strong>Scores</strong></label>
					<br />
					<br />
					<input id="score" type="number" name="strenghtScore"
					value="<?php echo array_sum($strArray) ? array_sum($strArray): ""; ?>" readonly/>
					<br />
					<br />
					<input id="score" type="number" name="dexterityScore"
					value="<?php echo array_sum($dexArray) ? array_sum($dexArray): ""; ?>" readonly/>
					<br />
					<br />
					<input id="score" type="number" name="constitutionScore"
					value="<?php echo array_sum($conArray) ? array_sum($conArray): ""; ?>" readonly/>
					<br />
					<br />
					<input id="score" type="number" name="intelligenceScore"
					value="<?php echo array_sum($intArray) ? array_sum($intArray): ""; ?>" readonly/>
					<br />
					<br />
					<input id="score" type="number" name="wisdomScore"
					value="<?php echo array_sum($wisArray) ? array_sum($wisArray): ""; ?>" readonly/>
					<br />
					<br />
					<input id="score" type="number" name="charismaScore"
					value="<?php echo array_sum($chaArray) ? array_sum($chaArray): ""; ?>" readonly/>
				</div>
			</div>
			<div class="1u 12u(narrower)">
				<div class="form-group">
					<label><strong>Modifiers</strong></label>
					<br />
					<br />
					<input id="score" name="strenghtMod" type="number"
					value="<?php echo strMod("strenghtScore") ? strMod("strenghtScore"): ""; ?>" readonly/>
					<br />
					<br />
					<input id="score" name="dexterityMod" type="number"
					value="<?php echo dexMod("dexterityScore") ? dexMod("dexterityScore"): ""; ?>" readonly/>
					<br />
					<br />
					<input id="score" name="constitutionMod" type="number"
					value="<?php echo conMod("constitutionScore") ? conMod("constitutionScore"): ""; ?>" readonly/>
					<br />
					<br />
					<input id="score" name="intelligenceMod" type="number"
					value="<?php echo intMod("intelligenceScore") ? intMod("intelligenceScore"): ""; ?>" readonly/>
					<br />
					<br />
					<input id="score" name="wisdomMod" type="number"
					value="<?php echo wisMod("wisdomScore") ? wisMod("wisdomScore"): ""; ?>" readonly/>
					<br />
					<br />
					<input id="score" name="charismaMod" type="number"
					value="<?php echo chaMod("charismaScore") ? chaMod("charismaScore"): ""; ?>" readonly/>
				</div>
			</div>
			<div class="2u 12u(narrower)">
				<label><strong>Skills</strong></label>
				<div class="form-group" id="skills">
					<input type="checkbox" id="Acrobatics" value="Acrobatics"
					name="skills[]" <?php echo checkboxMark("skills","Acrobatics") ?> />
					<label for="Acrobatics">Acrobatics</label>
					<br />
					<input type="checkbox" id="AnimalHandling" value="AnimalHandling"
					name="skills[]" <?php echo checkboxMark("skills","AnimalHandling") ?> />
					<label for="AnimalHandling">Animal Handling</label>
					<br />
					<input type="checkbox" id="Arcana" value="Arcana"
					name="skills[]" <?php echo checkboxMark("skills","Arcana") ?> />
					<label for="Arcana">Arcana</label>
					<br />
					<input type="checkbox" id="Athletics" value="Athletics"
					name="skills[]" <?php echo checkboxMark("skills","Athletics") ?> />
					<label for="Athletics">Athletics</label>
					<br />
					<input type="checkbox" id="Deception" value="Deception"
					name="skills[]" <?php echo checkboxMark("skills","Deception") ?> />
					<label for="Deception">Deception</label>
					<br />
					<input type="checkbox" id="History" value="History"
					name="skills[]" <?php echo checkboxMark("skills","History") ?> />
					<label for="History">History</label>
					<br />
					<input type="checkbox" id="Insight" value="Insight"
					name="skills[]" <?php echo checkboxMark("skills","Insight") ?> />
					<label for="Insight">Insight</label>
					<br />
					<input type="checkbox" id="Intimidation" value="Intimidation"
					name="skills[]" <?php echo checkboxMark("skills","Intimidation") ?> />
					<label for="Intimidation">Intimidation</label>
					<br />
					<input type="checkbox" id="Investigation" value="Investigation"
					name="skills[]" <?php echo checkboxMark("skills","Investigation") ?> />
					<label for="Investigation">Investigation</label>
					<br />
					<input type="checkbox" id="Medicine" value="Medicine"
					name="skills[]" <?php echo checkboxMark("skills","Medicine") ?> />
					<label for="Medicine">Medicine</label>
					<br />
					<input type="checkbox" id="Nature" value="Nature"
					name="skills[]" <?php echo checkboxMark("skills","Nature") ?> />
					<label for="Nature">Nature</label>
					<br />
					<input type="checkbox" id="Perception" value="Perception"
					name="skills[]" <?php echo checkboxMark("skills","Perception") ?> />
					<label for="Perception">Perception</label>
					<br />
					<input type="checkbox" id="Performance" value="Performance"
					name="skills[]" <?php echo checkboxMark("skills","Performance") ?> />
					<label for="Performance">Performance</label>
					<br />
					<input type="checkbox" id="Persuasion" value="Persuasion"
					name="skills[]" <?php echo checkboxMark("skills","Persuasion") ?> />
					<label for="Persuasion">Persuasion</label>
					<br />
					<input type="checkbox" id="Religion" value="Religion"
					name="skills[]" <?php echo checkboxMark("skills","Religion") ?> />
					<label for="Religion">Religion</label>
					<br />
					<input type="checkbox" id="SleightOfHand" value="SleightOfHand"
					name="skills[]" <?php echo checkboxMark("skills","SleightOfHand") ?> />
					<label for="SleightOfHand">Sleight of Hand</label>
					<br />
					<input type="checkbox" id="Stealth" value="Stealth"
					name="skills[]" <?php echo checkboxMark("skills","Stealth") ?> />
					<label for="Stealth">Stealth</label>
					<br />
					<input type="checkbox" id="Survival" value="Survival"
					name="skills[]" <?php echo checkboxMark("skills","Survival") ?> />
					<label for="Survival">Survival</label>
				</div>
			</div>
			<div class="2u 12u(narrower)">
				<label><strong>Tool Proficiencies</strong></label>
				<div class="form-group" id="skills">
					<label><strong>Artisan's Tools</strong></label>
					<br />
					<input type="checkbox" id="Tools01" value="01"
					name="artisan[]" <?php echo checkboxMark("artisan","01") ?> />
					<label for="Tools01">Tool 1</label>
					<br />
					<input type="checkbox" id="Tools02" value="02"
					name="artisan[]" <?php echo checkboxMark("artisan","02") ?> />
					<label for="Tools02">Tool 2</label>
				</div>
				<div class="form-group" id="skills">
					<br />
					<label><strong>Gaming Set</strong></label>
					<br />
					<input type="checkbox" id="Gaming01" value="01"
					name="gaming[]" <?php echo checkboxMark("gaming","01") ?> />
					<label for="Gaming01">Dice Set</label>
					<br />
					<input type="checkbox" id="Gaming02" value="02"
					name="gaming[]" <?php echo checkboxMark("gaming","02") ?> />
					<label for="Gaming02">Playing Cards Set</label>
				</div>
				<div class="form-group" id="skills">
					<br />
					<label><strong>Musical Instruments</strong></label>
					<br />
					<input type="checkbox" id="Instrument01" value="01"
					name="instruments[]" <?php echo checkboxMark("instruments","01") ?> />
					<label for="Instrument01">Instrument 1</label>
					<br />
					<input type="checkbox" id="Instrument02" value="02"
					name="instruments[]" <?php echo checkboxMark("instruments","02") ?> />
					<label for="Instrument02">Instrument 2</label>
				</div>
				<div class="form-group" id="skills">
					<br />
					<label><strong>Vehicles</strong></label>
					<br />
					<input type="checkbox" id="Vehicle01" value="01"
					name="vehicles[]" <?php echo checkboxMark("vehicles","01") ?> />
					<label for="Vehicle01">Vehicle 1</label>
					<br />
					<input type="checkbox" id="Vehicle02" value="02"
					name="vehicles[]" <?php echo checkboxMark("vehicles","02") ?> />
					<label for="Vehicle02">Vehicle 2</label>
				</div>
				<div class="form-group" id="skills">
					<br />
					<label><strong>Other</strong></label>
					<br />
					<input type="checkbox" id="Other01" value="01"
					name="other[]" <?php echo checkboxMark("other","01") ?> />
					<label for="Other01">Other 1</label>
					<br />
					<input type="checkbox" id="Other02" value="02"
					name="other[]" <?php echo checkboxMark("other","02") ?> />
					<label for="Other02">Other 2</label>
				</div>
				<div class="form-group" id="skills">
					<br />
					<label><strong>Languages</strong></label>
					<br />
					<input type="checkbox" id="Language01" value="01"
					name="languages[]" <?php echo checkboxMark("languages","01") ?> />
					<label for="Language01">Language 1</label>
					<br />
					<input type="checkbox" id="Language02" value="02"
					name="languages[]" <?php echo checkboxMark("languages","02") ?> />
					<label for="Language02">Language 2</label>
				</div>
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